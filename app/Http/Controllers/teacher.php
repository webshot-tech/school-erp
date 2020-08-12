<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacherdata;

class teacher extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'parent'=>'required',
            'dob'=>'required',
            'quali'=>'required',
            'email'=>'required',
            'blood'=>'required',
            'mobile'=>'required',
            'birth'=>'required',
            'gender'=>'required',
            'exp'=>'required',
            'address'=>'required',
            'state'=>'required',
            'district'=>'required',
            'pincode'=>'required',

        ]);
     
        $data1=new teacherdata();
        $data1->name=$request->name;
        $data1->qualification=$request->quali;
        $data1->parent_name=$request->parent;
        $data1->experience=$request->exp;
        $data1->dob=$request->dob;
        $data1->gender=$request->gender;
        $data1->blood_group=$request->blood;
        $data1->email=$request->email;
        $data1->district=$request->district;
        $data1->perm_address=$request->address;
        $data1->pincode=$request->pincode;
        $data1->state=$request->state;
        $data1->mobile=$request->mobile;
        $data1->birth_place=$request->birth;
        $data1->save();
        return view('home');

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
