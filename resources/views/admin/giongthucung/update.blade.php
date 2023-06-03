@extends('admin/layout')
@section('admin/content')
    <form action="{{ route('admin.giongthucung.update', ['id' => $db->MaGiongThuCung]) }}" method="post">
        @csrf
        <div class="tab-content rounded-bottom">
            <label for="MaLoaiThuCung">Mã Loại Thú Cưng</label>
            <div class="input-group mb-3">
                <select class="form-control" name="MaLoaiThuCung" id="MaLoaiThuCung">
                    @foreach ($ltc as $key => $value)
                          <option value="{{ $key }}" @if($key == old('id',$db->MaLoaiThuCung)) selected @endif>
                              {{ $value }}
                          </option>
                          @endforeach
                    </select>

            </div>
            <label for="TenGiongThuCung">Tên Giống Thú Cưng</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" name="TenGiongThuCung" value="{{ $db->TenGiongThuCung }}"
                    placeholder="Nhập tên" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            <label for="GhiChu">Ghi Chú</label>
            <div class="input-group mb-3">

                <input class="form-control" type="text" name="GhiChu" value="{{ $db->GhiChu }}" placeholder="Nhập tên"
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>


            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                <button class="btn btn-primary" type="submit">Sửa</button>

            </div>
        </div>
        </div>
    </form>
@endsection
