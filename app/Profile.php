<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable=[
      'profile_image','user_id','institute','alumni','department','last_score','hs_score','hslc_score','phone','about'
    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function scorecard()
    {
    	return $this->hasMany('App\ScoreCard');
    }
    public function hsscorecard()
    {
        return $this->hasMany('App\hsScoreCard');
    }
    public function hslcscorecard()
    {
        return $this->hasMany('App\hslcScoreCard');
    }
     public function post()
    {
        return $this->hasMany('App\Post');
    }
}
