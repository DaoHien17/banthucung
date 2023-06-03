@extends('admin/layout')
@section('admin/content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.NhanVien.update', ['id' => $sp->MaNhanVien]) }}" method="post">
                @csrf
                <div class="tab-content rounded-bottom">
                    <label for="mathucung">Mã Nhân Viên</label>
                    <div class="input-group mb-3">


                        <input class="form-control" type="text" placeholder="Nhập" name="MaNhanVien"
                            value="{{ $sp->MaNhanVien }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                    </div>

                    <label for="TenNhanVien">Tên nhân viên</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" placeholder="Nhập" name="TenNhanVien"
                            value="{{ $sp->TenNhanVien }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>

                    <label for="SDT">Số điện thoại</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="SDT" value="{{ $sp->SDT }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="DiaChi">Địa chỉ</label>
                    <div class="input-group mb-3">
                        <input class="form-control" type="text" id="Gia" name="DiaChi" value="{{ $sp->DiaChi }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                        <button class="btn btn-primary" type="submit">Sửa</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


