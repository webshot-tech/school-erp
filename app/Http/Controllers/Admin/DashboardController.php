<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all();
        return view('admin.Decide')->with('users',$users);
    }

    public function registeredit(Request $request ,$id)
    {
        $users = User::findOrFail($id);
        return view('admin.Decide_edit')->with('users', $users);
    }

    public function registerupdate(Request $request ,$id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->usertype = $request->input('usertype');
        $users->update();
        return redirect('/role-register')->with('status', 'Your Data Is Updated');
    }

    public function registerdelete(Request $request ,$id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status', 'Your Data Is Deleted');
    }
}
