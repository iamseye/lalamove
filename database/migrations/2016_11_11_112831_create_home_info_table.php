<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->text('intro_title');
            $table->longText('intro');
            $table->text('video_path');
            $table->text('step_title');
            $table->longText('step1');
            $table->longText('step2');
            $table->longText('step3');
            $table->text('features_title');
            $table->text('feature1_title');
            $table->longText('feature1_content');
            $table->text('feature2_title');
            $table->longText('feature2_content');
            $table->text('feature3_title');
            $table->longText('feature3_content');
            $table->text('feature4_title');
            $table->longText('feature4_content');
            $table->integer('homes_id');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('home_infos');

    }
}
