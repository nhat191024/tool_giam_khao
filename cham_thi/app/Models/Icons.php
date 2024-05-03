<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class icons extends Model
{
    protected $table = 'icons';
    protected $fillable = [
            'diem',
            'hinh_anh',
    ];
}
