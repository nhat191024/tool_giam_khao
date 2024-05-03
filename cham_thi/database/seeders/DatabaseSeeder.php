<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\cuoc_thi;
use App\Models\danh_sach_giam_khao;
use App\Models\doi_thi;
use Illuminate\Database\Seeder;
use App\Models\icons;
use App\Models\nguoi_dung;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        nguoi_dung::create([
            'ho_ten' => 'admin',
            'tai_khoan' => 'admin',
            'mat_khau' => bcrypt('admin'),
            'hinh_anh' => 'admin.jpg',
            'quyen' => 1,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'thanhvc',
            'tai_khoan' => 'thanhvc',
            'mat_khau' => bcrypt('thanhvc'),
            'hinh_anh' => 'thanhvc.jpg',
            'quyen' => 2,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'anhptv',
            'tai_khoan' => 'anhptv',
            'mat_khau' => bcrypt('anhptv'),
            'hinh_anh' => 'anhptv.jpg',
            'quyen' => 2,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'anhpt',
            'tai_khoan' => 'anhpt',
            'mat_khau' => bcrypt('anhpt'),
            'hinh_anh' => 'anhpt.jpg',
            'quyen' => 2,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'thanghq',
            'tai_khoan' => 'thanghq',
            'mat_khau' => bcrypt('thanghq'),
            'hinh_anh' => 'thanghq.jpg',
            'quyen' => 2,
        ]);

        icons::create([
            'hinh_anh' => 'tim.png',
            'diem' => 50,
        ]);

        icons::create([
            'hinh_anh' => 'thuong_thuong.png',
            'diem' => 40,
        ]);

        icons::create([
            'hinh_anh' => 'ha_ha.png',
            'diem' => 20,
        ]);

        icons::create([
            'hinh_anh' => 'wow.png',
            'diem' => 30,
        ]);

        icons::create([
            'hinh_anh' => 'like.png',
            'diem' => 10,
        ]);

        cuoc_thi::create([
            'ten_cuoc_thi' => 'Sơ kết kỳ Spring 2024',
            'ngay_bat_dau' => Carbon::parse('2024-05-17')
        ]);

        doi_thi::create([
            'ten_doi' => 'Công nghệ thông tin',
            'hinh_anh' => 'cntt.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Thiết kế đồ họa',
            'hinh_anh' => 'tkdh.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Tiếng anh',
            'hinh_anh' => 'ta.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Marketing',
            'hinh_anh' => 'mkt.jpg',
            'id_cuoc_thi' => 1
        ]);

        danh_sach_giam_khao::create([
            'id_giam_khao' => 1,
            'id_cuoc_thi' => 1,
        ]);

        danh_sach_giam_khao::create([
            'id_giam_khao' => 2,
            'id_cuoc_thi' => 1,
        ]);

        danh_sach_giam_khao::create([
            'id_giam_khao' => 3,
            'id_cuoc_thi' => 1,
        ]);

        danh_sach_giam_khao::create([
            'id_giam_khao' => 4,
            'id_cuoc_thi' => 1,
        ]);
    }
}
