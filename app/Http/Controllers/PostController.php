<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Filesystem\Filesystem;
use Illuminate\Http\Request;
use App\SiteSetting;
use App\navbar;
use App\Profile;
use Auth;
use App\Post;
use App\PostDetails;
use App\User;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $id=Auth::id();
        $profile=Profile::find($id);
       return view('post.create')->with('sitesettings',SiteSetting::first())
                                 ->with('profile',$profile)
                                 ->with('navbar',navbar::first());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
        $user=User::find($id);
        $user_id=$user->id;

        $this->validate($request, [
 
          'post_title' => 'required',
 
          'files'=>'required',
 
          ]);
 
      if($request->hasFile('files'))
 
        {
 
         $allowedfileExtension=['pdf','jpg','png','docx']; 
         $files = $request->file('files');
          $post=Post::create([
            'user_id'=>$user_id,
            'post_title'=>$request->post_title
             ]);
 
         foreach($files as $file){
 
           $filename = $file->getClientOriginalName();
           $extension = $file->getClientOriginalExtension();
           $check=in_array($extension,$allowedfileExtension);
 
//dd($check);
 
          if($check)
 
           {
           
              $filename=time() . '.' . $file->getClientOriginalExtension();
              $extension = $file->getClientOriginalExtension();
              $size=$file->getClientSize();
              $post_title=$request->post_title;
              $institute=$request->institute;

              $s3 = \Storage::disk('s3');
              $filePath = '/support-tickets/' . $filename;
              $s3->put($filePath, file_get_contents($file), 'public');
     
             $postdetails=PostDetails::create([
             'post_id'=>$post->id,
             'file_name'=>$filename,
             'institute'=>$institute,
             'file_size'=>$size,
            'format'=>$extenssion
            ]);   
 
       }
       return redirect()->back();
      }
    }
}
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
