<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teacher;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data1=teacher::all();
      return view('dash.teacherdata',["data2"=>$data1]);
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
        'email_id' => 'required|email',
        'phone' => 'required',
        'id_no' => 'required',
        'address' => 'required',
        'class_alloted' => 'required'
      ]);
        $teach = new teacher;
        $teach->name = $request->input('name');
        $teach->email_id = $request->input('email_id');
        $teach->phone = $request->input('phone');
        $teach->id_no = $request->input('id_no');
        $teach->address = $request->input('address');
        $teach->class_alloted = $request->input('class_alloted');
        $teach->save();
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
    public function login(Request $request)
    {
      $login = teacher::where('email_id', $request->input('mail'))->get();
      if($login->isEmpty())
      {
        return redirect('tealog');
      }
      else {
        if($login[0]->id_no == $request->input('pass'))
        {
          $request->session()->put('user', $login[0]->name);
        }
        else {
          return redirect('tealog');
        }
      }
    }
}
