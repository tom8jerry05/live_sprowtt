<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email','primaryphonenumber','alterphonenumber','dob','address1','address2','country','state','city','zipcode','referralSource','sponsorCode','citizenship','currentUniversity','major','currentGPA','graduationDate','noOfColleges','medicalSchStart','MCAT','score',
    ];

    		
}
