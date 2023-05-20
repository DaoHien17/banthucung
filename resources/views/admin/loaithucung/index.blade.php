@extends('admin/layout')
@section('admin/content')
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('admin.loaithucung.create') }}"><button class='btn btn-warning'> Thêm</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                            <th>Edit</th>
                            <th>Delete</th>
                            <th>Xem</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($db as $loai)
                            <tr>
                                <td>{{ $loai->MaLoaiThuCung }}</td>
                                <td>{{ $loai->TenLoaiThuCung }}</td>
                                <td><a href="{{ route('admin.loaithucung.edit', $loai->MaLoaiThuCung) }}"
                                        class='btn btn-warning fa fa-pencil'> Sửa</a></td>
                                <td> <a onclick="return confirm('Bạn có muốn xóa không?')"
                                        href="{{ route('admin.loaithucung.delete', $loai->MaLoaiThuCung) }}"
                                        class='btn btn-danger fa fa-trash'>Xóa</a></td>
                                <td><a href="{{ route('admin.loaithucung.show', $loai->MaLoaiThuCung) }}"
                                        class='btn btn-warning fa fa-pencil'>Xem</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
