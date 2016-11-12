<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleTrans extends Model
{
    protected $fillable = [
        'role',
        'locale',
        'roles_id'
    ];

    public function current_locale()
    {
        $current_locale= session('locale');

        return $this->where('locale',$current_locale);
    }
}
