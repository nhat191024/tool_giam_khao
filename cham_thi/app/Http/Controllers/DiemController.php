<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiemController extends Controller
{
    //
    public function addScreen() {
        return view('admin.feedback.screen');
    }
}
