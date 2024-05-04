<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doi_thi extends Model
{
    protected $table = 'doi_thi';

    protected $fillable = ['ten_doi', 'hinh_anh', 'id_cuoc_thi'];
}
