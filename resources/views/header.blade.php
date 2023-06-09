    <!-- Humberger End -->
    @php
        $loaithucung = App\Models\loaiTCmodels::latest()->get()->all();
        // dd($loaithucung)
    @endphp

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> Email: CatsLoveShop.vn@gmail.com</li>
                                <li>Miễn Phí Ship Toàn Quốc </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            {{-- <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div> --}}

                            <div class="header__top__right__auth">

                                @if(Auth::user()!=null)
                                    <a href="{{ route('admin.thucung.index') }}"><i class="fa fa-user"></i> Vào trang quản trị</a>
                                    <a href="{{ route('logout') }}"><i class="fa fa-user"></i> Đăng xuất</a>

                                @else
                                    <a href="{{ route('login') }}"><i class="fa fa-user"></i> Đăng nhập</a>
                               @endif

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('home')}}">TRANG CHỦ</a></li>
                            <li><a href="{{route('blog')}}">Tin Tức</a></li>
                            @foreach ($loaithucung as $loaiTCmodels)
                            {{-- {{ $loaiTCmodels }} --}}
                                 <li><a href="{{route('dogs').'/'.$loaiTCmodels->MaLoaiThuCung}}">{{$loaiTCmodels->TenLoaiThuCung }}</a></li>
                            @endforeach



                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{route('cart.list')}}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price"></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Danh Mục</span>
                        </div>
                         <ul style="display: none; position: absolute; background-color: white;left: 0;
                         top: 46px;
                         width: 100%;
                         z-index: 9; ">
                         @foreach ($giongthus as $item)
                            <li><a href="{{route('dogs').'/'.$item->MaLoaiThuCung}}">{{$item->TenLoaiThuCung }}</a></li>
                         @endforeach

                        {{-- <li><a href="/Home/Grid">Chó SHIBA </a></li>
                        <li><a href="/Home/Grid">Chó BULL PHÁP</a></li>
                        <li><a href="/Home/Grid">Chó ALASKA </a></li>
                        <li><a href="/Home/Grid">Mèo Anh Lông Dài</a></li>
                        <li><a href="/Home/Grid">Mèo Maine Coon</a></li>
                        <li><a href="/Home/Grid">Mèo RagDoll</a></li>
                        <li><a href="/Home/Grid">Vẹt</a></li>
                        <li><a href="/Home/Grid">Chích Chòe</a></li>
                        <li><a href="/Home/Grid">Cá Koi</a></li>
                        <li><a href="/Home/Grid">Cá Rồng</a></li> --}}

                    </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                     <div class="col-lg-12" style="float: right">
                    <div class="hero__search">
                        <div class="hero__search__form" >
                            <form action="{{ route('search') }}" method="POST">
                                {{csrf_field()}}
                                <input type="search" name="keywords_submit" placeholder="Search" aria-label="Search">
                                <button type="submit" name="search_items" value="tìm kiếm" class="site-btn">Tìm Kiếm</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0347.874.930</h5>
                                <span>HỖ TRỢ 24/7 </span>
                            </div>
                        </div>

                    </div>
                </div>

                </div>
            </div>
        </div>
    </section>

