<?php

namespace App\Http\Controllers;
use App\Models\loaiTCmodels;
use Illuminate\Http\Request;

class LoaiThuCungController extends Controller
{
    public function index(){
        $db=loaiTCmodels::all();
        return view('admin.loaithucung.index',['db'=>$db]);
    }

    public function create(){
        return view('admin.loaithucung.create');
    }
    public function store(Request $request){
        loaiTCmodels::create($request->all());
        return redirect()->route('admin.loaithucung.index');
    }

    // public function show(string $id){
    //     $db=loaiTCmodels::find($id);
    //     return $db;
    // }

    public function show(string $id)
{
    // $db =loaiTCmodels::findOrFail($id); // lấy dữ liệu theo id
    $db = loaiTCmodels::where('MaLoaiThuCung', $id)->first();
 
    return view('admin.loaithucung.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}

    public function edit(string $id=''){
        // $db=loaiTCmodels::find($id);
        $db = loaiTCmodels::where('MaLoaiThuCung', $id)->first();
        return view('admin.loaithucung.update',['db'=>$db]);
    }


    // public function update(Request $request,string $id){
    //     loaiTCmodels::find($id)->update([
    //     'Tenloai'=>$request->Tenloai,
    //     ]);
    //     return redirect()->route('admin.loaiTC.index');
    // }

    public function update(Request $request, string $id)
    {
        loaiTCmodels::where('MaLoaiThuCung', $id)->update([
            'TenLoaiThuCung' => $request->input('TenLoaiThuCung'),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.loaithucung.index');
    }


    public function destroy(string $id){
        // loaiTCmodels::find($id)->delete();
        loaiTCmodels::where('MaLoaiThuCung', $id)->delete();
        return redirect()->route('admin.loaithucung.index');
    }

}
