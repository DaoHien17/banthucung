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
    $db = GiongThuCungmodels::where('MaGiongThuCung', $id)->first();
    // dd($db);
    return view('admin.GiongThuCung.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}

    public function edit($id){
        // $db=loaiTCmodels::find($id);
        $db = GiongThuCungmodels::where('MaGiongThuCung', $id)->first();
        $ltc = loaiTCmodels::pluck('TenLoaiThuCung','MaLoaiThucung');
        return view('admin.giongthucung.update',['db'=>$db,'ltc'=>$ltc]);
    }


    // public function update(Request $request,string $id){
    //     loaiTCmodels::find($id)->update([
    //     'Tenloai'=>$request->Tenloai,
    //     ]);
    //     return redirect()->route('admin.loaiTC.index');
    // }

    public function update(Request $request, string $id)
    {

        GiongThuCungmodels::where('MaGiongThuCung', $id)->update([
            'MaLoaiThuCung' => $request->MaLoaiThuCung,
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
