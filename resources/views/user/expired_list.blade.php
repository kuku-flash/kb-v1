@extends('layouts.kingsbridge')
@section('content')

<!--==================================
=            User Profile            =
===================================-->
@if(session('success'))
<div class="mt-3 alert alert-success">
 <span> {{ session('success') }} </span>
</div>
@endif
<section class="section-sm">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user-dashboard-profile user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="/storage/photos/{{ auth()->user()->avatar}}" alt="" class="">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{ auth()->user()->name }}</h5>
						<p>Joined {{ auth()->user()->created_at->diffForHumans() }}</p>
						<a href="{{ route('user.user_profile', Auth::user()->id )}}" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<div class="widget user-dashboard-menu">
						<h3>My list</h3>
						<ul>
							<li> <a href="{{ route('user.index_vehiclesale')}}"><i class="fa fa-car"></i>Vehicles for Sale <span>{{$listings->where('category_id','2')->count()}}</a> </li>
						<!--	<li> <a href="{{ route('user.index_carhire')}}"><i class="fa fa-car"></i>Vehicles for Hire <span>{{$listings->where('category_id','1')->count()}}</a> </li> -->

						</ul>
					</div>
					<div class="widget user-dashboard-menu">
						<ul>
							<li> <a href=""><i class="fa fa-heart"></i>Favourite</a> </li>
	
						</ul>
					</div>
					<div class="widget user-dashboard-menu">
						<h3>Listing Status</h3>
						<ul>
							<li> <a href="{{ route('user.active_list')}}"><i class="fa fa-circle"></i>Active <span>{{$listings->where('ads_status','Approved')->count()}}</span></a> </li>
							<li> <a href="{{ route('user.pending_list')}}"><i class="fa fa-file-archive-o"></i>Pending <span>{{$listings->where('ads_status','Pending')->count()}}</span></a></a> </li>
							<li> <a href="{{ route('user.expired_list')}}"><i class="fa fa-flag"></i>Expired <span>{{$listings->where('ads_status','Expired')->count()}}</span></a></a> </li>
							<li> <a href="{{ route('user.sold_list')}}"><i class="fa fa-money"></i>Sold <span>{{$listings->where('ads_status','Sold')->count()}}</span></a></a> </li>
						
						</ul>
					</div>

				</div>
			</div>
			@if ( count($listings) > 0)
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
						
				@foreach($listings as $listing)
				
					@foreach ($vehicles as $vehicle)
							@if($listing->id == $vehicle->listing_id)
							


<div class=" dashboard-container my-list">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 mt-3">
	<div class="listing-container">
		<div class="listing-image">
		  <img class="img-square-wrapper" src="/storage/photos/{{ $vehicle->front_img }}" alt="image description">
		</div>
		<div class="listing-info">
		  <div class="mdl-card__title">
			<h2 style="font-weight: 450; font-size:20px;" class="mdl-card__title-text">{{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->carmodel->model_year}} - <small><span style="color: red;"> {{ $listing->category->category_name }}</span></small></h2>
		  </div>
		  <div class="mdl-card__supporting-text">
			<p class="card-text">
			  <ul class="list-horizontal">
				<li><b>Listing ID:</b> <span>{{ $listing->id }}</span></li>
				<li><b>Price:</b> <span>{{ $vehicle->price }}</span></li>
				<li><b>Status:</b> <span class="car-li-active">{{ $listing->ads_status }}</span></li>
				<li><b>Category:</b> <span>{{ $vehicle->vehicle_type }}</span></li>
				<li><b>Visitors <span class="fa fa-users"></span>:</b> <span>{{ $vehicle->views }} </span></li>
				<li><b>Duration <span class="fa fa-count"></span>:</b> <span>30 left</span></li>
				<li><b>Chats <span class="fa fa-comments"></span>:</b> <span>50</span></li>
			  </ul>
			  <a href="{{ route('user.invoice', [$listing->id, $vehicle->id])}}" class="invoice-link">Invoice</a>
			</p>
		  </div>
		</div>
	  </div>
			  

		<div class="my-list-footer">
				<small class="text-muted">  
					<div class="change-icons">
					<td class="action" data-title="Action">
						<div class="change-icons">
							<ul class="list-inline justify-content-center">
								<li class="list-inline-item">
									<a data-toggle="tooltip" data-placement="top" title="Boost" class="edit" href="{{ route('user.packages', $listing->id)}}">
										<span class="btn btn-secondary">Boost your Listing</span>
									</a>
								</li>
								<li class="list-inline-item">
									<a data-toggle="tooltip" data-placement="top" title="View" class="view" href="{{ route('user.show_vehiclesale', [$listing->id, $vehicle->id])}}">
										<i class="fa fa-eye"></i>
									</a>
								</li>
								<li class="list-inline-item">
									<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="{{ route('user.edit_vehiclesale', [$listing->id, $vehicle->id])}}">
										<i class="fa fa-pencil"></i>
									</a>
								</li>
								<li class="list-inline-item">
							
									<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" data-toggle="tooltip" data-placement="top" title="Delete" class="delete">
										<i class="fa fa-trash"></i>
									</a>
									<form action="{{ route('user.delete_vehiclesale', [$listing->id, $vehicle->id])}}" method="post" onsubmit="return confirm('Are you sure want to delete?');">
									  @method('DELETE')
									  <input type="hidden" name="_token" value="{{ csrf_token() }}">
									</form>
								</li>
								
							</ul>
						</div>
					</td>
					</div>
					</small>
			
		</div>
		  </div>
 
</div>
</div>
					
</div>
@endif
@endforeach
@endforeach
	</div>
				
				<!-- pagination 
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
				pagination -->

			</div>
			@else
			<h1> No List Founds...Please Add your first Listing 
			
			</h1>
			@endif
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection