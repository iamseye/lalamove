<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $fillable = [
        'menu_code'
    ];

    public function menu_trans()
    {
        return $this->hasMany('App\MenuTrans','menus_id');
    }
}
