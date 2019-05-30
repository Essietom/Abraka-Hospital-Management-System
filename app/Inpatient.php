<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inpatient extends Model
{
    //
    protected $fillable = [
    'date_of_adm',
    'date_of_discharge',
    'patient_id',
    'ward_id',
    
    ];
}
