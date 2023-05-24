@extends('admin/layout')
@section('admin/content')

<div class="page-heading">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-md-6 order-md-1 order-last">
                            <h3>Xem</h3>

                        </div>
                        <div class="col-12 col-md-6 order-md-2 order-first">
                            <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">DataTable</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <section class="section">
                    <div class="card">
                        <div class="card-header">
                            Simple Datatable
                        </div>
                        <div class="card-body">
                            <table class="table table-striped" id="table1" style="">
                                <thead>
                                    <tr>
                                    <th>Mã Giống</th>
                                    <th>Nhà Cung Cấp</th>
                                    <th>Mã Thú Cưng</th>
                                    <th>Tên Thú Cưng</th>
                                    <th>Mô Tả</th>
                                    <th>Giá Bán</th>
                                    <th>Ảnh Tiêu Đề</th>
                                    <th>Ảnh 1</th>
                                    <th>Ảnh 2</th>
                                    <th>Ảnh 3</th>
                                    <th>Ảnh 4</th>
                                    </tr>
                                </thead>
                                <tbody>

                               <tr>
                                        <td>{{$db->MaGiongThuCung}}</td>
                                        <td>{{$db->MaNCC}}</td>
                                        <td>{{$db->MaThuCung}}</td>
                                        <td>{{$db->TenThuCung}}</td>
                                        <td>{{$db->MoTa}}</td>
                                        <td>{{$db->Gia}}</td>
                                        <td><img style="width:150px" src="{{$db->AnhTieuDe}}" alt=""></td>
                                        <td><img style="width:150px" src="{{$db->Anh1}}" alt=""></td>
                                        <td><img style="width:150px" src="{{$db->Anh2}}" alt=""></td>
                                        <td><img style="width:150px" src="{{$db->Anh3}}" alt=""></td>
                                        <td><img style="width:150px" src="{{$db->Anh4}}" alt=""></td>

                                    </tr>
                                </tbody>
                            </table>
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                                <a class="btn btn-primary" href="/admin76thucung/index">Quay lại</a>

                          </div>
                        </div>
                    </div>

                </section>
            </div>

@endsection
