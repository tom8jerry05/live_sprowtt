<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSweet16Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sweet_16', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('event_id')->unsigned()->nullable();
            $table->foreign('event_id')->references('id')->on('event')->onDelete('cascade');

            $table->integer('project_id')->unsigned()->nullable();
            $table->foreign('project_id')->references('id')->on('tombstones')->onDelete('cascade');

            $table->integer('applier_id')->unsigned()->nullable();
            $table->foreign('applier_id')->references('id')->on('projectappliers')->onDelete('cascade');


            $table->integer('sround_id')->unsigned()->nullable();
            $table->foreign('sround_id')->references('id')->on('second_round')->onDelete('cascade');
            $table->string('position')->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
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
        Schema::dropIfExists('sweet_16');
    }
}
