@extends('layout')
@section('content')
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/assets/Content/img/categories/cat-1.jpg">
                            <h5><a href="/Home/Grid">Phốc Sóc</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/assets/Content/img/categories/cat-2.jpg">
                            <h5><a href="/Home/Grid">Bull Pháp</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="./assets/Content/img/categories/cat-3.jpg">
                            <h5><a href="/Home/Grid">Poodle</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/assets/Content/img/categories/cat-4.jpg">
                            <h5><a href="/Home/Grid">Shiba</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="/assets/Content/img/categories/cat-5.jpg">
                            <h5><a href="/Home/Grid">Alaska</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2 style="font-size: 45px;">Nổi Bật</h2>
                    </div>
                    {{-- <div class="featured__controls">
                    <ul>
                        <li class="active" data-filter="*">TẤT CẢ</li>
                        <li data-filter=".oranges">CHÓ</li>
                        <li data-filter=".fresh-meat">MÈO</li>
                        <li data-filter=".vegetables">CHIM</li>
                        <li data-filter=".fastfood">CÁ</li>
                    </ul>
                </div> --}}

                </div>
            </div>
            <div class="row">
                @foreach ($loaithucung as $ca)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="product__item">
                            <div class="product__item__pic set-bg" data-setbg="{{ $ca->AnhTieuDe }}">
                                <ul class="product__item__pic__hover">
                                    <li>
                                        <a class="fa fa-heart"></a>
                                    </li>

                                    <li>
                                        <a class="fa fa-retweet"></a>
                                    </li>
                                    <li>
                                        <a  class="fa fa-shopping-cart"></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6><a href="/details/{{ $ca->MaThuCung }}">{{ $ca->TenThuCung }}</a></h6>
                                <h5><a href="">{{ number_format($ca->Gia) }}</a> VNĐ</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/assets/Content/img/banner/banner-1.jpg" alt="">

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="/assets/Content/img/banner/banner-2.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
