

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
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">

<div class=" dashboard-container my-list">
<div class="container-fluid">
<div class="row">
<div class="table">
	<table class="table" >
		<thead>
		  <tr>
			<th scope="col">#Invoice</th>
			<th scope="col">Invoice date</th>
			<th scope="col">Due Date</th>
			<th scope="col">Total</th>
			<th scope="col">Status</th>
			<th scope="col">Action</th>
		  </tr>
		</thead>
		<tbody>

@foreach($invoices as $invoice)
@if (auth::id() == $invoice->user_id)                   
		  <tr>
			<th scope="row">{{ $invoice->id}} </th>
			<td>{{ $invoice->generate_date}}</td>
			<td> {{ $invoice->due_date}} </td>
			<td> {{ $invoice->total}} </td>
			<td> {{ $invoice->status}} </td>
			<td> <a href="{{ route('user.invoice.show',$invoice->id)}}">view</a> |  <a href="{{ route('user.generatePDF',$invoice->id)}}">download</a></td>
		  </tr>
@endif		  
@endforeach
		</tbody>
	  </table>

</div>
 
</div>
</div>
					
</div>

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
		
		</div>
		<!-- Row End -->
	</div>
	<!-- Container End -->
</section>
@endsection