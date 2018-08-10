<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
use App\hsScoreCard;
use Auth;
use App\SiteSetting;
use App\navbar;


class hsScoreCardController extends Controller
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
        return view('hsscorecard.index')->with('hsscorecard',hsScoreCard::all())
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
        return view('hsscorecard.add')->with('sitesettings',SiteSetting::first())
                                    ->with('profile',$profile)
                                    ->with('navbar',navbar::first());
    }
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
        $hsscorecard=hsScoreCard::create([
         'profile_id'=>$profile_id,
         'sub'=>$request->sub,
         'score'=>$request->score,
         'max'=>$request->max
        ]);
        return redirect()->route('hsscorecard.index');

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
        $hsscorecard=hsScoreCard::find($id);
        return view('hsscorecard.edit')->with('hsscorecard',$hsscorecard)
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
        $hsscorecard=hsScoreCard::find($id);
        $hsscorecard->sub=$request->sub;
        $hsscorecard->score=$request->score;
        $hsscorecard->max=$request->max;
        $hsscorecard->save();
        return redirect()->route('hsscorecard.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hsscorecard=hsScoreCard::find($id);
        $hsscorecard->delete();
        return redirect()->route('hsscorecard.index');
    }
}
