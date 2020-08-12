<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use DB;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = DB::table('class')->select('id','room_no','section', 'strength', 'teachers', 'subjects')->get();
        return view('class_display', ['users' => $users]);
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
        'room' => 'required',
        'section' => 'required',
        'strength' => 'required',
        'teachers' => 'required',
        'subject' => 'required'
      ]);
        $room = new room;
        $room->room_no = $request->input('room');
        $room->section = $request->input('section');
        $room->strength = $request->input('strength');
        $room->teachers = $request->input('teachers');
        $room->subjects = $request->input('subject');
        $room->save();
        return redirect('/ClassDisplay');
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
