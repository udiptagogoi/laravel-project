<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=App\User::create([
          
          'name'=>'Udipta Gogoi',
          'email'=>'udipta@gmail.com',
          'password'=>bcrypt('adminudipta'),
          'admin'=>'1',
          'permission'=>'1'

        ]);
        $profile=App\Profile::create([
        'user_id'=>$user->id,
        'profile_image'=>'uploads/profile_image/profile.jpg',
        'institute'=>'Jorhat Institute of Science & Technology',
        'alumni'=>'Jorhat Institute of Science & Technology',
        'department'=>'Electronics & Telecommunication Engineering',
        'last_score'=>'75%',
        'hs_score'=>'84.2',
        'hslc_score'=>'82.4',
        'about'=>'Like to coder',
        'phone'=>'+91-8133081681'
        ]);
        App\ScoreCard::create([
        'profile_id'=>$profile->id,
        'sub'=>'Signal and System',
        'score'=>'78%',
        'max'=>'100'
        ]);
        $sitesettings=App\SiteSetting::create([
         'name'=>'LastMate',
         'logo'=>'sitesettings/logo/logo.jpg',
         'creator'=>'Udipta Gogoi',
         'email'=>'udiptagogoi@gmail.com',
         'contact_number'=>'+91-9101177123',
         'About'=>'Your LastMate',
         'address'=>'Jorhat,Assam'

        ]);
        $navbar=App\Navbar::create([
         'nav_item1'=>'Profile',
         'nav_item2'=>'Home',
         'nav_item3'=>'Upload',
         'nav_item4'=>'Settings',
         'top_navbar_bg_color'=>'#3F729B',
         'bottom_navbar_bg_color'=>'#3F729B',
         'top_text_color'=>'White',
         'bottom_text_color'=>'White',
         'hover_color'=>'#1C2331'
        ]);
    }
}
