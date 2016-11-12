<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localization extends Model
{
    protected $fillable = [
        'city', 'language','code'
    ];

}
