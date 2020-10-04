<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('small_groupables', function (Blueprint $table) {
            $table->bigInteger('small_group_id')->index();
            $table->bigInteger('small_groupable_id')->index();
            $table->string('small_groupable_type')->index();
            
            $table->boolean('is_leader')->default(false);

            $table->timestamps();
            $table->softDeletes();

            $table->primary(['small_group_id', 'small_groupable_id', 'small_groupable_type'], 'composite');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groupables');
    }
}
