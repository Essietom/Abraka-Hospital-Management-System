<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    //
    public $table="staffs";
    protected $fillable = [
    'address',
    'age',
    'bloodgroup',
    'department_id',
    'designation',
    'dob',
    'email',
    'firstname',
    'lastname',
    'marital_status',
    'phone_num',
    'role_id',
    'sex',
    'staff_no',
    ];

}
