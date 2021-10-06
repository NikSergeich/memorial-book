<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardSoldierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('award_soldier', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('award_id');
            $table->foreign('award_id')->references('id')->on('awards');

            $table->unsignedBigInteger('soldier_id');
            $table->foreign('soldier_id')->references('id')->on('soldiers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('award_soldier');
    }
}
