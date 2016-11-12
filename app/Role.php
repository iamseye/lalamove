<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = [
        'menu_code'
    ];

    public function role_trans()
    {
        return $this->hasMany('App\RoleTrans','roles_id');
    }


}
