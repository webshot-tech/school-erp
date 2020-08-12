<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = DB::table('students')->select('id','name','email', 'phone', 'DOB', 'gender','address', 'district')->get();
      return view('stud_display', ['users' => $users]);
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
        'mail' => 'required|email',
        'phone' => 'required',
        'roll' => 'required',
        'mother' => 'required',
        'father' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'birth' => 'required',
        'add' => 'required',
        'district' => 'required',
        'blood' => 'required'
      ]);
        $school = new School;
        $school->name = $request->input('name');
        $school->email = $request->input('mail');
        $school->phone = $request->input('phone');
        $school->roll_no = $request->input('roll');
        $school->mother_name = $request->input('mother');
        $school->father_name = $request->input('father');
        $school->DOB = $request->input('dob');
        $school->gender = $request->input('gender');
        $school->birth_place = $request->input('birth');
        $school->address = $request->input('add');
        $school->district = $request->input('district');
        $school->blood_group = $request->input('blood');
        $school->save();
        return redirect('/Display');
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
}
