<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studens extends Model
{
    protected $table = 'studes';
    protected $fillable = ['name','fathers_name','mothers_name','gender','dob','usn','section','address','city','district'];
}
