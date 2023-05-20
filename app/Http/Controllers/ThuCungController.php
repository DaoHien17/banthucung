<?php

namespace App\Http\Controllers;

use App\Models\GiongThuCungmodels;
use App\Models\loaiTCmodels;
use App\Models\NCCmodels;
use App\Models\ThuCungmodels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ThuCungController extends Controller
{
    public function index(){
        // $sp=ThuCungmodels::all();
        $sp = DB::table('thucung')
        ->join('NhaCungCap', 'thucung.MaNCC', '=', 'NhaCungCap.MaNCC' )
        ->join('GiongThuCung', 'thucung.MaGiongThuCung', '=', 'GiongThuCung.MaGiongThuCung' )
        ->select('thucung.*', 'NhaCungCap.*', 'GiongThuCung.*')
        ->get();
        // dd($sp);
        return view('admin.thucung.index',['sp'=>$sp]);
    }

    public function create(){
        $db=GiongThuCungmodels::all();
        $sp = ThuCungmodels::all();
        $ncc = NCCmodels::all();
        // dd($ncc);
         return view('admin.thucung.create', ['db'=>$db,'sp'=>$sp, 'ncc'=>$ncc]);
    }
    public function store(Request $request){
        // loaiTCmodels::create($request->all());
        ThuCungmodels::create($request->all());
        return redirect()->route('admin.thucung.index');
    }

    public function edit(string $id=''){

        $db = loaiTCmodels::all();
        $sp = ThuCungmodels::where('thucung_id', $id)->first();
        return view('admin.thucung.update',['db'=>$db,'sp'=>$sp]);
    }



    public function update(Request $request, string $id)
    {
        ThuCungmodels::where('MaThuCung', $id)->update([

            // `MaGiongThuCung`, `MaNCC`, `MaThuCung`, `TenThuCung`, `MoTa`, `Gia`, `SoLuong`, `AnhTieuDe`, `Anh1`, `Anh2`, `Anh3`, `Anh4`
            'MaGiongThuCung'=> $request->input('MaGiongThuCung'),
            'MaNCC'=> $request->input('MaNCC'),
            'Anh'=> $request->input('Anh'),
            'Soluong'=> $request->input('Soluong'),
            'Gia'=> $request->input('Gia'),
            'Maluc'=> $request->input('Maluc'),
            'PhanKhuc'=> $request->input('PhanKhuc'),
            'VongTuaMay'=> $request->input('VongTuaMay'),
            'MoMenXoan'=> $request->input('MoMenXoan'),
            'Giakhuyenmai'=> $request->input('Giakhuyenmai'),
            'Viewcount'=> $request->input('Viewcount'),
            'ReducePrice'=> $request->input('ReducePrice'),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.thucung.index');
    }

    public function show(string $id)
    {
        // $db =loaiTCmodels::findOrFail($id); // lấy dữ liệu theo id
        $sp = ThuCungmodels::where('thucung_id', $id)->first();
        return view('admin.thucung.read', ['sp'=>$sp]); // trả về view và truyền biến $data vào
    }

    public function destroy(string $id){
        // loaiTCmodels::find($id)->delete();
        ThuCungmodels::where('thucung_id', $id)->delete();
        return redirect()->route('admin.thucung.index');
    }
}
