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
        IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) as sotim,
        IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) as sothuong,
        IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) as sohaha,
        IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) as sowow,
        IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) as solike,
        (
            IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) * 100 +
            IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) * 70 +
            IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) * -30 +
            IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) * 30 +
            IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) * 50
        ) as tongso
            FROM 
                `doi_thi` dt
            LEFT JOIN 
                `diem` d ON d.id_doi_thi = dt.id AND d.id_giam_khao = ?
            LEFT JOIN 
                `nguoi_dung` nd ON nd.id = d.id_giam_khao
            GROUP BY 
                d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten;
        ', [$idGiamKhao]);
        return $result;
    }

    private function countIconOneTeam($id)
    {
        $idGiamKhao = Auth::user()->id;

        $result = DB::select('SELECT d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten,
        IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) as sotim,
        IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) as sothuong,
        IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) as sohaha,
        IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) as sowow,
        IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) as solike,
        (
            IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) * 100 +
            IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) * 70 +
            IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) * -30 +
            IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) * 30 +
            IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) * 50
        ) as tongso
            FROM 
                `doi_thi` dt
            LEFT JOIN 
                `diem` d ON d.id_doi_thi = dt.id AND d.id_giam_khao = ?
            LEFT JOIN 
                `nguoi_dung` nd ON nd.id = d.id_giam_khao
                WHERE dt.id = ?
            GROUP BY 
                d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten;
        ', [$idGiamKhao, $id]);
        return $result[0] ?? null;
    }

    private function countAllIconOneTeam($id)
    {
        $result = DB::select(' SELECT 
        nd.id as gk_id, 
        dt.id, 
        dt.ten_doi, 
        nd.ho_ten,
        IFNULL(SUM(sotim), 0) as sotim,
        IFNULL(SUM(sothuong), 0) as sothuong,
        IFNULL(SUM(sohaha), 0) as sohaha,
        IFNULL(SUM(sowow), 0) as sowow,
        IFNULL(SUM(solike), 0) as solike,
        (
            IFNULL(SUM(sotim), 0) * 100 +
            IFNULL(SUM(sothuong), 0) * 70 +
            IFNULL(SUM(sohaha), 0) * -30 +
            IFNULL(SUM(sowow), 0) * 30 +
            IFNULL(SUM(solike), 0) * 50
        ) as tongso
        FROM 
            doi_thi dt
        LEFT JOIN (
            SELECT 
                id_doi_thi,
                id_giam_khao,
                IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) as sotim,
                IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) as sothuong,
                IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) as sohaha,
                IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) as sowow,
                IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) as solike
            FROM 
                diem d
            GROUP BY 
                id_doi_thi, id_giam_khao
        ) as diem_tinh ON dt.id = diem_tinh.id_doi_thi
        LEFT JOIN 
            nguoi_dung nd ON diem_tinh.id_giam_khao = nd.id
        WHERE 
            dt.id = ?
        GROUP BY 
            nd.id, dt.id, dt.ten_doi, nd.ho_ten
        ', [$id]);

        return $result;
    }

    private function countAllScoreByDoiThi($id)
    {
        $result = DB::select(' SELECT 
        IFNULL(SUM(sotim), 0) as sotim,
        IFNULL(SUM(sothuong), 0) as sothuong,
        IFNULL(SUM(sohaha), 0) as sohaha,
        IFNULL(SUM(sowow), 0) as sowow,
        IFNULL(SUM(solike), 0) as solike,
        (
            IFNULL(SUM(sotim), 0) * 100 +
            IFNULL(SUM(sothuong), 0) * 70 +
            IFNULL(SUM(sohaha), 0) * -30 +
            IFNULL(SUM(sowow), 0) * 30 +
            IFNULL(SUM(solike), 0) * 50
        ) as tongso
        FROM (
            SELECT 
                id_doi_thi,
                IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) as sotim,
                IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) as sothuong,
                IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) as sohaha,
                IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) as sowow,
                IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) as solike
            FROM 
                diem d
            WHERE 
                d.id_doi_thi = ?
            GROUP BY 
                d.id_doi_thi, d.id_giam_khao
        ) as diem_tinh
        ', [$id]);

        return $result[0];
    }

    private function countAllScore()
    {
        $result = DB::select('SELECT 
        dt.id, 
        dt.ten_doi, 
        dt.hinh_anh,
        IFNULL(SUM(sotim), 0) as sotim,
        IFNULL(SUM(sothuong), 0) as sothuong,
        IFNULL(SUM(sohaha), 0) as sohaha,
        IFNULL(SUM(sowow), 0) as sowow,
        IFNULL(SUM(solike), 0) as solike,
        (
            IFNULL(SUM(sotim), 0) * 100 +
            IFNULL(SUM(sothuong), 0) * 70 +
            IFNULL(SUM(sohaha), 0) * -30 +
            IFNULL(SUM(sowow), 0) * 30 +
            IFNULL(SUM(solike), 0) * 50
        ) as tongso
        FROM 
            doi_thi dt
        LEFT JOIN (
            SELECT 
                id_doi_thi,
                IF(COUNT(IF(d.id_icon = 1, 1, NULL)) > 0, 1, 0) as sotim,
                IF(COUNT(IF(d.id_icon = 2, 1, NULL)) > 0, 1, 0) as sothuong,
                IF(COUNT(IF(d.id_icon = 3, 1, NULL)) > 0, 1, 0) as sohaha,
                IF(COUNT(IF(d.id_icon = 4, 1, NULL)) > 0, 1, 0) as sowow,
                IF(COUNT(IF(d.id_icon = 5, 1, NULL)) > 0, 1, 0) as solike
            FROM 
                diem d
            GROUP BY 
                d.id_doi_thi, d.id_giam_khao
        ) as diem_tinh on dt.id = diem_tinh.id_doi_thi
    GROUP BY 
        dt.id, dt.ten_doi, dt.hinh_anh;
        ');

        return $result;
    }
}
