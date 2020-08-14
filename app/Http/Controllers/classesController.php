<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes;

class classesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emps = classes::all();
        return view('lass.lasspage', compact('emps'));
    }


    
    public function search(Request $request)
    {
        $search_text = $_GET['name'];
        $emps = classes::where('name', 'LIKE', '%', $search_text.'%')->get();
        return view('search', compact('classes'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lass.lasspage');
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
            'branch' => 'required',
            'section' => 'required',
            'strength' => 'required',
            'room_no' => 'required',
            'floor' => 'required',
            'teachers' => 'required'
        ]);

        $emps = new classes;
        
        $emps->strength = $request->input('strength');
        $emps->section = $request->input('section');
        $emps->branch = $request->input('branch');
        $emps->room_no = $request->input('room_no');
        $emps->floor = $request->input('floor');
        $emps->teachers = $request->input('teachers');

        $emps->save();

        return redirect('lasspage')->with('success', 'Data Added');

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
        $emps = classes::find($id);
        return view('lass.lasseditpage', compact('emps', 'id'));
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
        $this->validate($request,[
            'branch' => 'required',
            'section' => 'required',
            'strength' => 'required',
            'room_no' => 'required',
            'floor' => 'required',
            'teachers' => 'required'
        ]);

        $emps = classes::find($id);

        $emps->strength = $request->input('strength');
        $emps->section = $request->input('section');
        $emps->branch = $request->input('branch');
        $emps->room_no = $request->input('room_no');
        $emps->floor = $request->input('floor');
        $emps->teachers = $request->input('teachers');

        $emps->save();

        return redirect('lasspage')->with('success', 'Data updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emps = classes::find($id);
        $emps->delete();

        return redirect('/views')->with('success', 'Data Deleted!!');
    }
}
