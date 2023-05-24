@extends('layout')
@section('content')



<section class="categories">
    <div class="container">


    </div>
</section>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Kết Quả Tìm Kiếm</h2>
                </div>
<div class="col-lg-9 d-flex" >
                @foreach ($search_thucung as $key=>$ThuCung)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ $ThuCung->AnhTieuDe }}">
                            <ul class="product__item__pic__hover">
                                <li><a > <i  class="fa fa-heart"></i></a></li>

                                <li><a href=" "class="fa fa-retweet"> </a></li>
                                <li>
                                    <a href=" "><i class="fa fa-shopping-cart"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="product__item__text">
                            <h6><a href="/details/{{ $ThuCung->MaGiongThuCung }}">{{$ThuCung->TenThuCung }}</a></h6>
                            <h5><a href="">{{ number_format($ThuCung->Gia) }}</h5>
                        </div>
                    </div>
                </div>
            @endforeach


            </div>
        </div>
    </div>
    </div>
</section>
<!-- Featured Section End -->

<!-- Banner Begin -->



@endsection
