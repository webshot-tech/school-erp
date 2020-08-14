<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studens;
use App\teachers;
use App\classs;
class view extends Controller
{
    public function viewform()
    {
        return view('views');
    }
    public function main()
    {
        $studens = studens::all();
        $teachers = teachers::all();
        $classs = classs::all();
        return view('views', ['studens'=>$studens], ['teachers'=>$teachers])->with( ['classs'=>$classs]);
    }
}
