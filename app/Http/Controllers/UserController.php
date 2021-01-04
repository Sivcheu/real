<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('user.login');
    }

    public function login(Request $request)
    {
        $user = User::where(['email' => $request->email])->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return "Username and password in wrong";
        } else {
            $request->session()->put('user', $user);
            return redirect('/home');
        }
    }

    public function registerForm()
    {
        return view('user.register');
    }

    public function userStore(Request $request)
    {
        $this->validate($request, [
            'firstname' => ['required', 'string', 'min:2', 'max:255'],
            'lastname' => ['required', 'string', 'min:2', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);
        $user = new User();
        $user->firstname = $request->firstname;
        $user->lastname = $request->lastname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect('/loginForm');
    }

    public function logout()
    {
        Session::forget('user');
        return redirect('/home');
    }

    public function admin()
    {
        return view('user.admin');
    }
    public function adminLoginForm(){
        return view('admin.login');
    }
    public function loginA(Request $request)
    {
        $admin = Admin::where(['name' => $request->name])->first();
        if (!$admin || !Hash::check($request->password, $admin->password)) {
            return "name and password in wrong";
        } else {
            $request->session()->put('user', $admin);
            return redirect('/admin');
        }
    }

}
