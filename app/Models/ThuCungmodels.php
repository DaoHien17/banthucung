<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThuCungmodels extends Model
{
    use HasFactory;
    protected $table = 'thucung';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    protected $fillable=['MaGiongThuCung', 'MaNCC', 'MaThuCung', 'TenThuCung', 'MoTa', 'Gia', 'SoLuong', 'AnhTieuDe', 'Anh1', 'Anh2', 'Anh3', 'Anh4'];

}


// app/Models/sale.php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
class Category extends Model
{
    protected $table = 'giaban';

    public function thucung()
    {
        return $this->hasMany(ThuCungmodels::class);
    }
}
