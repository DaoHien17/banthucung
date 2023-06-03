@extends('layout')
@section('content')
<h1 style="font-size: 50px;" class="text-center ">Trang đăng nhập</h1>
<div class="form-horizontal">
    <form action="{{ route('checklogin') }}" method="get">
        @csrf
    <div class="form-group mt-5" style="">
        <div style="display: flex; width: 100%; justify-content: center"  >
            <div >
                <span class="control-label col-md-2"> Tài Khoản</span>
            </div>
            <div class="col-md-4">
                <input type="email" name="email" class=" form-control " id="us" />
            </div>
        </div>
    </div>

    <div class="form-group">

        <div style="display: flex; width: 100%; justify-content: center">
            <div >
                <span class="control-label col-md-2"> Mật Khẩu</span>
            </div>
            <div class="col-md-4">
                <input type="password" name="password" class="form-control" id="pas" />
            </div>
        </div>
    </div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div>
      @endif
    <div class="form-group">
        <div class="col-md-offset-2 col-md-12" style="text-align:center">
            <input type="submit" value="Đăng nhập" class="btn btn-success" />
        </div>
    </div>
    </form>
</div>
@endsection
