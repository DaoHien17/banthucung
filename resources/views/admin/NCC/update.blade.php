@extends('admin/layout')
@section('admin/content')
    <form action="{{ route('admin.NCC.update', ['id' => $db->MaNCC]) }}" method="post">
        @csrf
        <div class="tab-content rounded-bottom">
            <label for="MaNCC">Mã Nhà Cung Cấp</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" placeholder="Nhập" name="MaNCC" value="{{ $db->MaNCC }}"
                    aria-label="Username" aria-describedby="basic-addon1" readonly>
            </div>
            <label for="TenNCC">Tên nhà cung cấp</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" name="TenNCC" value="{{ $db->TenNCC }}"
                    placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <label for="SDT">Số điện thoại</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" name="SDT" value="{{ $db->SDT }}" placeholder="Nhập tên"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>

            <label for="Email">Email</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" name="Email" value="{{ $db->Email }}" placeholder="Nhập email"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <label for="DiaChi">Địa chỉ</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" name="DiaChi" value="{{ $db->DiaChi }}" placeholder="Nhập email"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                <button class="btn btn-primary" type="submit">Sửa</button>

            </div>
        </div>
        </div>
    </form>
@endsection
