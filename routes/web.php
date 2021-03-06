<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/Route::group(['prefix'=>'admin','middleware'=>['auth','web']],function(){

Route::get('home/users/results',[
    'uses'=>'HomeController@search',
    'as'=>'results.index'
                        
]); 

Route::get('/home', 'HomeController@index')->name('home');
Route::get('home/navbar',[
  'uses'=>'NavbarController@index',
  'as'=>'navbar.index'
]);
Route::get('home/navbar/edit',[
  'uses'=>'NavbarController@edit',
  'as'=>'navbar.edit'
]);
Route::post('home/navbar/update/{id}',[
  'uses'=>'NavbarController@update',
  'as'=>'navbar.update'
]);
Route::get('home/sitesettings',[
   'uses'=>'SiteSettingsController@index',
   'as'=>'sitesettings.index'
]);
Route::get('home/public_users',[
   'uses'=>'HomeController@public_users',
   'as'=>'users.public'
]);
Route::get('home/official_users',[
   'uses'=>'HomeController@official_users',
   'as'=>'users.official'
]);
Route::get('home/public_users/makeadmin/{id}',[
   'uses'=>'UserController@makeadmin',
   'as'=>'public_users.makeadmin'
]);
Route::get('home/public_users/removeadmin/{id}',[
   'uses'=>'UserController@removeadmin',
   'as'=>'public_users.removeadmin'
]);
Route::get('home/public_users/permit/{id}',[
  'uses'=>'UserController@permit',
  'as'=>'public_users.permit'
]);
Route::get('home/public_users/removepermission/{id}',[
  'uses'=>'UserController@removepermission',
  'as'=>'public_users.removepermission'
]);
Route::get('home/sitesettings/edit',[
  'uses'=>'SiteSettingsController@edit',
  'as'=>'sitesettings.edit'
]);
Route::post('home/sitesettings/update/{id}',[
  'uses'=>'SiteSettingsController@update',
  'as'=>'sitesettings.update'
]);
Route::get('home/slides',[
 'uses'=>'SlideController@index',
 'as'=>'slides.index'
]);
Route::get('home/slides/create',[
  'uses'=>'SlideController@create',
  'as'=>'slides.create'
]);
Route::post('home/slides/store',[
  'uses'=>'SlideController@store',
  'as'=>'slides.store'
]);
Route::get('home/slides/delete/{id}',[
  'uses'=>'SlideController@destroy',
  'as'=>'slides.delete'
]);
});
Route::group(['middleware'=>['web']],function(){

Route::get('/',[

  'uses'=>'HomeController@welcome',
 'as'=>'public.welcome'
]);
Route::get('post/',[
  'uses'=>'PostController@index',
  'as'=>'post.index'
]);
Route::get('post/create',[
   'uses'=>'PostController@create',
   'as'=>'post.create'
]);
Route::post('post/store/{id}',[
  'uses'=>'PostController@store',
  'as'=>'post.store'

]);
Route::get('user/profile/create',[
  'uses'=>'ProfileController@create',
  'as'=>'profile.create'
]);
Route::post('user/profile/store',[
  'uses'=>'ProfileController@store',
   'as'=>'profile.store'
]);

Route::get('user/profile',[
   'uses'=>'ProfileController@index',
   'as'=>'profile.index'
]);

Route::get('user/profile/edit',[
   'uses'=>'ProfileController@edit',
   'as'=>'profile.edit'
]);

Route::post('user/profile/update',[
   'uses'=>'ProfileController@update',
   'as'=>'profile.update'
]);
Route::post('user/profile/profile_image/delete',[
   'uses'=>'ProfileController@profile_image',
   'as'=>'profile_image.delete'
]);
Route::get('user/account/settings',[
  'uses'=>'UserController@index',
  'as'=>'user_account.settings'
]);
Route::get('user/account/delete/confirm',[
  'uses'=>'UserController@confirm',
  'as'=>'user_account_delete.confirm'
]);
Route::get('user/account/delete/confirm/yes',[
  'uses'=>'UserController@yes',
  'as'=>'user_account_delete_confirm.yes'
]);
Route::get('user/account/delete/confirm/no',[
  'uses'=>'UserController@no',
  'as'=>'user_account_delete_confirm.no'
]);
Route::get('user/password/change',[
  'uses'=>'UserController@password_change',
  'as'=>'user_password_change.index'
]);
Route::post('user/password/change/submit',[
'uses'=>'UserController@submit_password',
'as'=>'user_password_change.submit'
]);
Route::get('user/profile/scorecard',[
  'uses'=>'ScoreCardController@index',
  'as'=>'scorecard.index'
]);
Route::get('user/profile/scorecard/add',[
  'uses'=>'ScoreCardController@add',
  'as'=>'scorecard.add'
]);
Route::post('user/profile/scorecard/store',[
  'uses'=>'ScoreCardController@store',
  'as'=>'scorecard.store'
]);
Route::get('user/profile/scorecard/edit/{id}',[
  'uses'=>'ScoreCardController@edit',
  'as'=>'scorecard.edit'
]);
Route::post('user/profile/scorecard/update/{id}',[
  'uses'=>'ScoreCardController@update',
  'as'=>'scorecard.update'
]);
Route::get('user/profile/scorecard/delete/{id}',[
  'uses'=>'ScoreCardController@destroy',
  'as'=>'scorecard.delete'
]);
Route::get('user/profile/hsscorecard',[
  'uses'=>'hsScoreCardController@index',
  'as'=>'hsscorecard.index'
]);
Route::get('user/profile/hsscorecard/add',[
   'uses'=>'hsScoreCardController@add',
    'as'=>'hsscorecard.add'

]);
Route::post('user/profile/hsscorecard/store',[
   'uses'=>'hsScoreCardController@store',
   'as'=>'hsscorecard.store'
]);
Route::get('user/profile/hsscorecard/edit/{id}',[
  'uses'=>'hsScoreCardController@edit',
  'as'=>'hsscorecard.edit'
]);
Route::post('user/profile/hsscorecard/update/{id}',[
  'uses'=>'hsScoreCardController@update',
  'as'=>'hsscorecard.update'
]);
Route::get('user/profile/hsscorecard/delete/{id}',[
  'uses'=>'hsScoreCardController@destroy',
  'as'=>'hsscorecard.delete'
]);
Route::get('user/profile/hslcscorecard',[
   'uses'=>'hslcScoreCardController@index',
   'as'=>'hslcscorecard.index'
]);
Route::get('user/profile/hslcscorecard/add',[
   'uses'=>'hslcScoreCardController@add',
   'as'=>'hslcscorecard.add'
]);
Route::post('user/profile/hslcscorecard/add',[
   'uses'=>'hslcScoreCardController@store',
   'as'=>'hslcscorecard.store'
]);
Route::get('user/profile/hslcscorecard/edit/{id}',[
  'uses'=>'hslcScoreCardController@edit',
  'as'=>'hslcscorecard.edit'
]);
Route::post('user/profile/hslcscorecard/update/{id}',[
  'uses'=>'hslcScoreCardController@update',
  'as'=>'hslcscorecard.update'
]);
Route::get('user/profile/hslcscorecard/delete/{id}',[
  'uses'=>'hslcScoreCardController@destroy',
  'as'=>'hslcscorecard.delete'
]);

});
Auth::routes();

