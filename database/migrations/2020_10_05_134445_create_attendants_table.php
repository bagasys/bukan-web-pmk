<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttendantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('event_id');
            $table->unsignedBigInteger('attendee_id')->nullable();
            $table->string('attendee_type')->nullable();
            $table->string('origin')->nullable();
            $table->string('name')->nullable();
            $table->string('nrp')->nullable();
            $table->string('nid')->nullable();
            $table->string('email')->nullable();
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
        Schema::dropIfExists('attendants');
    }
}
