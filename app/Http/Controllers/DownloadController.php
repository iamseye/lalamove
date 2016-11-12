<?php

namespace App\Http\Controllers;

use App\Http\Traits\shareTrait;
use Illuminate\Http\Request;

use App\Http\Requests;

class DownloadController extends Controller
{
    use shareTrait;

    //
    public function index()
    {
        session(['menu' => 'download']);
        $viewOut=(object)[];

        return view($this->getCurrentUrl(),compact('viewOut'));
    }

}
