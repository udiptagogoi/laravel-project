<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
     protected $fillable = [
        'slide','advertiser','link','text','link_text'
    ];

}
