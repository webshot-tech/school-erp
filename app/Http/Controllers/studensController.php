<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studens;
class studensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $studens = studens::all();
        return view('stufolder.studenspage',compact('studens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stufolder.studenspage');
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
            'fathers_name' => 'required',
            'mothers_name' => 'required'  , 
            'gender' => 'required',
            'dob' => 'required',
            'usn' => 'required',
            'section' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        
        ]);
        $studens = new studens;
        $studens->name = $request->input('name');
        $studens->fathers_name = $request->input('fathers_name');
        $studens->mothers_name = $request->input('mothers_name');
        $studens->gender = $request->input('gender');
        $studens->dob = $request->input('dob');
        $studens->usn = $request->input('usn');
        $studens->section = $request->input('section');
        $studens->address = $request->input('address');
        $studens->city = $request->input('city');
        $studens->district = $request->input('district');

        $studens->save();
        return redirect ('stufolder')->with('success','data stored');

        
        
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
        $studens = studens::find($id);
        return view('stufolder.stueditpage', compact('studens','id'));
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
            'fathers_name' => 'required',
            'mothers_name' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'usn' => 'required',
            'section' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
        ]);

       $studens = studens::find($id);
       $studens->name =$request->input('name'); 
       $studens->fathers_name =$request->input('fathers_name'); 
       $studens->mothers_name =$request->input('mothers_name'); 
       $studens->gender =$request->input('gender'); 
       $studens->dob =$request->input('dob'); 
       $studens->usn =$request->input('usn'); 
       $studens->section =$request->input('section'); 
       $studens->address =$request->input('address'); 
       $studens->city =$request->input('city'); 
       $studens->district =$request->input('district'); 
       
       $studens->save();

       return redirect('stufolder')->with('success','data updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $studens = studens::find($id);
        $studens->delete();

        return redirect('stufolder')->with('success','data deleted');
    }
}
