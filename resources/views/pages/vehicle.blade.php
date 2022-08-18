@extends('layouts.kingsbridge')
@section('content')


<!--===================================
=            Store Section            =
====================================-->
<section class="section bg-gray">
	<!-- Container Start -->
	<div class="container">
		<div class="row">
			<!-- Left sidebar -->
			<div class="col-md-8">
				<div class="product-details">
					<h1 class="product-title"> {{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->carmodel->model_year}}</h1>
					<div class="product-meta">
						<ul class="list-inline">
							<li class="list-inline-item price"><i class="fa fa-money"></i> KSH {{ $vehicle->price}}</li>
							<li class="list-inline-item"><i class="fa fa-folder-open-o"></i> Category<a href="">{{ $listing->category->category_name}}</a></li>
							<li class="list-inline-item"><i class="fa fa-location-arrow"></i> Location<a href="">{{ $listing->city->city}}</a></li>
						</ul>
					</div>

	<section>
		<div class="w3-content" style="max-width:1200px">
			<?php 
			$img = [];
			$img = explode(",", $vehicle->photos);
			?>
<!-- Next and previous buttons -->
<img id="featured" class="main" src="/storage/{{ $img[0] }}">
		<div id="slide-wrapper">
			<div class="slide-one-item home-slider owl-carousel" >
			<div id="slider">
				<ul class="thumbs mt-3">
					@foreach ($img as $i)
					<a href="/storage/{{ $i}}" class="image-popup">
					<img class="thumbnail thumb-img" src="/storage/{{ $i}}">
					</a>
					@endforeach
				</ul>

			</div>
			</div>
			</div> 
	
	</section>
	  <section class="vehicle specifications">
		<ul aria-label="Key Specifications" data-gui="key-specs-section" class="sc-jYKCQm hvgDcX"><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
			<span class="icon-svg"><svg enable-background="new 0 0 28 30" viewBox="0 0 28 30" xmlns="http://www.w3.org/2000/svg">
				<path d="m12.1 3.1h-3.8c-1.3 0-2.3 1.1-2.3 2.3v9.6c0 1.3 1 2.3 2.3 2.3h3.8c1.3 0 2.3-1 2.3-2.3v-9.6c0-1.2-1-2.3-2.3-2.3zm.6 2.3v9.6c0 .3-.3.6-.6.6h-3.8c-.3 0-.6-.3-.6-.6v-9.6c0-.3.3-.6.6-.6h3.8c.3.1.6.3.6.6z"></path>
				<path d="m27.5 5.3-2.9-2.9-.1-.1c-.4-.3-.9-.3-1.2.1-.2.2-.2.4-.2.6s.1.4.3.6l2.6 2.6v19.3c0 .3-.3.6-.6.6s-.6-.3-.6-.6v-10c0-1-.8-1.8-1.8-1.8h-4.9v-11.1c0-1.3-1-2.3-2.3-2.3h-11.4c-1.3 0-2.3 1-2.3 2.3v21.7c-1.1.2-1.9 1.1-1.9 2.3v1c0 1.3 1 2.3 2.3 2.3h15.3c1.3 0 2.3-1 2.3-2.3v-1c0-1.1-.8-2.1-1.9-2.3v-8.8h4.9c.1 0 .1 0 .1.1v10.1c0 1.3 1 2.3 2.3 2.3s2.3-1 2.3-2.3v-19.8c0-.2-.1-.5-.3-.6zm-23.6 18.9v-21.6c0-.4.2-.6.5-.6h11.5c.3 0 .6.3.6.6v21.6zm14.5 2.3v1c0 .3-.3.6-.6.6h-15.3c-.3 0-.6-.3-.6-.6v-1c0-.3.3-.6.6-.6h15.3c.3 0 .6.3.6.6z"></path></svg>
			</span>{{ $vehicle->fuel_type}}</li><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
				<span class="icon-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
			<g fill="#">
				<path d="M0 0h24v24H0V0z" fill="none"></path>
				<path d="M20.65 11l.35 1v8a1 1 0 0 1-1 1h-1a1 1 0 0 1-1-1v-1H6v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-8l.35-1H3a1 1 0 0 1 0-2h1.04l1.04-2.99A1.5 1.5 0 0 1 6.5 5h11c.66 0 1.22.42 1.42 1.01L19.96 9H21a1 1 0 0 1 0 2h-.35zM6.85 7l-1.08 3.11h12.45L17.14 7H6.85zM19 17v-5H5v5h14zM7.5 16a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3zm9 0a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"></path>
			</g>
		</svg>
		</span>{{ $vehicle->body_type}}</li><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
			<span class="icon-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
			<g fill="#">
				<path d="M0 0h24v24H0V0z" fill="none"></path>
				<path d="M5 14H4v1a1 1 0 0 1-2 0v-4a1 1 0 0 1 2 0v1h1v-2h1l1.7-1.7a1 1 0 0 1 .71-.3H11V7h-1a1 1 0 1 1 0-2h4a1 1 0 0 1 0 2h-1v1h1.76a2 2 0 0 1 1.8 1.1L18 12h2v-1h1s1-.41 1 4c0 4-1 4-1 4h-1v-2h-2v1a1 1 0 0 1-1 1h-7a2 2 0 0 1-1.6-.8L6 15H5v-1zm2-1l3 4h6v-1a1 1 0 0 1 1-1h3v-1h-2.62a1 1 0 0 1-.9-.56l-1.71-3.43H8.84L7 11.82V13z"></path>
			</g>
		</svg>
		</span>{{ $vehicle->engine_size}}</li><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
			<span class="icon-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
				<path d="M0 0h24v24H0V0z" fill="none"></path><path d="M6 11h5V6.73a2 2 0 112 0V11h4a1 1 0 001-1V6.73a2 2 0 112 0V10a3 3 0 01-3 3h-4v4.27a2 2 0 11-2 0V13H6v4.27a2 2 0 11-2 0V6.73a2 2 0 112 0V11z"></path>
			</svg></span>{{ $vehicle->transmission}}</li><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
				<span class="icon-svg"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24">
			<g fill="#">
				<path d="M8 2a.5.5 0 0 1 .5.5V4a.5.5 0 0 1-1 0V2.5A.5.5 0 0 1 8 2zM3.732 3.732a.5.5 0 0 1 .707 0l.915.914a.5.5 0 1 1-.708.708l-.914-.915a.5.5 0 0 1 0-.707zM2 8a.5.5 0 0 1 .5-.5h1.586a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8zm9.5 0a.5.5 0 0 1 .5-.5h1.5a.5.5 0 0 1 0 1H12a.5.5 0 0 1-.5-.5zm.754-4.246a.389.389 0 0 0-.527-.02L7.547 7.31A.91.91 0 1 0 8.85 8.569l3.434-4.297a.389.389 0 0 0-.029-.518z" fill="#000000"></path> 
				<path d="M6.664 15.889A8 8 0 1 1 9.336.11a8 8 0 0 1-2.672 15.78zm-4.665-4.283A11.945 11.945 0 0 1 8 10c2.186 0 4.236.585 6.001 1.606a7 7 0 1 0-12.002 0z"></path></g>
		</svg>
		</span>{{ $vehicle->mileage}}Km</li><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
			<span class="icon-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
			<g fill="#">
			<path d="M0 0h24v24H0V0z" fill="none"></path><path d="M16.9 8.34c-.98-.02-1.93-.88-2.26-2.13-.39-1.44.2-2.85 1.32-3.15 1.12-.3 2.34.62 2.72 2.07.36 1.35-.14 2.68-1.12 3.08V9c.6 0 1.14.75 1.14 1.18 0 .43 0 .43-.02.64a66.68 66.68 0 0 0-.52 6.57c0 1.4-.16 3.61-3 3.61H6.2c-.6-.2-1-.6-1.2-1.2a10.76 10.76 0 0 1 0-3c.2-.4 1.2-.6 2.99-.6 2.7 0 3.59 1.2 4.78 1.2.8 0 1.2-.2 1.2-.6v-4.82c0-1 .6-2.38 1.8-2.98.15-.06.46-.06.92 0l.2-.66z"></path>
			</g>
		</svg>
		</span>{{ $vehicle->interior_type}}</li><li class="sc-jfkLlK iQQtEg atc-type-fiesta atc-type--regular">
			<span class="icon-svg"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
		</svg>
	</ul>

	  </section>	  
					<!-- product slider -->

					<div class="content ">
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
					<div class="widget price  text-center">
						<h4>Price</h4>
						<p>KSH {{ $vehicle->price}}</p>
						
					</div>
					<!-- User Profile widget -->
					<div class="widget user text-center">
						<img class="rounded-circle img-fluid mb-5 px-5" src="images/joshua.jpeg" alt="">
						<h4><a href="">  {{ $listing->user->name }} </a></h4>
						<p class="member-time">Member Since {{ $listing->user->created_at->diffForHumans() }} </p>
						<a href="">See all ads</a>
						<p>{{ $listing->user->phone_number }} </p>
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
@endsection