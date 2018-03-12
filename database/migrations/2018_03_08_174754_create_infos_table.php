<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('infos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('jobs');
            $table->string('fb');
            $table->string('insta');
            $table->string('yt');
            $table->string('in');
            $table->string('paint');
            $table->string('photo');
            $table->string('icon');
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
        Schema::dropIfExists('infos');
    }
}
