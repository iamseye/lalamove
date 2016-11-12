<?php

use Illuminate\Database\Seeder;

class homePicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_pics')->insert([
            'path'=>'home/HID_1_top1.jpg',
            'tag'=>'top_carousel',
            'homes_id'=>1
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_1_top2.png',
            'tag'=>'top_carousel',
            'homes_id'=>1
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_1_scn1.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>1
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_1_scn2.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>1
        ]);

        //home_id =2 hk-chi personal home
        DB::table('home_pics')->insert([
            'path'=>'home/HID_2_top1.png',
            'tag'=>'top_carousel',
            'homes_id'=>2
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_2_scn1.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>2
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_2_scn2.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>2
        ]);


        //home_id =3 hk-chi business home
        DB::table('home_pics')->insert([
            'path'=>'home/HID_3_top1.jpg',
            'tag'=>'top_carousel',
            'homes_id'=>3
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_3_top2.jpg',
            'tag'=>'top_carousel',
            'homes_id'=>3
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_3_scn1.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>3
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_3_scn2.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>3
        ]);

        //home_id =4 hk-en business home
        DB::table('home_pics')->insert([
            'path'=>'home/HID_4_top1.png',
            'tag'=>'top_carousel',
            'homes_id'=>4
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_4_top2.jpg',
            'tag'=>'top_carousel',
            'homes_id'=>4
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_4_scn1.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>4
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_4_scn2.jpg',
            'tag'=>'mobile_carousel',
            'homes_id'=>4
        ]);

        //home_id =5 hk-en drivers home
        DB::table('home_pics')->insert([
            'path'=>'home/HID_5_top1.jpg',
            'tag'=>'top_carousel',
            'homes_id'=>5
        ]);


        DB::table('home_pics')->insert([
            'path'=>'home/HID_5_scn1.png',
            'tag'=>'mobile_carousel',
            'homes_id'=>5
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_5_scn2.png',
            'tag'=>'mobile_carousel',
            'homes_id'=>5
        ]);

        //home_id =5 hk-chi drivers home
        DB::table('home_pics')->insert([
            'path'=>'home/HID_5_top1.jpg',
            'tag'=>'top_carousel',
            'homes_id'=>6
        ]);


        DB::table('home_pics')->insert([
            'path'=>'home/HID_6_scn1.png',
            'tag'=>'mobile_carousel',
            'homes_id'=>6
        ]);

        DB::table('home_pics')->insert([
            'path'=>'home/HID_6_scn2.png',
            'tag'=>'mobile_carousel',
            'homes_id'=>6
        ]);

    }
}
