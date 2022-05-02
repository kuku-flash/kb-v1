@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2">Dashbord  <i class="ion-ios-arrow-forward"></i></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Land Ad</h1>
      </div>
    </div>
  </div>
  
</section>
<section class="ftco-section bg-light">
 <div class="container">
   <div class="row">
  </div>
  <div class="col-lg-10 m-auto">

  <div class="card" style="border-radius: 3.25rem;">
    <div class="card-header ">
      <h2 class="text-center">land Ad Post </h2>  
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('postad.store_land_ad_post')}}" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group" >
      <label class="label-control">Title</label>
      <div class="input-group mb-3 col-12">
        <span class="input-group-text"><i class="fa fa-font"></i></span>
      <input type="text" name="title" class="form-control  @error('title') is-invalid  @enderror">
      
        @error('title')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>
    <div class="form-group" >
      <label class="label-control">Location</label>
     
        
        <div class="input-group-prepend mb-3  col-md-12">
          <span class="input-group-text"><i class="fa fa-location-arrow"></i></span>
     
      <select name="county_id" class="form-control county @error('county_id') is-invalid  @enderror">
        <option value="">Choose a County</option>
            @foreach($counties as $c)
              <option value="{{ $c->id }}">{{ $c->county_name }}</option>
            @endforeach
      </select>
      @error('county_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

      <span class="ml-4 input-group-text"><i class="fa fa-location-arrow"></i></span>
      <select name="city_id" class="form-control city  @error('city_id') is-invalid  @enderror">
        <option value="0" disabled="true" selected="true">Choose a city</option>
           
      </select>
            @error('city_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
           
    </div>          
      
    </div>
  


    <div class="form-group row p-3">
    <label class="label-control">Choose Ad Post Type</label>
    <div class="input-group mb-2 col-md-12">
      <span class="input-group-text"><i class="fa fa-cog"></i></span>
      <select id="ads_type" name="ads_type" class="form-control  @error('ads_type') is-invalid  @enderror">
        <option value="">Choose a Sale or Rent</option>
              <option>rent</option>
              <option>sale</option>
      </select>
  
        @error('ads_type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
     
    </div>
    </div>
    
    <div class="form-group row p-3" >
      <label class="label-control">Address</label>
      <div class="input-group mt-2 mb-2 col-md-12">
        <span class="input-group-text"><i class="fa fa-address-book"></i></span>
      <input type="text" name="address" class="form-control  @error('address') is-invalid  @enderror" placeholder="Address example 'street 3333'">
      </div>    
      @error('address')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
      @enderror
    </div>
   
      <div class="form-group row p-3">
     
        <div class="input-group mt-2 mb-2 col-md-12"> 
          <span class="input-group-text"><i class="fa fa-building"></i></span>
          <select name="land_type" class="form-control  @error('land_type') is-invalid  @enderror">
            <option value="">Choose a Land type</option>
  
                  <option>Farm</option>
                  <option>Flat</option>
                  <option>Rocky</option>
                
          </select>
      
            @error('land_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div> 
  
        </div>
        <div class="form-group row p-3">
        
          <div class="input-group  mb-2 col-md-6"> 
            <span class="input-group-text"><i class="fa fa-"></i>Kes</span>
            <input type="number" name="price" class="form-control  @error('price') is-invalid  @enderror" placeholder="Price">
            @error('price')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            </div> 
            
        <div class="input-group mb-2 col-md-4">
          <span class="input-group-text"><i class="fa fa-numbers"></i>M</span>
        <input type="number" name="square_meters" placeholder="square meters" class="form-control  @error('square_meters') is-invalid  @enderror">
          @error('square_meters')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
          </div>
      


      <div class="form-group" >
        <label class="label-control">Description</label>
        <textarea id="article-ckeditor"  name="description" class="form-control  @error('description') is-invalid  @enderror"> 

        </textarea>
          @error('description')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      <div class="form-group" >
        <label class="label-control">photos</label>
        <div class="input-group mb-3 col-md-12">
        <span class="input-group-text"><i class="fa fa-image"></i></span>
        <input type="file" name="photos[]" multiple="true" class="form-control  @error('photos') is-invalid  @enderror">
          @error('photos')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>
      <div class="form-group row">
        <label class="label-control mt-3 col-md-12">Packages</label>
        
        <div class="col-md-4 mb-4 mt-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-gem"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Silver Package</h3>
              <h3>Kes 1000</h3>
              <span>list your ad in our site </span>
              
              <div class="form-check">
                <input class="form-check-input @error('package_id') is-invalid  @enderror" type="radio" name="package_id" value="1">
                @error('package_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
            </div>
           
          </div>
          
        </div>
        <div class="col-md-4 mb-4 mt-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-gem"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Gold Package</h3>
              <h3>Kes 2000</h3>
              <span>list your ad in our site </span>
              <span>list your ad in our site </span>
              
            </div>
            <div class="form-check">
              <input class="form-check-input @error('package_id') is-invalid  @enderror" type="radio" name="package_id" value="2">
              @error('package_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        <div class="col-md-4 mb-4 mt-2">
          <div class="services services-2 w-100 text-center">
            <div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-gem"></span></div>
            <div class="text w-100">
              <h3 class="heading mb-2">Premium Package</h3>
              <h3>Kes 3000</h3>
              <span>list your ad in our site </span>
            
            </div>
            <div class="form-check">
              <input class="form-check-input @error('package_id') is-invalid  @enderror" type="radio" name="package_id" value="3">
              @error('package_id')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
        </div>
        </div>
        <div class="form-group">
          <input type="hidden" name="category_id" value="{{ $category->id}}">
          <input type="hidden" name="subcategory_id" value="{{ $subcategory->id}}">
          <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        </div>

    <div class="form-group text-center">
      <input type="submit" class="btn btn-info w-25 " value="Post">
     </div>

        </form>
    </div>
  </div>
</div>
 </div>
</div>
  </div>    
</section>
<script src="{{ asset('js/jquery.min.js')}}"></script>
        
<script type="text/javascript">
  $(document).ready(function(){

    $(document).on('change','.county',function(){
      // console.log("hmm its change");

      var county_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();

      var op=" ";

      $.ajax({
        type:'get',
        url:'{!!URL::to('postad/city')!!}',
        data:{'id':county_id},
        success:function(data){
          //console.log('success');

          //console.log(data);

          //console.log(data.length);
          op+='<option value="0" selected disabled>Choose City </option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].city+'</option>';
           }

           div.find('.city').html(" ");
           div.find('.city').append(op);
        },
        error:function(){    }
      });
    });


  });
</script>
@endsection