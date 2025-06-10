<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(){
        return view('auth.login');
    }

    // login check
    public function login_check(Request $request){
        $user = User::where('email',$request->email)->first();
        if($user){
            if(Hash::check($request->password,$user->password)){
                if(Auth::user()){
                    Auth::logout();
                }
                if($request->remberMe){
                    Auth::login($user,$remember = true);
                }else{
                    Auth::login($user);
                }

                // return dashboard check
                if($user->user_role == 'admin'){
                    return redirect()->route('admin.dashboard')->with('message',"Welcome back $user->full_name with the Edu-Score Admin panel 😊");
                }else{
                    return redirect()->route('student.dashboard')->with('message',"Welcome back $user->full_name with the Edu-Score Student panel 😊");
                }
            }else{
                return back()->with('message','This account does not accept the password you entered.');
            }
        }else{
            return redirect()->back()->with('message','Your email is not registered. Register first');
        }
    }
    public function register(){
        return view('auth.reg');
    }

    // New User
    public function register_new(Request $request){
        $last = User::where('user_role','student')->latest()->first();
        if($last){
            $lastID = $last->id +1;
        }else{
            $lastID = 1;
        }

        $order_id ='ID-000'.'-0'.$lastID;
        $request->validate([
            'email'=>'required|unique:users',
        ]);

        $new  = new User;
        $new->reg_no = $order_id;
        $new->full_name = $request->full_name;
        $new->last_name = $request->last_name;
        $new->grade = $request->grade;
        $new->school_name = $request->school_name;
        $new->provical = $request->provical;
        $new->par_name = $request->par_name;
        $new->par_number = $request->par_number;
        $new->email = $request->email;
        $new->password = $request->password;
        $new->user_role = 'student';
        if($new->save()){
            return redirect()->route('login')->with('message','Your Account Created Successfully Login Now.');
        }

    }


    public function Emailcheck(Request $request){
        $user = User::where('email', $request->email)->first();
        if($user){
            echo'taken';
        }
    }
}