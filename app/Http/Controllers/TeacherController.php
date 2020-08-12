<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
use DB;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('teachers')->select('id','name','email', 'phone', 'DOB', 'gender','address', 'district')->get();
        return view('Teach_display', ['users' => $users]);
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
        'id' => 'required',
        'qua' => 'required',
        'sub' => 'required',
        'dob' => 'required',
        'gender' => 'required',
        'birth' => 'required',
        'add' => 'required',
        'district' => 'required',
        'blood' => 'required'
      ]);
        $teacher = new Teacher;
        $teacher->name = $request->input('name');
        $teacher->email = $request->input('mail');
        $teacher->phone = $request->input('phone');
        $teacher->id_no = $request->input('id');
        $teacher->qualification = $request->input('qua');
        $teacher->subjects = $request->input('sub');
        $teacher->DOB = $request->input('dob');
        $teacher->gender = $request->input('gender');
        $teacher->birth_place = $request->input('birth');
        $teacher->address = $request->input('add');
        $teacher->district = $request->input('district');
        $teacher->blood_group = $request->input('blood');
        $teacher->save();
        return redirect('/TeacherDisplay');

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
