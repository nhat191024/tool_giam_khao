<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\nguoi_dung;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    //
    public function list()
    {
        $user = nguoi_dung::all();
        return view('admin/user_list', compact('user'));
    }

    public function add()
    {
        dd(1);
    }

    public function showLogin()
    {
        return view('admin/login');
    }

    public function login(LoginRequest $request)
    {
        $login = [
            'email' => $request->txtEmail,
            'password' => $request->txtPassword
        ];
        if (Auth::attempt($login)) {
            return redirect(route('diem.add_screen'));
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('client.login');
    }
}
