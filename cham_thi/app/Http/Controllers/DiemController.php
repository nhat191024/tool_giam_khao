<?php

namespace App\Http\Controllers;

use App\Events\Reacted;
use App\Models\diem;
use App\Models\doi_thi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Event;

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
        $idFirst = $doiThi->first()->id;
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

    public function resetScore(Request $request) {
        $id = $request->id;
        try {
            // Xóa điểm của giám khảo hiện tại
            Diem::where(['id_giam_khao' => Auth::user()->id, 'id_doi_thi' => $id])->delete();
    
            return response()->json([
                'status' => 'success',
                'message' => 'Điểm đã được reset thành công'
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Có lỗi xảy ra khi reset điểm: ' . $e->getMessage()
            ], 500);
        }
    }

    public function addScore(Request $request)
    {
        $idGiamKhao = Auth::user()->id;
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
                'id_giam_khao' => $idGiamKhao,
            ]);
            if ($diem) {
                $result = $this->diemModel->getDiemByIdDoi($doiThi);
                $tongTim = $this->diemModel->tongTim($doiThi);
                $diem = $this->diemModel->getAllDiemByIdDoi($doiThi);
                $tongDiem = $this->diemModel->tongDiemToanDoi();
                usort($tongDiem,function($first,$second){
                    return $first->tongso < $second->tongso;
                });
                $event = [
                    'tongTim' => $tongTim,
                    'diem' => $diem,
                    'id' => $result->id,
                    'idIcon' => $id,
                    'tongDiem' => $tongDiem
                ];

                Event::dispatch(new Reacted($event));
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

    public function resetAllScore() {
        return view('admin.feedback.reset_score');
    }

    public function confirmResetAllScore() {
        Diem::truncate();
        return redirect(route('diem.add_screen'));
    }
    
}
