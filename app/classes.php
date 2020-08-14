<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class classes extends Model
{
    protected $table = 'classes';
    protected $fillable = ['strength', 'section', 'branch', 'room_no', 'floor', 'teachers'];
}
