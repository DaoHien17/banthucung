<?php

namespace App\Http\Controllers;
use App\Models\NCCmodels;
use Illuminate\Http\Request;

class NCCController extends Controller
{
    public function index(){
        $db=NCCmodels::all();
        return view('admin.NCC.index',['db'=>$db]);
    }

    public function create(){
        return view('admin.NCC.create');
    }
    public function store(Request $request){
        NCCmodels::create($request->all());
        return redirect()->route('admin.NCC.index');
    }

    // public function show(string $id){
    //     $db=loaiTCmodels::find($id);
    //     return $db;
    // }

    public function show(string $id)
{
    // $db =loaiTCmodels::findOrFail($id); // lấy dữ liệu theo id
    $db = NCCmodels::where('MaNCC', $id)->first();
    return view('admin.NCC.read', ['db'=>$db]); // trả về view và truyền biến $data vào
}

    public function edit(string $id=''){
        // $db=loaiTCmodels::find($id);
        $db = NCCmodels::where('MaNCC', $id)->first();
        return view('admin.NCC.update',['db'=>$db]);
    }



    public function update(Request $request, string $id)
    {
        NCCmodels::where('MaNCC', $id)->update([
            'TenNCC' => $request->input('TenNCC'),
            'SDT' => $request->input('SDT'),
            'DiaChi' => $request->input('DiaChi'),
            'Email' => $request->input('Email'),
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.NCC.index');
    }


    public function destroy(string $id){
        // loaiTCmodels::find($id)->delete();
        NCCmodels::where('MaNCC', $id)->delete();
        return redirect()->route('admin.NCC.index');
    }

}
