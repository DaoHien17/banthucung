@extends('layouts.frontend')

@section('content')
<div class="container px-6 mx-auto">
    <h3 class="text-2xl font-medium text-gray-700">Thông Tin Thanh Toán</h3>
    <form action="{{route('cart.checkoutpost')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <header class="card-header">
                        <h4 class="card-title mt-2">Chi Tiết Đơn Hàng</h4>
                    </header>
                    <article class="card-body">
                        <div class="form-group">
                            <label>Tên Khách Hàng</label>
                            <input type="text" class="form-control" name="TenKhachHang">
                        </div>

                        <div class="form-group">
                            <label>Số Điện Thoại</label>
                            <input type="text" class="form-control" name="SĐT">
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="Email">
                        </div>

                        <div class="form-group">
                            <label>Địa Chỉ</label>
                            <input type="text" class="form-control" name="DiaChi">
                        </div>

                    </article>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <header class="card-header">
                                <h4 class="card-title mt-2">ĐƠN HÀNG CỦA BẠN</h4>
                            </header>
                            <article class="card-body">
                                <dl class="dlist-align">
                                    <dt>Tổng Tiền: </dt>
                                    <dd class="text-right h5 b"> {{ config('settings.currency_symbol') }}{{ number_format(\Cart::getSubTotal() )}} VNĐ </dd>
                                </dl>
                            </article>
                        </div>

                    </div>
                    <div class="col-md-12 mt-4">
                        <button type="submit" class="subscribe btn btn-success btn-lg btn-block">Đặt Hàng</button>
                    </div>
                </div>
            </div>
    </form>
</div>
@endsection
