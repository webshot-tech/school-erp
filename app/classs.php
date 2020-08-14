<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classs extends Model
{
    protected $table = 'classes';
    protected $fillable = ['section','strength','class_teacher_name','no_of_desk','branch'];
}
