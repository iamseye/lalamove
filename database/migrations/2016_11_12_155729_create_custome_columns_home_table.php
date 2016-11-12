<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomeColumnsHomeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('home_infos', function ($table) {
            $table->text('customize_title');
            $table->longtext('customize_content');

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('home_infos', function ($table) {
            $table->dropColumn('Customize_title');
            $table->dropColumn('Customize_content');
        });
    }
}
