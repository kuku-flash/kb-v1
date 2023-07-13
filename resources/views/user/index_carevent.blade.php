@extends('layouts.kingsbridge')
@section('content')

<!--==================================
=            User Profile            =
===================================-->

<section class="section-sm">
	<!-- Container Start -->
	<div class="container">
		@if(session('success'))
		<div class="mt-3 alert alert-success">
		 <span> {{ session('success') }} </span>
		</div>
		@endif		
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
						<h3>My Events</h3>
						<ul>
							<li> <a href="{{ route('user.carevent')}}"><i class="fa fa-car"></i>Car Events <span> {{$carevents->count()}}</a> </li>
						<!--	<li> <a href="{{ route('user.index_carhire')}}"><i class="fa fa-car"></i>Vehicles for Hire <span></a> </li> -->

						</ul>
					</div>
				
				
				</div>
			</div>
			@if ( count($carevents) > 0)
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<a href="{{ route('user.create_carevent')}}" class="btn btn-primary mb-2">Create a Car Event</a>
							@foreach($carevents as $carevent)
				

<div class=" dashboard-container my-list">
	<div class="container-fluid">
		<div class="row">		
			<div class="col-lg-12 mt-3">
				<div class="listing-container">
					<div class="listing-image">
					  <img class="img-square-wrapper" src="/storage/photos/{{ $carevent->event_image }}" alt="image description">
					</div>
					<div class="listing-info">
					  <div class="mdl-card__title">
						<h2 style="font-weight: 450; font-size:20px;" class="mdl-card__title-text"> {{ $carevent->event_title }}</h2>
					  </div>
					  <div class="mdl-card__supporting-text">
						<p class="card-text">
						  <ul class="list-horizontal">
							<li><b>Location:</b> <span>{{ $carevent->event_location }}</span></li>
							<li><b>Date:</b> <span>{{ $carevent->event_date }}</span></li>
							<li><b>Time:</b> <span>{{ $carevent->event_time }}</span></li>
							<li><b>Organizer:</b> <span>{{ $carevent->organizer }}</span></li>
							<li><b>Ticket:</b> <span>Kes: {{ $carevent->ticket_price }}</span></li>
					
						  </ul>
						  
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
												<a data-toggle="tooltip" data-placement="top" title="Edit" class="edit" href="{{ route('user.edit_carevent', $carevent->id)}}">
													<i class="fa fa-pencil"></i>
												</a>
											</li>
											<li class="list-inline-item">
										
												<a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" data-toggle="tooltip" data-placement="top" title="Delete" class="delete">
													<i class="fa fa-trash"></i>
												</a>
												<form action="{{ route('user.delete_carevent', $carevent->id)}}" method="post" onsubmit="return confirm('Are you sure want to delete?');">
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
			<h1> No Events Founds......
			
			</h1>
			@endif
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection