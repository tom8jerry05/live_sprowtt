<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectappliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projectappliers', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('role')->default('0');
            $table->integer('applier_type')->nullable();
            $table->integer('project_id')->unsigned()->nullable();
            $table->foreign('project_id')->references('id')->on('tombstones')->onDelete('cascade');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('primaryphonenumber')->unique();
            $table->string('alterphonenumber')->unique();
            $table->date('dob');
            $table->longText('address1');
            $table->longText('address2');
            $table->integer('country');
            $table->integer('state');
            $table->integer('city');
            $table->integer('zipcode');
            $table->string('referralSource');
            $table->string('sponsorCode');
            $table->string('citizenship')->nullable();
            $table->string('currentUniversity');
            $table->string('major');
            $table->string('currentGPA');
            $table->date('graduationDate');
            $table->string('attendmedischool')->nullable();
            $table->string('interestedtl')->nullable();
            $table->string('resume')->nullable();
            
            $table->dateTime('last_logged')->nullable();
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
        Schema::dropIfExists('projectappliers');
    }
}
