<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class diem extends Model
{
    protected $table = 'diem';

    protected $fillable = ['id_doi_thi', 'id_icon', 'id_giam_khao'];

    public function getDiem()
    {
        $result = $this->countIcon();
        return $result;
    }

    public function getDiemByIdDoi($id)
    {
        $result = $this->countIconOneTeam($id);
        return $result;
    }

    public function getAllDiemByIdDoi($id)
    {
        $result = $this->countAllIconOneTeam($id);
        return $result;
    }

    public function tongTim($id)
    {
        $result = $this->countAllScoreByDoiThi($id);
        return $result;
    }

    public function tongDiemToanDoi()
    {
        $result = $this->countAllScore();
        return $result;
    }

    public function tenDoi($id)
    {
        $result = doi_thi::where('id', $id)->first();
        return $result;
    }

    private function countIcon()
    {
        $idGiamKhao = Auth::user()->id;

        $result = DB::select('SELECT d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten,
            COUNT(IF(d.id_icon = 1, 1, NULL)) as sotim,
            COUNT(IF(d.id_icon = 2, 1, NULL)) as sothuong,
            COUNT(IF(d.id_icon = 3, 1, NULL)) as sohaha,
            COUNT(IF(d.id_icon = 4, 1, NULL)) as sowow,
            COUNT(IF(d.id_icon = 5, 1, NULL)) as solike,
            (
                COUNT(IF(d.id_icon = 1, 1, NULL)) * 100 +
                COUNT(IF(d.id_icon = 2, 1, NULL)) * 70 +
                COUNT(IF(d.id_icon = 3, 1, NULL)) * -30 +
                COUNT(IF(d.id_icon = 4, 1, NULL)) * 30 +
                COUNT(IF(d.id_icon = 5, 1, NULL)) * 50
            ) as tongso
            FROM `doi_thi` dt
            LEFT JOIN `diem` d ON d.id_doi_thi = dt.id AND d.id_giam_khao = ?
            LEFT JOIN `nguoi_dung` nd ON nd.id = d.id_giam_khao
            GROUP BY d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten;
        ', [$idGiamKhao]);
        return $result;
    }

    private function countIconOneTeam($id)
    {
        $idGiamKhao = Auth::user()->id;
        $result = DB::select('SELECT nd.id, dt.id, dt.ten_doi, nd.ho_ten,
        COUNT(IF(d.id_icon = 1, 1, NULL)) as sotim,
        COUNT(IF(d.id_icon = 2, 1, NULL)) as sothuong,
        COUNT(IF(d.id_icon = 3, 1, NULL)) as sohaha,
        COUNT(IF(d.id_icon = 4, 1, NULL)) as sowow,
        COUNT(IF(d.id_icon = 5, 1, NULL)) as solike,
        (
            COUNT(IF(d.id_icon = 1, 1, NULL)) * 100 +
            COUNT(IF(d.id_icon = 2, 1, NULL)) * 70 +
            COUNT(IF(d.id_icon = 3, 1, NULL)) * -30 +
            COUNT(IF(d.id_icon = 4, 1, NULL)) * 30 +
            COUNT(IF(d.id_icon = 5, 1, NULL)) * 50
        ) as tongso
        FROM `doi_thi` dt
        LEFT JOIN `diem` d ON d.id_doi_thi = dt.id AND d.id_giam_khao = ?
        LEFT JOIN `nguoi_dung` nd ON d.id_giam_khao = nd.id
        WHERE dt.id = ?
        GROUP BY nd.id, dt.id, dt.ten_doi, nd.ho_ten;
        ', [$idGiamKhao, $id]);
        return $result[0] ?? null;
    }

    private function countAllIconOneTeam($id)
    {
        $result = DB::select('SELECT nd.id as gk_id, dt.id, dt.ten_doi, nd.ho_ten,
        COUNT(IF(d.id_icon = 1, 1, NULL)) as sotim,
        COUNT(IF(d.id_icon = 2, 1, NULL)) as sothuong,
        COUNT(IF(d.id_icon = 3, 1, NULL)) as sohaha,
        COUNT(IF(d.id_icon = 4, 1, NULL)) as sowow,
        COUNT(IF(d.id_icon = 5, 1, NULL)) as solike,
        (
            COUNT(IF(d.id_icon = 1, 1, NULL)) * 100 +
            COUNT(IF(d.id_icon = 2, 1, NULL)) * 70 +
            COUNT(IF(d.id_icon = 3, 1, NULL)) * -30 +
            COUNT(IF(d.id_icon = 4, 1, NULL)) * 30 +
            COUNT(IF(d.id_icon = 5, 1, NULL)) * 50
        ) as tongso
        FROM `doi_thi` dt
        LEFT JOIN `diem` d ON d.id_doi_thi = dt.id
        LEFT JOIN `nguoi_dung` nd ON d.id_giam_khao = nd.id
        WHERE dt.id = ?
        GROUP BY nd.id, dt.id, dt.ten_doi, nd.ho_ten;
        ', [$id]);
        return $result;
    }

    private function countAllScoreByDoiThi($id)
    {
        $result = DB::select('SELECT COUNT(IF(d.id_icon = 1, 1, NULL)) as sotim,
            COUNT(IF(d.id_icon = 2, 1, NULL)) as sothuong,
            COUNT(IF(d.id_icon = 3, 1, NULL)) as sohaha,
            COUNT(IF(d.id_icon = 4, 1, NULL)) as sowow,
            COUNT(IF(d.id_icon = 5, 1, NULL)) as solike,
            (
                COUNT(IF(d.id_icon = 1, 1, NULL)) * 50 +
                COUNT(IF(d.id_icon = 2, 1, NULL)) * 45 +
                COUNT(IF(d.id_icon = 3, 1, NULL)) * 40 +
                COUNT(IF(d.id_icon = 4, 1, NULL)) * 35 +
                COUNT(IF(d.id_icon = 5, 1, NULL)) * 30
            ) as tongso FROM `diem` d WHERE d.id_doi_thi = ?
        ', [$id]);

        return $result[0];
    }

    private function countAllScore()
    {
        $result = DB::select('SELECT dt.ten_doi, dt.hinh_anh, COUNT(IF(d.id_icon = 1, 1, NULL)) as sotim,
        COUNT(IF(d.id_icon = 2, 1, NULL)) as sothuong,
        COUNT(IF(d.id_icon = 3, 1, NULL)) as sohaha,
        COUNT(IF(d.id_icon = 4, 1, NULL)) as sowow,
        COUNT(IF(d.id_icon = 5, 1, NULL)) as solike,
        (
            COUNT(IF(d.id_icon = 1, 1, NULL)) * 100 +
            COUNT(IF(d.id_icon = 2, 1, NULL)) * 70 +
            COUNT(IF(d.id_icon = 3, 1, NULL)) * -30 +
            COUNT(IF(d.id_icon = 4, 1, NULL)) * 30 +
            COUNT(IF(d.id_icon = 5, 1, NULL)) * 50
        ) as tongso from doi_thi dt left JOIN diem d on dt.id = d.id_doi_thi
        GROUP BY dt.ten_doi, dt.hinh_anh
        ');

        return $result;
    }
}
