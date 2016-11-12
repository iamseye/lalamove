<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\DB;

class Localization
{

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        // initialize sessions
        if (!session()->has('locale')) {
            $this->initialSession('locale');
        }

        if (!session()->has('role')) {
            $this->initialSession('role');
        }

        if (!session()->has('menu')) {
            $this->initialSession('menu');
        }

        //check URL
        if($request->locale){
            $prefix_value=$request->locale;
            $isURLCorrect=$this->checkURLCorrect('locale',$prefix_value);
            if(!$isURLCorrect){
                abort(404);
            }
        }

        if($request->role){
            $prefix_value=$request->role;
            $isURLCorrect=$this->checkURLCorrect('role',$prefix_value);
            if(!$isURLCorrect){
                abort(404);
            }
        }


        return $next($request);
    }

    /**
     * Initialize Session
     *
     * @param  $sessionName
     * @return null
     */
    public function initialSession($sessionName)
    {
        if($sessionName=='locale')
        {
            $main_locale= Localization::where('main',1)->first()->code;
            session(['locale' => $main_locale]);
        }
        elseif($sessionName =='role')
        {
            $main_role=Role::where('main',1)->first()->role_code;
            session(['role' => $main_role]);
        }
        else
        {
            $main_menu=Menu::where('main',1)->first()->menu_code;
            session(['menu' => $main_menu]);
        }
    }

    /**
     * Check whether url prefix is correct
     *
     * @param  $prefix
     * @param  $prefix_value
     * @return boolean
     */
    public function checkURLCorrect($prefix,$prefix_value)
    {
        if($prefix=='locale')
        {
            $checkPrefix = DB::table('localizations')
                ->where('code', '=', $prefix_value)
                ->first();
            if (is_null($checkPrefix)) {
                return false;
            }
            else {
                return true;
            }
        }
        elseif($prefix =='role')
        {
            $checkPrefix = DB::table('roles')
                ->where('role_code', '=', $prefix_value)
                ->first();

            if (is_null($checkPrefix)) {

                return false;
            }
            else {
                return true;
            }
        }

    }



}
