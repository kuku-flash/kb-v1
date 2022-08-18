@extends('layouts.kingsbridge')
@section('content')


<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-1 text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block" >
					<h1>Buy & Sell Near You </h1>
					<div id="autotext">
						<div id="text"></div><div id="cursor"></div>
					</div>
					<div class="short-popular-category-list text-center">
						<h2>Popular Category</h2>
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-home"></i> Houses</a></li>
							<li class="list-inline-item">
								<a href="{{ route('vehicles_grid') }}"><i class="fa fa-car"></i> Vehicles</a>
							</li>
							<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-bed"></i> BnB</a>
							</li>
							<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-leaf"></i> Lands</a>
							</li>
							<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-building"></i> Commercials</a>
							</li>
							<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-taxi"></i> Car hire</a>
							</li>
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">
							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center">
										<form>
											<div class="form-row">
												<div class="form-group col-md-4">
													<input type="text" class="form-control my-2 my-lg-1" id="inputtext4" placeholder="What are you looking for">
												</div>
												<div class="form-group col-md-3">
													<select class="w-100 form-control mt-lg-1 mt-md-2">
														<option>Category</option>
														<option value="1">Top rated</option>
														<option value="2">Lowest Price</option>
														<option value="4">Highest Price</option>
													</select>
												</div>
												<div class="form-group col-md-3">
													<input type="text" class="form-control my-2 my-lg-1" id="inputLocation4" placeholder="Location">
												</div>
												<div class="form-group col-md-2 align-self-center">
													<button type="submit" class="btn btn-primary"><a href="{{ route('category') }}">Search Now</a></button>
													
												</div>
											</div>
										</form>
									</div>
								</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>

<!--===================================
=            Client Slider            =
====================================-->


<!--===========================================
--===========================================
=            Popular deals section            =
============================================-->

<section class="product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Ads</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide owl-drag">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light owl-drag">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/amg1.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">2013 Mercedes Benz E-Class AMG</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="{{ route('single') }}"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Mileage:<span class="car-li">19400Km</span></li>
					<li>Trans:<span class="car-li">Automatic</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Sale</p>
					<p class="price">Ksh9.4M</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/wrxsti.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">2012 Subaru WRX STI</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="{{ route('single') }}"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Mileage:<span class="car-li">19400Km</span></li>
					<li>Trans:<span class="car-li">Automatic</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Sale</p>
					<div class="price ">Ksh9000000M</div></a>
					
					</div>
		    </div>
		</div>
	</div>
</div>

					</div>
					<div class="col-sm-12 col-lg-4">


												<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/rundahs0.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">House located in Runda</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>House</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Runda</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
				<li><span class="car-li">Bedrooms:</span>5</li>
				<li><span class="car-li">Bathrooms:</span>4</li>
				<li><span class="car-li">Funished:</span>No</li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Rent</p>
					<p class="price">Ksh 150,000</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">

						<!-- product card -->
						
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/sclass.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">2015 Mercedes Benz S-class</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Mileage:<span class="car-li">19400Km</span></li>
					<li>Trans:<span class="car-li">Automatic</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Sale</p>
					<p class="price">Ksh9.4M</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">

						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/land1.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">Land located in karen 
		   </a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="{{ route('single') }}"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Acres:<span class="car-li">30</span></li>
					<li>Trans:<span class="car-li">Automatic</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Sale</p>
					<p class="price">Ksh9.4M</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>


					</div>
				</div>
			</div>
			
			
		</div>
	</div>
</section>
<!--==========================================
=           BNBs PACKAGE           =
===========================================-->
<section  class="product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Bed and Breakfast pakages(BnB) </h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quas, magnam.</p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="trending-ads-slide">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/BNB1.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">Apartemnt located in Kilimani</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="{{ route('single') }}"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Kilimani</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Rooms:<span class="car-li">3</span></li>
					<li>.....:<span class="car-li">...</span></li>
					<li>...:<span class="car-li">...</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">Per day</p>
					<p class="price">Ksh 14k</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/BNB2.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">Apartment located in Kitusuru</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="{{ route('single') }}"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Rooms:<span class="car-li">1</span></li>
					<li>...:<span class="car-li">...</span></li>
					<li>...:<span class="car-li">...</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">Per day</p>
					<p class="price">Ksh 10k</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">


												<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/rundahs0.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">House located in Runda</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>House</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Runda</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
				<li><span class="car-li">Bedrooms:</span>5</li>
				<li><span class="car-li">Bathrooms:</span>4</li>
				<li><span class="car-li">Parking:</span>6</li>
				<li><span class="car-li">Funished:</span>No</li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Rent</p>
					<div class="price">Ksh 150,000</div></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">

						<!-- product card -->
						
						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/sclass.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">2015 Mercedes Benz S-class</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Mileage:<span class="car-li">19400Km</span></li>
					<li>Trans:<span class="car-li">Automatic</span></li>

				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Sale</p>
					<p class="price">Ksh9.4M</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>



					</div>
					<div class="col-sm-12 col-lg-4">

						<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="{{ route('single') }}">
				<img class="index-img-fluid" src="images/land1.jpg" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('single') }}">Land located in karen 
		   </a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="{{ route('single') }}"><i class="fa fa-folder-open-o"></i>Cars</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Parklands</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Acres:<span class="car-li">30</span></li>
					<li>Year:<span class="car-li">2014</span></li>
					<li>Trans:<span class="car-li">Automatic</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">For Sale</p>
					<p class="price">Ksh9.4M</p></a>
					</div>
		    </div>
		</div>
	</div>
