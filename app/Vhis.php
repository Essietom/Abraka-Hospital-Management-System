<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vhis extends Model
{
    //
    protected $fillable = [
    'blood_pressure',
    'patient_id',
    'pulse_rate',
    'respiration_rate',
    'temperature',
   
    ];

}
