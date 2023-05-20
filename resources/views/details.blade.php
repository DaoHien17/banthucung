@extends('layout')
@section('content')
    <section class="breadcrumb-section set-bg"
        data-setbg="https://firebasestorage.googleapis.com/v0/b/doan-450e2.appspot.com/o/breadcrumb.jpg?alt=media&token=e89b2610-ca2e-4c38-b878-6725e5e5b680">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2 style="color: red">Cats Love Shop</h2>
                        <div class="breadcrumb__option">
                            <a style="color: red" href="/Home/Index">Trang Chủ</a>
                            <a style="color: red" href="/Home/Index">Chi Tiết</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    < <!-- Product Details Section Begin -->
        <section class="product-details spad">
            <div class="container">

                <div class="row">
                    @foreach ($ThuCung as $ca)
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__pic">
                                <div class="product__details__pic__item">
                                    <img class="product__details__pic__item--large" src="{{ $ca->AnhTieuDe }}"
                                        alt="">
                                </div>
                                <div class="product__details__pic__slider owl-carousel">
                                    <img data-imgbigurl="{{ $ca->Anh1 }}" src="{{ $ca->Anh1 }}" alt="">
                                    <img data-imgbigurl="{{ $ca->Anh2 }}" src="{{ $ca->Anh2 }}" alt="">
                                    <img data-imgbigurl="{{ $ca->Anh3 }}" src="{{ $ca->Anh3 }}" alt="">
                                    <img data-imgbigurl="{{ $ca->Anh4 }}" src="{{ $ca->Anh4 }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="product__details__text">
                                <h3>{{ $ca->TenThuCung }}</h3>
                                <div class="product__details__rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                    <span>(18 reviews)</span>
                                </div>
                                <div class="product__details__price">{{ $ca->Gia }}</div>
                                <p>{{ $ca->MoTa }}</p>
                                <div class="product__details__quantity">
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="text" value="1">
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('cart.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" value="{{ $ca->MaThuCung }}" name="id">
                                    <input type="hidden" value="{{ $ca->TenThuCung }}" name="name">
                                    <input type="hidden" value="{{ $ca->Gia }}" name="price">
                                    <input type="hidden" value="{{ $ca->Anh1 }}" name="image">
                                    <input type="hidden" value="1" name="quantity">
                                    <button href="#" class="primary-btn">Thêm Vào Giỏ Hàng</button>
                                </form>

                                <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                <ul>
                                    <li><b>Tình Trạng</b> <span>Còn</span></li>
                                    <li><b>Thời Gian Nhận hàng</b> <span>1 ngày. <samp>Miễn Phí Giao Hàng</samp></span></li>
                                    <li><b>Trọng Lượng</b> <span>0.5 kg</span></li>
                                    <li>
                                        <b>Share on</b>
                                        <div class="share">
                                            <a href="#"><i class="fa fa-facebook"></i></a>
                                            <a href="#"><i class="fa fa-twitter"></i></a>
                                            <a href="#"><i class="fa fa-instagram"></i></a>
                                            <a href="#"><i class="fa fa-pinterest"></i></a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                </div>
                @endforeach
            </div>

            </div>
        </section>


        <script>
            function addCart() {

                alert('Thêm giỏ hàng thành công')
            }
        </script>
        <!-- Product Details Section End -->
    @endsection
