<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Events extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cid');
            $table->string('category');
            $table->string('description');
            $table->string('venue', 60);
            $table->timestamp('time');
            // $table->string('cvurl');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
