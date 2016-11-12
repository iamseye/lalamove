<?php namespace App\Http\Composers;

use App\Localization;
use App\Menu;
use App\Role;

class NavigationComposer{

    public function langHeader($view)
    {

        //get localization Options
        $locales=Localization::all();

        //get current locale
        $locale_current=session('locale');

        //get output name of current locale
        $locale_current_output=Localization::where('code',$locale_current)->get();

        $viewOut=(object)[
            'locales'=>$locales,
            'locale_current'=>$locale_current_output[0]
        ];

        $view->with('viewOut',$viewOut);
    }

    public function manuNav($view)
    {
        $current_locale= session('locale');
        $current_role=session('role');
        $current_menu=session('menu');

        //-----Role nav -----
        $roles=Role::all();

        foreach($roles as $role)
        {
            //get current role name
            $role->name=$role->role_trans()->where('locale',$current_locale)->first()->role;

            //get active role
            if($role->role_code == $current_role)
            {
                $role->role_active=1;
            }
            else
            {
                $role->role_active=0;
            }

            //get role url link
            $role->link = '/'.$current_locale.'/'.$role->role_code;
        }

        //------end role nav -----

        //------menu nav --------

        $menus=Menu::all();

        foreach($menus as $menu)
        {
            //get current role name
            $menu->name=$menu->menu_trans()->where('locale',$current_locale)->first()->menu;

            //get active menu
            if($menu->menu_code == $current_menu)
            {
                $menu->menu_active=1;
            }
            else
            {
                $menu->menu_active=0;
            }
            //get url link
            $menu->link = '/'.$current_locale.'/'.$current_role.'/'.$menu->menu_code;
        }

        //-----end menu nav -----

        $viewOut=(object)[
            'roles'=>$roles,
            'menus'=>$menus
        ];

        $view->with('viewOut',$viewOut);
    }

}