<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    //
    public function show(Request $request) {
        return view('client.master');
    }
}
