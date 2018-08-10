<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\user;
use App\profile;
use Session;
use Hash;
use App\SiteSetting;
use App\navbar;
class UserController extends Controller
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
        return view('user_account.index')->with('sitesettings',SiteSetting::first())
                                        ->with('profile',$profile)
                                        ->with('navbar',navbar::first());
    }
    
    public function makeadmin($id)
    {
      $user=User::find($id);
      $user->admin='1';
      $user->save();
      return redirect()->back();
    }
    public function removeadmin($id)
    {
        $user=User::find($id);
        $user->admin='0';
        $user->save();
        return redirect()->back();
    }
    public function permit($id)
    {
        $user=User::find($id);
        $user->permission='1';
        $user->save();
        return redirect()->back();
    }
    public function removepermission($id)
    {
        $user=User::find($id);
        $user->permission='0';
        $user->save();
        return redirect()->back();
    }
    public function password_change()
    {
        $id=Auth::id();
        $profile=Profile::find($id);
        return view('user_account.password_change')->with('sitesettings',SiteSetting::first())
                                                    ->with('profile',$profile)
                                                    ->with('navbar',navbar::first());
    }
    public function submit_password(Request $request)
    {
       $user=Auth::user();
       $password=Auth::user()->password;
       $current_password=$request->current_password;
       $new_password=$request->new_password;
       $confirm_password=$request->confirm_password;

       if (Hash::check($current_password, $password)) {
    // The old password matches the hash in the database

        if($new_password == $confirm_password)
        {
            $user->password=bcrypt($request->new_password);
            $user->save();
            $request->session()->flash('message.level', 'success');
            $request->session()->flash('message.content1','Successfully Reset the Password !');
            return redirect()->back();
        }
        else
        {   $request->session()->flash('message.level', 'danger');
            $request->session()->flash('message.content3','Password Mismatched *');
            return redirect()->back();
        }
        

       }
       else
       {
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content2','Incorrect Password *');
        return redirect()->back();
       }
    }
    public function confirm()
    {
        $id=Auth::id();
        $profile=Profile::find($id);
        return view('user_account.confirm')->with('sitesettings',SiteSetting::first())
                                            ->with('profile',$profile)
                                            ->with('navbar',navbar::first());
    }
    public function yes()
    {
        $user=Auth::user();
        $user->delete();
        return redirect()->route('login');
    }
    public function no()
    {
        return redirect()->route('user_account.settings');
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
