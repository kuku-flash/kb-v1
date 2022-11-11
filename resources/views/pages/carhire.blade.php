@extends('layouts.kingsbridge')
@section('content')


<!--===============================
=            Hero Area            =
================================-->

<section class="hero-area bg-carhire text-center overly">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Header Contetnt -->
				<div class="content-block" >
					<h1 style="color: #ffffff;">
                       Looking For Car to Hire
                    </h1>
				
					<div class="short-popular-category-list text-center">
						<h2>Featured Categories</h2>
						
						<ul class="list-inline">
							<li class="list-inline-item">
								<a href="{{ route('vehicleslist') }}"><i class="fa fa-car"></i> Vehicles</a>
							</li>
							<li class="list-inline-item">
								<a href="{{ route('carhire') }}"><i class="fa fa-taxi"></i> Car Hire</a>
							</li>

							<li class="list-inline-item">
								<a href="#"><i class="fa fa-wrench"></i> Vehicle Parts</a>
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
				<div class="advance-search" style="border-radius: 20px;">
						<div class="container">

							<div class="row justify-content-center">
								
									<div class="col-lg-12 col-md-12 align-content-center hire">
										<form action="{{ route('carhirelist') }}" method="get">
											<div class="form-row">
												<div class=" form-group col-md-2">
                                                    <h6 class="font-weight-bold ">Car Make</h6>
													<select name="make" class="make form-control ">
													<option value="">Choose a Make</option>
										
													@foreach($makes as $make)
														<option value="{{ $make->id }}" {{(old('make'))? 'selected':''}}>{{ $make->make }}</option>
													@endforeach
												</select>												
												</div>
									
												<div class="carmodel form-group col-md-2">
                                                    <h6 class="font-weight-bold ">Car Model</h6>													
												<select name="model_id" class="model form-control ">
													<option value="0"  disabled="true" selected="true">Choose a model</option>

												</select>
												
												</div>
									
												<div class="form-group col-md-2">
                                                    <h6 class="font-weight-bold ">Location</h6>
													<select name="city" id="inputGroupSelect" class="form-control">
														<option value="">Select City</option>
														@foreach ($cities as $city )
														 <option value="{{ $city->id }}" {{(old('city')==$city->id)? 'selected':''}}>
														  {{ $city->city }}</option> 
														@endforeach
													</select>
											
												</div>
												<div class="form-group col-md-2">
													<h6 class="font-weight-bold "> Pickup Date</h6>
													<input class="form-control" type="date" name="pickup" >
												</div>
												<div class="form-group col-md-2">
													<h6 class="font-weight-bold "> Return Date</h6>
													<input class="form-control" type="date" name="return" placeholder="ReturnDate" >
												</div>

												<div class="form-group col-md-2 ">
                                                    <h6 class="font-weight-bold "><br></h6>
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


<!--===========================================
--===========================================
=            Popular deals section            =
============================================-->

<section class="product mt-5">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Trending Ads</h2>
				</div>
                <p class="text-center">It focus is bringing car-hiring businesses in kenya to one place. It also provide services of listing your vehicles for sale, and listing your businesses for vehicles parts and accessories.
                </p>
			</div>
		</div>
		<div class="row">



@foreach ($listings as $listing )		
@foreach ($vehicles as $vehicle)
@if ($listing->id == $vehicle->listing_id)

<div class="col-lg-4">
<div class="slide product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">{{ $listing->package->package_name}}</div>
			<a href="#">
				<img class="index-img-fluid" src="/storage/photos/{{ $vehicle->front_img }}" alt="">
			</a>
		</div>
		<div class="card-body">
		   <h4 class="card-title"><a href="{{ route('showcarhire', [$listing->id, $vehicle->id])}}">
            {{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->year_of_build}}
            </a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-folder-open-o"></i>{{ $listing->category->category_name}}</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>{{ $listing->city->city}}</a>
		    	</li>
		    </ul>
		    <div class="product-ratings">
		    	<ul class="trending-horizontal">
					<li>Pickup:<span class="car-li">{{ $vehicle->pickup_date }}</span></li>
					<li>Return:<span class="car-li">{{ $vehicle->return_date }}</span></li>
				</ul>  
				<div class="property-price">
					<p class="badge-sale">Hire/Day</p>
					<p class="price">{{ $vehicle->price_per_day }}</p></a>
					</div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif	
@endforeach
@endforeach   

       
		</div>
	</div>
</section>
<!--==========================================
=           CAR HIRE PACKAGE           =
===========================================-->
<section  class="product">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="section-title">
					<h2>Car Hire Services</h2>
					<p>Find the best rental prices on luxury, economy, and family rental cars </p>
				</div>
			</div>
		</div>
		<div class="row">
			<!-- offer 01 -->
			<div class="col-lg-12">
				<div class="slider owl-drag">
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
					<div class="col-sm-12 col-lg-4">
						<!-- product card -->
<div class="slide product-item bg-light">
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
					<p class="badge-sale">For Hire</p>
					<div class="price ">Ksh9000000M</div></a>
					
					</div>
		    </div>
		</div>
	</div>
</div>

					</div>
					<div class="col-sm-12 col-lg-4">


												<!-- product card -->
<div class="slide product-item bg-light">
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
<div class="slide product-item bg-light">
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
<div class="slide product-item bg-light">
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
					<div class="card-body">
					  <h5 class="why-title">Special title treatment</h5>
					  <p class="why-text">
						  With supporting text below as a natural lead-in to additional content.
						With supporting text below as a natural lead-in to additional content.
						With supporting text below as a natural lead-in to additional content.
					  </p>
					  <li class="why-btn-alighn" "><a class="btn btn-main" href="ad-listing.html">Learn more</a></li>
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
<!--===================================
=           Our Partners           =
====================================-->

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

</script>

	
</section>

 @endsection