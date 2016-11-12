<?php

use Illuminate\Database\Seeder;

class roleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'role_code'=>'personal',
            'main'=>1

        ]);

        DB::table('roles')->insert([
            'role_code'=>'business',
        ]);

        DB::table('roles')->insert([
            'role_code'=>'drivers',
        ]);
        

        //trans for hk-chi
        DB::table('role_trans')->insert([
            'role'=>'個人',
            'locale'=>'hk-chi',
            'roles_id'=>1
        ]);

        DB::table('role_trans')->insert([
            'role'=>'商戶',
            'locale'=>'hk-chi',
            'roles_id'=>2
        ]);

        DB::table('role_trans')->insert([
            'role'=>'司機',
            'locale'=>'hk-chi',
            'roles_id'=>3
        ]);

        //trans for hk-en
        DB::table('role_trans')->insert([
            'role'=>'PERSONAL',
            'locale'=>'hk-en',
            'roles_id'=>1
        ]);

        DB::table('role_trans')->insert([
            'role'=>'BUSINESS',
            'locale'=>'hk-en',
            'roles_id'=>2
        ]);

        DB::table('role_trans')->insert([
            'role'=>'DRIVERS',
            'locale'=>'hk-en',
            'roles_id'=>3
        ]);


    }
}
