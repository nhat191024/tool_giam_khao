<?php

namespace App\Http\Controllers;

use App\Models\diem;
use Illuminate\Http\Request;
use App\Models\doi_thi;
use App\Models\nguoi_dung;


class ClientController extends Controller
{
    public $diemModel;
    function __construct()
    {
        $this->diemModel = new diem();
    }
    //
    public function show(Request $request)
    {
        $idDoiThi = $request->id;
        $doiThi = doi_thi::all();
        $tenDoi = $this->diemModel->tenDoi($idDoiThi);
        $tongTim = $this->diemModel->tongTim($idDoiThi);
        $diem = $this->diemModel->getAllDiemByIdDoi($idDoiThi);
        $giamKhao = nguoi_dung::where('quyen', 2)->get();
        $tongDiem = $this->diemModel->tongDiemToanDoi();
        return view('client.master', compact('doiThi', 'giamKhao', 'diem', 'tenDoi', 'tongTim','tongDiem'));
    }
}
