@extends('layout')
@section('title','List Product')

@section('content')

  <style>
    .product-image {
      max-width: 100%;
      height: auto;
    }

    .product-description {
      margin-top: 20px;
      font-size: 16px;
    }
  </style>

  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <img src="{{url($product->img)}}" alt="Product Image" class="product-image">
      </div>
      <div class="col-lg-6">
        <h2>{{$product ->name}}</h2>
        <h4>Price: {{$product-> price}}</h4>
        <p class="product-description">{{$product-> desc}}</p>

        <div class="row mb-4">
                <form action="{{ route('add-to-card',  $product->id) }}" method="post">
                    {{csrf_field()}}
                <label class="mb-2 d-block" >Quantity</label>
                <div class="input-group mb-3" style="width: 170px;">
                    <input id="quantity" type="number" value="1" max="10" name="quantity" min="1" class="form-control quantity-input">
                </div>
                <div class="col-md-4 col-6">
                    <a href="/addtocard">
                        <button id="btnAddToCart" href="" class="btn btn-warning shadow-0"> <i class="me-1 fa fa-shopping-basket"></i> Add to
                            cart </button>
                    </a>
                </form>
                </div>   
                </div>   
                </div>
    </div>
  </div>

@endsection
