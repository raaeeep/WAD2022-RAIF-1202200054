<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register()
    {
        $data['title'] = 'Register';
        return view('user/register', $data);
    }
    public function register_action(Request $request)
    {
        $cek = $request->validate([
            'name' => 'required',
            'no_hp' => 'required',
            'email' => 'required|unique:tb_user',
            'password1' => 'required',
            'password2' => 'required|same:password1'
        ]);
        $user = new User([
            'name' => $request->name,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success. Please Log in!');
    }
    public function login()
    {
        $data['title'] = 'Login';
        return view('user/login', $data);
    }

    public function login_action(Request $request)
    {
        $ada = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if(Auth::attempt($ada)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors(['password' => 'Wrong email or password!']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
