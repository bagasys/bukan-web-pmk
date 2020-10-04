<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->string('nrp')->unique();
            $table->string('name');
            $table->string('department');
            $table->enum('sex', ['male', 'female']);
            $table->date('birth_date');

            $table->string('phone');
            $table->string('current_address');
            $table->string('origin_address');
            $table->string('guardian_name');
            $table->string('guardian_phone');

            $table->year('year_entry');
            $table->year('year_graduate');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
