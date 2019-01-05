      @include('includes.public.login_modal')
      @include('includes.public.register_modal')
      <div class="navbar-top bg-success pt-2 pb-2">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12 text-center">
                  <a href="shop.html" class="mb-0 text-white">
                  20% cashback for new users | Code: <strong><span class="text-light">OGOFERS13 <span class="mdi mdi-tag-faces"></span></span> </strong>  
                  </a>
               </div>
            </div>
         </div>
      </div>
      <nav class="navbar navbar-light navbar-expand-lg bg-dark bg-faded osahan-menu">
         <div class="container-fluid">
            <a class="navbar-brand" href="index.html"> <img src="{{ asset('img/logo.png') }}" alt="logo"> </a>
            <a class="location-top" href="#"><i class="mdi mdi-map-marker-circle" aria-hidden="true"></i> Calgary</a>
            <button class="navbar-toggler navbar-toggler-white" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse" id="navbarNavDropdown">
               <div class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto top-categories-search-main">
                  <div class="top-categories-search">
                     <div class="input-group">
                        <span class="input-group-btn categories-dropdown">
                           <select class="form-control-select">
                              <option selected="selected">Your City</option>
                              <option value="0">New Delhi</option>
                              <option value="2">Bengaluru</option>
                              <option value="3">Hyderabad</option>
                              <option value="4">Kolkata</option>
                           </select>
                        </span>
                        <input class="form-control" placeholder="Search products in Your City" aria-label="Search products in Your City" type="text">
                        <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button"><i class="mdi mdi-file-find"></i> Search</button>
                        </span>
                     </div>
                  </div>
               </div>
               <div class="my-2 my-lg-0">
                  <ul class="list-inline main-nav-right">
                     @auth
                     <li class="list-inline-item">
                        <a href="{{ url('/home') }}" class="btn btn-link"><i class="mdi mdi-account-check"></i> {{ Auth::user()->name }}'s Dashboard</a>
                     </li>
                     @else
                     <li class="list-inline-item">
                        <a href="#" data-target="#login-modal" data-toggle="modal" class="btn btn-link"><i class="mdi mdi-lock"></i> Login</a>
                     </li>
                      <li class="list-inline-item">
                        <a href="#" data-target="#register-modal" data-toggle="modal" class="btn btn-link"><i class="mdi mdi-account-plus"></i> Sign Up</a>
                     </li>
                      @endauth
                     <li class="list-inline-item cart-btn">
                        <a href="#" data-toggle="offcanvas" class="btn btn-link border-none"><i class="mdi mdi-cart"></i> My Cart <small class="cart-value">5</small></a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <nav class="navbar navbar-expand-lg navbar-light osahan-menu-2 pad-none-mobile">
         <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
               <ul class="navbar-nav mr-auto mt-2 mt-lg-0 margin-auto">
                  <li class="nav-item">
                     <a class="nav-link shop" href="index.html"><span class="mdi mdi-store"></span> African Food Deals</a>
                  </li>
                  <li class="nav-item">
                     <a href="index.html" class="nav-link">Home</a>
                  </li>
                  <li class="nav-item">
                     <a href="about.html" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="shop.html">Grocery</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="shop.html">Staples</a>
                  </li>
                  @auth
                  <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     My Account
                     </a>
                     <div class="dropdown-menu">
                        <a class="dropdown-item" href="my-profile.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  My Profile</a>
                        <a class="dropdown-item" href="my-address.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  My Address</a>
                        <a class="dropdown-item" href="wishlist.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Wish List </a>
                        <a class="dropdown-item" href="orderlist.html"><i class="mdi mdi-chevron-right" aria-hidden="true"></i>  Order List</a> 
                     </div>
                  </li>
                  @endauth
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('/blog') }}">Blog</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>