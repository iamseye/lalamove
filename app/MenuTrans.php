<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MenuTrans extends Model
{
    protected $fillable = [
        'menu',
        'locale',
        'menus_id'
    ];
}
