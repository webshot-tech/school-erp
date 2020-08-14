<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class teachers extends Model
{
    protected $table = 'teachers';
    protected $fillable = ['name','gender','dob','branch','education','address','city','district'];
   
}
