<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\studentdatas;
use App\teacherdata;
use App\classdata;

class student extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index1()
    {
        $data=studentdatas::all();
        $data1=teacherdata::all();
        $data2=classdata::all();
        return view('admin',["data3"=>$data],["data4"=>$data1])->with(["data5"=>$data2]);
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
        $this->validate($request,
        [
            'name'=>'required',
            'father'=>'required',
            'dob'=>'required',
            'mother'=>'required',
            'email'=>'required',
            'blood'=>'required',
            'mobile'=>'required',
            'birth'=>'required',
            'gender'=>'required',
            'reg'=>'required',
            'address'=>'required',
            'state'=>'required',
            'district'=>'required',
            'pincode'=>'required',

        ]);
     
        $data=new studentdatas();
        $data->name=$request->name;
        $data->father_name=$request->father;
        $data->mother_name=$request->mother;
        $data->dob=$request->dob;
        $data->gender=$request->gender;
        $data->blood_group=$request->blood;
        $data->email=$request->email;
        $data->district=$request->district;
        $data->perm_address=$request->address;
        $data->pincode=$request->pincode;
        $data->mobile=$request->mobile;
        $data->birth_place=$request->birth;
        $data->reg_no=$request->reg;
        $data->state=$request->state;
        $data->save();
        return view('admin');

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
