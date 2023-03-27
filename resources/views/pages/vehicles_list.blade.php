@extends('layouts.kingsbridge')
@section('content')
<section class="page-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<!-- Advance Search -->
				<div class="advance-search">
					<form>
						<div class="form-row">
							<div class="form-group col-md-4">
								<input type="text" class="form-control my-2 my-lg-0" id="inputtext4" placeholder="What are you looking for">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputCategory4" placeholder="Category">
							</div>
							<div class="form-group col-md-3">
								<input type="text" class="form-control my-2 my-lg-0" id="inputLocation4" placeholder="Location">
							</div>
							<div class="form-group col-md-2">
								
								<button type="submit" class="btn btn-primary">Search Now</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<section class=" section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="search-result bg-gray">
					<h2>Results For "Vehicles"</h2>
					<p>123 Results on 12 December, 2021</p>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="category-sidebar">
					<div class="widget category-list">
	<h4 class="widget-header">All Category</h4>
	<ul class="category-list">
		<li><a href="category.html">Cars <span>600</span></a></li>
		<li><a href="category.html">Buses <span>233</span></a></li>
		<li><a href="category.html">Heavy Equipments<span>183</span></a></li>
		<li><a href="category.html">Trucks <span>257</span></a></li>
		<li><a href="category.html">Motorbikes <span>343</span></a></li>
		<li><a href="category.html">Watercrafts <span>570</span></a></li>
	</ul>
</div>

<div class="widget category-list">
	<h4 class="widget-header">Location</h4>
	<ul class="category-list">
		<li><a href="category.html">Nairobi <span>93</span></a></li>
		<li><a href="category.html">Kisumu <span>233</span></a></li>
		<li><a href="category.html">Machakos  <span>183</span></a></li>
		<li><a href="category.html">Meru <span>120</span></a></li>
		<li><a href="category.html">Nyeri <span>40</span></a></li>
		<li><a href="category.html">Uasin Githu <span>81</span></a></li>
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

<div class="widget verticale-scroll">
	<h4 class="widget-header">Make</h4>
	<div class="form-check">
	  <label class="form-check-label">
	    <input class="form-check-input" type="checkbox" value="">
	    Mercedes Benz
	  </label>
    </div>
    
	<div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Toyota
        </label>
      </div>


      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Subaru
        </label>
      </div>
      <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="checkbox" value="">
          Audi
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

				<!-- ad listing list  -->
@foreach ($listings as $listing )		
@foreach ($vehicles as $vehicle)
@if ($listing->id == $vehicle->listing_id)              
	<div class="ad-listing-list mt-20">
    <div class="row p-lg-3 p-sm-5 p-4">
        <div class="col-lg-4 align-self-center">
            <a href="{{ route('vehicle', [$listing->id, $vehicle->id])}}">
                @foreach ($vehiclephotos as $vehiclephoto)
                    @if ($vehicle->id == $vehiclephoto->vehicle_id)
                        <img src="/storage/photos/{{ $vehiclephoto->photo }}" class="img-fluid" alt="">
                    @endif
                @endforeach
            </a>
        </div>
        <div class="col-lg-8">
            <div class="row">
                <div class="col-lg-6 col-md-10">
                    <div class="ad-listing-content">
                        <div>
                            <a href="#" class="font-weight-bold">{{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->year_of_build}}</a>
                        </div>
                        <ul class="list-inline mt-2 mb-3">
                            <li class="list-inline-item"><a href="{{ route('vehicle', [$listing->id, $vehicle->id])}}"> <i class="fa fa-folder-open-o"></i> {{ $listing->category->category_name}}</a></li>
                            <li class="list-inline-item"><a href=""><i class="fa fa-map"></i> {{ $listing->city->city}}</a></li>
                        </ul>
                        <p class="pr-5">
                            <ul class="list-horizontal">
                                <li>Engine Size: <span class="car-li">{{ $vehicle->engine_size}}L</span></li>
                                <li>Trans: <span class="car-li">{{ $vehicle->transmission}}</span></li>
                                <li>Miles: <span class="car-li">{{ $vehicle->mileage}}Km</span></li>
                                <li>Fuel Type: <span class="car-li">{{ $vehicle->fuel_type}}</span></li>
                            
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="product-ratings float-lg-right pb-3">
  
                            <p class="price"> <span>For Sale</span> Kes {{ $vehicle->price}}</p>
                  
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endif	
@endforeach
@endforeach
				<!-- ad listing list  -->

				<!-- pagination -->
				<div class="pagination justify-content-center py-4">
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
				<!-- pagination -->
			</div>
		</div>
	</div>
</section>


@endsection