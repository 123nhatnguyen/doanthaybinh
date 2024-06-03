@extends('layout')
  @section('title','List Product')

  @section('content')
  <div class="container" id="product-cards">
      <h1  class="text-center">PRODUCT</h1>
        <div class="row" style="margin-top: 50px;">
        @foreach ( $productList as $product )
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
  <div class="container">
      <section class="banner" id="banner" >

        <div class="banner-content">
            <h1>Special <span>Collection</span></h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur,
                <br>Lorem ipsum dolor sit amet.
            </p>
            <h5>UPTO 50% OFF</h5>
            <a href="#" class="btn">Add Cart</a>
            
        </div>
        <div class="img">
            <img src="{{url('images/jpg-2.png')}} " alt="">
        </div>
      </section>
    </div>
      <!-- banner -->
      <h1  class="text-center text-warning">Sản phẩm mới nhất </h1>
      <!-- other product -->
      <div class="container" id="product-cards">
        <div class="row" style="margin-top: 50px;">
        @foreach ($productNew as $product)
    <!-- Hiển thị thông tin sản phẩm -->

          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <img src="{{$product->img}}" alt="">
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
                <h5>{{$product->price}} <span><i><img src="{{url('images/add.png')}}" alt="" width="20px"></i></span></h5>
              </div>
              <p class=" text-center">{{$product->desc}}</p>
            </div> 
          </div>
          @endforeach
        </div>



      </div>      
      <div class="container">
        <section class="banner2" id="banner2" >
  
          <div class="banner2-content">
              <h1>Electronics <span>Gadgets</span></h1>
              <h2>Product <span class="bannerchangecontent"></span></h2>
              <h3>UPTO 50% OFF</h3>
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing
                <br>Lorem ipsum dolor sit amet.
              </p>
              <a href="#" class="btn">Add Cart</a>
              
          </div>
          <div class="img">
          <img src="{{url('images/jpg-56.png')}} " alt="">
          </div>
        </section>
      </div>
      <!-- banner2 -->
      <h1  class="text-center text-warning">Sản phẩm bán tốt  nhất </h1>

      <!-- electronics gadgets cards -->
      <div class="container" id="product-cards">
        <div class="row" style="margin-top: 50px;">
        @foreach ( $bestSellingProducts as $product )
          <div class="col-md-3 py-3 py-md-0">
            <div class="card">
              <div class="overlay">
              <button type="button" class="btn btn-secondary" title="Quick Shop"><i><img src="{{url('images/views.png')}}" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Wishlist"><i><img src="{{url('images/heart.png')}}" alt="" width="30px"></i></button>
                <button type="button" class="btn btn-secondary" title="Add to Cart"><i><img src="{{url('images/add carts.png')}}" alt="" width="30px"></i></button>
               </div>
              <img src="{{$product->img}}" alt="">
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

    
      <!-- electronics gadgets cards -->

      <!-- about us -->
      <div class="container" id="about">
        <h2>ABOUT US</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab fuga id sed voluptas, sunt tempora iure provident hic ad natus? Doloremque fugiat maiores ipsam vero nemo aut! A cum impedit provident magnam corporis iste repudiandae rem laboriosam veritatis incidunt, sequi voluptates facere maxime ipsa, nulla enim assumenda reprehenderit itaque. Est velit natus, tenetur nisi excepturi molestiae veniam iure odio aliquam exercitationem ab dicta a accusamus vero delectus nostrum ex maiores voluptatum facilis? At quis possimus expedita porro atque sed voluptatibus deleniti et repellat eum. Ut natus, architecto tempora sit, qui facilis ipsam quis quasi veritatis aliquid, odit aliquam optio dolorem.</p>

      </div>
      <hr>
      <!-- about us -->

      <!-- contact us -->
      <div class="container" id="contact">
        <h2>CONTACT US</h2>
        <hr>
        <div class="row">
          <div class="col-md-4 py-3 py-md-0">
            <img src="{{url('images/location.png')}}" alt="" width="60px">
            <p>Pakistan sindh Karachi
              <br>Lorem ipsum dolor sit amet.
            </p>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <img src="{{url('images/phone.png')}}" alt="" width="60px">
            <p>+0000000000000000
           <br>+0000000000000000
            </p>
          </div>

          <div class="col-md-4 py-3 py-md-0">
            <img src="{{url('images/email.png')}}" alt="" width="60px">
            <p>example@gmail.com
            <br>contact@gmail.com
            </p>
          </div>
        </div>
<hr>
        <div class="row">

          <div class="col-md-6 py-3 py-md-0">

            <div class="form-group">
              <input type="text" class="form-control" id="usr" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="phone" class="form-control" id="phn" placeholder="Your Phone Number">
            </div>
          </div>

          <div class="col-md-6 py-3 py-md-0">

            <div class="form-group">
              <input type="email" class="form-control" id="eml" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="subject" class="form-control" id="sbj" placeholder="Subject">
            </div>
          </div>

        </div>
        <div class="form-group">
          <textarea class="form-control" rows="5" id="comment" placeholder="Type your Message"></textarea>

        </div>
        <div id="message"><button>Send Message</button></div>
        
      </div>

      </div>
      
   
  @endsection