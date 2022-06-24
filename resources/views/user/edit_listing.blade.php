@extends('layouts.kingsbridge')
@section('content')

<section class="section-sm">
    <div class="container">
      <form action="{{ route('user.update_listing', [$listing->id, $vehicle->id])}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">     
        @csrf
        @method('put')
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                <h4 style=" text-align: center;">Edit your AD</h4>
                <section>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Post Your Listing</h3>

                        <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                        <select name="category" id="inputGroupSelect" class="w-100">
                            <option value="">Select category</option>
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}"
                                @if ($category->id == $listing->category_id)
                                selected
                                @endif
                              >{{ $category->category_name }}</option>
                            @endforeach
               
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Select Your City</h6>
                        <select name="city" id="inputGroupSelect" class="w-100">
                            <option value="">Select City</option>
                            @foreach ($cities as $city )
                            <option value="{{ $city->id }}"
                              @if ($city->id == $listing->city_id)
                              selected
                              @endif
                              >{{ $city->city }}</option>
                            @endforeach
                        </select>
                     
                    </div>
                </div>
            </fieldset>
            
<!-- Post Your ad start -->
<fieldset class="border border-gary p-4 mb-5">
  <div class="row">
      <div class="col-lg-12">
          <h3>Post Your Vehicle <!--  $currentId --></h3>
          <h6 class="font-weight-bold pt-4 pb-1">Select Car Model:</h6>
     
          <div class="form-group  mt-2 mb-2 col-md-6"> 
              <select name="make" class=" make  @error('make') is-invalid  @enderror">
                <option value="">Choose a Make</option>
                  @foreach($makes as $make)
                    <option value="{{ $make->id }}"
                      @if ($vehicle->carmodel->carmake->id == $make->id)
                      selected
                      @endif
                      >{{ $make->make }}</option>
                  @endforeach
             
              </select>
                              
              <select name="model_id" class="model  @error('model') is-invalid  @enderror">

                <option value="0" disabled="true" selected="true">Choose a model</option>
               

                   @foreach($models as $model)
                    <option value="{{ $model->id }}"
                      @if ($model->id == $vehicle->model_id)
                      selected
                      @endif
                      >{{ $model->model }}</option>
                  
                  @endforeach

                  
              </select>
                @error('model')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
          </div>

        
          <h6 class="font-weight-bold pt-4 pb-1">Title</h6>
          <input name="title" type="text" class="border w-100 p-2 bg-white text-capitalize" value="{{$vehicle->title}}" >

          <h6 class="font-weight-bold pt-4 pb-1">Year of Build:</h6>
          <input type="number" name="year_of_build" class="border w-100 p-2 bg-white text-capitalize @error('year_of_build') is-invalid @enderror" 
          placeholder="{{$vehicle->year_of_build}}" value="{{$vehicle->year_of_build}}" >
              @error('year_of_build')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          
          <h6 class="font-weight-bold pt-4 pb-1">Car Condition</h6>
          <select name="condition" id="inputGroupSelect" class="w-100">
              <option selected>{{$vehicle->condition}}</option>     
              <option>Foreign Used</option>     
              <option>Local Used</option>    
          </select>
          <h6 class="font-weight-bold pt-4 pb-1">Mileage:</h6>
          <input type="number" name="mileage" class="border w-100 p-2 bg-white text-capitalize" value="{{$vehicle->mileage}}">
          
          <h6 class="font-weight-bold pt-4 pb-1">Car Transmission</h6>
          <select name="transmission" id="inputGroupSelect" class="w-100">
            <option selected>{{$vehicle->transmission}}</option>       
              <option>Manual</option>     
              <option>Automatic </option>    
          </select>
          <h6 class="font-weight-bold pt-4 pb-1">Car Fuel Type</h6>
          <select name="fuel_type" id="inputGroupSelect" class="w-100">
            <option selected>{{$vehicle->fuel_type}}</option>     
              <option>Petrol</option>     
              <option>Diesel</option>    
          </select>
          <h6 class="font-weight-bold pt-4 pb-1">Exchange</h6>
          <input name="exchange" type="text" class="border w-100 p-2 bg-white text-capitalize" value="{{$vehicle->exchange}}">

          <h6 class="font-weight-bold pt-4 pb-1">Price</h6>
          <input name="price" type="text" class="border w-100 p-2 bg-white text-capitalize"  value="{{$vehicle->price}}">

          <h6 class="font-weight-bold pt-4 pb-1">Car Body Type</h6>
          <select name="body_type" id="inputGroupSelect" class="w-100">
            <option selected>{{$vehicle->body_type}}</option>       
              <option>saloon</option>     
              <option>Suv</option>    
              <option>convertible</option>    
              <option>coupe</option> 
              <option>hatchback</option>
              <option>pickup</option> 
              <option>stationwagon</option> 
              <option>minivan</option> 
          </select>

          <h6 class="font-weight-bold pt-4 pb-1">Color</h6>
          <input name="color" type="text" class="border w-100 p-2 bg-white text-capitalize"  value="{{$vehicle->color}}">
          
          <h6 class="font-weight-bold pt-4 pb-1">Car Duty Type</h6>
          <select name="duty_type" id="inputGroupSelect" class="w-100">
            <option selected>{{$vehicle->duty_type}}</option>        
              <option>Paid</option>     
              <option>unpaid</option>    
      
          </select>
          <h6 class="font-weight-bold pt-4 pb-1">Car Interior Type</h6>
          <select name="interior_type" id="inputGroupSelect" class="w-100">
            <option selected>{{$vehicle->interior_type}}</option>      
              <option>leather</option>     
              <option>cloth</option>     
          </select>
          <h6 class="font-weight-bold pt-4 pb-1">Engine size</h6>
          <input name="engine_size" type="text" class="border w-100 p-2 bg-white text-capitalize"  value="{{$vehicle->engine_size}}">
          
          <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
          <textarea name="description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product" >
            {{$vehicle->description}}
          </textarea>
    
          <div class="field" align="left">
            <h3>Upload your images</h3>
            <input type="file" id="files" name="images[]" multiple />
          </div>
   
