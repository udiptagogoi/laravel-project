<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
     protected $fillable = [
        'logo', 'name', 'creator','about','contact_number','email','address'
    ];
}
