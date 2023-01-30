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
								<a href="dashboard-archived-ads.html"><i class="fa fa-file-archive-o"></i>Archived List </a>
							</li>
							<li>
								<a href=""><i class="fa fa-cog"></i> Logout</a>
							</li>
							<li>
								<a href="" data-toggle="modal" data-target="#deleteaccount"><i class="fa fa-power-off"></i>Delete Account</a>
							</li>
						</ul>
					</div>

				</div>
			</div>
		
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class=" dashboard-container my-list">
				
				
								
	
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 mt-3">
          
            <table class="table">
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
                  <tr>
                    <th scope="row">{{ $invoice->id}} </th>
                    <td>{{ $invoice->generate_date}}</td>
                    <td> {{ $invoice->due_date}} </td>
                    <td> {{ $invoice->total}} </td>
                    <td> {{ $invoice->status}} </td>
                    <td> <a href="{{ route('user.invoice.show',$invoice->id)}}">view</a> |  <a href="{{ route('user.generated_invoice',$invoice->id)}}">download</a></td>
                  </tr>
    @endforeach
                </tbody>
              </table>
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