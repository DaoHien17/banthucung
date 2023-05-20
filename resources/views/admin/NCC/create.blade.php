@extends('admin/layout')
@section('admin/content')
<form action="{{route('admin.NCC.store')}}" method="post">
@csrf
<div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1272">
                        <label for="TenNCC">Tên Nhà Cung Cấp</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="TenNCC">Tên Nhà Cung Cấp</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="TenNCC" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="DiaChi">Địa Chỉ</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="DiaChi">Địa Chỉ</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="DiaChi" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="SDT">Số Điện Thoại</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="SDT">Số Điện Thoại</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="SDT" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <label for="Email">Email</label>
                        <div class="input-group mb-3"><span class="input-group-text" id="Email">Email</span>
                          <input class="form-control" type="text" placeholder="Nhap ten" name="Email" aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                    <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <button class="btn btn-primary" type="submit">Them loai</button>

                  </div>
                      </div>
                    </div>
</form>
@endsection
