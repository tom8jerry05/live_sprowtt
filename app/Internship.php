<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Internship extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'phonenumber', 'resume'
    ];
}
