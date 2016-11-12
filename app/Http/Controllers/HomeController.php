<?php

namespace App\Http\Controllers;

use App\Home;
use App\HomePics;
use App\Http\Traits\shareTrait;


class HomeController extends Controller
{
    use shareTrait;

    public function index()
    {
        session(['menu' => 'home']);

        $home_id=$this->queryCurrentLocaleRole('homes')->first()->id;

        $top_carousels=Home::find($home_id)->home_pics()->where('tag','top_carousel')->get();

        $mobile_carousels=Home::find($home_id)->home_pics()->where('tag','mobile_carousel')->get();

        $home_infos=Home::find($home_id)->home_infos->first();

        $viewOut=(object)[
            'top_carousels'=>$top_carousels,
            'mobile_carousels'=>$mobile_carousels,
            'home_infos'=>$home_infos
        ];

        return view($this->getCurrentUrl(),compact('viewOut'));
    }
}
