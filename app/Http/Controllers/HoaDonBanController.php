<?php

namespace App\Http\Controllers;

use App\Models\ChiTietHoaDonBanmodels;
use App\Models\HoaDonBanmodels;
use App\Models\KhachHangmodels;
use App\Models\ThuCungmodels;
use Illuminate\Http\Request;

class HoaDonBanController extends Controller
{
    //
    public function index()
    {
        $hd = HoaDonBanmodels::all();
        return view('admin.HoaDonBan.index', ['hd' => $hd]);
    }

    public function show(string $id)
    {
        $hdb = HoaDonBanmodels::find($id);

        $thongtinkhachhang = KhachHangmodels::find($hdb->MaKhachHang);

        $laymasp = ChiTietHoaDonBanmodels::where('MaHoaDonBan','=',$id)->get();


        $danhsachtc = [];
        foreach ($laymasp as $value) {
            $sp = ThuCungmodels::join('ChiTiethdBan', 'thucung.mathucung', '=', 'ChiTiethdBan.mathucung')->where('ChiTiethdBan.mathucung','=',$value->MaThuCung)
                    ->where('ChiTiethdBan.MaHoaDonBan','=',$value->MaHoaDonBan)->first();

            $danhsachtc[] = $sp;
        }


        return view('admin.HoaDonBan.show', ['thongtinkhachhang' => $thongtinkhachhang,'danhsachtc'=>$danhsachtc,'cthdb'=>$laymasp,'hdb'=>$hdb]); //
    }

    public function update(Request $request, string $id)
    {
        HoaDonBanmodels::where('Id', $id)->update([
            'TenNhanVien' => $request->input('TenNhanVien'),
            'SDT' => $request->input('SDT'),
            'DiaChi' => $request->input('DiaChi'),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.HoaDonBan.index');
    }

    public function destroy(string $id)
    {

        HoaDonBanmodels::where('Id', $id)->delete();
        return redirect()->route('admin.HoaDonBan.index');
    }
}
