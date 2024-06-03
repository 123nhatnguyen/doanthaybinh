  @extends('layout')
  @section('title','List Product')

  @section('content')
<div class="container" id="product-cards">
      <h1  class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 50px;">
               @foreach ($prodoctList as $product)
               <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="{{ $product-> img}}" alt="">
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
                <h5 class=""> {{ $product ->price }} <span><i><img src="{{url('images/add.png')}}" alt="" width="20px"></i></span></h5>
              </div>
               <p class=" text-center">{{$product->desc}}</p>
            </div>
          </div>
               @endforeach
          
        </div>

 
       <!-- <div class="row" style="margin-top: 50px;">
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="pant.png" alt="">
               <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="views.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="heart.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="add carts.png" alt="" width="30px"></i></button>
               </div>
              <div class="card-body">
                <h3 class="text-center">Pant1</h3>
                <div class="star text-center">
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                </div>
                <h5>$100.50 <span><i><img src="add.png" alt="" width="20px"></i></span></h5>
              </div>
            </div>
          </div>
           -->
         

        <!-- <div class="row" style="margin-top: 50px;">
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="h1.png" alt="">
               <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="views.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="heart.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="add carts.png" alt="" width="30px"></i></button>
               </div>
              <div class="card-body">
                <h3 class="text-center">Hoodies</h3>
                <div class="star text-center">
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                </div>
                <h5>$150.50 <span><i><img src="add.png" alt="" width="20px"></i></span></h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="h2.png" alt="">
               <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="views.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="heart.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="add carts.png" alt="" width="30px"></i></button>
               </div>
              <div class="card-body">
                <h3 class="text-center">Hoodies</h3>
                <div class="star text-center">
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                </div>
                <h5>$200.30 <span><i><img src="add.png" alt="" width="20px"></i></span></h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="h3.png" alt="">
               <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="views.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="heart.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="add carts.png" alt="" width="30px"></i></button>
               </div>
              <div class="card-body">
                <h3 class="text-center">Hoodies</h3>
                <div class="star text-center">
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                </div>
                <h5>$500.10 <span><i><img src="add.png" alt="" width="20px"></i></span></h5>
              </div>
            </div>
          </div>
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="h4.png" alt="">
               <div class="overlay">
                <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="views.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="heart.png" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="add carts.png" alt="" width="30px"></i></button>
               </div>
              <div class="card-body">
                <h3 class="text-center">Hoodies</h3>
                <div class="star text-center">
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                  <i class='bx bxs-star checked'></i>
                </div>
                <h5>$100.20 <span><i><img src="add.png" alt="" width="20px"></i></span></h5>
              </div>
            </div>
          </div>
        </div> --> 
     
     
     
      </div>
@endsection
