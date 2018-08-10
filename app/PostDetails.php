<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostDetails extends Model
{
     protected $fillable=[
    'file_name','post_id','institute','format','file_size'
    ];

    public function post()
    {
    	return $this->belongsTo('App\Post');
    }
}
