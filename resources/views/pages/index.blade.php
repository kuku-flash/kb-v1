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
								<a href="{{ route('vehicleslist') }}"><i class="fa fa-car"></i> Vehicles</a>
							</li>
						
							<!--
								<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-bed"></i> BnB</a>
							</li>
								<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-home"></i> Houses</a>
							</li> 
								<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-building"></i> Commercials</a>
							</li>
							<li class="list-inline-item">
								<a href="{{ route('category') }}"><i class="fa fa-taxi"></i> Car hire</a>
							</li> -->
						</ul>
					</div>
					
				</div>
				<!-- Advance Search -->
				<div class="advance-search">
						<div class="container">

							<div class="row justify-content-center">
								<div class="col-lg-12 col-md-12 align-content-center  sale" >
										<form action="{{ route('vehicle_search') }}" method="get">
											<div class="form-row">
												<div class=" form-group col-md-2">
													<select name="make" class="make form-control ">
													<option value="" data-live-search="true">Choose a Make</option>
										
													@foreach($makes as $make)
														<option value="{{ $make->id }}" {{(old('make'))? 'selected':''}}>{{ $make->make }}</option>
													@endforeach
												</select>
													@error('make_id')
													<span class="invalid"  role="alert">
														<strong>{{ $message }}</strong>
													</span>
													@enderror
												</div>
									
												<div class="carmodel form-group col-md-2">
													
												<select name="model_id" class="model form-control ">
													<option value="0"  disabled="true" selected="true" data-live-search="true">Choose a model</option>

												</select>
												
												</div>
									
												<div class="form-group col-md-2">
													<select name="city" id="inputGroupSelect" class="form-control">
														<option value="">Select City</option>
														@foreach ($cities as $city )
														 <option value="{{ $city->id }}" {{(old('city')==$city->id)? 'selected':''}}>
														  {{ $city->city }}</option> 
														@endforeach
													</select>
								
												</div>
												<div class="form-group col-md-2">
													<select name="price" id="inputGroupSelect" class="form-control">
														<option value="">Max Price</option>
														<option value="10000000">100,000,000</option>
														<option value="50000000">50,000,000</option>
														<option value="10000000">10,000,000</option>
														<option value="5000000">5,000,000</option>
														<option value="1000000">1,000,000</option>
													</select>
								
												</div>
												<div class="form-group col-md-2">
													<select name="price" id="inputGroupSelect" class="form-control">
														<option value="">Min Price</option>
														<option value="900000">900,000</option>
														<option value="700000">700,000</option>
														<option value="500000">500,000</option>
														
													</select>
								
												</div>

												<div class="form-group col-md-2 ">
													<button type="submit" class="btn btn-primary" style="padding: 8px; 30px;">Search Now</button>
													
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

