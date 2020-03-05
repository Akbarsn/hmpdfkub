<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function handleLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $user = User::where('username', $username)->limit(1)->get();
        if ($user) {
            if (Hash::check($password, $user[0]->password)) {
                $request->session()->put('isLogin', true);
                $request->session()->put('name', $user[0]->name);
                return redirect(url("dashboard"));
            } else {
                redirect()->back();
            }
        } else {
            redirect()->back();
        }
    }

    public function logOut(Request $request)
    {
        $request->session()->flush();
        return redirect(url('/login'));
    }
}
