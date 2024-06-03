@extends('layout')

@section('content')


<!-- show-search  -->
<div class="container" id="product-cards">
    <h2>Related products:</h2>
    <div class="row" style="margin-top: 30px;" id="products-search">
        <!-- show-search -->
        @foreach($productSearch as $product)
        <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="{{$product->img}}" alt="">
               <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="{{url('images/views.png')}}" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="{{url('images/heart.png')}}" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="{{url('images/add carts.png')}}" alt="" width="30px"></i></button>
               </div>
              <div class="card-body">
                <a href="{{route('products.show',$product->id)}}">
                <h3 class="text-center">{{$product->name}}</h3>
                </a>
                <div class="star text-center">
                <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                </div>
                <h5>{{$product->price}}<span><i><img src="{{url('images/add.png')}}" alt="" width="20px"></i></span></h5>
              </div>
              <p class=" text-center">{{$product->desc}}</p>
            </div>
          </div>
        @endforeach
    </div>
</div>
<!-- end show-search   -->



@endsection