<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newtech extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'affilated_status' ,'innovation_title','innovation_describe','clinical_benefits','category','market_offer','development_status','intellectual_property','business_objectives','confirmation'
    ];
}