<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class nguoi_dung extends Authenticatable
{
    use HasApiTokens, Notifiable;
    protected $table = 'nguoi_dung';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'ho_ten',
        'tai_khoan',
        'mat_khau',
        'hinh_anh',
        'quyen',
    ];


}
