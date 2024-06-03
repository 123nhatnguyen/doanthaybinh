@extends('layout')

@section('content')


<div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Register</h3>
          </div>
          <div class="card-body">
          <form action="#" method="POST"> 
            @csrf
              <div class="form-group">
                <label for="login-email">Email</label>
                <input type="email" class="form-control" id="login-email" name="email" placeholder="Nhập email">
              </div>
              <div class="form-group">
                <label for="username">Full name</label>
                <input type="text" class="form-control" id="login-email" name="name" placeholder="Nhập tên đăng nhập">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id=" login-password" name="password" placeholder="Nhập mật khẩu">
              </div>
              <div class="form-group">
                <label for="password">Confirm Password</label>
                <input type="password" class="form-control" id="password" placeholder="Nhập lại mật khẩu">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection