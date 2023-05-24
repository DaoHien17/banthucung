@extends('admin/layout')
@section('admin/content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.thucung.update', ['id' => $sp->MaThuCung]) }}" method="post">
                @csrf
                <div class="tab-content rounded-bottom">
                    <label for="mathucung">Mã Thú Cưng</label>
                    <div class="input-group mb-3">


                        <input class="form-control" type="text" placeholder="Nhập" name="MaThuCung"
                            value="{{ $sp->MaThuCung }}" aria-label="Username" aria-describedby="basic-addon1" readonly>
                    </div>

                    <label for="hoten">Tên loại</label>
                    <div class="input-group mb-3">

                        <select class="form-control" name="MaLoaiThuCung" id="MaLoai">
                        @foreach ($db as $key => $value)
                              <option value="{{ $key }}" @if($key == old('id',$sp->MaLoaiThuCung)) selected @endif>
                                  {{ $value }}
                              </option>
                              @endforeach

                        </select>
                    </div>
                    <label for="TenGiongThuCung">Tên Giống Thú Cưng</label>
                    <div class="input-group mb-3">

                        <input class="d-none" name="MaGiongThuCung" value="{{ $sp->MaGiongThuCung }}">
                        <input class="form-control" type="text" name="TenGiongThuCung" value="{{ $sp->TenGiongThuCung }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Tenncc">Tên Nhà Cung Cấp</label>
                    <div class="input-group mb-3">
                        <select class="form-control" name="MaNCC" id="MaLoai">
                            @foreach ($ncc as $key => $value)
                                  <option value="{{ $key }}" @if($key == old('id',$sp->MaNCC)) selected @endif>
                                      {{ $value }}
                                  </option>
                                  @endforeach
                            {{-- <input class="form-control" type="text" name="TenLoaiThuCung" value="{{ $sp->TenLoaiThuCung }}"
                                placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1"> --}}
                            </select>
                        <input class="d-none" name="MaNCC" value="{{ $sp->MaNCC }}">
                        <input class="form-control" type="text" name="Tenncc" value="{{ $sp->TenNCC }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Tenthucung">Tên Thú Cưng</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="TenThuCung" value="{{ $sp->TenThuCung }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Gia">Giá</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" id="Gia" name="Gia" value="{{ $sp->Gia }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="SoLuong">Số lượng</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="number" name="SoLuong" value="{{ $sp->SoLuong }}" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="mota">Mô Tả</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="MoTa" value="{{ $sp->MoTa }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    {{-- <label for="TrangThai">Trạng Thái</label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="TrangThai">Trạng Thái</span>
                        <input class="form-control" type="text" name="TrangThai" value="{{ $sp->TrangThai }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div> --}}
                    <label for="AnhTD">Ảnh Tiêu Đề</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="AnhTieuDe" value="{{ $sp->AnhTieuDe }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Anh1">Ảnh 1</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="Anh1" value="{{ $sp->Anh1 }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Anh2">Ảnh 2</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="Anh2" value="{{ $sp->Anh2 }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Anh3">Ảnh 3</label>
                    <div class="input-group mb-3">

                        <input class="form-control" type="text" name="Anh3" value="{{ $sp->Anh3 }}" placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                    <label for="Anh4">Ảnh 4</label>

                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh4" value="{{ $sp->Anh4 }}" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                        <button class="btn btn-primary" type="submit">Sửa</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection


