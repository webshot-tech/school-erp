<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=student::all();
        return view('dash.studentdata',["data1"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        'name' => 'required',
        'email_id' => 'required',
        'roll_no' => 'required',
        'mother_name' => 'required',
        'phone' => 'required',
        'address' => 'required',
        'father_name' => 'required',
        'DOB' => 'required',
        'gender' => 'required',
        'district' => 'required',
        'birth_place' => 'required',
        'blood_group' => 'required',
        'subject' => 'required'
      ]);
        $stud = new student;
        $stud->name = $request->input('name');
        $stud->email = $request->input('email_id');
        $stud->roll_no = $request->input('roll_no');
        $stud->mother_name = $request->input('mother_name');
        $stud->phone = $request->input('phone');
        $stud->address = $request->input('address');
        $stud->father_name = $request->input('father_name');
        $stud->DOB = $request->input('DOB');
        $stud->gender = $request->input('gender');
        $stud->district = $request->input('district');
        $stud->birth_place = $request->input('birth_place');
        $stud->blood_group = $request->input('blood_group');
        $stud->subject = $request->input('subject');
        $stud->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function login(Request $request)
    {
      $login = student::where('email', $request->input('mail'))->get();
      if($login->isEmpty())
      {
        return redirect('studlog');
      }
      else {
        if($login[0]->roll_no == $request->input('pass'))
        {
          $request->session()->put('user', $login[0]->name);
        }
        else {
          return redirect('studlog');
        }
      }
    }
}
