<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Profile;
use App\ScoreCard;
use App\SiteSetting;
use App\navbar;
class ScoreCardController extends Controller
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

        return view('scorecard.index')->with('scorecard',scorecard::all())
                                      ->with('profile',$profile)
                                      ->with('sitesettings',SiteSetting::first())
                                      ->with('navbar',navbar::first());
                                      
                                      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add()
    {   
        $id=Auth::id();
        $profile=Profile::find($id);
        return view('scorecard.add')->with('sitesettings',SiteSetting::first())
                                     ->with('profile',$profile)
                                     ->with('navbar',navbar::first());
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
        $scorecard=ScoreCard::create([
         'profile_id'=>$profile_id,
         'sub'=>$request->sub,
         'score'=>$request->score,
         'max'=>$request->max
        ]);
        return redirect()->route('scorecard.index');

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
        $scorecard=ScoreCard::find($id);
        return view('scorecard.edit')->with('scorecard',$scorecard)
                                      ->with('sitesettings',SiteSetting::first())
                                      ->with('profile',$profile)
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
        $scorecard=ScoreCard::find($id);
        $scorecard->sub=$request->sub;
        $scorecard->score=$request->score;
        $scorecard->max=$request->max;
        $scorecard->save();
        return redirect()->route('scorecard.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scorecard=ScoreCard::find($id);
        $scorecard->delete();
        return redirect()->route('scorecard.index');
    }
}
