<?php

namespace App\Http\Controllers;

use App\Models\KhachHangmodels;
use App\Models\HoaDonBanmodels;
use App\Models\ChiTietHoaDonBanmodels;
use Illuminate\Http\Request;
use App\Models\ThuCungmodels;

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
        session()->flash('success', 'Sản Phẩm Đã Thêm Vào Giỏ Hàng!');

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

        session()->flash('success', 'Giỏ hàng được cập nhật thành công!');

        return redirect()->route('cart.list');
    }

    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Giỏ hàng xóa thành công!');

        return redirect()->route('cart.list');
    }

    public function clearAllCart()
    {
        \Cart::clear();

        session()->flash('success', 'Xóa tất cả các mặt hàng trong giỏ hàng thành công!');

        return redirect()->route('cart.list');
    }

    public function checkoutget()
    {
        $cartItems = \Cart::getContent();

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
        $loaithucung = ThuCungmodels::get();


        return view('index' ,  compact('loaithucung'));
        // return redirect()->route('cart.list');
    }
}
