<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- SITE TITTLE -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>KingsBridgeMotors</title>
    
    <!-- FAVICON -->
    <link href="img/king.png" rel="shortcut icon">
    <!-- PLUGINS CSS STYLE -->
    <!-- <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet"> -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap-slider.css')}}">
    <!-- Font Awesome -->
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css')}}" >
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css')}}" >
    <!-- Fancy Box -->
    <link rel="stylesheet"  href="{{ asset('plugins/fancybox/jquery.fancybox.pack.css')}}" >
 <link rel="stylesheet" href="{{ asset('plugins/jquery-nice-select/css/nice-select.css')}}" > 
    <!-- CUSTOM CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}" >
    <link rel="stylesheet"  href="{{ asset('plugins/font-awesome/css/font-awesome.min.css')}}" >
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick.css')}}" >
    <link rel="stylesheet" href="{{ asset('plugins/slick-carousel/slick/slick-theme.css')}}" >

    

  
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  </head>
  
  <body class="body-wrapper">
  
  
  <section class="nav-bg">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar  ftco-navbar-light" id="ftco-navbar">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/king2.png')}}" 
            style=" width:55px; height:50px;vertical-align: middle;padding-left: 0px;padding-right: 0px; padding-top: 0px; border-style: none; " ><span style="color:#d4af37">Kings</span><span>bridge motors</span></a>
  
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
             aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
  
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto main-nav ">
                <li class="nav-item {{ request()->routeIs('index') ? 'active' : '' }}">
                  <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item {{ request()->routeIs('about_us') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('about_us')}}">About Us</a>
                </li>              
                <li class="nav-item {{ request()->routeIs('vehicleslist') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('vehicleslist')}}">Buy a Vehicle</a>
                </li> 
                                
                <li class="nav-item {{ request()->routeIs('spareparts') ? 'active' : '' }}">
                  <a class="nav-link" href="{{route('spareparts')}}">Spare Parts</a>
                </li>
             
                <li class="nav-item {{ request()->routeIs('carevent') ? 'active' : '' }}">
                  <a class="nav-link" href="{{ route('carevent') }}">Car Events</a>
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
                    <a class="dropdown-item" href="{{route('user.userevent')}}">Events</a>
                    <a class="dropdown-item" href="{{route('user.myspareparts')}}">Spare Parts</a> 
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



  @yield('content')



  <!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <a class="navbar-brand" href="/"><img src="{{ asset('images/king2.png')}}" 
          style=" width:55px; height:50px;vertical-align: middle;padding-left: 0px;padding-right: 0px; padding-top: 0px; border-style: none; "><span style="color:#d4af37">Kings</span><span style="color:#aaa9ad">bridge</span></a><p>Kingsbridge</p></a>
          <p>The leading online platform that sells, vehicles, promoting car events and garage owners.</p>
          <ul class="ftco-footer-social  float-md-left float-lft mt-5">
            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block">
          <h4>Site Pages</h4>
          <ul>
            <li><a href="#">Blog</a></li>
            <li><a href="#">How It works</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="terms-condition.html">Terms & Conditions</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block">
          <h4>Admin Pages</h4>
          <ul>
            <li><a href="category.html">Category</a></li>
            <li><a href="single.html">Single Page</a></li>
            <li><a href="store.html">Store Single</a></li>
            <li><a href="single-blog.html">Single Post</a>
            </li>
            <li><a href="blog.html">Blog</a></li>



          </ul>
        </div>
      </div>



      <div class="col-lg-3 col-md-3 offset-md-1 offset-lg-0">
          <div class="block block-23 mb-3">
            <h4>Have a question?</h4>
          <ul>
            <li><span class="icon fa fa-map-marker"></span><span class="text">Nandi Road, Karen, Nairobi, Kenya,at Nandi Road, Karen.</span></li>
	                <li><span class="icon fa fa-phone"></span><span class="text">+254 703126261</span></li>
	                <li><span class="icon fa fa-envelope-o"></span><span class="text">info@kingsbridgeke.com</span></li>



          </ul>
        </div>
      </div>

    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- Copyright -->
        <div class="copyright">
          <p>Copyright © <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script>. Kingsbridgemotors</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
  <!-- To Top -->
  <div class="top-to">
    <a id="top" class="" href="#"><i class="fa fa-angle-up"></i></a>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>	
<script src="{{ asset('plugins/jquery-2.2.0.min.js')}}"></script>
<!-- JAVASCRIPTS -->
<script src="{{ asset('plugins/jquery.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap-slider.js')}}"></script>
  <!-- tether js -->
   <!-- Swiper JS -->
   <script src="js/swiper-bundle.min.js"></script>
<script src="{{ asset('plugins/tether/js/tether.min.js')}}"></script>
<script src="{{ asset('plugins/raty/jquery.raty-fa.js')}}"></script>
<script src="{{ asset('plugins/slick-carousel/slick/slick.min.js')}}"></script>
<script src="{{ asset('https://kit.fontawesome.com/a354c8bd18.js" crossorigin="anonymous"')}}"></script>

<script src="{{ asset('plugins/fancybox/jquery.fancybox.pack.js')}}"></script>
<script src="{{ asset('plugins/smoothscroll/SmoothScroll.min.js')}}"></script>
<script src="{{ asset('plugins/conditional-field/conditional-field.min.js')}}"></script>


  <!-- <script src="{{ asset('plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script> -->
<script src="{{ asset('plugins/google-map/gmap.js')}}"></script>
<script src="{{ asset('js/script.js')}}"></script>
<script src="/path/to/flickity.pkgd.min.js"></script>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="jquery.numberformatter.js"></script>

<script>
function addCommas(nStr)
{
    nStr += '';
    x = nStr.split('.');
    x1 = x[0];
    x2 = x.length > 1 ? '.' + x[1] : '';
    var rgx = /(\d+)(\d{3})/;
    while (rgx.test(x1)) {
        x1 = x1.replace(rgx, '$1' + ',' + '$2');
    }
    return x1 + x2;
}
$(".price").each(function() {
   var self = $(this), text = self.text();
   self.html("<div>" + addCommas(text) + "</div>");
});
</script>

</body>

</html>



