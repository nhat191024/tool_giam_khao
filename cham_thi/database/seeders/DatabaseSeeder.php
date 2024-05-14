<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\cuoc_thi;
use App\Models\danh_sach_giam_khao;
use App\Models\doi_thi;
use Illuminate\Database\Seeder;
use App\Models\Icons;
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
            'email' => 'admin',
            'password' => bcrypt('admin'),
            'hinh_anh' => 'admin.jpg',
            'quyen' => 1,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'thanhvc',
            'email' => 'thanhvc',
            'password' => bcrypt('thanhvc'),
            'hinh_anh' => 'thanhvc.jpg',
            'quyen' => 2,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'anhptv',
            'email' => 'anhptv',
            'password' => bcrypt('anhptv'),
            'hinh_anh' => 'anhptv.jpg',
            'quyen' => 2,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'anhpt',
            'email' => 'anhpt',
            'password' => bcrypt('anhpt'),
            'hinh_anh' => 'anhpt.jpg',
            'quyen' => 2,
        ]);

        nguoi_dung::create([
            'ho_ten' => 'thanghq',
            'email' => 'thanghq',
            'password' => bcrypt('thanghq'),
            'hinh_anh' => 'thanghq.jpg',
            'quyen' => 2,
        ]);

        Icons::create([
            'hinh_anh' => 'tim.png',
            'diem' => 50,
        ]);

        Icons::create([
            'hinh_anh' => 'thuong_thuong.png',
            'diem' => 40,
        ]);

        Icons::create([
            'hinh_anh' => 'ha_ha.png',
            'diem' => 20,
        ]);

        Icons::create([
            'hinh_anh' => 'wow.png',
            'diem' => 30,
        ]);

        Icons::create([
            'hinh_anh' => 'like.png',
            'diem' => 10,
        ]);

        cuoc_thi::create([
            'ten_cuoc_thi' => 'Sơ kết kỳ Spring 2024',
            'ngay_bat_dau' => Carbon::parse('2024-05-17')
        ]);

        doi_thi::create([
            'ten_doi' => 'Công nghệ thông tin',
            'hinh_anh' => 'avatar-doithi1.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Ban đào tạo',
            'hinh_anh' => 'bandaotao.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Bộ môn VHPT',
            'hinh_anh' => 'bomonvhpt.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Bộ môn cơ bản',
            'hinh_anh' => 'bomoncoban.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Liên minh Kinh tế - TKĐH',
            'hinh_anh' => 'lienminh.jpg',
            'id_cuoc_thi' => 1
        ]);

        doi_thi::create([
            'ten_doi' => 'Phòng đảm bảo',
            'hinh_anh' => 'phongdambao.jpg',
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
