@extends('layouts.kingship')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
 <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
      <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2">Dashbord  <i class="ion-ios-arrow-forward"></i></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
        <h1 class="mb-3 bread">Car Ad</h1>
      </div>
    </div>
  </div>
  
</section>
<section class="ftco-section bg-light">
 <div class="container">
   <div class="row">

  <div class="col-lg-10 m-auto">

  <div class="card" style="border-radius: 3.25rem;">
    <div class="card-header ">
      <h2 class="text-center"> Car Ad Post </h2>  
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('postad.store_car_ad_post')}}" enctype="multipart/form-data">
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
      <label class="label-control">Car Preferences</label>
 
    </div>
   
      <div class="form-group row p-3">
     
        <div class="input-group mt-2 mb-2 col-md-6"> 
          <span class="input-group-text"><i class="fa fa-car"></i></span>
          <select name="make" class="form-control make  @error('make') is-invalid  @enderror">
            <option value="">Choose a Make</option>

              @foreach($makes as $make)
                <option value="{{ $make->id }}">{{ $make->make }}</option>
              @endforeach
         
          </select>
      
            @error('make')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
      
            <span class="ml-2 input-group-text"><i class="fa fa-car"></i></span>
          <select name="model" class="form-control model  @error('model') is-invalid  @enderror">
            <option value="0" disabled="true" selected="true">Choose a model</option>
               
          </select>
            @error('model')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mt-2 mb-2 col-md-6">
            <span class="input-group-text"><i class="fa fa-caret-down"></i></span>
          <select name="trim" class="form-control  @error('trim') is-invalid  @enderror">
            <option value="">Choose a Trim</option>
  
                  <option>Benz200</option>
                  <option>L05 lancer</option>
                
  
          </select>
            @error('trim')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mt-2 mb-2 col-md-6">
            <span class="input-group-text"><i class="fa fa-calendar-plus"></i></span>
          <select name="year_of_build" class="form-control  @error('year_of_build') is-invalid  @enderror">
            <option value="">Year of build</option>
  
                  <option>2000</option>
                  <option>2020</option>
                
  
          </select>
            @error('year_of_build')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mt-2 mb-2 col-md-6">
            <span class="input-group-text"><i class="fa fa-palette"></i></span>
          <select name="color" class="form-control  @error('color') is-invalid  @enderror">
            <option value="">Color</option>
  
                  <option>Blue</option>
                  <option>Red</option>
                
  
          </select>
            @error('color')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>
          <div class="input-group mt-2 mb-2 col-md-6">
            <span class="input-group-text"><i class="fa fa-tachometer-alt"></i></span>
          <input type="number"  name="mileage" class="form-control  @error('mileage') is-invalid  @enderror" placeholder="Mileage">
            @error('mileage')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div>

        </div>
      
    

      <div class="form-group row p-3" >
    
        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-seedling"></i></span>
          <select name="condition" class="form-control  @error('condition') is-invalid  @enderror">
            <option value="">condition</option>

            <option>1</option>
            <option>2</option>


          </select>
          @error('condition')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      
        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-eye"></i></span>
          <select name="body_type" class="form-control  @error('body_type') is-invalid  @enderror">
            <option value="">Body type</option>

            <option>1</option>
            <option>2</option>

          </select>
          @error('body_type')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-bath"></i></span>
          <select name="transmission" class="form-control  @error('transmission') is-invalid  @enderror">
            <option value="">Transmission</option>

            <option>auto</option>
            <option>Mannual</option>

          </select>
          @error('transmission')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-gas-pump"></i></span>
          <select name="fuel_type" class="form-control  @error('fuel_type') is-invalid  @enderror">
            <option value="">Fuel Type</option>

            <option>Desiel</option>
            <option>Petrol</option>

          </select>
          @error('fuel_type')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-vector-square"></i></span>
          <select name="interior_type" class="form-control  @error('interior_type') is-invalid  @enderror">
            <option value="">Interior type</option>

            <option>auto</option>
            <option>Mannual</option>

          </select>
          @error('interior_type')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        

        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-cogs"></i></span>
        <input type="number" name="engine_size" placeholder="Engine Size" class="form-control  @error('engine_size') is-invalid  @enderror">
          @error('engine_size')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row p-3">
        
        <div class="input-group mt-2 mb-2 col-md-6"> 
          <span class="input-group-text"><i class="fa fa-"></i>Kes</span>
          <input type="number" name="price" class="form-control  @error('price') is-invalid  @enderror" placeholder="Price">
          @error('price')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
          </div> 
          <div class="input-group mt-2 mb-2 col-md-6">
            <span class="input-group-text"><i class="fa fa-time"></i></span>
          <select name="duty_type" class="form-control  @error('duty_type') is-invalid  @enderror">
            <option value="">Duty Type</option>
  
                  <option>Month</option>
                  <option>year</option>
          
  
          </select>
            @error('duty_type')
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

    $(document).on('change','.make',function(){
      // console.log("hmm its change");

      var make_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();

      var op=" ";

      $.ajax({
        type:'get',
        url:'{!!URL::to('postad/model')!!}',
        data:{'id':make_id},
        success:function(data){
          //console.log('success');

          //console.log(data);

          //console.log(data.length);
          op+='<option value="0" selected disabled>Choose Model </option>';
          for(var i=0;i<data.length;i++){
          op+='<option value="'+data[i].id+'">'+data[i].model+'</option>';
           }

           div.find('.model').html(" ");
           div.find('.model').append(op);
        },
        
        error:function(){    }
      });
    });


  });

  function previewFiles() {

var preview = document.querySelector('#preview');
var files   = document.querySelector('input[type=file]').files;

function readAndPreview(file) {

  // Make sure `file.name` matches our extensions criteria
  if ( /\.(jpe?g|png|gif)$/i.test(file.name) ) {
    var reader = new FileReader();

    reader.addEventListener("load", function () {
      var image = new Image();
      image.height = 150;
      image.title = file.name;
      image.src = this.result;
      preview.appendChild( image );
    }, false);

    reader.readAsDataURL(file);
  }

}

if (files) {
  [].forEach.call(files, readAndPreview);
}

}
</script>
@endsection