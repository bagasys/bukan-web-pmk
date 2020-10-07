<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lecturer_id')->nullable();
            $table->foreignId('student_id')->nullable();
            $table->foreignId('alumni_id')->nullable();
            $table->string('sender_name');
            $table->string('sender_account');
            $table->dateTime('send_date');
            $table->string('receiver_account');
            $table->string('wallet');
            $table->string('status');
            $table->string('verified_by')->nullable();
            $table->dateTime('verified_date')->nullable();
            $table->string('proof');
            $table->integer('amount');
            $table->string('note');
            $table->timestamps();

            $table->foreign('lecturer_id')
                ->references('id')
                ->on('lecturers');

            $table->foreign('student_id')
                ->references('id')
                ->on('students');

            $table->foreign('alumni_id')
                ->references('id')
                ->on('alumnis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
