<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Profile;
use App\SiteSetting;
use App\Slide;
use App\navbar;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response

     */
    public function welcome(){
        $id=Auth::id();
        $profile=Profile::find($id);
        return view('welcome')->with('profile',$profile)
                            ->with('sitesettings',SiteSetting::first())
                            ->with('slides',Slide::all())
                            ->with('navbar',navbar::first());
    }
    public function index()
    {
        if(Auth::User()->admin)
        {     
            return view('admin.home')->with('total_users',User::all()->count())
                                      ->with('sitesettings',SiteSetting::first())
                                      ->with('online_users','0');
        }
    }
    public function public_users()
    {
        return view('admin.users.public_users')->with('user',User::all());
                                    
    }
    public function official_users()
    {
        return view('admin.users.official_users')->with('user',User::all());
                                                
    }
    public function search(Request $request)
    {

       $users=User::where('name','like','%'.request('user_search').'%')->get();
   return view('admin.users.results')->with('users',$users);
    }
}
