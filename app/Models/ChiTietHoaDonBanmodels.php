<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChiTietHoaDonBanmodels extends Model
{
    protected $primaryKey = 'Id';
    use HasFactory;
    protected $table = 'chitiethdban';
    protected $fillable = [
        'MaHoaDonBan',
        'MaThuCung',
        'ThanhTien',
        'SoLuong'
    ];
}
