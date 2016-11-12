<?php

use Illuminate\Database\Seeder;

class menuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menus')->insert([
            'menu_code'=>'home',
            'main'=>1
        ]);

        DB::table('menus')->insert([
            'menu_code'=>'download',
        ]);



        //trans for hk-chi
        DB::table('menu_trans')->insert([
            'menu'=>'主頁',
            'locale'=>'hk-chi',
            'menus_id'=>1
        ]);

        DB::table('menu_trans')->insert([
            'menu'=>'下載',
            'locale'=>'hk-chi',
            'menus_id'=>2
        ]);




        //trans for hk-en
        DB::table('menu_trans')->insert([
            'menu'=>'Home',
            'locale'=>'hk-en',
            'menus_id'=>1
        ]);

        DB::table('menu_trans')->insert([
            'menu'=>'Download',
            'locale'=>'hk-en',
            'menus_id'=>2
        ]);




    }
}
