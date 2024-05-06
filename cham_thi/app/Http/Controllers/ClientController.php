<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\doi_thi;
use App\Models\nguoi_dung;

class ClientController extends Controller
{
    //
    public function show(Request $request) {
        $doiThi = doi_thi::all();
        $giamKhao = nguoi_dung::where('quyen', 2)->get();
        return view('client.master', compact('doiThi', 'giamKhao'));
    }
}
