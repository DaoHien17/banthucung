@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.giongthucung.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                        <label for="MaLoaiThuCung">Mã loại thú cưng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="MaLoaiThuCung">Mã loại thú cưng</span>
                            <select class="form-control" name="MaLoaiThuCung" id="MaLoaiThuCung">
                                <option value="">-- Chọn loại thú cưng --</option>
                                @foreach ($loaitc as $item)
                                    <option value="{{ $item->MaLoaiThuCung }}">{{ $item->TenLoaiThuCung }}</option>
                                @endforeach
                            </select>
                          {{-- <input class="form-control" type="text" placeholder="Nhap" name="MaLoaiThuCung" aria-label="Username" aria-describedby="basic-addon1"> --}}
                        </div>
                        <label for="TenGiongThuCung">Tên giống thú cưng</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="TenGiongThuCung">Tên giống thú cưng</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="TenGiongThuCung" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="GhiChu.">Ghi Chú</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="GhiChu">Ghi Chú</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="GhiChu" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Them loai</button>

                  </div>
                      </div>
                    </div>
</form>
@endsection
