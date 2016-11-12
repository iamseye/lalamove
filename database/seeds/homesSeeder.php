<?php

use Illuminate\Database\Seeder;

class homesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('homes')->insert([
            'locale'=>'hk-en',
            'role'=>'personal'
        ]);

        DB::table('homes')->insert([
            'locale'=>'hk-chi',
            'role'=>'personal'
        ]);

        DB::table('homes')->insert([
            'locale'=>'hk-en',
            'role'=>'business'
        ]);

        DB::table('homes')->insert([
            'locale'=>'hk-chi',
            'role'=>'business'
        ]);

        DB::table('homes')->insert([
            'locale'=>'hk-en',
            'role'=>'drivers'
        ]);

        DB::table('homes')->insert([
            'locale'=>'hk-chi',
            'role'=>'drivers'
        ]);
    }
}
