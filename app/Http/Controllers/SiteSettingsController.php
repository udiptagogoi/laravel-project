<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteSetting;
use File;
class SiteSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.sitesettings.sitesettings')->with('sitesettings',SiteSetting::first());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('admin.sitesettings.edit')->with('sitesettings',SiteSetting::first());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $sitesettings=SiteSetting::find($id);

        if($request->hasFile('logo'))
        {   
            $file_path=public_path().DIRECTORY_SEPARATOR.$sitesettings->logo;
            File::delete($file_path);
            $logo=$request->logo;
            $logo_new_name=time().$logo->getClientOriginalName();
            $logo->move('sitesettings/logo',$logo_new_name);
            $sitesettings->logo='sitesettings/logo/'.$logo_new_name;
            $sitesettings->save();


        }
        $sitesettings->name=$request->name;
        $sitesettings->creator=$request->creator;
        $sitesettings->contact_number=$request->contact_number;
        $sitesettings->email=$request->email;
        $sitesettings->about=$request->about;
        $sitesettings->address=$request->address;
        $sitesettings->save();
        return redirect()->route('sitesettings.index');
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
