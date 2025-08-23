<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewtechesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newteches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phonenumber')->unique();
            $table->integer('resident_europe')->nullable();
            $table->string('affilated_status');
            $table->longText('innovation_title');
            $table->longText('innovation_describe');
            $table->longText('clinical_benefits');
            $table->string('category');
            $table->string('market_offer');
            $table->integer('development_status');
            $table->longText('regulatory_clearance')->nullable();
            $table->string('intellectual_property');
            $table->string('disclosed_status')->nullable();
            $table->integer('business_objectives');
            $table->longText('additional_information')->nullable();
            $table->longText('funding')->nullable();
            $table->string('entrepreneur')->nullable();
            $table->string('hearAbout')->nullable();
            $table->string('attachment1')->nullable();
            $table->string('attachment2')->nullable();
            $table->integer('confirmation');
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
        Schema::dropIfExists('newteches');
    }
}