@extends('layouts.kingsbridge')
@section('content')

<!--==================================
=            User Profile            =
===================================-->

<section class=" section-sm">
	<div class="container">
		<div class="row">
			<div class="col-md-10 offset-md-1 col-lg-3 offset-lg-0">
				<div class="sidebar">
					<!-- User Widget -->
					<div class="widget user">
						<!-- User Image -->
						<div class="image d-flex justify-content-center">
							<img src="/storage/photos/{{ $user->avatar}}" alt="" class="">
						</div>
						<!-- User Name -->
						<h5 class="text-center">{{ $user->name}}</h5>
					</div>
					<!-- Dashboard Links -->
					<div class="widget dashboard-links">
						<ul>
							<li><a class="my-1 d-inline-block" href="">Savings Dashboard</a></li>
							<li><a class="my-1 d-inline-block" href="">Saved Offer <span>(5)</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Favourite Stores <span>(3)</span></a></li>
							<li><a class="my-1 d-inline-block" href="">Recommended</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-10 offset-md-1 col-lg-9 offset-lg-0">
				<!-- Edit Profile Welcome Text -->
				<div class="widget welcome-message">
					<h2>Edit profile</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
				</div>
				<!-- Edit Personal Info -->
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="widget personal-info">
							<h3 class="widget-header user">Edit Personal Information</h3>
							<form action="{{ route('user.update_user', $user->id)}}" method="POST"  enctype="multipart/form-data">
								@csrf
                    			@method('put')
								<!-- First Name -->
								<div class="form-group">
									<label for="name">Full Name</label>
									<input type="text" name="name" class="form-control" value="{{ $user->name}}" >
								</div>
								<div class="form-group">
									<label for="Email">Email</label>
									<input type="text" class="form-control" value="{{ $user->email}}"  disabled>
								</div>
								
								<div class="form-group">
									<label for="phone_number">Phone Number</label>
									<input type="text" name="phone_number" class="form-control" value="{{ $user->phone_number}}" >
								</div>
								<!-- File chooser -->
								<div class="form-group">
									@if($user->avatar)
									<img class="mt-2 mb-2 " src="/storage/photos/{{ $user->avatar}}" style="width: 80px; height:80px;" > 
									@endif
								</div>
								<div class="form-group choose-file d-inline-flex">
									<i class="fa fa-user text-center px-3"></i>
									<input type="file" class="form-control-file mt-2 pt-1  @error('avatar') is-invalid @enderror" name="avatar"  id="input-file">
								 </div>
								 @error('avatar')
									<span class="invalid"  role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
							<!-- Checkbox -->
								<div class="form-check">
								  <label class="form-check-label" for="hide-profile">
									<input class="form-check-input mt-1" type="checkbox" value="" id="hide-profile">
									Hide Profile from Public/Comunity
								  </label>
								</div>
								<!-- Zip Code -->
								<div class="form-group">
									<label for="zip-code">Zip Code</label>
									<input type="text" class="form-control" id="zip-code">
								</div>
								<!-- Submit button -->
								<button  type="submit" class="btn btn-transparent" >Save My Changes</button>
							</form>
						</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Password -->
					<div class="widget change-password">
						<h3 class="widget-header user">Edit Password</h3>
					
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-password">Current Password</label>
								<input type="password" class="form-control" id="current-password">
							</div>
							<!-- New Password -->
							<div class="form-group">
								<label for="new-password">New Password</label>
								<input type="password" class="form-control" id="new-password">
							</div>
							<!-- Confirm New Password -->
							<div class="form-group">
								<label for="confirm-password">Confirm New Password</label>
								<input type="password" class="form-control" id="confirm-password">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent">Change Password</button>
				
					</div>
					</div>
					<div class="col-lg-6 col-md-6">
						<!-- Change Email Address -->
					<div class="widget change-email mb-0">
						<h3 class="widget-header user">Edit Email Address</h3>
				
							<!-- Current Password -->
							<div class="form-group">
								<label for="current-email">Current Email</label>
								<input type="email" class="form-control" id="current-email">
							</div>
							<!-- New email -->
							<div class="form-group">
								<label for="new-email">New email</label>
								<input type="email" class="form-control" id="new-email">
							</div>
							<!-- Submit Button -->
							<button class="btn btn-transparent">Change email</button>
						
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection