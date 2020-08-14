<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = Teacher::all();
        return view('teacher.teacherpage', compact('emps'));
    }

    public function search(Request $request)
    {
        $search_text = $_GET['query'];
        $teachers = Teacher::where('name', 'LIKE', '%', $search_text.'%')->get();
        return view('search', compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teacher.teacherpage');
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
            'subject' => 'required',
            'qualification' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);

        $emps = new Teacher;

        $emps->name = $request->input('name');
        $emps->email_id = $request->input('email_id');
        $emps->subject = $request->input('subject');
        $emps->qualification = $request->input('qualification');
        $emps->phone = $request->input('phone');
        $emps->address = $request->input('address');
        $emps->city = $request->input('city');

        $emps->save();

        return redirect('teacher')->with('success', 'Data Added');

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
        $emps = Teacher::find($id);
        return view('teacher.teacheditpage', compact('emps', 'id'));
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
            'subject' => 'required',
            'qualification' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required'
        ]);

        $emps = Teacher::find($id);

        $emps->name = $request->input('name');
        $emps->email_id = $request->input('email_id');
        $emps->subject = $request->input('subject');
        $emps->qualification = $request->input('qualification');
        $emps->phone = $request->input('phone');
        $emps->address = $request->input('address');
        $emps->city = $request->input('city');

        $emps->save();

        return redirect('teacher')->with('success', 'Data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = Teacher::find($id);
        $emps->delete();

        return redirect('/views')->with('success', 'Data Deleted!!');
    }

}
