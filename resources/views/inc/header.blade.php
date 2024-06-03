  <nav class="navbar navbar-expand-md" id="navbar">
    <!-- Brand -->
    <a class="navbar-brand" href="#" id="logo"><img src="logo.png" alt="" width="30px" style="margin-bottom: 10px; margin-right: 10px;">Online Shop</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span><img src="menu.png" alt="" width="20px"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="">Home</a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Category</a>
        </li> -->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            @foreach ($categories as $category)
            
             <a href="{{ route('home-category-page', $category->id) }}" class="nav-item nav-link">{{ $category->name }}</a>

             @endforeach
            
            
            </ul>
          </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Shop</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('products')}}">Product</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('logout')}}">Logout</a>
        </li> 
      </ul>
      
    </div>
    <div class="icons d-flex align-items-cent">
    <form class="d-flex flex-grow-1" id="search" action="{{ route('search-home') }}" method="GET">
        <input name="search" class="for m-control me-2 rounded-pill mt-2" type="search" placeholder="Search ....." aria-label="Search">
        <button class="btn btn-outline-success mt-2" type="submit">Search</button>
    </form> 
    <div class="d-flex align-items-center ms-3">
      @if(Auth::check())
      <a href=""> <img src="{{ url('images/user.png') }}" alt="" width="20px">{{Auth::user()->name}}</a>
      @else
      <a href="{{route('login')}}"> <img src="{{ url('images/user.png') }}" alt="" width="20px"></a>
    @endif
      <a class="ms-2" href="{{ route('page-card') }}">
            <small class="fa fa-shopping-bag text-body"></small>  
            @php
            $cartItems = session('cart');
            $cartCount = is_array($cartItems) ? array_sum(array_column($cartItems, 'quantity')) : 0;
            @endphp
            <!-- {{ $cartCount }} -->
            <img src="{{ url('images/shopping-cart (3).png') }}" alt="" width="20px">
        </a> 
    </div>
</div>
  </nav>

      <!-- navbar -->
      
      <!-- home section -->
      <section class="home" id="home" >

          <div class="content">
              <h3>The Biggest Sale
              </h3>
              <h2>Category <span class="changecontent"></span></h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur, voluptatem
                  <br>Lorem ipsum dolor sit amet.
              </p>
              <h5>50% OFF</h5>
              <a href="#" class="btn">Add Cart</a>
              
          </div>
          <div class="img">
              <img src="{{url('images/background.png')}}" alt="">
          </div>
        </section>
        <div class="container" style="margin-top: 50px;">
          <div class="row" id="t-cards">
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <img src="{{url('images/img1.png')}}" alt="">
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <img src="{{url('images/img2.png')}}" alt=""> 
                  </div>
              </div>
              <div class="col-md-4 py-3 py-md-0">
                  <div class="card">
                      <img src="{{url('images/img3.png')}}" alt="">
                  </div>
              </div>
          </div>
        </div>