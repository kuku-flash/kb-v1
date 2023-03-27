@extends('layouts.kingsbridge')
@section('content')

<!--==================================
=            User Profile            =
===================================-->
<section class="section-sm">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-4 offset-lg-0">
				<div class="sidebar">
          <!-- User Widget -->
          	<!-- Dashboard Links -->
					<div class="widget user-dashboard-menu">
						<ul>
							<li class="active">
								<a href="{{ route('user.my_list')}}"><i class="fa fa-money"></i> Choose payment method <span></span></a>
							</li>
							<li class="payment">
                <a href="#" target="_blank" class="btn btn-light"><i class="fa fa-money"></i> Mpesa</a>
                
              </li>
              <li class="rpayment payment">
                <a href="#" target="_blank" class="btn btn-light"><i class="fa fa-credit-card"></i> Visa</a>
                
              </li>
            
              <div class="field padding-bottom--24">
                <br>
                <label for="phone">  Number(Required)</label>
                <input type="phone" name="phone" value="" 
                placeholder="+254 ">
              </div>
              <div class="field padding-bottom--24">
                <label for="email">Email</label>
                <input type="email"   name="email" value="" 
                placeholder="Email" >
                      
                          <span class="invalid-feedback" role="alert">
          
                          </span>
                     
              </div>
                <a href="#" target="_blank" class="btn btn-light"><i class="fa fa-right"></i> Continue</a>
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
		
			<div class="col-md-10 offset-md-1 col-lg-8 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<h3 class="widget-header">Unpaid Invoice</h3>
					<table class="table table-responsive product-dashboard-table">
						<thead>
              <h4>
                <img src="{{ asset('images/king2.png')}}" 
                style=" width:55px; height:50px;vertical-align: middle;padding-left: 0px;padding-right: 0px; padding-top: 0px; border-style: none; " >
                <span style="color:#d4af37">Kings</span><span style="color:#aaa9ad">bridge</span>
                <br>
              <small class="float-right">Date: {{ $listing->created_at}}</small>
              <br>
              <small class="float-right">Invoice#{{ $listing->id}}</small>
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>{{ $listing->user->name}}</strong><br>
              Phone: {{ $listing->user->phone_number}}<br>
              Email: {{ $listing->user->email}}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    
        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
               
                <th>Description</th>
                <th>Subtotal</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>{{ $listing->package->package_name}} - {{ $vehicle->carmodel->carmake->make}} {{ $vehicle->carmodel->model}} {{ $vehicle->year_of_build}} </td>
                <td>kes {{ $listing->package->package_amount}}</td>
                <tr>
                  <th style="">Subtotal:</th>
                  <td>kes {{ $listing->package->package_amount}}</td>
                </tr>
                <tr>
                  <th>Tax (9.3%)</th>
                  <td>kes 10.34</td>
                </tr>
             
                <tr>
                  <th>Total:</th>
                  <td>kes {{ $listing->package->package_amount}}</td>
                </tr>
              </tr>
              </tbody>
              <small class="float-left">Amount Due : {{ $listing->created_at}}</small>
            </table>
            <p class="lead">Payment Method:</p>
            <img src="{{ asset('images/M-PESA_LOGO-01.svg')}}"style=" width:65px; height:65px;"> 
            <p class="text-muted well well-sm shadow-none" style="text-align: center; margin-top: 10px;">
             KingsBridge the leading online platform that sells both Vehicles and Houses.
            </p>
          </div>
        </div>
      </div>
						</thead>
						<tbody>
							</tr>
						</tbody>
					</table>
			</div>
		</div>
	</div>
</section>
@endsection