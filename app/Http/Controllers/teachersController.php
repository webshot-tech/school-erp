<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teachers;
class teachersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teachers = teachers::all();
        return view('teafolder.teacherspage',compact('teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('teafolder.teacherspage');
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
            'gender' => 'required',
            'dob' => 'required'  , 
            'branch' => 'required',
            'education' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        
        ]);
        $teachers = new teachers;
        $teachers->name = $request->input('name');
        $teachers->gender = $request->input('gender');
        $teachers->dob = $request->input('dob');
        $teachers->branch = $request->input('branch');
        $teachers->education = $request->input('education');
        $teachers->address = $request->input('address');
        $teachers->city = $request->input('city');
        $teachers->district = $request->input('district');

        $teachers->save();
        return redirect ('teafolder')->with('success','data stored');
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
        $teachers = teachers::find($id);
        return view('teafolder.teaeditpage', compact('teachers','id'));
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
            'gender' => 'required',
            'dob' => 'required',
            'branch' => 'required',
            'education' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);

       $teachers = teachers::find($id);
       $teachers->name =$request->input('name'); 
       $teachers->gender =$request->input('gender'); 
       $teachers->dob =$request->input('dob'); 
       $teachers->branch =$request->input('branch'); 
       $teachers->education =$request->input('education'); 
       $teachers->address =$request->input('address'); 
       $teachers->city =$request->input('city'); 
       $teachers->district =$request->input('district'); 
       
       $teachers->save();

       return redirect('teafolder')->with('success','data updated');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teachers = teachers::find($id);
        $teachers->delete();

        return redirect('teafolder')->with('success','data deleted');
    }
}
