<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHangmodels extends Model
{
    protected $primaryKey = 'MaKhachHang';
    use HasFactory;
    protected $table = 'khachhang';
    protected $fillable = [
        'TenKhachHang',
        'SĐT',
        'Email',
        'DiaChi'
    ];
}
