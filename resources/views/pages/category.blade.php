@extends('layouts.kingsbridge')
@section('content')

<section class=" section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "Electronics"</h2>
					<p>123 Results on 12 December, 2017</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">All Category</h4>
	<ul class="category-list">
		<li><a href="category.html">Houses <span>600</span></a></li>
		<li><a href="category.html">Vehicles <span>{{ $vehicles->count()}}</span></a></li>
		<li><a href="category.html">Bnb  <span>183</span></a></li>
		<li><a href="category.html">Lands <span>257</span></a></li>
		<li><a href="category.html">Commercials <span>343</span></a></li>
		<li><a href="category.html">Car hire <span>570</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Nearby</h4>
	<ul class="category-list">
		<li><a href="category.html">New York <span>93</span></a></li>
		<li><a href="category.html">New Jersy <span>233</span></a></li>
		<li><a href="category.html">Florida  <span>183</span></a></li>
		<li><a href="category.html">California <span>120</span></a></li>
		<li><a href="category.html">Texas <span>40</span></a></li>
		<li><a href="category.html">Alaska <span>81</span></a></li>
	</ul>
</div>

<div class="widget filter">
	<h4 class="widget-header">Show Produts</h4>
	<select>
		<option>Popularity</option>
		<option value="1">Top rated</option>
		<option value="2">Lowest Price</option>
		<option value="4">Highest Price</option>
	</select>
</div>

<div class="widget price-range w-100">
	<h4 class="widget-header">Price Range</h4>
	<div class="block">
						<input class="range-track w-100" type="text" data-slider-min="0" data-slider-max="5000" data-slider-step="5"
						data-slider-value="[0,5000]">
				<div class="d-flex justify-content-between mt-2">
						<span class="value">$10 - $5000</span>
				</div>
	</div>
</div>

<div class="widget product-shorting">
	<h4 class="widget-header">By Condition</h4>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Brand New
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Almost New
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Gently New
	  </label>
	</div>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Havely New
	  </label>
	</div>
</div>

				</div>
			</div>
			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Short</strong>
							<select>
								<option>Most Recent</option>
								<option value="1">Most Popular</option>
								<option value="2">Lowest Price</option>
								<option value="4">Highest Price</option>
							</select>
						</div>
						<div class="col-md-6">
							<div class="view">
								<strong>Views</strong>
								<ul class="list-inline view-switcher">
									<li class="list-inline-item">
										<a href="#" onclick="event.preventDefault();" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="ad-list-view.html"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid-list">
					<div class="row mt-30">
						<div class="col-sm-13 col-lg-4 col-md-6">


							<!-- product card -->
<div class="product-item bg-light">
	<div class="card">
		<div class="thumb-content">
			<div class="price">Gold Package</div>
			<a href="single.html">
				<img class="card-img-top category-img-fluid" src="images/amg1.jpg" alt="Card image cap">
			</a>
		</div>
		<div class="card-body">
		    <h4 class="card-title"><a href="single.html">Mercedes Benz on Hire</a></h4>
		    <ul class="list-inline product-meta">
		    	<li class="list-inline-item">
		    		<a href="single.html"><i class="fa fa-folder-open-o"></i>Car Hire</a>
		    	</li>
		    	<li class="list-inline-item">
		    		<a href="#"><i class="fa fa-location-arrow"></i>Kiambu</a>
		    	</li>
			</ul>
			<a href="single.html">
		       <ul class="list-horizontal">
                <li>Engine Size <span class="car-li">2.5L</span></li>
                <li>Trans:<span class="car-li">Automatic</span></li>
                <li>Miles:<span class="car-li">10000Km</span></li>
                <li>Fuel:<span class="car-li">Petrol</span></li>
                <li>Year:<span class="car-li">2015</span></li>
                <li>Body:<span class="car-li">Saloon</span></li>
                </ul>
				</div>
		        <div class="property-price">
                <p class="badge-sale">For Sale</p>
                <p class="price">Ksh4.8M</p>
                </div>
                <div>
				
                
		</div>
	</div>
