@extends('layouts.kingsbridge')
<section class="nav-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/king2.png')}}" 
            style=" width:55px; height:50px;vertical-align: middle;padding-left: 0px;padding-right: 0px; padding-top: 0px; border-style: none; " ><span style="color:#d4af37">Kings</span><span>bridge</span></a>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item {{ request()->routeIs('/') ? 'active' : '' }}">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about_us') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('about_us')}}">About Us</a>
                </li>
                <li class="nav-item {{ request()->routeIs('vehiclelist') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('vehicleslist')}}">Buy a Vehicle</a>
                </li>                 
                <li class="nav-item {{ request()->routeIs('carevent') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('carevent')}}">Car Events</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about_us') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('about_us')}}">Garages</a>
                </li>
           
              </ul>
              <ul class="navbar-nav ml-auto mt-10">
                @guest
                
                @if ((Route::has('signup')))
                <li class="nav-item">
                  <a class="nav-link login-button " href="{{ route('signup')}}">Sign Up</a>
                </li>
              @endif

                @if ((Route::has('user.login')))
                    <li class="nav-item">
                      <a class="nav-link login-button " href="{{ route('user.login')}}">Login</a>
                    </li>
                @endif
                @if ((Route::has('user.listing')))
                <li class="nav-item">
                  <a class="nav-link text-white add-button" href="{{ route('user.listing')}}"><i class="fa fa-plus-circle"></i> Add Listing</a>
                </li>
                @endif
                @else
              
                   <li class="nav-item dropdown dropdown-slide">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }} <span></i></span>
                    </a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('user.my_list')}}"> My List</a>
             <!--       <a class="dropdown-item" href="{{route('user.index_carhire')}}">Carhire</a> -->
                    <a class="dropdown-item" href="{{route('user.carevent')}}"> Events</a>
                    <a class="dropdown-item" href="{{route('user.invoice.index')}}">Invoices</a> 
                    <a class="dropdown-item" href="#">Payments</a> 
                    <a class="dropdown-item" href="{{ route('user.user_profile', Auth::user()->id )}}">User Profile</a> 
                    <a class="dropdown-item" href="{{ route('logout') }}"
                     onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                     <i class="icon-key"></i> <span>Logout</span>
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
                    </div>
                  </li> 
                  <li class="nav-item">
                    <a class="nav-link text-white add-button" href="{{ route('user.new_listing')}}"><i class="fa fa-plus-circle"></i> Add Listing</a>
                  </li>
                @endguest
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block" >
					<h1>Garages</h1>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
					
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="{{ route('vehicleslist') }}"><i class="fa fa-car"></i> Vehicles</a>
							</li>
						</ul>
					</div>
					
				</div>				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<div class="Hdrive text-center my-3">
	<div class = "container">
	<div class="col-md-12">
		<div class="section-title">
			<h2>Garages</h2>
		</div>
	</div>
    <div class="row">
    @foreach ($garages as $j => $garage)
        <div class="col-sm col-md-4 col-lg-4">
            <!-- event card -->
            <div class="product-item bg-light" style="margin-right: 10px;"> <!-- Adjust this value as needed -->
            <div class="card">
                    <div class="thumb-content">
                        <div class="price">Garage</div>
                        <a href="">
                            <!-- Display event image -->
                            <img class="card-img-top category-img-fluid" src="/storage/app/{{ $garage->front_img }}" alt="Garage Image" style="max-height: 400px;">
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="mdl-card__title">
                            <!-- Display event title -->
                            <h2 style="font-weight: 450; font-size: 20px;" class="mdl-card__title-text">{{ $garage->garage_title }}</h2>
                        </div>
                        <div class="mdl-card__supporting-text">
                            <p class="card-text">
                                <ul class="styled-list">
                                    <!-- Display event details -->
                                    <li><b>Location:</b> <span>{{ $garage->garage_location }}</span></li>
                                    <li><b>Description:</b> <span>{!! strip_tags($garage->garage_description) !!}</span></li>
                                    </ul>
                                    </p>
                                    </div>                                              
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

</div>

</div>
