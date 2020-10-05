<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('name');
            $table->string('department');
            $table->string('job');
            $table->string('sex');
            $table->string('address');
            $table->string('avatar');
            $table->integer('year_entry');
            $table->integer('year_exit');
            $table->integer('year_end');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');


        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnis');
    }
}
