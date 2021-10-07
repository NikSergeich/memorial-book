<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAwardablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('awardables', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('award_id');
            $table->unsignedBigInteger('awardable_id');
            $table->string('awardable_type');

            $table->boolean('posthumously');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('awardables');
    }
}