</div>


					</div>
				</div>
			</div>
			
		</div>
	</div>
		
	
</section>




<!--==========================================
=            All Category Section            =
===========================================-->

<section class=" section-categories">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-12">
				<!-- Section title -->
				<div class="section-title">
					<h2>All Categories</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis, provident!</p>
				</div>
				<div class="row">
<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-car icon-bg-3"></i> 
								<h4>Vehicles</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Cars <span>93</span></a></li>
								<li><a href="category.html">Buses <span>23</span></a></li>
								<li><a href="category.html">Motorcycles  <span>83</span></a></li>
								<li><a href="category.html">Trucks <span>33</span></a></li>
								<li><a href="category.html">Heavy Equipments <span>33</span></a></li>
							</ul>
						</div>
					</div> 
					<!-- /Category List -->

					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-3"></i> 
								<h4>Real Estate</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Houses <span>393</span></a></li>
								<li><a href="category.html">Apartments <span>23</span></a></li>
								<li><a href="category.html">Commercials  <span>13</span></a></li>
								<li><a href="category.html">Industrial<span>43</span></a></li>
							</ul>
						</div>
					</div> 
					<!-- /Category List -->

					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-home icon-bg-7"></i> 
								<h4>BnBs</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Houses <span>65</span></a></li>
								<li><a href="category.html">Apartments <span>23</span></a></li>
							</ul>
						</div>
					</div> 
					<!-- /Category List -->

					<!-- Category list -->
					<div class="col-lg-3 offset-lg-0 col-md-5 offset-md-1 col-sm-6 col-6">
						<div class="category-block">
							<div class="header">
								<i class="fa fa-taxi icon-bg-4"></i> 
								<h4>Car Hire</h4>
							</div>
							<ul class="category-list" >
								<li><a href="category.html">Saloons <span>53</span></a></li>
								<li><a href="category.html">Suvs <span>53</span></a></li>
							</ul>
						</div>
					</div> 
					<!-- /Category List -->

					
					
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
</section>


<!--====================================
=            Call to Action            =
=====================================-->

<section class="call-to-action overly bg-3 section-sm">
	<!-- Container Start -->
	<div class="container">
		<div class="row justify-content-md-center text-center">
			<div class="col-md-8">
				<div class="content-holder">
					<h2>Start today to get more exposure and
					grow your business</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a></li>
						<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser Listing</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->

	<script type="text/javascript">
    let thumbnails = document.getElementsByClassName('thumbnail')
    
    let activeImages = document.getElementsByClassName('active')
    
    for (var i=0; i < thumbnails.length; i++){
    
        thumbnails[i].addEventListener('click', function(){
            console.log(activeImages)
            
            if (activeImages.length > 1){
                activeImages[0].classList.remove('active')
            }
            
    
            this.classList.add('active')
            document.getElementById('featured').src = this.src
        })
    }        

	
		// List of sentences
var _CONTENT = [ 
"Buy, Sell and Consign", 
"Advertising a Purpose, a Car at a Time,", 
"With KingsBridge you get your money’s worth!!!.", 
"Buy, Sell, Consign,"
];

// Current sentence being processed
var _PART = 0;

// Character number of the current sentence being processed 
var _PART_INDEX = 0;

// Holds the handle returned from setInterval
var _INTERVAL_VAL;

// Element that holds the text
var _ELEMENT = document.querySelector("#text");

// Cursor element 
var _CURSOR = document.querySelector("#cursor");

// Implements typing effect
function Type() { 
// Get substring with 1 characater added
var text =  _CONTENT[_PART].substring(0, _PART_INDEX + 1);
_ELEMENT.innerHTML = text;
_PART_INDEX++;

// If full sentence has been displayed then start to delete the sentence after some time
if(text === _CONTENT[_PART]) {
// Hide the cursor
_CURSOR.style.display = 'none';

clearInterval(_INTERVAL_VAL);
setTimeout(function() {
	_INTERVAL_VAL = setInterval(Delete, 50);
}, 1000);
}
}

// Implements deleting effect
function Delete() {
// Get substring with 1 characater deleted
var text =  _CONTENT[_PART].substring(0, _PART_INDEX - 1);
_ELEMENT.innerHTML = text;
_PART_INDEX--;

// If sentence has been deleted then start to display the next sentence
if(text === '') {
clearInterval(_INTERVAL_VAL);

// If current sentence was last then display the first one, else move to the next
if(_PART == (_CONTENT.length - 1))
	_PART = 0;
else
	_PART++;

_PART_INDEX = 0;

// Start to display the next sentence after some time
setTimeout(function() {
	_CURSOR.style.display = 'inline-block';
	_INTERVAL_VAL = setInterval(Type, 100);
}, 200);
}
}

// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 100);






	</script>
</section>

 @endsection