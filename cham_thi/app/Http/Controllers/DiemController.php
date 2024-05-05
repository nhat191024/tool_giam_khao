<?php

namespace App\Http\Controllers;

use App\Models\diem;
use App\Models\doi_thi;
use Illuminate\Http\Request;

class DiemController extends Controller
{
    public $diemModel;
    function __construct()
    {
        $this->diemModel = new diem();
    }
    //
    public function addScreen()
    {
        $doiThi = doi_thi::all();
        $idFirst  = $doiThi->first()->id;
        // $diem = $this->diemModel->getDiem();
        $diem = $this->diemModel->getDiemByIdDoi($idFirst);
        return view('admin.feedback.screen', compact('doiThi', 'diem'));
    }
    //
    public function totalScreen()
    {
        $doiThi = doi_thi::all();
        $diem = $this->diemModel->getDiem();
        return view('admin.feedback.main', compact('doiThi', 'diem'));
    }

    public function addScore(Request $request)
    {
        $id = $request->icon_id;
        $doiThi = $request->doi_thi;
        if ($id == null) {
            $result = $this->diemModel->getDiemByIdDoi($doiThi);
            // Trả về response thành công
            return response()->json([
                'success' => true,
                'message' => 'Lấy dữ liệu thành công',
                'data' => $result
            ], 200);
        } else {
            $diem = diem::create([
                'id_icon' => $id,
                'id_doi_thi' => $doiThi,
                'id_giam_khao' => 1,
            ]);
            if ($diem) {
                $result = $this->diemModel->getDiemByIdDoi($doiThi);
                // Trả về response thành công
                return response()->json([
                    'success' => true,
                    'message' => 'Thêm điểm thành công!',
                    'data' => $result
                ], 200);
            } else {
                // Trả về response lỗi
                return response()->json([
                    'success' => false,
                    'message' => 'Có lỗi xảy ra khi thêm điểm.'
                ], 500);
            }
        }
    }
}
