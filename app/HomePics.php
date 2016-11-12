<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomePics extends Model
{
    protected $fillable = [
        'path',
        'tag',
        'homes_id'
    ];

    public function home()
    {
        return $this->belongsTo('App\Homes','homes_id');
    }
}