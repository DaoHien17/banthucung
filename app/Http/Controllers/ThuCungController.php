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
        $index=1;
        return view('admin.thucung.index',['sp'=>$sp, 'index'=>$index]);
    }

    public function create(){
        $db=GiongThuCungmodels::all();
        $sp = ThuCungmodels::all();
        $ncc = NCCmodels::all();
        $loai = loaiTCmodels::all();
        // dd($ncc);
         return view('admin.thucung.create', ['db'=>$db,'sp'=>$sp, 'ncc'=>$ncc,'loai'=>$loai]);
    }
    public function store(Request $request){
        ThuCungmodels::create([
            'MaGiongThuCung' => $request->MaGiongThuCung,
            'MaNCC' => $request->MaNCC,
            'TenThuCung' =>$request->TenThuCung,
            'MoTa' => $request->MoTa,
            'Gia' => $request->Gia,
            'SoLuong' => $request->SoLuong,
            'AnhTieuDe' => $request->AnhTieuDe,
            'Anh1' => $request->Anh1,
            'Anh2' => $request->Anh2,
            'Anh3' => $request->Anh3,
            'Anh4' => $request->Anh4,
            'MaLoaiThuCung' => $request->LoaiTC
        ]);
        return redirect()->route('admin.thucung.index');
    }

    public function edit( $id) {

        $db = loaiTCmodels::pluck('TenLoaiThuCung','MaLoaiThuCung');
        $giong = GiongThuCungmodels::pluck('TenGiongThucung','MaGiongThuCung');
        $ncc = NCCmodels::pluck('TenNCC','MaNCC');
        $sp = DB::table('thucung')
        ->join('NhaCungCap', 'thucung.MaNCC', '=', 'NhaCungCap.MaNCC' )
        ->join('GiongThuCung', 'thucung.MaGiongThuCung', '=', 'GiongThuCung.MaGiongThuCung' )
        ->join('loaithucung', 'thucung.MaLoaiThuCung', '=', 'thucung.MaLoaiThuCung' )
        ->select('thucung.*', 'NhaCungCap.*', 'GiongThuCung.*','loaithucung.*')
        ->where('thucung.MaThuCung',$id)
        ->first();


        return view('admin.thucung.update', ['db' => $db, 'sp' => $sp,'ncc'=>$ncc,'giong'=>$giong]);
    }


    public function update(Request $request, string $id) {

        ThuCungmodels::where('MaThuCung', $id)->update([
            'MaGiongThuCung' => $request->MaGiongThuCung,
            'MaNCC' => $request->MaNCC,
            'TenThuCung' =>$request->TenThuCung,
            'MoTa' => $request->MoTa,
            'Gia' => $request->Gia,
            'SoLuong' => $request->SoLuong,
            'AnhTieuDe' => $request->AnhTieuDe,
            'Anh1' => $request->Anh1,
            'Anh2' => $request->Anh2,
            'Anh3' => $request->Anh3,
            'Anh4' => $request->Anh4,
            'MaLoaiThuCung' => $request->LoaiTC
        ]);

        return redirect()->route('admin.thucung.index');
    }


    public function show(string $id) {
        $sp = ThuCungmodels::where('MaThuCung', $id)->first();
        return view('admin.thucung.read', ['db' => $sp]);
    }


    public function destroy(string $id) {
        ThuCungmodels::where('MaThuCung', $id)->delete();
        return redirect()->route('admin.thucung.index');
    }

}
