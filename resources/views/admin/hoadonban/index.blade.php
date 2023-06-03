@extends('admin/layout')
@section('admin/content')



                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Mã hóa đơn bán</th>
                                            <th>Mã khách hàng</th>
                                            <th>Trạng thái</th>
                                            <th>Dịa chỉ</th>
                                            <th>Tổng tiền</th>
                                            <th></th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($hd as $item)
                                        <tr>
                                                <td>{{$item->Id}}</td>
                                                <td>{{$item->MaKhachHang}}</td>
                                                <td>{{$item->TrangThai}}</td>
                                                <td>{{$item->DiaChi}}</td>
                                                <td>{{$item->TongTien}}</td>


                                                <td> <a onclick="return confirm('Bạn có muốn xóa không?')" href="{{route('admin.HoaDonBan.delete',$item->Id)}}" class='btn btn-danger'>Xóa</a>
                                                    <a href="{{route('admin.HoaDonBan.show',$item->Id)}}" class='btn btn-warning fa fa-pencil'>Xem</a></td>

                                        </tr>
                                       @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

  @endsection
