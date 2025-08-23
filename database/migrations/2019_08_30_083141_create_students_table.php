<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role')->default('0');
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
            $table->string('citizenship');
            $table->string('currentUniversity');
            $table->string('major');
            $table->string('currentGPA');
            $table->date('graduationDate');
            $table->integer('noOfColleges');
            $table->date('medicalSchStart');
            $table->string('MCAT');
            $table->integer('score');

            $table->integer('password_used')->nullable();
            $table->dateTime('last_logged')->nullable();
            $table->integer('investment_button')->default('0');
            $table->integer('account_status')->nullable();



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
        Schema::dropIfExists('students');
    }
}