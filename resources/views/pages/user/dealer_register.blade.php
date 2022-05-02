@extends('layouts.kingship')
@section('content')


<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
    <div class="container">
       <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
         <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="#" style="color: #D4AF37">User <i class="ion-ios-arrow-forward"></i></a></span> register <span><i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3">Register</h1>
         </div>
       </div>
     </div>
     
   </section>
   <section class="ftco-section contact-section bg-light">
    <div class="overlay"></div>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
              <div class="card-body">

    <form action="{{ route('user.register')}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group" >
            <label class="label-control mb-1">First Name</label>
            <input type="text" name="firstname" class="form-control  @error('firstname') is-invalid  @enderror">
              @error('firstname')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>

          <div class="form-group" >
            <label class="label-control mb-1">Last Name</label>
            <input type="tex" name="secondname" class="form-control  @error('secondname') is-invalid  @enderror">
              @error('secondname')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="form-group" >
            <label class="label-control mb-1">Email</label>
            <input type="email" name="email" class="form-control  @error('email') is-invalid  @enderror">
              @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="form-group ">
            <label for="password" class="label-control mb-1">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
      

        <div class="form-group">
            <label for="password-confirm" class="label-control mb-1">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
     
        </div>
          <div class="form-group" >
            <label class="label-control mb-1">Phone Number</label>
            <input type="number" name="phone_number" class="form-control  @error('phone_number') is-invalid  @enderror">
              @error('phone_number')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
          </div>
          <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

                </div>
            </div>
        </div>>
    </div>
</div>
</section>
@endsection