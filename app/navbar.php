<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class navbar extends Model
{
      protected $fillable = [
        'nav_item1','nav_item2','nav_item3','nav_item4','nav_item5','top_navbar_bg_color','bottom_navbar_bg_color','hover_color','top_text_color','bottom_text_color'
    ];
}
