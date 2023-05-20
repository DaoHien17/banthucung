@extends('admin/layout')
@section('admin/content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.loaithucung.update', ['id' => $db->MaLoaiThuCung]) }}" method="post">
                @csrf
                <div class="tab-content rounded-bottom">
                    <label for="maloai">Mã loại</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="maloai">Mã loại</span>
                        <input class="form-control" type="text" placeholder="Nhập" name="MaLoaiThuCung"
                            value="{{ $db->MaLoaiThuCung }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                    </div>
                    <label for="hoten">Tên loại</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="hoten">Tên loại</span>
                        <input class="form-control" type="text" name="TenLoaiThuCung" value="{{ $db->TenLoaiThuCung }}"
                            placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>


                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                        <button class="btn btn-primary" type="submit">Sửa</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
