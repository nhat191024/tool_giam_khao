<?php

namespace App\Http\Controllers;

use App\Models\nguoi_dung;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function list() {
        $user = nguoi_dung::all();
        return view('admin/user_list', compact('user'));
    }

    public function add() {
        dd(1);
    }
}
