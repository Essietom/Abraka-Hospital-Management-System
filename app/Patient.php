<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $fillable = [
    'address',
    'age',
    'bloodgroup',
    'dob',
    'email',
    'firstname',
    'lastname',
    'marital_status',
    'phone_num',
    'sex',
    ];
}
