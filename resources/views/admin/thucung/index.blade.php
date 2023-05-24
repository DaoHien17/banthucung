@extends('admin/layout')
@section('admin/content')
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <a href="{{route('admin.thucung.create')}}" ><button class='btn btn-warning'> Thêm</button></a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã Thú Cưng</th>
                                            <th>Chọn Loại thú Cưng</th>
                                            <th>Tên Giống</th>
                                            <th>Nhà Cung Cấp</th>
                                            <th>Tên Thú Cưng</th>
                                            <th>Giá</th>
                                            <th>Trạng Thái</th>
                                            <th>Ảnh Tiêu Đề</th>
                                            {{-- <th>Ảnh 1</th>
                                            <th>Ảnh 2</th>
                                            <th>Ảnh 3</th>
                                            <th>Ảnh 4</th> --}}
                                            <th>Edit</th>
                                            <th>Delete</th>
                                            <th>Xem</th>
                                        </tr>
                                    </thead>
                                    {{-- `MaGiongThuCung`, `MaNCC`, `MaThuCung`, `TenThuCung`, `MoTa`, `Gia`, `SoLuong`, `AnhTieuDe`, `Anh1`, `Anh2`, `Anh3`, `Anh4` --}}
                                    <tbody>
                                        @foreach($sp as $loai)
                                        <tr>
                                                <td>{{$loai->MaThuCung}}</td>
                                                <td>{{$loai->MaLoaiThuCung}}</td>
                                                <td>{{$loai->TenGiongThuCung}}</td>
                                                <td>{{$loai->TenNCC}}</td>
                                                <td>{{$loai->TenThuCung}}</td>

                                                <td> {{ number_format($loai->Gia) }} VNĐ</td>
                                                <td> <?php
                                                    $t = $loai->SoLuong;
                                                    if ($t ==1) {
                                                      echo "Còn";
                                                    }
                                                    else {
                                                        echo "Đã hết";
                                                    }
                                                    ?></td>
                                                <td><img style="width:150px" src="{{$loai->AnhTieuDe}}" alt=""></td>
                                                {{-- <td><img style="width:150px" src="{{$loai->Anh1}}" alt=""></td>
                                                <td><img style="width:150px" src="{{$loai->Anh2}}" alt=""></td>
                                                <td><img style="width:150px" src="{{$loai->Anh3}}" alt=""></td>
                                                <td><img style="width:150px" src="{{$loai->Anh4}}" alt=""></td> --}}
                                                <td><a href="{{route('admin.thucung.edit',$loai->MaThuCung)}}" class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                                <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.thucung.delete',$loai->MaThuCung)}}" class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                                <td><a href="{{route('admin.thucung.show',$loai->MaThuCung)}}" class='btn btn-warning fa fa-pencil'>Xem</a></td>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

  @endsection
