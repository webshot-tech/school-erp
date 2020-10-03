<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\useregistration;
use Crypt;
class usereg extends Controller
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
        $data=new useregistration();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->DOB=$request->DOB;
        $data->gender=$request->gender;
        $data->user=$request->user;
        $data->password=Crypt::encrypt($request->pass);
        $data->repassword=Crypt::encrypt($request->repass);
        if($request->hasfile('image'))
        {
          $file=$request->file('image');
          $extension=$file->getClientOriginalExtension();
          $filename=mt_rand().'.'.$extension;
          $file->move('uploads/',$filename);
          $data->image=$filename;

        }
        else{
          $data->image='';
        }
        $data->save();
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
