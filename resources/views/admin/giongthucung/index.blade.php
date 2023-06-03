@extends('admin/layout')
@section('admin/content')



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('admin.giongthucung.create')}}" ><button class='btn btn-warning'> Thêm</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã Giống</th>
                                            <th>Loại thú Cưng</th>
                                            <th>Tên giống thú Cưng</th>
                                            <th>Ghi Chú</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Xem</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($db as $loai)
                                        <tr>
                                                <td>{{$loai->MaGiongThuCung}}</td>
                                                <td>{{$loai->TenLoaiThuCung}}</td>
                                                <td>{{$loai->TenGiongThuCung}}</td>
                                                <td>{{$loai->GhiChu}}</td>
                                                <td><a href="{{route('admin.giongthucung.edit',$loai->MaGiongThuCung)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                                <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.giongthucung.delete',$loai->MaGiongThuCung)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                                <td><a href="{{route('admin.giongthucung.show',$loai->MaGiongThuCung)}}" class='btn btn-warning fa fa-pencil'>Xem</a></td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

  @endsection
