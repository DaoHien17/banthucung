@extends('admin/layout')
@section('admin/content')



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('admin.NCC.create')}}" ><button class='btn btn-warning'> Thêm</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã Nhà Cung Cấp</th>
                                            <th>Tên Nhà Cung Cấp</th>
                                            <th>Địa Chỉ</th>
                                            <th>SĐT</th>
                                            <th>Email</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Xem</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($db as $loai)
                                        <tr>
                                                <td>{{$loai->MaNCC}}</td>
                                                <td>{{$loai->TenNCC}}</td>
                                                <td>{{$loai->DiaChi}}</td>
                                                <td>{{$loai->SDT}}</td>
                                                <td>{{$loai->Email}}</td>
                                                <td><a href="{{route('admin.NCC.edit',$loai->MaNCC)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                                <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.NCC.delete',$loai->MaNCC)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                                <td><a href="{{route('admin.NCC.show',$loai->MaNCC)}}" class='btn btn-warning fa fa-pencil'>Xem</a></td>
                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

  @endsection
