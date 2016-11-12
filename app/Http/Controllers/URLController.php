<?php

namespace App\Http\Controllers;

use App\Http\Traits\shareTrait;
use Illuminate\Http\Request;

use App\Http\Requests;


class URLController extends Controller
{
    use shareTrait;

    public function initial()
    {
        $locale=session('locale');

        $role=session('role');

        $menu=session('menu');

        return redirect('/'.$locale.'/'.$role.'/'.$menu);
    }

    public function setLocaleURL($locale)
    {

        session(['locale' => $locale]);

        $role=session('role');

        $menu=session('menu');

        return redirect('/'.$locale.'/'.$role.'/'.$menu);
    }

    public function setRoleURL($locale,$role)
    {
        session(['locale' => $locale]);
        session(['role' => $role]);
        $menu=session('menu');

        return redirect('/'.$locale.'/'.$role.'/'.$menu);
    }


}
