@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
  <div class="overlay"> <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2">Dashbord  <i class="ion-ios-arrow-forward"></i></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Car Ad</h1>
      </div>
    </div>
  </div></div>
  
</section>
<section class="ftco-section bg-light">
 
 <div class="container ">
  <a href="{{ route('user.user_cart')}}" class=""><i class="fa fa-arrow-left" style="color:#000;"></i> Back</a>
   <div class="row mt-2">
    <div class="col-xl-2 col-lg-2 col-sm-12 rounded"> 
      <div class="mb-4 p-2 text-center bg-white rounded">
          
           <p> <div class="avatar">
              <img src="/storage/users-avatar/{{ Auth::user()->avatar }}" alt="Avatar" class="avatar">
          </div> <a href="#" class="text-dark" >View profile</a></p>

          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-cog"> </i>Dashbord</a> </p>	
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>My Ads</a> </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-view_list"> </i>Draft Ads</a> </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-chat"> </i>Messages</a> </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-dollar"> </i>Payments</a> </p>
             
      </div>   
    </div>
    <div class="col-xl-10 col-lg-10 col-sm-12 col-12 rounded "> 
 

 	<div class="card "  style="border-radius: 3.25rem;"> 
     <div class="card-body"> 
 	<form method="post" action="{{ route('postad.update_car_ad', $car_ad->id) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group" >
      <label class="label-control">Location</label>
      <select name="county_id" class="form-control  @error('county_id') is-invalid  @enderror">
        <option value="">Choose a County</option>
            @foreach($counties as $c)
            <option value="{{ $c->id }}" 
              @if($c->id == $car_ad->county_id)
                selected
                @endif
                > {{ $c->county_name }} </option>
            @endforeach
      </select>
            @error('county_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

      <select name="city_id" class="mt-2 form-control  @error('city_id') is-invalid  @enderror">
        <option value="">Choose a City</option>
            @foreach($cities as $c)
            <option value="{{ $c->id }}" 
              @if($c->id == $car_ad->county_id)
                selected
                @endif
                > {{ $c->city }} </option>
            @endforeach
      </select>
            @error('city_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
    </div>
    <div class="form-group" >
      <label class="label-control">Title</label>
      <input type="text" name="title" value="{{ $car_ad->title }}" class="form-control  @error('title') is-invalid  @enderror">
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>

    <div class="form-group">
    <label class="label-control">Choose Ad Post Type</label>
      <select name="ads_type" class="form-control  @error('ads_type') is-invalid  @enderror">
         <option> {{ $car_ad->ads_type }} </option>
         <option>Sale</option>
         <option>Rent</option> 
      </select> 
        @error('ads_type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror 
    </div>
    <div class="form-group">
      <label class="label-control">Make</label>
        <select name="make" class="form-control  @error('make') is-invalid  @enderror">
                <option >{{ $car_ad->make }}</option>
                <option>Mazda</option>
                <option>Benz</option>
                <option>Subaru</option>
        </select>
    
          @error('make')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
       
      </div>
      <div class="form-group">
        <label class="label-control">Model</label>
          <select name="model" class="form-control  @error('model') is-invalid  @enderror">
              <option>{{ $car_ad->model }}</option>
                  <option>Supera Mazda</option>
                  <option>CY6 series Benz</option>
                  <option>STI</option>
          </select>
      
            @error('model')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
         
        </div>

      <div class="form-group" >
        <label class="label-control">Year of Build</label>
        <input type="date" value="{{ $car_ad->year_of_build }}" name="year_of_build" class="form-control  @error('year_of_build') is-invalid  @enderror">
          @error('year_of_build')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

    <div class="form-group">
      <label class="label-control">Choose Ad Transmission</label>
        <select name="transmission" class="form-control  @error('transmission') is-invalid  @enderror">
           <option> {{ $car_ad->transmission }} </option>
           <option>Auto</option>
           <option>Manual</option> 
        </select> 
          @error('transmission')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror 
      </div>

      <div class="form-group">
        <label class="label-control">Choose Ad Fuel Type</label>
          <select name="fuel_type" class="form-control  @error('fuel_type') is-invalid  @enderror">
             <option> {{ $car_ad->fuel_type }} </option>
             <option>Petrol</option>
             <option>Diesel</option> 
          </select> 
            @error('fuel_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror 
        </div>

      <div class="form-group" >
        <label class="label-control">Condition</label>
        <input type="text" name="condition" value="{{ $car_ad->condition }}"  class="form-control  @error('condition') is-invalid  @enderror">
          @error('condition')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Price</label>
        <input type="number" name="price" value="{{ $car_ad->price }}" class="form-control  @error('price') is-invalid  @enderror">
          @error('price')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Mileage</label>
        <input type="number" name="mileage" value="{{ $car_ad->mileage }}" class="form-control  @error('mileage') is-invalid  @enderror">
          @error('mileage')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">Description</label>
        <textarea id="article-ckeditor"  name="description" class="form-control  @error('description') is-invalid  @enderror"> 
          {!! $car_ad->description !!}
        </textarea>
          @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group" >
        <label class="label-control">photos</label>
        <input type="file" name="photos" value="{{$car_ad->photos }}" multiple="true" class="form-control  @error('photos') is-invalid  @enderror">
          @error('photos')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      <div class="form-group">
        <label class="label-control">Packages</label>
          <select name="package_id" class="form-control  @error('package_id') is-invalid  @enderror">
            <option value="{{$car_ad->package_id }}">{{$car_ad->Package->package_name }}{{$car_ad->Package->package_amount }}</option>
                  <option value="1">Silver Kes 1000</option>
                  <option value="2">Gold Kes 2000</option>
                  <option value="3">Premium Kes 3000</option>
          </select>
      
            @error('package_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
      
        </div>

    <div class="form-group text-center">
      <input type="submit" class="btn btn-info w-15" value="update">
      <a href="{{ route('user.user_cart')}}" class="btn btn-secondary w-15"> Back</a>
    </div>
  </form>
  </div>
</div>


  </div>   
   </div> 
</section>
@endsection