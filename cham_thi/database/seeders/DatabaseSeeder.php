<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\icons;
use App\Models\nguoi_dung;

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
    }
}
