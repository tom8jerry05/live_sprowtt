<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTombstonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tombstones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('team_name')->nullable();
            $table->string('agency');
            $table->string('video_option');
            $table->string('video_link');
            $table->string('video_option');
            $table->string('pres_video_option')->nullable();
            $table->string('pres_video_link')->nullable();
            $table->string('position')->nullable();
            $table->string('invention_number');
            $table->longText('description');
            $table->longText('summary');
            $table->integer('status')->default('0');
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
        Schema::dropIfExists('tombstones');
    }
}
