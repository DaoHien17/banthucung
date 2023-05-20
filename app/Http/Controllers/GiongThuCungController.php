<?php

namespace App\Http\Controllers;

use App\Models\GiongThuCungmodels;
use App\Models\loaiTCmodels;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class GiongThuCungController extends Controller
{

    public function index(){
        $db = DB::table('GiongThuCung')
        ->join('LoaiThuCung', 'GiongThuCung.MaLoaiThuCung', '=', 'LoaiThuCung.MaLoaiThuCung' )
        ->select('GiongThuCung.*', 'LoaiThuCung.*')
        ->get();
        // dd($db);
        return view('admin.giongthucung.index',['db'=>$db]);
    }

    public function create(){
        $loaitc = loaiTCmodels::all();
        return view('admin.giongthucung.create', compact('loaitc'));
    }
    public function store(Request $request){
        GiongThuCungmodels::create($request->all());
        return redirect()->route('admin.giongthucung.index');
    }

    // public function show(string $id){
    //     $db=loaiTCmodels::find($id);
    //     return $db;
    // }

    public function show(string $id)
{
    // $db =loaiTCmodels::findOrFail($id); // lấy dữ liệu theo id
    $db = GiongThuCungmodels::where('MaLoaiThuCung', $id)->first();
    return view('admin.giongthucung.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}

    public function edit(string $id=''){
        // $db=loaiTCmodels::find($id);
        $db = GiongThuCungmodels::where('MaLoaiThuCung', $id)->first();
        return view('admin.giongthucung.update',['db'=>$db]);
    }


    // public function update(Request $request,string $id){
    //     loaiTCmodels::find($id)->update([
    //     'Tenloai'=>$request->Tenloai,
    //     ]);
    //     return redirect()->route('admin.loaiTC.index');
    // }

    public function update(Request $request, string $id)
    {
        GiongThuCungmodels::where('MaLoaiThuCung', $id)->update([
            'TenLoaiThuCung' => $request->input('TenLoaiThuCung'),
            'TenGiongThuCung' => $request->input('TenGiongThuCung'),
            'GhiChu' => $request->input('GhiChu'),

            'updated_at' => now(),
        ]);

        return redirect()->route('admin.giongthucung.index');
    }


    public function destroy(string $id){
        // loaiTCmodels::find($id)->delete();
        GiongThuCungmodels::where('MaGiongThuCung', $id)->delete();
        return redirect()->route('admin.giongthucung.index');
    }

}
