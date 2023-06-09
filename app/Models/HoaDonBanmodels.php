<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HoaDonBanmodels extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'hoadonban';
    protected $fillable = [
        'MaKhachHang',
        'TrangThai',
        'TongTien',
        'DiaChi'
    ];
}
