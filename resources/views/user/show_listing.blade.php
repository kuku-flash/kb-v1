@extends('layouts.kingsbridge')
@section('content')


<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<a href="{{ route('user.edit_listing', [$listing->id, $vehicle->id])}}" class="btn btn-primary">Edit</a>
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title"> {{ $vehicle->title}}  {{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->carmodel->model_year}}</h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item"><i class="fa fa-money"></i> KSH {{ $vehicle->price}}</li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="">{{ $listing->category->category_name}}</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="">{{ $listing->city->city}}</a></li>
						</ul>
					</div>

<section>
	<div class=" main single-item slider">
	<div class="main" > 
		@if ($vehicle->front_img)
		<img   src="/storage/photos/{{ $vehicle->front_img }}">
		@endif
	</div>
	<div  class="main">
		<img  src="/storage/photos/{{ $vehicle->back_img }}">
	</div>
	<div class="main">
		<img   src="/storage/photos/{{ $vehicle->right_img }}">
	</div>
	<div class="main" >
		<img  src="/storage/photos/{{ $vehicle->left_img }}">
		</div>
		<div class="main" >
		<img  src="/storage/photos/{{ $vehicle->interiorf_img }}">
		</div>
		<div class="main">
		<img   src="/storage/photos/{{ $vehicle->interiorb_img }}">
		</div>
		
		@if ($vehicle->engine_img)
		<div class="main">
		<img   src="/storage/photos/{{ $vehicle->engine_img }}">
		</div>
		@endif
	
		<div class="main">
		<img  src="/storage/photos/{{ $vehicle->opt_img1 }}">
		</div>
		<div class="main" >
		<img  src="/storage/photos/{{ $vehicle->opt_img2 }}">
		</div>
		<div class="main">
		<img   src="/storage/photos/{{ $vehicle->opt_img3 }}">
		</div>
</div>

