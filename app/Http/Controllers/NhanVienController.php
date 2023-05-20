<?php

namespace App\Http\Controllers;
use App\Models\NhanVienmodels;
use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function index(){
        $db=NhanVienmodels::all();
        return view('admin.NhanVien.index',['db'=>$db]);
    }

    public function create(){
        return view('admin.NhanVien.create');
    }
    public function store(Request $request){
        NhanVienmodels::create($request->all());
        return redirect()->route('admin.NhanVien.index');
    }

    // public function show(string $id){
    //     $db=loaiTCmodels::find($id);
    //     return $db;
    // }

    public function show(string $id)
{
    // $db =loaiTCmodels::findOrFail($id); // lấy dữ liệu theo id
    $db = NhanVienmodels::where('MaNhanVien', $id)->first();
    return view('admin.NhanVien.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}

    public function edit(string $id=''){
        // $db=loaiTCmodels::find($id);
        $db = NhanVienmodels::where('MaNhanVien', $id)->first();
        return view('admin.NhanVien.update',['db'=>$db]);
    }



    public function update(Request $request, string $id)
    {
        NhanVienmodels::where('MaNhanVien', $id)->update([
            'TenNhanVien' => $request->input('TenNhanVien'),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.NhanVien.index');
    }


    public function destroy(string $id){
        // loaiTCmodels::find($id)->delete();
        NhanVienmodels::where('MaNhanVien', $id)->delete();
        return redirect()->route('admin.NhanVien.index');
    }

}
