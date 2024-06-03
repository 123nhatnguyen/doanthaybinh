@extends('layout')

@section('content')


<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Đăng nhập</h3>
            @if ($message = Session::get('error'))

           <div class="alert alert-danger alert-block">

	             <button type="button" class="close" data-dismiss="alert">×</button>	

                 <strong>{{ $message }}</strong>

          </div>

                   @endif
          </div>
          <div class="card-body">
          <form action="" method="POST">
            @csrf
            <div class="form-group">
                <label for="login-">Email</label>
                <input type="email" class="form-control" id="login-email" name="email" placeholder="Nhập email">
              </div>
              <div class="form-group">
                <label for="login-password">Mật khẩu</label>
                <input type="password" class="form-control" id="login-password" name="password" placeholder="Nhập mật khẩu">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
              <a href="{{route('register')}}" class="btn btn-primary btn-block">Register</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection