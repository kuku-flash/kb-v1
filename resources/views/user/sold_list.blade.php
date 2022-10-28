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
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li>
								<a href="{{ route('user.my_list')}}"><i class="fa fa-user"></i> My List <span>{{$listings->count()}}</span></a>
							</li>
							<li >
								<a href="{{ route('user.pending_list')}}"><i class="fa fa-bolt"></i> Pending Approval</a>
							</li>
							<li>
								<a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite List </a>
							</li>
							<li>
								<a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved List </a>
                            </li>
                            <li class="active">
								<a href="{{ route('user.sold_list')}}"><i class="fa fa-file-archive-o"></i>Sold List </a>
							</li>
							<li>
								<a href=""><i class="fa fa-cog"></i> Logout</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a>
							</li>
						</ul>
					</div>

					<!-- delete-account modal -->
											  <!-- delete account popup modal start-->
                <!-- Modal -->
                <div class="modal fade" id="deleteaccount" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                  aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header border-bottom-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body text-center">
                        <img src="images/account/Account1.png" class="img-fluid mb-2" alt="">
                        <h6 class="py-2">Are you sure you want to delete your account?</h6>
                        <p>Do you really want to delete these records? This process cannot be undone.</p>
                        <textarea name="message" id="" cols="40" rows="4" class="w-100 rounded"></textarea>
                      </div>
                      <div class="modal-footer border-top-0 mb-3 mx-5 justify-content-lg-between justify-content-center">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- delete account popup modal end-->
					<!-- delete-account modal -->

				</div>
			</div>
			@if ( count($listings) > 0)
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class=" dashboard-container my-list">
				
				
						
						
							@foreach($listings as $listing)
							<tr>
								@foreach ($vehicles as $vehicle)
										@if($listing->id == $vehicle->listing_id)
										
	
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-3">
          
                <div class="mdl-card mdl-shadow--2dp mdl-card--horizontal">
					<div class="mdl-card__media">
						<img class="img-square-wrapper" src="/storage/photos/{{ $vehicle->front_img }}" alt="image description">
					</div>
					  <div class="mdl-card__title">
						<h2 style="font-weight: 450; font-size:20px;" 
						class="mdl-card__title-text">{{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->carmodel->model_year}} 
							- <small>{{ $listing->package->package_name }} <span style="color: red;"> {{ $listing->category->category_name }} </span></h2>
						
					  </div>
					  <div class="mdl-card__supporting-text">
						<p class="card-text">
							<ul class="list-horizontal">
								<li class="li-size"><b>Listing ID: </b><span class="car-li">{{ $listing->id }}</span></li>
								<li class="li-size"><b>Price: </b><span class="car-li"> {{ $vehicle->price}}</span></li>
								<li class="li-size"><b>Status: </b><span class="car-li">{{ $listing->ads_status }}</span></li>
								<li class="li-size"><b>Category: </b><span class="car-li">{{ $vehicle->vehicle_type }}</span></li>
								<li class="li-size"><b>Invoice: </b><span class="car-li"><a href="{{ route('user.invoice', [$listing->id, $vehicle->id])}}"> Click Here </a></span></li>
								<li class="li-size"><b>Visitors </b><span class="car-li fa fa-users "></span>: 5000</li>
								<li class="li-size"><b>Duration <span class="car-li fa fa-count "></span>: 30 left
							
								</li> 
								<li class="li-size"><b>Chats <span class="car-li fa fa-comments "></span>: 50</li>
							</ul>
						</p>
					  </div>
				<div class="my-list-footer">
						<small class="text-muted">  
							<div class="change-icons">
							<td class="action" data-title="Action">
								<div class="change-icons">
									<ul class="list-inline justify-content-center">
										<li class="list-inline-item">
											<a data-toggle="tooltip" data-placement="top" title="View" class="view" href="#">
												<i class="fa fa-eye"></i>
											</a>
										</li>
										<li class="list-inline-item">
											<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="#">
												<i class="fa fa-pencil"></i>
											</a>
										</li>
										<li class="list-inline-item">
									
											<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" data-toggle="tooltip" data-placement="top" title="Delete" class="delete">
												<i class="fa fa-trash"></i>
											</a>
											<form action="#" method="post" onsubmit="return confirm('Are you sure want to delete?');">
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