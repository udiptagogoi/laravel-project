<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
     protected $fillable=[
    'post-title','user_id'
    ];
     public function profile()
    {
    	return $this->belongsTo('App\Profile');
    }
}
