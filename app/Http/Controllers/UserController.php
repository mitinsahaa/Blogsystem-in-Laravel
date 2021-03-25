<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
class UserController extends Controller
{
    public function signup()
    {
        return view("pages/signup");
    }
    public function saveuser(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|','regex:/^.*(?=.{3,})(?=.*[\d\x])(?=.*[!$#%]).*$/',
        ]);
        $user = new User;
        $user->fullname=$request->fullname;
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return back()->with('msg','User Created Successfully');
    }
    public function loginview()
    {
        return view('pages/login');
    }
    public function login(Request $request)
    {
        $cred = [
            'username' => $request->username,
            'password' => $request->password
        ];
        if(Auth::attempt($cred))
        {
            return redirect('/admin');
        }else{
            return redirect('/login')->with('error','Invalid Username or Password');
        }
    }
    public  function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
