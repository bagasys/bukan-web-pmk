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
            $table->string('username');
            $table->string('name');
            $table->string('department');
            $table->string('job')->nullable();
            $table->string('sex');
            $table->string('address')->nullable();
            $table->string('avatar')->nullable();
            $table->integer('year_entry')->nullable();
            $table->integer('year_exit')->nullable();
            $table->integer('year_end')->nullable();
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
        Schema::dropIfExists('alumnis');
    }
}
