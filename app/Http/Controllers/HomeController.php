<?php

namespace App\Http\Controllers;

use App\Models\GiongThuCungmodels;
use App\Models\loaiTCmodels;
use App\Models\ThuCungmodels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $loaithucung = ThuCungmodels::get();
        return view('index' ,  compact('loaithucung'));
    }

    public function grid(){
        $loaiTC =  loaiTCmodels::all();
        $sps = ThuCungmodels::limit(6)->get();
        $acp = GiongThuCungmodels::limit(6)->get();
        return view('grid',['ThuCung' => $sps,'loaiTC' => $loaiTC]);
    }

    public function category(){
        return view('category');
    }


    // public function details(){
    //     $loaiTC =  loaiTCmodels::all();z
    //     $sps = ThuCungmodels::limit(6)->get();
    //     return view('details',['ThuCung' => $sps,'loaiTC' => $loaiTC]);
    // }
    public function details($id = null){
        $loaiTC = loaiTCmodels::all();
        $sps =    ThuCungmodels::where('MaThuCung','=',$id)->get();

        return view('details',['ThuCung' =>  $sps , 'loaiTC' => $loaiTC]);
    }
    public function LoaiTC(){
        $loaiTC =  loaiTCmodels::all();
        $sps =  ThuCungmodels::With('MaGiongThuCung')->get();
        return view('index',['ThuCung' =>  $sps , 'loaiTC' => $loaiTC]);
    }

    public function categoryType($id){
        $loaithucung = ThuCungmodels::where('MaLoaiThuCung',$id)->get();


            $giongthus = GiongThuCungmodels::where('MaLoaiThuCung',$id)->get();




        return view('dogs', compact('loaithucung','giongthus'));
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function login(){
        return view('login');
    }
    public function contact(){
        return view('contact');
    }
    public function blog(){
        return view('blog');
    }
    public function page(){
        return view('page');
    }
    public function about(){
        return view('about');
    }
    public function register(){
        return view('register');
    }

    public function TimKiem(Request $request){
        $keywords = $request->keywords_submit;

        $search_thucung = DB::table('thucung')->where('TenThuCung','like','%'.$keywords.'%')->get();

        return view('search')->with('search_thucung', $search_thucung);
    }
}
