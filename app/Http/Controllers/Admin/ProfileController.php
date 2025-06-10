<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    //

    public function profile(){
        $user = auth()->user();

        return view('admin.profile',compact('user'));
    }

    public function update(Request $request){
        $user = User::find(auth()->user()->id);
        $user->update($request->all());
        return redirect()->back()->with('message','Profile details has updated successfully');
    }

    public function password(Request $request){
        $request->validate([
            'password'=> 'required|confirmed',
        ]);
        $user = User::find(auth()->user()->id);
        if(Hash::check($request->old_password,$user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->back()->with('message','Password has changed.');

        }else{
            return redirect()->back()->with('message','Current password is incorrect.');
        }
    }
}