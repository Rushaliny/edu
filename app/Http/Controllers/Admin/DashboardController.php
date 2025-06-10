<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Models\Paper;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //

    public function index(){
        $papers = Paper::count();
        $users = User::where('user_role','student')->latest()->get();
        $new_users = User::where('user_role','student')->whereMonth('created_at',Carbon::now()->month)->get();
        return view('admin.dashboard',compact('new_users','users','papers'));
    }


    public function logout(){
        Auth::logout();
        return redirect()->route('index')->with('message','You are logout successfully! 😊');
    }
}
