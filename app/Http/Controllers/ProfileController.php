<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Profile;
use App\SiteSetting;
use File;
use App\navbar;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function __construct()
    {
        $this->middleware('auth');
    }
     
    public function index()
    { 
        $id=Auth::id();
        $profile=Profile::find($id);
        return view('profile.index')->with('profile',$profile)
                                     ->with('sitesettings',SiteSetting::first())
                                     ->with('navbar',navbar::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('profile.create')->with('sitesettings',SiteSetting::first())
                                       ->with('navbar',navbar::first());
    }
    public function profile_image(Request $request)
    {
      $id=Auth::id();
      $profile=Profile::find($id);
      $profile->profile_image=$request->avatar;
      $profile->save();
      return redirect()->back();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
           'name'=>'required',
           'email'=>'required|email',
           
        ]); 
          
          if($request->hasFile('profile_image'))
        {
            $profile_image=$request->profile_image;
            $profile_image_new_name=time().$profile_image->getClientOriginalName();
            $profile_image->move('uploads/profile_image',$profile_image_new_name);
             $profile=Profile::create([
          'profile_image'=>'uploads/profile_image/'.$profile_image_new_name,
          'user_id'=>Auth::id(),
          'institute'=>$request->institute,
          'department'=>$request->department,
          'last_score'=>$request->last_score,
          'hs_score'=>$request->hs_score,
          'hslc_score'=>$request->hslc_score,
          'alumni'=>$request->alumni,
          'phone'=>$request->phone,
          'about'=>$request->about

         ]);
             return redirect()->route('public.welcome');
        }



else{
         $profile=Profile::create([
          'user_id'=>Auth::id(),
          'institute'=>$request->institute,
          'department'=>$request->department,
          'last_score'=>$request->last_score,
          'hs_score'=>$request->hs_score,
          'hslc_score'=>$request->hslc_score,
          'alumni'=>$request->alumni,
          'phone'=>$request->phone,
          'about'=>$request->about

         ]);
         return redirect()->route('public.welcome');
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
    public function edit()
    {
        $id=Auth::id();
        $profile=Profile::find($id);
       return view('profile.edit')->with('profile',$profile)
                                   ->with('sitesettings',SiteSetting::first())
                                   ->with('navbar',Navbar::first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         $this->validate($request,[
           'name'=>'required',
           'email'=>'required|email',
           
           'institute'=>'required',
           'department'=>'required'
        ]); 

          $id=Auth::id();
          $profile=Profile::find($id);
          
        if($request->hasFile('profile_image'))
        {   
            $file_path=public_path().DIRECTORY_SEPARATOR.$profile->profile_image;
            File::delete($file_path);
            $profile_image=$request->profile_image;
            $profile_image_new_name=time().$profile_image->getClientOriginalName();
            $profile_image->move('uploads/profile_image',$profile_image_new_name);
            $profile->profile_image='uploads/profile_image/'.$profile_image_new_name;
            $profile->save();
            


        }
        Auth::User()->name=$request->name;
        $profile->last_score=$request->last_score;
        $profile->alumni=$request->alumni;
        $profile->hs_score=$request->hs_score;
        $profile->hslc_score=$request->hslc_score;
        Auth::User()->email=$request->email;
        $profile->about=$request->about;
        $profile->phone=$request->phone;
        $profile->institute=$request->institute;
        $profile->department=$request->department;
        Auth::User()->save();
        $profile->save();

        if($request->has('password'))
        {
            Auth::User()->password=bcrypt($request->password);
             Auth::User()->save();

        }
        return redirect()->route('profile.index');
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
