<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classs;
class classsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $classs = classs::all();
        return view('clafolder.classspage',compact('classs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clafolder.classspage');
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
            'section' => 'required',
            'strength' => 'required',
            'class_teacher_name' => 'required'  , 
            'no_of_desk' => 'required',
            'branch' => 'required',
        
        ]);

        $classs = new classs;
        $classs->section = $request->input('section');
        $classs->strength = $request->input('strength');
        $classs->class_teacher_name = $request->input('class_teacher_name');
        $classs->no_of_desk = $request->input('no_of_desk');
        $classs->branch = $request->input('branch');
        

        $classs->save();
        return redirect ('clafolder')->with('success','data stored');
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
        $classs = classs::find($id);
        return view('clafolder.claeditpage', compact('classs','id'));
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
            'section' => 'required',
            'strength' => 'required',
            'class_teacher_name' => 'required'  , 
            'no_of_desk' => 'required',
            'branch' => 'required',
        ]);

       $classs = classs::find($id);
       $classs->section = $request->input('section');
        $classs->strength = $request->input('strength');
        $classs->class_teacher_name = $request->input('class_teacher_name');
        $classs->no_of_desk = $request->input('no_of_desk');
        $classs->branch = $request->input('branch');
       
       $classs->save();

       return redirect('clafolder')->with('success','data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $classs = classs::find($id);
        $classs->delete();

        return redirect('clafolder')->with('success','data deleted');
    }
}
