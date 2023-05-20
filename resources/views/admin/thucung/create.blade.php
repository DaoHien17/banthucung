@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.thucung.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                        <label for="MaGiongThuCung">Mã Giống</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="MaGiongThuCung">Mã Giống</span>
                            <select class="form-control" name="MaGiongThuCung" id="MaGiongThuCung">
                                <option value="">-- Chọn giống thú cưng --</option>
                                @foreach ($db as $giongtc)
                                    <option value="{{ $giongtc->MaGiongThuCung }}">{{ $giongtc->TenGiongThuCung }}</option>
                                @endforeach
                            </select>
                          {{-- <input class="form-control" type="text" placeholder="Nhap" name="MaGiongThuCung" aria-label="Username" aria-describedby="basic-addon1"> --}}
                        </div>
                        <label for="MaNCC">Nhà Cung Cấp</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="MaNCC">Nhà Cung Cấp</span>
                            <select class="form-control" name="MaNCC" id="MaNCC">
                                <option value="">-- Chọn nhà cung cấp --</option>
                                @foreach ($ncc as $item)
                                    <option value="{{ $item->MaNCC }}">{{ $item->TenNCC }}</option>
                                @endforeach
                            </select>
                          {{-- <input class="form-control" type="text" placeholder="Nhap ten" name="MaNCC" aria-label="Username" aria-describedby="basic-addon1"> --}}
                        </div>
                        {{-- <label for="ThuCung">Mã Thú Cưng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="ThuCung">Mã Thú Cưng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="ThuCung" aria-label="Username" aria-describedby="basic-addon1">
                        </div> --}}
                        <label for="MoTa">Tên thú cưng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="MoTa">Tên thú cưng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="TenThuCung" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="MoTa">Mô Tả</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="MoTa">Mô Tả</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="MoTa" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="Gia">Giá Bán</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Gia">Giá Bán</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Gia" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="SoLuong">Số Lượng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="SoLuong">Số Lượng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="SoLuong" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="AnhTieuDe">Ảnh Tiêu Đề</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="AnhTieuDe">Ảnh Tiêu Đề</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="AnhTieuDe" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="Anh1">Ảnh 1</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Anh1">Ảnh 1</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh1" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="Anh2">Ảnh 2</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Anh2">Ảnh 2</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh2" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="Anh3">Ảnh 3</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Anh3">Ảnh 3</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh3" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="Anh4">Ảnh 4</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Anh4">Ảnh 4</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Anh4" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Thêm Thú Cưng</button>

                  </div>
                      </div>
                    </div>
</form>
@endsection
