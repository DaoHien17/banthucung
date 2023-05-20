<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NhanVienmodels extends Model
{
    use HasFactory;
    protected $table = "nhanvien";

    protected $fillable=['MaNhanVien', 'TenNhanVien', 'SDT', 'DiaChi'];

}
