<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiongThuCungmodels extends Model
{
    protected $table = "chitiethdban";

    protected $fillable=['Id', 'MaHoaDonBan', 'MaThuCung', 'DonGia'];
}
