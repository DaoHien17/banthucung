<?php

namespace App\Http\Controllers;

use App\Models\loaiTCmodels;
use App\Models\ThuCungmodels;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function grid(){
        $loaiTC =  loaiTCmodels::all();
        $sps = ThuCungmodels::limit(6)->get();
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
        $sps =    ThuCungmodels::where('MaGiongThuCung','=',$id)->get();
        return view('details',['ThuCung' =>  $sps , 'loaiTC' => $loaiTC]);
    }
    public function LoaiTC(){
        $loaiTC =  loaiTCmodels::all();
        $sps =  ThuCungmodels::With('category')->get();
        return view('loaiTC',['ThuCung' =>  $sps , 'loaiTC' => $loaiTC]);
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
}
