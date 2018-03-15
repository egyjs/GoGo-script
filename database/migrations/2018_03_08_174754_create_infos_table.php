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
            $table->string('locat')->nullable(true);
            $table->string('email');
            $table->integer('phone')->nullable(true);
            $table->string('fb')->nullable(true);
            $table->string('tw')->nullable(true);
            $table->string('yt')->nullable(true);
            $table->string('in')->nullable(true);
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
