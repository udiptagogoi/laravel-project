<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hslcScoreCard extends Model
{
    protected $fillable=[
    'profile_id','sub','score','max'
    ];
    public function profile()
    {
    	return $this->belongsTo('App\Profile');
    }
}
