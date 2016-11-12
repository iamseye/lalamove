<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    protected $fillable = [
        'locale',
        'role'
    ];

    public function home_infos()
    {
        return $this->hasMany('App\HomeInfo','homes_id');
    }

    public function home_pics()
    {
        return $this->hasMany('App\HomePics','homes_id');
    }
}
