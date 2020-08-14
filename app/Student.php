<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['name', 'email_id', 'branch', 'sem', 'phone', 'address', 'city'];
}
