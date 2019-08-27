<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competitions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('photo');
            $table->string('name');
            $table->string('address');
            $table->integer('age');
            $table->string('education');
            $table->string('activity');
            $table->string('phone');
            $table->integer('vote')->default(0);
            $table->integer('event_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('competitions');
    }
}
