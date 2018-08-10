<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use App\User;
use App\SiteSetting;
use File;

class SlideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.slides.slides')->with('slides',slide::all())
                                        ->with('total_users',User::all()->count())
                                        ->with('sitesettings',SiteSetting::first());
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slides.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        if($request->hasFile('slide'))
        {
            $slide=$request->slide;
            $slide_new_name=time().$slide->getClientOriginalName();
            $slide->move('sitesettings/slides',$slide_new_name);
        
        $slide=Slide::create([
         'slide'=>'sitesettings/slides'.DIRECTORY_SEPARATOR.$slide_new_name,
         'advertiser'=>$request->advertiser,
         'link'=>$request->link,
         'link_text'=>$request->link_text,
         'text'=>$request->text

        ]);
       }
        return redirect()->route('slides.index');
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
        $slide=Slide::find($id);
        $file_path=public_path().DIRECTORY_SEPARATOR.$slide->slide;
        File::delete($file_path);
        $slide->delete();
        return redirect()->route('slides.index');
    }
}
