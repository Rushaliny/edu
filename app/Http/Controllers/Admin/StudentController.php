<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    //

    public function list(){
        $users = User::where('user_role','student')->latest()->get();
        $new_users = User::where('user_role','student')->whereMonth('created_at',Carbon::now()->month)->get();
        return view('admin.student.list',compact('users','new_users'));
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.student.edit',compact('user'));
    }

    public function update(Request $request){
        $user = User::find($request->id);
        $user->update($request->all());
        return redirect()->route('admin.student.list')->with('message',"$user->full_name Details Has Updated Successfully.");
    }

    public function delete($id){
        $user = User::find($id);
        if($user->delete()){
            return redirect()->route("admin.student.list")->with("message","$user->full_name Details Has Deleted Successfully.");
        }
    }
}