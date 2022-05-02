@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
 <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Apartment Ad</h1>
      </div>
    </div>
  </div>
  
</section>
<section class="ftco-section bg-light">
  
 <div class="container">
   <div class="row">
    <div class="col-xl-2 col-lg-2 col-sm-12 rounded"> 
      <div class="mb-4 p-2 text-center bg-white rounded"> 
          <p> 
          <div class="avatar">
              <img src="/storage/users-avatar/{{ Auth::user()->avatar }}" alt="Avatar" class="avatar">
          </div> 
          <a href="#" class="text-dark" >View profile</a>
          </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-cog"> </i>Dashbord</a> </p>	
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>My Ads</a> </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-view_list"> </i>Draft Ads</a> </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-chat"> </i>Messages</a> </p>
          <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-dollar"> </i>Payments</a> </p>
              
          </div>   
      </div>
  <div class="col-xl-10 col-lg-8 col-sm-12 col-12 rounded">
 
 <a href="#" class="btn btn-primary w-25">Back</a>
 	<div class="card"> 
     <div class="card-body"> 
 	<form method="post" action="{{ route('postad.update_apartment_ad', $apartment_ad->id) }}">
    @method('PUT')
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <p>Choose Payment Method</p>
    <table class="table-responsive">
    <tr data-category="active" class="w-100">
        <td>
            <span class="tom-checkbox">
                <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                <label for="tg-adone"></label>
            </span>
        </td>
        <td><img src="{{ strtok($apartment_ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px; margin-left: -28px;"></td>
        <td>
            <h6>{{ $apartment_ad->title }}</h6>
            <span>Ad ID: {{ $apartment_ad->id }}</span>
            <input type="hidden" name="appartment_ad_id[]" value="{{ $apartment_ad->id }}" multiple="true">
        </td>
        <td><h6>{{ $apartment_ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $apartment_ad->Subcategory->subcategory_name }}</span></td>
        
        <td><span class="round btn-warning">Not Published</span></td>
        <td>
        <h6>{{ $apartment_ad->Package->package_name }}</h6>            
    </td>
    <td class="count-me">
        {{ $apartment_ad->Package->package_amount }}
    </td>
        <td>
            <div class="tg-btnsactions">
                <a href="{{route('postad.show_apartment_ad_post',$apartment_ad->id)}}"><i class="icon-eye"></i></a>
                <a href="{{route('postad.edit_apartment_ad',$apartment_ad->id)}}"><i class="icon-pencil"></i> </a>
        
            </div>
        </td>
        <td>
        <a href="#}" class="btn btn-primary">Publish</a>
    </td>
    </tr>
</table>

    <div class="form-group">
      <input type="submit" class="btn btn-info w-25" value="pay">
     </div>
  </form>
  </div>
</div>
  </div>   
   </div> 
</section>
@endsection