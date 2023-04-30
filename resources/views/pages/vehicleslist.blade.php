@extends('layouts.kingsbridge')
@section('content')

<section class=" section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					

						
							<form action="{{ route('vehicle_search') }}" method="get">
								<div class="form-row">
									<div class=" form-group col-md-2">
										<select name="make" class="make form-control ">
										<option value="">Choose a Make</option>
							
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
										<option value="0"  disabled="true" selected="true">Choose a model</option>

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
										<select name="price_max" id="inputGroupSelect" class="form-control">
											<option value="">Max Price</option>
											<option value="10000000">100,000,000</option>
											<option value="50000000">50,000,000</option>
											<option value="10000000">10,000,000</option>
											<option value="5000000">5,000,000</option>
											<option value="1000000">1,000,000</option>
										</select>
					
									</div>
									<div class="form-group col-md-2">
										<select name="price_min" id="inputGroupSelect" class="form-control">
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
						<p>123 Results on  {{ now()->format('d F Y') }}</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">Select Vehicle Type</h4>

	@foreach ($vehicles as $vehicle)
		<li><a href="{{ route('vehicle_filter', $vehicle->id)}}">Car <span>({{$vehicle->vehicle_type}})</span></li>
	@endforeach
	
</div>

<div class="widget category-list">
	<h4 class="widget-header">Select Location</h4>
	<ul class="category-list">
		@foreach ($cities as $city )
				
		<li><a href="{{ route('listing_filter', $city->id)}}">{{$city->city}} <span></span></li>

		@endforeach
		
	</ul>

</div>

<div class="widget category-list">
	<h4 class="widget-header">Select Make</h4>
	@foreach ($makes as $make )
	<ul class="category-list">			
		<li><a
			@foreach ($models as $model )
			@if ($make->id == $model->make_id)
			href="{{ route('vehicle_filter', $model->id)}}"
			
			
			 >{{$make->make}} <span></span></li>
			 @endif
			 @endforeach
	@endforeach
	</ul>
	<select>
		<option></option>
	</select>
</div>


<div class="widget category-list">
	<h4 class="widget-header">Select Model</h4>
	<h4 class="widget-header">Select Make</h4>
	@foreach ($models as $model )
	<ul class="category-list">			
		<li><a
			@foreach ($vehicles as $vehicle )
			@if ($vehicle->model_id == $model->id)
			href="{{ route('vehicle_filter', $vehicle->model_id)}}"
			@endif
			 @endforeach
			 >{{$model->model}} <span></span></li>

	@endforeach
	</ul>
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
				</div>
			</div>






			<div class="col-md-9">
				<div class="category-search-filter">
					<div class="row">
						<div class="col-md-6">
							<strong>Sort</strong>
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
										<a href="{{ route('vehicleslist')}}" class="text-info"><i class="fa fa-th-large"></i></a>
									</li>
									<li class="list-inline-item">
										<a href="{{ route('vehicles_list')}}"><i class="fa fa-reorder"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="product-grid-list">
					<div class="row mt-30">
				
					@foreach ($listings as $listing )		
						@foreach ($vehicles as $vehicle)
						@if ($listing->id == $vehicle->listing_id)
						<div class="col-sm col-md-4 col-lg-4">
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

									@endif	
									@endforeach
									@endforeach


											

				
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
<script>
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