<!--		  <ul class="thumbs mt-3 slider-nav">
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->front_img }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->back_img }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->right_img }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->left_img }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->interiorf_img }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->interiorb_img }}">
				</li>
				
					@if ($vehicle->engine_img)
					<li>
					<img class="thumbnail thumb-img"   src="/storage/photos/{{ $vehicle->engine_img }}">
					</li>
					@endif
					
				
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->opt_img1 }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->opt_img2 }}">
				</li>
				<li>
					<img class="thumbnail thumb-img" src="/storage/photos/{{ $vehicle->opt_img3 }}">
				</li>
			
		</ul> -->
		<div class="favourist-list">
			<span id = heart><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
			</div>
		
	</section>
					 
					<div class="content mt-5 pt-5">
						<ul class="nav nav-pills  justify-content-center" id="pills-tab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
								 aria-selected="true">Car Description</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
								 aria-selected="false">Specifications</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
								 aria-selected="false">Reviews</a>
							</li>
						</ul>
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
								<h3 class="tab-title">Car Description</h3>
								<p>{{ $vehicle->description}}</p>

							</div>
							<div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
								<h3 class="tab-title">Car Specifications</h3>
								<table class="table table-bordered product-table">
									<tbody>
										
										<tr>	
											<td>Title</td>
											<td>{{ $vehicle->title}}</td>
										</tr>
										<tr>	
											<td>Model</td>
											<td>{{ $vehicle->carmodel->model}} - {{ $vehicle->carmodel->carmake->make}} </td>
										</tr>
										<tr>
											<td>Year of build</td>
											<td>{{ $vehicle->year_of_build}}</td>
										</tr>
										<tr>
											<td>Duty Type</td>
											<td>{{ $vehicle->duty_type}}</td>
										</tr>
										<tr>
											<td>Mileage</td>
											<td>{{ $vehicle->mileage}}</td>
										</tr>
										<tr>
											<td>Condition</td>
											<td>{{ $vehicle->condition}}</td>
										</tr>
										<tr>
											<td>Car Transmission</td>
											<td>{{ $vehicle->transmission}}</td>
										</tr>
										<tr>
											<td>Fuel type</td>
											<td>{{ $vehicle->fuel_type}}</td>
										</tr>
										<tr>
											<td>Body Type</td>
											<td>{{ $vehicle->body_type}}</td>
										</tr>
										<tr>
											<td>Interior</td>
											<td>{{ $vehicle->interior_type}}</td>
										</tr>
										<tr>
											<td>Engine Size</td>
											<td>{{ $vehicle->engine_size}}</td>
										</tr>
									</tbody>
								</table>
							</div>
							<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
								<h3 class="tab-title">Product Review</h3>
								<div class="product-review">
									<div class="media">
										<!-- Avater -->
										<img src="images/joshua.jpeg" alt="avater">
										<div class="media-body">
											<!-- Ratings -->
											<div class="ratings">
												<ul class="list-inline">
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
													<li class="list-inline-item">
														<i class="fa fa-star"></i>
													</li>
												</ul>
											</div>
											<div class="name">
												<h5>Jessica Brown</h5>
											</div>
											<div class="date">
												<p>Mar 20, 2018</p>
											</div>
											<div class="review-comment">
												<p>
													Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremqe laudant tota rem ape
													riamipsa eaque.
												</p>
											</div>
										</div>
									</div>
									<div class="review-submission">
										<h3 class="tab-title">Submit your review</h3>
										<!-- Rate -->
										<div class="rate">
											<div class="starrr"></div>
										</div>
										<div class="review-submit">
											<form action="#" class="row">
												<div class="col-lg-6">
													<input type="text" name="name" id="name" class="form-control" placeholder="Name">
												</div>
												<div class="col-lg-6">
													<input type="email" name="email" id="email" class="form-control" placeholder="Email">
												</div>
												<div class="col-12">
													<textarea name="review" id="review" rows="10" class="form-control" placeholder="Message"></textarea>
												</div>
												<div class="col-12">
													<button type="submit" class="btn btn-main">Sumbit</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="sidebar">
					<div class="widget price text-center">
						<h4>Price</h4>
						<p>KSH {{ $vehicle->price}}</p>
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="images/joshua.jpeg" alt="">
						<h4><a href="">  {{ Auth::user()->name }} </a></h4>
						<p class="member-time">Member Since {{ Auth::user()->created_at->diffForHumans() }} </p>
						<a href="">See all ads</a>
						<ul class="list-inline mt-20">
							<li class="list-inline-item"><a href="" class="btn btn-contact d-inline-block  btn-primary px-lg-5 my-1 px-md-3">Contact</a></li>
							<li class="list-inline-item"><a href="" class="btn btn-offer d-inline-block btn-primary ml-n1 my-1 px-lg-4 px-md-3">Make an
									offer</a></li>
						</ul>
					</div>
					<!-- Map Widget -->
					<div class="widget map">
						<div class="map">
							<div id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"></div>
						</div>
					</div>
					<!-- Rate Widget -->
					<div class="widget rate">
						<!-- Heading -->
						<h5 class="widget-header text-center">What would you rate
							<br>
							this product</h5>
						<!-- Rate -->
						<div class="starrr"></div>
					</div>
					<!-- Safety tips widget -->
					<div class="widget disclaimer">
						<h5 class="widget-header">Safety Tips</h5>
						<ul>
							<li>Meet seller at a public place</li>
							<li>Check the item before you buy</li>
							<li>Pay only after collecting the item</li>
							<li>Pay only after collecting the item</li>
						</ul>
					</div>
					<!-- Coupon Widget -->
					<div class="widget coupon text-center">
						<!-- Coupon description -->
						<p>Have a great product to post ? Share it with
							your fellow users.
						</p>
						<!-- Submii button -->
						<a href="" class="btn btn-transparent-white">Submit Listing</a>
					</div>

				</div>
			</div>

		</div>
	</div>
	<!-- Container End -->
</section>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>	
<script type="text/javascript">
	let thumbnails = document.getElementsByClassName('thumbnail')
	
	let activeImages = document.getElementsByClassName('active')
	
	for (var i=0; i < thumbnails.length; i++){
	
	  thumbnails[i].addEventListener('click', function(){
		  console.log(activeImages)
		  
		  if (activeImages.length > 0){
			  activeImages[0].classList.remove('active')
		  }
		  
	
		  this.classList.add('active')
		  document.getElementById('featured').src = this.src
	  })
	}        
	</script> 
 <script type="text/javascript">
    $(document).ready(function(){
		
	  $('.slider-for').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.slider-nav'
		});
		$('.slider-nav').slick({
			slidesToShow: 3,
			slidesToScroll: 1,
			asNavFor: '.slider-for',
			dots: true,
			centerMode: true,
			focusOnSelect: true
		});
		$('.single-item').slick();
	});
	

$(document).ready(function(){
  $("#heart").click(function(){
    if($("#heart").hasClass("liked")){
      $("#heart").html('<i class="fa fa-heart-o" aria-hidden="true"></i>');
      $("#heart").removeClass("liked");
    }else{
      $("#heart").html('<i class="fa fa-heart" aria-hidden="true"></i>');
      $("#heart").addClass("liked");
    }
  });
});
  </script>

@endsection