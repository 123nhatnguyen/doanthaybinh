@extends('layout')

@section('content')
@if(session('success'))
<div class="alert alert-success ">{{ session('success') }}</div>
@elseif(session('warning'))
<div class="alert alert-warning ">{{ session('warning') }}</div>
@endif
<!-- Breadcrumb Start -->
<div class="container-fluid">
    <div class="row px-xl-5">
        <div class="col-12">
            <nav class="breadcrumb bg-light mb-30">
            
                <span class="breadcrumb-item active">Checkout</span>
            </nav>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

@if(empty($cart))
<h4 class="text-center">Hiện tại giỏ hàng của bạn đang trống!</h4>
@elseif(empty($user))
<h4 class="text-center">Bạn chưa đăng nhập!</h4>
@else
<!-- Checkout Start -->
<div class="container-fluid">
    <form action="{{ route('checkout') }}" method="post">
        @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Billing Address</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Name</label>
                            <input class="form-control" type="text" name="name" value="{{ $user->name }}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address</label>
                            <input class="form-control" type="text" name="address" placeholder="Address">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" name="email" value="{{ $user->email }}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Note</label>
                            <textarea class="form-control" style="height:38px;" type="text" name="note" placeholder="Yous notes"></textarea>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Phone</label>
                            <input class="form-control" type="text" name="phone" placeholder="+123 456 789">
                        </div>
                        <input class="form-control" type="hidden" name="user_id" value="{{ $user->id }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Order Total</span></h5>
                <div class="bg-light p-30 mb-5">
                    <div class="border-bottom">
                        <h6 class="mb-3">Products</h6>
                        @php
                        $total = 0;
                        @endphp
                        @foreach($cart as $item)
                        @php
                        $product = $item['price'] * $item['quantity'];
                        $total += $product;
                        @endphp <div class="d-flex justify-content-between">
                            <img src="{{ $item['img'] }}" alt="" style="width: 50px; height: 50px;">
                            <p>{{ $item['name'] }}</p>
                            <p>$<?php echo $product ?></p>
                        </div>
                        @endforeach
                    </div>
                    <div class="border-bottom pt-3 pb-2">
                        <div class="d-flex justify-content-between mb-3">
                            <h6>Subtotal</h6>
                            <h6>$0</h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$0</h6>
                        </div>
                    </div>
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Total</h5>
                            <h5>$<?php echo $total ?></h5>
                            <input class="form-control" type="hidden" name="total" value="{{ $total }}">
                        </div>
                    </div>
                </div>
                <div class="mb-5">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Payment</span></h5>
                    <div class="bg-light p-30">
                        <button class="btn btn-block btn-primary font-weight-bold py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endif
<!-- Checkout End -->
@endsection