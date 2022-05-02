@extends('layouts.kingship')
@section('content')
<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
  <div class="container">
       <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
         <div class="col-md-9 ftco-animate pb-5">
          <p class="breadcrumbs"><span class="mr-2">Dashbord  <i class="ion-ios-arrow-forward"></i></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Apartment Ad</h1>
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
      <h2 class="text-center"> Apartment Ad Post </h2>  
    </div>
    <div class="card-body">
    <form method="post" action="{{ route('postad.store_apartment_ad_post')}}" enctype="multipart/form-data">
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
     
        <div class="input-group mt-2 mb-2 col-md-6"> 
          <span class="input-group-text"><i class="fa fa-building"></i></span>
          <select name="real_state_type" class="form-control  @error('real_state_type') is-invalid  @enderror">
            <option value="">Choose a Property type</option>
  
                  <option>Flat</option>
                  <option>Studio</option>
                  <option>Bungalow</option>
                  <option>Chalet</option>
                  <option>Condo</option>
                  <option>Duplex</option>
                  <option>Farm House</option>
                  <option>House</option>
                  <option>Maisonette</option>
                  <option>Mini Flat</option>
                  <option>Penthouse</option>
                  <option>Room & Parlour</option>
                  <option>Shared Apartment</option>
                  <option>Studio Apartment</option>
                  <option>Townhouse</option>
                  <option>Villa</option>
          </select>
      
            @error('real_state_type')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
          </div> 
          <div class="input-group mt-2 mb-2 col-md-6">
            <span class="input-group-text"><i class="fa fa-seedling"></i></span>
          <select name="condition" class="form-control  @error('condition') is-invalid  @enderror">
            <option value="">Choose a Condition</option>
  
                  <option>Newly Built</option>
                  <option>fairly Used</option>
                  <option>Renovated</option>
                  <option>Old</option>
  
          </select>
            @error('condition')
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
              <span class="input-group-text"><i class="fa fa-time"></i>Per</span>
            <select name="period" class="form-control  @error('period') is-invalid  @enderror">
              <option value="">Choose Period</option>
    
                    <option>Month</option>
                    <option>year</option>
            
    
            </select>
              @error('period')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
      
    
   
    

      <div class="form-group row p-3" >
    
        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-bed"></i></span>
          <select name="bedroom" class="form-control  @error('bedroom') is-invalid  @enderror">
            <option value="">Bedroom</option>

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>

          </select>
          @error('bedroom')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>

      
        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-bath"></i></span>
          <select name="bathroom" class="form-control  @error('bathroom') is-invalid  @enderror chosen-select" >
            <option value="">Bathroom</option>

            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>

          </select>
          @error('bathroom')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-numbers"></i>M</span>
        <input type="number" name="square_meters" placeholder="square meters" class="form-control  @error('square_meters') is-invalid  @enderror">
          @error('square_meters')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>
      </div>

      <div class="form-group row p-3" >
    
        <div class="input-group mb-3 col-md-4">
          <span class="input-group-text"><i class="fa fa-parking"></i></span>
          <select name="parking" class="form-control  @error('parking') is-invalid  @enderror">
            <option value="">Parking</option>

            <option>Allowed</option>
            <option>Not Allowed</option>
           

          </select>
          @error('parking')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
      </div>
      </div>
      
      <div class="form-group" >
        <label class="label-control">Amenities or Facilities</label>
     
        <textarea  name="amenities" class="form-control  @error('amenities') is-invalid  @enderror"> 

        </textarea>
        
        </select>
          @error('amenities')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror
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

        <div class="col-md-6" data-select2-id="39">
          <div class="form-group" data-select2-id="38">
            <label>Multiple</label>
            <select class="select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
              <option data-select2-id="29">Alabama</option>
              <option data-select2-id="30">Alaska</option>
              <option data-select2-id="31">California</option>
              <option data-select2-id="32">Delaware</option>
              <option data-select2-id="33">Tennessee</option>
              <option data-select2-id="34">Texas</option>
              <option data-select2-id="35">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="8" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered"><li class="select2-selection__choice" title="California" data-select2-id="52"><span class="select2-selection__choice__remove" role="presentation">×</span>California</li><li class="select2-selection__choice" title="Delaware" data-select2-id="53"><span class="select2-selection__choice__remove" role="presentation">×</span>Delaware</li><li class="select2-selection__choice" title="Tennessee" data-select2-id="54"><span class="select2-selection__choice__remove" role="presentation">×</span>Tennessee</li><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
          <div class="form-group">
            <label>Disabled Result</label>
            <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="9" tabindex="-1" aria-hidden="true">
              <option selected="selected" data-select2-id="11">Alabama</option>
              <option data-select2-id="56">Alaska</option>
              <option disabled="disabled" data-select2-id="57">California (disabled)</option>
              <option data-select2-id="58">Delaware</option>
              <option data-select2-id="59">Tennessee</option>
              <option data-select2-id="60">Texas</option>
              <option data-select2-id="61">Washington</option>
            </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="10" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-l45b-container"><span class="select2-selection__rendered" id="select2-l45b-container" role="textbox" aria-readonly="true" title="Tennessee">Tennessee</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
          </div>
          <!-- /.form-group -->
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