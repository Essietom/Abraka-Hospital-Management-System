<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    //
    protected $fillable = [
    'appointment_date',
    'appointment_time',
    'description',
    'doctor_id',
    'patient_id',
    
    ];
}
