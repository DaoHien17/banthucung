<?php

namespace App\Http\Controllers;

use App\Models\KhachHangmodels;
use App\Models\HoaDonBanmodels;
use App\Models\ChiTietHoaDonBanmodels;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cartList()
    {
        $cartItems = \Cart::getContent();
        //dd($cartItems);
        return view('/cart', compact('cartItems'));
    }


    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');

        return redirect()->route('cart.list');
    }

    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );

        session()->flash('success', 'Item Cart is Updated Successfully !');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'All Item Cart Clear Successfully !');

        return redirect()->route('cart.list');
    }

    public function checkoutget()
    {
        $cartItems = \Cart::getContent();
        // dd($cartItems);
        return view('checkout', compact('cartItems'));
    }

    public function checkoutpost(Request $request)
    {
        $khachhang = new KhachHangmodels();
        $khachhang->TenKhachHang = $request->TenKhachHang;
        $khachhang->SĐT = $request->SĐT;
        $khachhang->Email = $request->Email;
        $khachhang->DiaChi = $request->DiaChi;
        $khachhang->save();
        $khachhangNewId = KhachHangmodels::latest()->first();


        $dh = new HoaDonBanmodels();
        $dh->MaKhachHang = $khachhangNewId->MaKhachHang;
        $dh->TrangThai = 1;
        $dh->TongTien =  \Cart::getTotal();
        $dh->DiaChi = $request->DiaChi;
        $dh->save();
        $HoaDonBanNewId = HoaDonBanmodels::latest()->first();


        $cartItems = \Cart::getContent();
        foreach($cartItems as $sp){
            $sp1 = new ChiTietHoaDonBanmodels();
            $sp1->MaHoaDonBan = $HoaDonBanNewId->Id;
            $sp1->MaThuCung = $sp->id;
            $sp1->ThanhTien = $sp->price;
            $sp1->SoLuong = $sp->quantity;
            $sp1->save();
        }
        \Cart::clear();

        session()->flash('success','Dat hang thanh cong !');
        return redirect()->route('cart.list');
    }
}
