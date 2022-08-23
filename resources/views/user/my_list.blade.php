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
					<div class="widget user-dashboard-profile">
						<!-- User Image -->
						<div class="profile-thumb">
							<img src="{{ asset('images/user/user-thumb.jpg')}}" alt="" class="rounded-circle">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{ auth()->user()->name }}</h5>
						<p>Joined {{ auth()->user()->created_at->diffForHumans() }}</p>
						<a href="user-profile.html" class="btn btn-main-sm">Edit Profile</a>
					</div>
					<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="{{ route('user.my_list')}}"><i class="fa fa-user"></i> My List <span>{{$listings->count()}}</span></a>
							</li>
							<li>
								<a href="{{ route('user.pending_list')}}"><i class="fa fa-bolt"></i> Pending Approval</a>
							</li>
							<li>
								<a href="dashboard-favourite-ads.html"><i class="fa fa-bookmark-o"></i> Favourite List </a>
							</li>
							<li>
								<a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archeved List </a>
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
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">My List</h3>
					<table class="table table-responsive product-dashboard-table">
						<tbody>
						
						
							@foreach($listings as $listing)
							<tr>
								@foreach ($vehicles as $vehicle)
										@if($listing->id == $vehicle->listing_id)
										
										<td class="product-thumb">
										
										<!--	<img class="card-img-top category-img-fluid" src="/photos/#" alt=""style="max-height: 400px;"> -->
											<img width="100px" height="auto" src="/storage/photos/{{ $vehicle->front_img }}" alt="image description">
										
										</td>
										

										<td class="product-details">
											<h3 class="title">  {{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->carmodel->model_year}}</h3>
											<span class="add-id"><strong>Listing ID:</strong> {{ $listing->id }}</span>
											<span><strong>Posted on: </strong><time> {{ $vehicle->created_at->diffForHumans() }}</time> </span>
											<span class="status"><strong>Status: </strong>{{ $listing->ads_status }}</span>
											<span class="location"><strong>Location: </strong>{{ $listing->city->city }}</span>
										</td>
									
								<td class="product-details"><span class="categories">{{ $listing->user->name }}</span>
									<span class="categories"><a href="{{ route('user.invoice', [$listing->id, $vehicle->id])}}">check invoice</a></span>
								</td>

								
								
								<td class="product-category"><span class="categories">{{ $listing->category->category_name }}</span></td>
								<td class="action" data-title="Action">
									<div class="">
										<ul class="list-inline justify-content-center">
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="View" class="view" href="{{ route('user.show_listing', [$listing->id, $vehicle->id])}}">
													<i class="fa fa-eye"></i>
												</a>
											</li>
											<li class="list-inline-item">
												<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="{{ route('user.edit_listing', [$listing->id, $vehicle->id])}}">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
										
												<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" data-toggle="tooltip" data-placement="top" title="Delete" class="delete">
													<i class="fa fa-trash"></i>
												</a>
												<form action="{{ route('user.delete_listing', [$listing->id, $vehicle->id])}}" method="post" onsubmit="return confirm('Are you sure want to delete?');">
												  @method('DELETE')
												  <input type="hidden" name="_token" value="{{ csrf_token() }}">
												</form>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@endif
							@endforeach
							@endforeach

						</tbody>
					</table>
<div class="container-fluid">
    <div class="row">
        <div class="col-15 mt-3">
            <div class="list-card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img width="100px" height="auto" src="/storage/photos/{{ $vehicle->front_img }}" alt="image description">
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->carmodel->model_year}}</h6>
                        <p class="card-text">
							<ul class="list-horizontal">
								<li class="li-size">Listing ID:<span class="car-li">{{ $listing->id }}</span></li>
								<li class="li-size">Price: <span class="car-li"> {{ $vehicle->price}}</span></li>
								<li class="li-size">Status: <span class="car-li">{{ $listing->ads_status }}</span></li>
								<li class="li-size">Category: <span class="car-li">{{ $listing->category->category_name }}</span></li>
								<li class="li-size">Invoice:<span class="car-li"><a href="{{ route('user.invoice', [$listing->id, $vehicle->id])}}">Click Here </a></span></li>
								<li class="li-size">New users<span class="car-li fa fa-users "></span>:50</li>
								<li class="li-size">Viewed Contact<span class="car-li fa fa-phone "></span>:50</li>
								<li class="li-size">Chats<span class="car-li fa fa-comments "></span>:50</li>
							</ul>
						</p>
                    </div>
				</div>
				
                <div class="card-footer">
                    <small class="text-muted">  
						<div class="change-icons">
						<td class="action" data-title="Action">
							<div class="change-icons">
								<ul class="list-inline justify-content-center">
									<li class="list-inline-item">
										<a data-toggle="tooltip" data-placement="top" title="View" class="view" href="{{ route('user.show_listing', [$listing->id, $vehicle->id])}}">
											<i class="fa fa-eye"></i>
										</a>
									</li>
									<li class="list-inline-item">
										<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="{{ route('user.edit_listing', [$listing->id, $vehicle->id])}}">
											<i class="fa fa-pencil"></i>
										</a>
									</li>
									<li class="list-inline-item">
								
										<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" data-toggle="tooltip" data-placement="top" title="Delete" class="delete">
											<i class="fa fa-trash"></i>
										</a>
										<form action="{{ route('user.delete_listing', [$listing->id, $vehicle->id])}}" method="post" onsubmit="return confirm('Are you sure want to delete?');">
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
				</div>

				<!-- pagination -->
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
				<!-- pagination -->

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