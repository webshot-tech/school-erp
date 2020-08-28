<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Crypt;

class AdminController extends Controller
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
      $this->validate($request, [
        'name' => 'required',
        'email_id' => 'required|email',
        'password' => 'required',
        'confirm_password' => 'required|same:password',
      ]);
        $admin = new admin;
        $admin->name = $request->input('name');
        $admin->email_id = $request->input('email_id');
        $admin->password = Crypt::encrypt($request->input('password'));
        $admin->save();
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
      $login = admin::where('email_id', $request->input('mail'))->get();
      if($login->isEmpty())
      {
        return redirect('adminlog');
      }
      else {
        if(Crypt::decrypt($login[0]->password) == $request->input('pass'))
        {
          $request->session()->put('user', $login[0]->name);
        }
        else {
          return redirect('adminlog');
        }
      }
    }
}
