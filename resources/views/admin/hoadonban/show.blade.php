@extends('admin/layout')
@section('admin/content')
    <div class="page-heading">

        <section class="section">
            <div class="card">

                <h2> Thông tin khách hàng</h2>

                <div class="card-body">
                    <table class="table table-striped" id="table1" style="">
                        <thead>
                            <tr>
                                <th>Mã khách hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Địac chỉ</th>
                                <th>Số điện thoại</th>
                                <th>Email</th>

                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $thongtinkhachhang->MaKhachHang }}</td>
                                <td>{{ $thongtinkhachhang->TenKhachHang }}</td>
                                <td>{{ $thongtinkhachhang->DiaChi }}</td>
                                <td>{{ $thongtinkhachhang->SĐT }}</td>
                                <td>{{ $thongtinkhachhang->Email }}</td>


                            </tr>
                        </tbody>
                    </table>

                </div>
                <h2> Thông tin sản phẩm</h2>
                <div class="card-body">
                    <table class="table table-striped" id="table1" style="">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Tạm tính</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($danhsachtc as $item)
                                <tr>
                                    <td>{{ $item->MaThuCung }}</td>
                                    <td>{{ $item->TenThuCung }}</td>
                                    <td>{{ $item->SoLuong }}</td>
                                    <td>{{ $item->Gia }}</td>
                                    <td>{{ number_format($item->Gia * $item->SoLuong) }}</td>


                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                        <a class="btn btn-primary" href="{{ route('admin.HoaDonBan.index') }}">Quay lại</a>

                    </div>
                </div>
            </div>

        </section>
    </div>
@endsection