@foreach ($vehiclephotos as $vehiclephoto)
    @if($vehiclephoto->vehicle->listing_id == $listing->id)
      <img width="80px" height="auto" src="/photos/{{ $vehiclephoto->photo }}" alt="image description">
    @endif  
          
@endforeach
     
      </div>
  </div>
</fieldset>
<fieldset class="border border-gary p-4 mb-5">
  <h4 style=" text-align: center;">Choose your boosting Plan</h4>
  <section>
  <div class="row">
      <div class="col-lg-12">
          <h3>Ad Boost Plan</h3>

          <h6 class="font-weight-bold pt-4 pb-1">Boost your Listing</h6>
          <select name="package_id" id="inputGroupSelect" class="w-100">
            <option selected value="{{ $listing->package_id }}">{{ $listing->package->package_name }}</option>
              @foreach ($packages as $package )
              <option value="{{ $package->id }}">{{ $package->package_name }}</option>
              @endforeach
 
          </select>
       <input type="hidden" name="user_id" value="{{ Auth::user()->id}}" >
      </div>
  </div>
  </section>
</fieldset>

<button type="submit" class="btn btn-primary d-block mt-2">Update Your Listing</button>
</form>
    
        </form>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<style>
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 100px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>

<script>
$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"remove\">Remove image</span>" +
              "</span>").insertAfter("#files");
            $(".remove").click(function(){
              $(this).parent(".pip").remove();
            });
            
            // Old code here
            /*$("<img></img>", {
              class: "imageThumb",
              src: e.target.result,
              title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/
            
          });
          fileReader.readAsDataURL(f);
        }
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });
  </script>
    <!-- The script for Car Make -->
    <script>
      $(document).ready(function(){
    
    $(document).on('change','.make',function(){
      // console.log("hmm its change");
    
      var make_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();
    
      var option=" ";
    
      $.ajax({
        type:'get',
        url:'{!!URL::to('user/model')!!}',
        data:{'id':make_id},
        success:function(data){
          
          for(var i=0;i<data.length;i++){
            option+='<option value="'+data[i].id+'">'+data[i].model+'</option>';
           }
    
           div.find('.model').html(" ");
           div.find('.model').append(option);
        },
        
        error:function(){    }
      });
    });
    
    
    });
    
      </script>
  @endsection