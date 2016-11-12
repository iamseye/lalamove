<?php
namespace App\Http\Traits;


use Illuminate\Support\Facades\DB;

trait shareTrait {

    /**
     * get query of current locale and role array
     *
     * @param  $table
     * @return $query
     */

    public function queryCurrentLocaleRole($table)
    {

        $query=DB::table($table)->where(['locale'=>session('locale'),'role'=>session('role')]);

        return $query;
    }

    /**
     * get current url
     *
     * @return $url
     */
    public function getCurrentUrl()
    {
        return session('locale').'/'.session('role').'/'.session('menu');
    }
}

