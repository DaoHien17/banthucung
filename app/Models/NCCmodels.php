<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NCCmodels extends Model
{
    use HasFactory;
    protected $table = "NhaCungCap";

    protected $fillable=['MaNCC', 'TenNCC', 'DiaChi', 'SDT', 'Email'];

}
