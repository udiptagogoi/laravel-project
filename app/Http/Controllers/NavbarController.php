<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Slide;
use App\SiteSetting;
use App\navbar;
class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.navbar.navbar')->with('slides',slide::all())
                                          ->with('total_users',User::all()->count())
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
        return view('admin.navbar.edit')->with('navbar',navbar::first());
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
        $navbar=Navbar::find($id);
        $navbar->nav_item1=$request->nav_item1;
        $navbar->nav_item2=$request->nav_item2;
        $navbar->nav_item3=$request->nav_item3;
        $navbar->nav_item4=$request->nav_item4;
        $navbar->nav_item5=$request->nav_item5;
        $navbar->top_navbar_bg_color=$request->top_navbar_bg_color;
        $navbar->bottom_navbar_bg_color=$request->bottom_navbar_bg_color;
        $navbar->top_text_color=$request->top_text_color;
        $navbar->bottom_text_color=$request->bottom_text_color;
        $navbar->save();
        return redirect()->route('navbar.index');
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
