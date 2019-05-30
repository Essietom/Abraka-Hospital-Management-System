<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    //
    protected $fillable = [
    'advance',
    'bill',
    'doctor_charge',
    'lab_charge',
    'medicine_charge',
    'num_of_days',
    'nursing_charge',
    'patient_id',
    'room_charge',
    ];
}
