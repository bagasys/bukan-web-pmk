<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMeetingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('type');
            $table->dateTime('start');
            $table->dateTime('end');
            $table->string('slug')->nullable()->unasigned();
            $table->integer('attendant_count')->default(0);
            $table->text('report')->nullable();
            $table->foreignId('user_id')->nullable()->unasigned();
            $table->string('creator_name');
            $table->boolean('forStudent');
            $table->boolean('forAlumni');
            $table->boolean('forLecturer');
            $table->boolean('forPublic');
            $table->string('location')->nullable();
            $table->string('image')->nullable();

            $table->foreign('user_id')
                ->references('id')
                ->on('users');

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
        Schema::dropIfExists('events');
    }
}
