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
        <div class="row ">
            <div class="col-lg-12 justify-content-md-center">
                <div class="section-title">
                    <h2>Kết Quả Tìm Kiếm</h2>
                </div>
                <div class="col-lg-12 d-flex flex-wrap" >
                    @foreach ($search_thucung as $key=>$ThuCung)
                    <div class="col-lg-2 col-md-6 col-sm-6">
                            <div class="product__item__pic set-bg" data-setbg="{{ $ThuCung->AnhTieuDe }}">
                            </div>
                            <div class="product__item__text">
                                <h6><a href="/details/{{ $ThuCung->MaGiongThuCung }}">{{$ThuCung->TenThuCung }}</a></h6>
                                <h5><a href="/details/{{ $ThuCung->MaGiongThuCung }}">{{ number_format($ThuCung->Gia) }} VNĐ</h5>
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
