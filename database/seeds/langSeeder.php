<?php

use Illuminate\Database\Seeder;

class langSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('localizations')->insert([
            'city' => '香港',
            'language' => '繁體',
            'code'=>'hk-chi',
            'slogan'=>'slogan-hk.png'

        ]);

        DB::table('localizations')->insert([
            'city' => 'Hong Kong',
            'language' => 'ENG',
            'code'=>'hk-en',
            'slogan'=>'slogan-eng.png',
            'main'=>1

        ]);

    }
}
