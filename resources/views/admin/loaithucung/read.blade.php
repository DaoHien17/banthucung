@extends('admin/layout')
@section('admin/content')
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Thông tin chi tiết</h3>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>Mã Loại</th>
                            <th>Tên Loại</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $db->MaLoaiThuCung }}</td>
                            <td>{{ $db->TenLoaiThuCung }}</td>
                        </tr>

                    </tbody>
                </table>
                <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-1158">
                    <a class="btn btn-primary" href="/admin/loaithucung/index">Quay lại</a>

                </div>
            </div>
        </div>
    </div>



@endsection