<div class="Hdrive text-center my-3">
	<div class="col-md-12">
		<div class="section-title">
			<h2>Find your drive</h2>
		</div>
	</div>
    <div class="Hdrive row">
		
        <div class="carousel  owl-carousel  w-100" data-ride="carousel">
			
			
			@foreach ($listings as $listing )		
			@foreach ($vehicles as $vehicle)
			@if ($listing->id == $vehicle->listing_id)
		
			<div class="carousel-item active">
						<div class="col-sm-4 col-md-4 col-lg-4 " >
							<!-- product card -->
							
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price"> {{ $listing->package->package_name}}</div>
										<a href="{{ route('vehicle', [$listing->id, $vehicle->id])}}">
											
											<img class="card-img-top category-img-fluid" src="/storage/photos/{{ $vehicle->front_img }}" alt=""style="max-height: 400px;">
											
										</a>
									<div class="img-count">
										<svg style="color:#d4af37;" 
										xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" 
										class="bi bi-camera-fill" viewBox="0 0 16 16"> 
										<path d="M10.5 8.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" fill="#ffd040">
											</path>
											 <path d="M2 4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-1.172a2 2 0 0 1-1.414-.586l-.828-.828A2 2 0 0 0 9.172 2H6.828a2 2 0 0 0-1.414.586l-.828.828A2 2 0 0 1 3.172 4H2zm.5 2a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm9 2.5a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0z" fill="#ffd040">
												</path> </svg>
										 <h2 class="text-white"> {{$listings->count()}}</h2>
									</div>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="{{ route('vehicle', [$listing->id, $vehicle->id])}}">{{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->year_of_build}}</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="{{ route('vehicle', [$listing->id, $vehicle->id])}}"><i class="fa fa-folder-open-o"></i>{{ $listing->category->category_name}}</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>{{ $listing->city->city}} </a>
											</li>
										</ul>
										<a href="{{ route('vehicle', [$listing->id, $vehicle->id])}}">
											<ul class="styled-list">
												<li ><b>Engine Size:</b><span>{{ $vehicle->engine_size}}</span></li>
												<li ><b>Trans:</b><span >{{ $vehicle->transmission}}</span></li>
												<li ><b>Miles:</b><span>{{ $vehicle->mileage}}Km</span></li>
												<li ><b>Fuel:</b><span>{{ $vehicle->fuel_type}}</span></li>
				
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Sale</p>
											<p class="price">Ksh {{ $vehicle->price}}</p>
											</div>
											<div>
											
											
												</div>
											</div>
										</div>
										</a>
									</div>
								</div>
					
									@endif	
									@endforeach
									@endforeach
									
           
            <a class="slick-prev" role="button" data-slide="prev">
                <span class="sr-only">Previous</span>
            </a>
            <a class="slick-next"  role="button" data-slide="next">
                <span class="sr-only">Next</span>
            </a>
			
        </div>
                
    </div>
</div>

<!--===================================
=           Our Partners           =
====================================-->
<!--
<section class="product">
	<p style="font-weight: 450; font-size:20px; text-align: center;"> <b>Our Partners</b></p>
	<div class="slider ">
		<div> <img src="../images/king2.png" alt="" style='width: 50px; height: 50px;'>
		</div>
		<div><img src="../images/GarageGallery Logo.jpg" alt="" style='width: 50px; height: 50px;'>
		</div>
		<div><img src="../images/sti.png" alt="" style='width: 50px; height:50px;'>
		</div>
		<div><img src="../images/benz.jpg" alt="" style='width: 50px; height: 50px;'>
		</div>
		<div><img src="../images/king2.png" alt="" style='width: 50px; height: 50px;'>
		</div>
		<div><img src="../images/king2.png" alt="" style='width: 50px; height: 50px;'>
		</div>
	  </div>
</section>
-->
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
				<div class="owl-drag">
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="product-item bg-light owl-drag">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Silver Package</div>
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
			</div>
			
			
		</div>
	</div>
</section>
<!--==========================================
=          Why KingsBridge            =
===========================================-->
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="section-title section-why-title">
				<h2>Why KingsBridge?</h2>
				<p>we dont just sell cars we sell a lifestyle </p>
			</div>
		</div>
		<div class="col-sm-6">
		  <div class="whycard">
			<div class="card-bodyy">
			  <h5 class="why-title">Customizable Pricing</h5>
			  <p class="why-text">
				We offer a unique and customizable pricing model that allows our customers to choose the package that best fits their needs and budget.
				 With options ranging from basic to premium listings, 
				our platform is accessible to car owners of all types and sizes, making it a one-stop-shop for all car needs.
			  </p>
			  <li class="why-btn-alighn" "><a class="btn btn-main" href="ad-listing.html">Learn more</a></li>
			</div>
		  </div>
		</div>
		<div class="col-sm-6">
		  <div class="whycard">
			<div class="card-bodyy">
			  <h5 class="why-title">Trust and Security</h5>
			  <p class="why-text">
				Our strict vetting process and fraud prevention measures ensure a secure and reliable rental experience.
			  </p>
			  <li class="why-btn-alighn""><a class="btn btn-main" href="ad-listing.html">Learn more</a></li>
			</div>
		  </div>
		</div>

		<div class="col-sm-6">
			<div class="whycard">
			  <div class="card-bodyy">
				<h5 class="why-title">Special title treatment</h5>
				<p class="why-text">
					With supporting text below as a natural lead-in to additional content.
					With supporting text below as a natural lead-in to additional content.
					With supporting text below as a natural lead-in to additional content.
				</p>
				<li class="why-btn-alighn""><a class="btn btn-main" href="ad-listing.html">Learn more</a></li>
			  </div>
			</div>
		  </div>
		  <div class="col-sm-6">
			<div class="whycard">
			  <div class="card-body">
				<h5 class="why-title">Special title treatment</h5>
				<p class="why-text">
					With supporting text below as a natural lead-in to additional content.
					With supporting text below as a natural lead-in to additional content.
					With supporting text below as a natural lead-in to additional content.
				</p>
				<li class="why-btn-alighn"><a class="btn btn-main" href="ad-listing.html">Learn more</a></li>
			  </div>
			</div>
		  </div>
	  </div>
