<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Student::all();
        return view('student.studentpage', compact('emps'));
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $students = Student::where('name', 'LIKE', '%', $search_text.'%')->get();
        return view('search', compact('students'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.studentpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email_id' => 'required',
            'branch' => 'required',
            'sem' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);

        $emps = new Student;

        $emps->name = $request->input('name');
        $emps->email_id = $request->input('email_id');
        $emps->branch = $request->input('branch');
        $emps->sem = $request->input('sem');
        $emps->phone = $request->input('phone');
        $emps->address = $request->input('address');
        $emps->city = $request->input('city');

        $emps->save();

        return redirect('student')->with('success', 'Data Added');
        
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
        $emps = Student::find($id);
        return view('student.studenteditpage', compact('emps', 'id'));
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
        $this->validate($request, [
            'name' => 'required',
            'email_id' => 'required',
            'branch' => 'required',
            'sem' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);

        $emps = Student::find($id);

        $emps->name = $request->input('name');
        $emps->email_id = $request->input('email_id');
        $emps->branch = $request->input('branch');
        $emps->sem = $request->input('sem');
        $emps->phone = $request->input('phone');
        $emps->address = $request->input('address');
        $emps->city = $request->input('city');

        $emps->save();

        return redirect('student')->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = Student::find($id);
        $emps->delete();

        return redirect('/views')->with('success', 'Data Deleted!!');
    }

}
