<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    private function countIcon()
    {
        $result = DB::select('SELECT d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten,
        COUNT(IF(d.id_icon = 1, 1, NULL)) as sotim,
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
        ) as tongso
        FROM `doi_thi` dt
        LEFT JOIN `diem` d ON d.id_doi_thi = dt.id
        LEFT JOIN `nguoi_dung` nd ON d.id_giam_khao = nd.id
        GROUP BY d.id_giam_khao, dt.id, dt.ten_doi, nd.ho_ten;
        ');
        return $result;
    }
}
