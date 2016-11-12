<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColumnsMain extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('localizations', function ($table) {
            $table->integer('main');
        });

        Schema::table('menus', function ($table) {
            $table->integer('main');
        });

        Schema::table('roles', function ($table) {
            $table->integer('main');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('localizations', function ($table) {
            $table->dropColumn('main');
        });

        Schema::table('menus', function ($table) {
            $table->dropColumn('main');
        });

        Schema::table('roles', function ($table) {
            $table->dropColumn('main');
        });
    }
}