</div>
</a>

					</div>
					<div class="col-sm-13 col-lg-4 col-md-6">
							<!-- product card -->

							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">Gold Package</div>
										<a href="single.html">
											<img class="card-img-top category-img-fluid" src="images/sclass.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Mercedes Benz S-Class</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Vehicle</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>Kiambu</a>
											</li>
										</ul>
										<a href="single.html">
										   <ul class="list-horizontal">
											<li>Engine Size:<span class="car-li">5.0L</span></li>
											<li>Trans:<span class="car-li">Automatic</span></li>
											<li>Miles:<span class="car-li">7000Km</span></li>
											<li>Fuel:<span class="car-li">Petrol</span></li>
											<li>Year:<span class="car-li">2016</span></li>
											<li>Body:<span class="car-li">Saloon</span></li>
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Sale</p>
											<p class="price">Ksh9.2M</p>
											</div>
											<div>
											
											
									</div>
								</div>
							</div>
							</a>
							
												</div>
												<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">Bronze Package</div>
										<a href="single.html">
											<img class="card-img-top category-img-fluid" src="images/wrxsti.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Subaru WRX STI</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Car Hire</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>Kiambu</a>
											</li>
										</ul>
										<a href="single.html">
										   <ul class="list-horizontal">
											<li>Engine Size:<span class="car-li">2.5L</span></li>
											<li>Trans:<span class="car-li">Manual</span></li>
											<li>Miles:<span class="car-li">80765Km</span></li>
											<li>Fuel:<span class="car-li">Petrol</span></li>
											<li>Year:<span class="car-li">2014</span></li>
											<li>Body:<span class="car-li">Saloon</span></li>
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Sale</p>
											<p class="price">Ksh1.8M</p>
											</div>
											<div>
											
											
									</div>
								</div>
							</div>
							</a>
							
												</div>
												<div class="col-sm-12 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">Gold Package</div>
										<a href="single.html">
											<img class="card-img-top category-img-fluid" src="images/audi1.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Audi RS5</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Car Hire</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>Kiambu</a>
											</li>
										</ul>
										<a href="single.html">
										   <ul class="list-horizontal">
											<li>Engine Size:<span class="car-li">4L</span></li>
											<li>Trans:<span class="car-li left ">Automatic</span></li>
											<li>Miles:<span class="car-li">560681Km</span></li>
											<li>Fuel:<span class="car-li left">Petrol</span></li>
											<li>Year: <span class="car-li">2015</span></li>
											<li>Body:<span class="car-li">Coupe</span></li>
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Hire</p>
											<p class="price">Ksh60k/day</p>
											</div>
											<div>
											
											
									</div>
								</div>
							</div>
							</a>
							
												</div>
												<div class="col-sm-13 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">Gold Package</div>
										<a href="single.html">
											<img class="card-img-top category-img-fluid" src="images/20201230-maxresdefault (1).jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Rolls-Roys Ghost</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Car Hire</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>Kiambu</a>
											</li>
										</ul>
										<a href="single.html">
										   <ul class="list-horizontal">
											<li>Engine Size:<span class="car-li">2.5L</span></li>
											<li>Trans:<span class="car-li">Automatic</span></li>
											<li>Miles:<span class="car-li">10000Km</span></li>
											<li>Fuel:<span class="car-li">Petrol</span></li>
											<li>Year <span class="car-li">2015</span></li>
											<li>Body:<span class="car-li">Saloon</span></li>
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Sale</p>
											<p class="price">Ksh4.8M</p>
											</div>
											<div>
											
											
									</div>
								</div>
							</div>
							</a>
							
												</div>
												<div class="col-sm-13 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">Bronze Package</div>
										<a href="single.html">
											<img class="card-img-top category-img-fluid" src="images/20201103-house3.jpg" alt="Card image cap">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Located in Kiambu</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Houses</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>Kiambu</a>
											</li>
										</ul>
										<a href="single.html">
										   <ul class="list-horizontal">
											<li>Acres <span class="car-li">2 </span></li>
											<li>Parking <span class="car-li">4</span></li>
											<li>Rooms<span class="car-li">5</span></li>
											<li>Bathrooms <span class="car-li">6</span></li>
											<li>.. <span class="car-li">...</span></li>
											<li>.. <span class="car-li">..</span></li>
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Sale</p>
											<p class="price">Ksh4.8M</p>
											</div>
											<div>
											
											
									</div>
								</div>
							</div>
							</a>
							
												</div>

							<div class="col-sm-13 col-lg-4 col-md-6">
							<!-- product card -->
							<div class="product-item bg-light">
								<div class="card">
									<div class="thumb-content">
										<div class="price">Gold Package</div>
										<a href="single.html">
											<img class="card-img-top category-img-fluid" src="images/20201104-rangerover.jpg" alt=""style="max-height: 400px;">
										</a>
									</div>
									<div class="card-body">
										<h4 class="card-title"><a href="single.html">Range Rover Sport</a></h4>
										<ul class="list-inline product-meta">
											<li class="list-inline-item">
												<a href="single.html"><i class="fa fa-folder-open-o"></i>Vehicles</a>
											</li>
											<li class="list-inline-item">
												<a href="#"><i class="fa fa-location-arrow"></i>Karen</a>
											</li>
										</ul>
										<a href="single.html">
										   <ul class="list-horizontal">
											<li>Engine Size:<span class="car-li">4.0L</span></li>
											<li>Trans:<span class="car-li">Automatic</span></li>
											<li>Miles:<span class="car-li">19400Km</span></li>
											<li>Fuel Type:<span class="car-li">Petrol</span></li>
											<li>Year:<span class="car-li">2014</span></li>
											<li>Body:<span class="car-li">SUV</span></li>
											</ul>
											</div>
											<div class="property-price">
											<p class="badge-sale">For Sale</p>
											<p class="price">Ksh7.2M</p>
											</div>
											<div>
											
											
												</div>
											</div>
										</div>
										</a>
									</div>

									<div class="col-sm-13 col-lg-4 col-md-6">
										<!-- product card -->
										<div class="product-item bg-light">
											<div class="card">
												<div class="thumb-content">
													<div class="price">Silver Package</div>
													<a href="single.html">
														<img class="card-img-top category-img-fluid" src="images/car3.jpg" alt=""style="max-height: 400px;">
													</a>
												</div>
												<div class="card-body">
													<h4 class="card-title"><a href="single.html">Range Rover Sport</a></h4>
													<ul class="list-inline product-meta">
														<li class="list-inline-item">
															<a href="single.html"><i class="fa fa-folder-open-o"></i>Vehicles</a>
														</li>
														<li class="list-inline-item">
															<a href="#"><i class="fa fa-location-arrow"></i>Karen</a>
														</li>
													</ul>
													<a href="single.html">
													   <ul class="list-horizontal">
														<li>Engine Size:<span class="car-li">4.0L</span></li>
														<li>Trans:<span class="car-li">Automatic</span></li>
														<li>Miles:<span class="car-li">19400Km</span></li>
														<li>Fuel Type:<span class="car-li">Petrol</span></li>
														<li>Year:<span class="car-li">2014</span></li>
														<li>Body:<span class="car-li">SUV</span></li>
														</ul>
														</div>
														<div class="property-price">
														<p class="badge-sale">For Sale</p>
														<p class="price">Ksh7.2M</p>
														</div>
														<div>
														
														
															</div>
														</div>
													</div>
													</a>
												</div>
										@foreach ($vehicles as $vehicle)

												<div class="col-sm-13 col-lg-4 col-md-6">
													<!-- product card -->
													<div class="product-item bg-light">
														<div class="card">
															<div class="thumb-content">
																<div class="price">Silver Package</div>
																<a href="{{ route('single', $vehicle->id)}}">
																	<img class="card-img-top category-img-fluid" src="images/car3.jpg" alt=""style="max-height: 400px;">
																</a>
															</div>
															<div class="card-body">
																<h4 class="card-title"><a href="{{ route('single', $vehicle->id)}}">{{ $vehicle->title}}</a></h4>
																<ul class="list-inline product-meta">
																	<li class="list-inline-item">
																		<a href="{{ route('single', $vehicle->id)}}"><i class="fa fa-folder-open-o"></i>Vehicles</a>
																	</li>
																	<li class="list-inline-item">
																		<a href="#"><i class="fa fa-location-arrow"></i>Karen</a>
																	</li>
																</ul>
																<a href="{{ route('single', $vehicle->id)}}">
																   <ul class="list-horizontal">
																	<li>Engine Size:<span class="car-li">4.0L</span></li>
																	<li>Trans:<span class="car-li">Automatic</span></li>
																	<li>Miles:<span class="car-li">19400Km</span></li>
																	<li>Fuel Type:<span class="car-li">Petrol</span></li>
																	<li>Year:<span class="car-li">2014</span></li>
																	<li>Body:<span class="car-li">SUV</span></li>
																	</ul>
																	</div>
																	<div class="property-price">
																	<p class="badge-sale">For Sale</p>
																	<p class="price">Ksh7.2M</p>
																	</div>
																	<div>
																	
																	
																		</div>
																	</div>
																</div>
																</a>
															</div>
	
															@endforeach
						<div class="col-sm-13 col-lg-4 col-md-6">

						</div>
					</div>
				</div>
				<div class="pagination justify-content-center">
					<nav aria-label="Page navigation example">
						<ul class="pagination">
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
									<span class="sr-only">Previous</span>
								</a>
							</li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item active"><a class="page-link" href="#">2</a></li>
							<li class="page-item"><a class="page-link" href="#">3</a></li>
							<li class="page-item">
								<a class="page-link" href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
									<span class="sr-only">Next</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection