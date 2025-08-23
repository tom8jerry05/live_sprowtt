<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventors extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phonenumber', 'linkedin' ,'about_lab','specific_invitation','trl','appropriate_amount','entrepreneur','dates','hear_about','suggestion'
    ];


    
}
