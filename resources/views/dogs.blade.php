@extends('layout')
@section('content')
    <!-- Hero Section Begin -->



    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="https://firebasestorage.googleapis.com/v0/b/doan-450e2.appspot.com/o/breadcrumb.jpg?alt=media&token=e89b2610-ca2e-4c38-b878-6725e5e5b680">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2 style="color: red">Cats Love Shop</h2>
                    <div class="breadcrumb__option">
                        <a style="color: red" href="/Home/Index">Trang Chủ</a>
                        {{-- @{try
                            {
                                if (Model.ToList()[0].LoaiThuCung == 10)
                                {
                                    <span style="color: red"> Chó </span>
                                }
                                else if (Model.ToList()[0].LoaiThuCung == 11)
                                {
                                    <span style="color: red"> Mèo </span>
                                }
                                else if (Model.ToList()[0].LoaiThuCung == 12)
                                {
                                    <span style="color: red"> Chim </span>
                                }
                                else if (Model.ToList()[0].LoaiThuCung == 13)
                                {
                                    <span style="color: red"> Cá </span>
                                }
                            }
                            catch { }
                        } --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>Danh Mục</h4>
                            <ul>
                                @foreach ($giongthus as $loaiTCmodels)
                                {{-- {{ $loaiTCmodels }} --}}
                                     <li><a href="{{route('dogs',['id'=>$loaiTCmodels->MaLoaiThuCung])}}">{{$loaiTCmodels->TenGiongThuCung }}</a></li>
                                @endforeach
                            </ul>

                        </div>

                    </div>
                </div>
                <div class="col-lg-9 col-md-7">


                    <div class="row">
                        @foreach ($loaithucung as $ca)
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="{{ $ca->AnhTieuDe }}">
                                        <ul class="product__item__pic__hover">
                                            <li><a> <i  class="fa fa-heart"></i></a></li>

                                            <li><a href=" "class="fa fa-retweet"> </a></li>
                                            <li>
                                                <a href=" "><i class="fa fa-shopping-cart"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="/details/{{ $ca->MaThuCung }}">{{ $ca->TenThuCung }}</a></h6>
                                        <h5><a href="">{{ number_format($ca->Gia) }} VND</h5>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <div class="product__pagination">
                        <a href="#">1</a>
                        <a href="#">2</a>
                        <a href="#">3</a>
                        <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Section End -->
@endsection