</div>
</div>


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
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="owl-drag">
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
					<p class="badge-sale">For Hire</p>
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

</section>


<!--==========================================
=        Join the Largest car community  =
===========================================-->
<section class="section-join">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="grid-flex">
				<div class="block about">
					<h2>Start today to get more exposure and
					grow your business</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Join Today</a></li>
					</ul>
				</div>
			</div>
			<div class="join ">
				<img class="joinimg1" src="../images/call-to-action/Buying.svg" alt="Pineapple" width="230" height="170">
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
					<h2>Join the largest community of vehicle enthusiasts</h2>
					<ul class="list-inline mt-30">
						<li class="list-inline-item"><a class="btn btn-main" href="ad-listing.html">Add Listing</a></li>
						<li class="list-inline-item"><a class="btn btn-secondary" href="category.html">Browser Listing</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- Container End -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(document).ready(function(){
$(document).on('change','.make',function(){
// console.log("hmm its change");
var make_id=$(this).val();
// console.log(cat_id);
var div=$("div.carmodel").parent();
var option=" ";
$.ajax({
	type:'get',
	url:'{!!URL::to('carmodel')!!}',
	data:{'id':make_id},
	success:function(data)
	{
		for(var i=0;i<data.length;i++)
		{
			option+='<option value="'+data[i].id+'">'+data[i].model+'</option>';
			
		}
			div.find('.model').html(" ");
			div.find('.model').append(option);
	},
	
	error:function(){    }
});
});
});
$(document).ready(function(){
    new ConditionalField({
          control: ' .select-field',
          visibility: {
            'sale': '.sale',
            'hire': '.hire',
            'parts': '.parts'
          }
        });

});
</script>
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
"Buy and Sell", 
"Advertising a Purpose, a Car at a Time,", 
"With KingsBridge you get your money’s worth!!!.", 
"You're in control, choose the right package to sell your car ."
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

/// Start the typing effect on load
_INTERVAL_VAL = setInterval(Type, 100);

window.onload=function(){
  $('.slider').slick({
  autoplay:true,
  autoplaySpeed:1500,
  arrows:true,
  prevArrow:'<button type="button" class="slick-prev"></button>',
  nextArrow:'<button type="button" class="slick-next"></button>',
  centerMode:true,
  slidesToShow:3,
  slidesToScroll:2
  
  });
  
};


</script>
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
"The largest community of car enthusiasts.", 
"From Car hiring services,,", 
"selling of vehicles and selling of vehicles parts. ", 
"All under one roof."
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



window.onload=function(){
$('.slider').slick({
autoplay:true,
autoplaySpeed:1500,
arrows:true,
prevArrow:'<button type="button" class="slick-prev"></button>',
nextArrow:'<button type="button" class="slick-next"></button>',
centerMode:true,
slidesToShow:3,
slidesToScroll:2

});

};

$('#recipeCarousel').carousel({
interval: 10000
})

$('.carousel .carousel-item').each(function(){
var minPerSlide = 3;
var next = $(this).next();
if (!next.length) {
next = $(this).siblings(':first');
}
next.children(':first-child').clone().appendTo($(this));

for (var i=0;i<minPerSlide;i++) {
	next=next.next();
	if (!next.length) {
		next = $(this).siblings(':first');
	  }
	
	next.children(':first-child').clone().appendTo($(this));
  }
});


</script>

<script src="node_modules/@glidejs/glide/dist/glide.min.js"></script>

<script>
  new Glide('.glide').mount()
</script>

	
</section>

 @endsection