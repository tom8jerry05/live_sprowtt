<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inventors', function (Blueprint $table) {
            
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phonenumber')->unique();
            $table->string('linkedin');
            $table->longText('about_lab');
            $table->longText('specific_invitation')->nullable();
            $table->longText('trl')->nullable();
            $table->longText('appropriate_amount')->nullable();
            $table->integer('entrepreneur');
            $table->integer('dates');
            $table->integer('hear_about');
            $table->longText('suggestion')->nullable();
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
        Schema::dropIfExists('inventors');
    }
}