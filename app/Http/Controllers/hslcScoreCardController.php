<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Profile;
use App\hslcScorecard;
use App\SiteSetting;
use App\navbar;

class hslcScoreCardController extends Controller
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
        $profile=Profile::find(Auth::id());
        return view('hslcscorecard.index')->with('hslcscorecard',hslcScorecard::all())
                                           ->with('profile',$profile)
                                           ->with('sitesettings',SiteSetting::first())
                                           ->with('navbar',navbar::first());
    }

    public function add()
    {
        $id=Auth::id();
        $profile=Profile::find($id);
        return view('hslcscorecard.add')->with('sitesettings',SiteSetting::first())
                                        ->with('profile',$profile)
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
         $profile_id=Auth::id();
         $hslcscorecard=hslcScoreCard::create([
         'profile_id'=>$profile_id,
         'sub'=>$request->sub,
         'score'=>$request->score,
         'max'=>$request->max
         ]);
         return redirect()->route('hslcscorecard.index');

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
        $id=Auth::id();
        $profile=Profile::find($id);
        $hslcscorecard=hslcScoreCard::find($id);
        return view('hslcscorecard.edit')->with('hslcscorecard',$hslcscorecard)
                                          ->with('sitesettings',SiteSetting::first())
                                          ->with('profile',$prfoile)
                                          ->with('navbar',navbar::first());
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
        $hslcscorecard=hslcScoreCard::find($id);
        $hslcscorecard->sub=$request->sub;
        $hslcscorecard->score=$request->score;
        $hslcscorecard->max=$request->max;
        $hslcscorecard->save();
        return redirect()->route('hslcscorecard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hslcscorecard=hslcScoreCard::find($id);
        $hslcscorecard->delete();
        return redirect()->route('hslcscorecard.index');
    }
}
