<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HomeInfo extends Model
{
    protected $fillable = [
        'intro_title',
        'intro',
        'video_path',
        'step_title',
        'step1',
        'step2',
        'step3',
        'features_title',
        'feature1_title',
        'feature2_title',
        'feature3_title',
        'feature4_title',
        'feature1_content',
        'feature2_content',
        'feature3_content',
        'feature4_content',
        'homes_id'
    ];

    public function home()
    {
        return $this->belongsTo('App\Homes','homes_id');
    }
}
