<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiongThuCungmodels extends Model
{
    protected $table = "hoadonban";

    protected $fillable=['Id', 'DiaChi', 'MaKhachHang', 'TongTien','TrangThai' ];
}
