@extends('layouts.kingsbridge')
@section('content')

<section class="section-sm">
    <div class="container">
      <form action="{{ route('user.store_listing')}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">     
        @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                <h4 style=" text-align: center;">Post your AD</h4>
                <section>
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Post Your Listing</h3>

                        <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                        <select name="category" id="inputGroupSelect" class="form-control">
                            <option value="">Select category</option>
                            <option value="2" {{(old('category'))? 'selected':''}}>Cars</option>
                        </select>
                        @error('category')
                        <span class="invalid"  role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                       @enderror
                        <h6 class="font-weight-bold pt-4 pb-1">Select Your City</h6>
                        <select name="city" id="inputGroupSelect" class="form-control">
                            <option value="">Select City</option>
                            
                            
                            @foreach ($cities as $city )
                             <option value="{{ $city->id }}" {{(old('city')==$city->id)? 'selected':''}}>
                              {{ $city->city }}</option> 
                        
                            @endforeach
                        </select>
                        @error('city')
                          <span class="invalid"  role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                         @enderror
                    </div>
                </div>
                </section>
            </fieldset>
<!-- Post Your ad start -->
<fieldset class="border border-gary p-4 mb-5">
  <div class="row">
      <div class="col-lg-12">
          <h3>Post Your Vehicle <!--  $currentId --></h3>
          <h6 class="font-weight-bold pt-4 pb-1">Select Make</h6>
     
          <div> 
              <select name="make" class="make form-control">
                <option value="">Choose a Make</option>
    
                  @foreach($makes as $make)
                    <option value="{{ $make->id }}" {{(old('make'))? 'selected':''}}>{{ $make->make }}</option>
                  @endforeach
              </select>
                @error('make_id')
                  <span class="invalid"  role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror

              <h6 class="font-weight-bold pt-4 pb-1">Select Model</h6>           
              <select name="model_id" class="model form-control">
                <option value="0"  disabled="true" selected="true">Choose a model</option>

              </select>
                @error('model_id')
                <span class="invalid"  role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
          </div>
          <h6 class="font-weight-bold pt-4 pb-1">Title</h6>
          <input name="title" value="{{ old('title')}}" type="text" class="border w-100 p-2 bg-white text-capitalize" >

          <h6 class="font-weight-bold pt-4 pb-1">Year of Build:</h6>
          <input type="number" value="{{ old('year_of_build')}}" name="year_of_build" class="border w-100 p-2 bg-white text-capitalize @error('year_of_build') is-invalid @enderror" placeholder="1964">
              @error('year_of_build')
                  <span class="invalid"  role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
          
          <h6 class="font-weight-bold pt-4 pb-1">Select Condition</h6>
          <select name="condition" id="inputGroupSelect" class="form-control">
              <option value="{{ old('condition')}}" {{(old('condition'))? 'selected':''}}> {{ old('condition')}} </option>     
              <option >Foreign Used</option>     
              <option>Local Used</option>    
          </select>
          @error('condition')
            <span class="invalid" role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Mileage:</h6>
          <input type="number" name="mileage" class="border w-100 p-2 bg-white text-capitalize" 
            value="{{ old('mileage')}}" placeholder="Mileage go There">
          @error('mileage')
          <span class="invalid" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Select Transmission</h6>
          <select name="transmission"  id="inputGroupSelect" class="form-control">
            <option value="{{ old('transmission')}}" {{(old('transmission'))? 'selected':''}}> {{ old('transmission')}} </option>   
              <option>Manual</option>     
              <option>Automatic </option>    
          </select>
          @error('transmission')
          <span class="invalid" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Select Fuel Type</h6>
          <select name="fuel_type" id="inputGroupSelect" class="form-control">
            <option value="{{ old('fuel_type')}}" {{(old('fuel_type'))? 'selected':''}}> {{ old('fuel_type')}} </option> 
              <option>Petrol</option>     
              <option>Diesel</option>    
          </select>
          @error('fuel_type')
                <span class="invalid"  role="alert">
                    <strong>{{ $message }}</strong>
                </span>
          @enderror
          <h6 class="font-weight-bold pt-4 pb-1">Select Exchange</h6>
          <select name="exchange" id="inputGroupSelect" class="form-control">
          <option value="{{ old('exchange')}}" {{(old('exchange'))? 'selected':''}}> {{ old('exchange')}} </option> 
            <option>Yes</option>     
            <option>No</option>    
        </select>
          @error('exchange')
            <span class="invalid"  role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror
          <h6 class="font-weight-bold pt-4 pb-1">Price</h6>
          <input name="price" value="{{ old('price')}}" type="text" class="number border w-100 p-2 bg-white text-capitalize" placeholder="Kes 00.00">
          @error('price')
              <span class="invalid"  role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <h6 class="font-weight-bold pt-4 pb-1">Select Body Type</h6>
          <select name="body_type" id="inputGroupSelect" class="form-control">
            <option value="{{ old('body_type')}}" {{(old('body_type'))? 'selected':''}}> {{ old('body_type')}} </option>  
              <option>saloon</option>     
              <option>Suv</option>    
              <option>convertible</option>    
              <option>coupe</option> 
              <option>hatchback</option>
              <option>pickup</option> 
              <option>stationwagon</option> 
              <option>minivan</option> 
          </select>
          @error('body_type')
              <span class="invalid"  role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
          <h6 class="font-weight-bold pt-4 pb-1">Color</h6>
          <select name="color" id="inputGroupSelect" class="form-control">
            <option value="{{ old('color')}}" {{(old('color'))? 'selected':''}}> {{ old('color')}} </option>     
            <option>Black</option>     
            <option>Grey</option>    
            <option>Red</option>    
            <option>Silver</option>  
          </select>
          @error('color')
              <span class="invalid"  role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Select Duty Type</h6>
          <select name="duty_type" id="inputGroupSelect" class="form-control">
            <option value="{{ old('duty_type')}}" {{(old('duty_type'))? 'selected':''}}> {{ old('duty_type')}} </option>        
              <option>Paid</option>     
              <option>unpaid</option>    
          </select>
          @error('duty_type')
              <span class="invalid"  role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Select Interior Type</h6>
          <select name="interior_type" id="inputGroupSelect" class="form-control">
            <option value="{{ old('interior_type')}}" {{(old('interior_type'))? 'selected':''}}> {{ old('interior_type')}} </option>          
              <option>leather</option>     
              <option>cloth</option>     
          </select>
          @error('interior_type')
              <span class="invalid"  role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Engine size</h6>
          <select name="engine_size" id="inputGroupSelect" class="form-control">
            <option value="{{ old('engine_size')}}" {{(old('engine_size'))? 'selected':''}}> {{ old('engine_size')}} </option>    
            <option>1.0L</option>     
            <option>1.2L</option> 
            <option>1.4L</option> 
            <option>1.5L</option> 
            <option>1.6L</option> 
            <option>1.7L</option> 
            <option>1.8L</option> 
            <option>2L</option> 
            <option>2.2L</option>
            <option>2.3L</option> 
            <option>2.5L</option>  
            <option>2.6L</option> 
            <option>2.8L</option> 
            <option>3L</option> 
            <option>3.2L</option>
            <option>3.3L</option>  
            <option>3.5L</option> 
            <option>3.7L</option>
            <option>3.8L</option> 
            <option>3.9L</option> 
            <option>4L</option>  
            <option>4.2L</option> 
            <option>4.3L</option> 
            <option>4.4L</option> 
            <option>4.8L</option> 
            <option>4.9l</option> 
            <option>5L</option> 
            <option>5.2L</option> 
            <option>5.7L</option> 
            <option>5.8L</option> 
            <option>5.9L</option> 
            <option>6L</option> 
            <option>6.2L</option> 
            <option>6.6L</option> 
            <option>6.9L</option> 
            <option>7L</option> 
            <option>7.9L</option> 

          </select>
          @error('engine_size')
            <span class="invalid"  role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror

          <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
          <textarea name="description"  class="description ckeditor form-control" name="wysiwyg-editor">
            {{ old('description')}}
          </textarea>

          @error('description')
            <span class="invalid"  role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror

          <div class="field" align="left">
            <h3>Upload your images</h3>
            <input type="file" id="files" name="images[]" multiple />
          </div>
      </div>
  </div>
</fieldset>
<fieldset class="border border-gary p-4 mb-5">
  <h4 style=" text-align: center;">Upload your cars image</h4>
  <h6 class="font-weight-bold pt-4 pb-1">Kindly follow the below processes</h6>
  <div class="row">
    <div class="space column">
      <div class="card">
        <h3>Front-image</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
  
    <div class="space column">
      <div class="card">
        <h3>Back-image</h3>
        <input type="file" id="back" name="images[]" multiple />
      </div>
    </div>
    
    <div class="space column">
      <div class="card">
        <h3>Right side-image</h3>
        <input type="file" id="right" name="images[]" multiple />
      </div>
    </div>
    
    <div class="space column">
      <div class="card">
        <h3>Left side-image</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Interior front</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Interior back</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Engine-image</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Interior front</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Optional 1</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Optional 2</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
    </div>
    <div class="space column">
      <div class="card">
        <h3>Optional 3</h3>
        <input type="file" id="files" name="images[]" multiple />
      </div>
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
       
       
       <input type="hidden" name="user_id" value="{{ Auth::user()->id}}" >
      </div>
  </div>

  <div class="container">
    <div class="row">
      @foreach ($packages as $package )
      <div class="col-lg-4 col-md-6">
        <div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
            <div class="package-content-heading border-bottom">
                <i class="fa fa-paper-plane"></i>
                <h2>{{ $package->package_name }}</h2>
                <h4 class="py-3"> <span>{{ $package->package_duration }}</span> Per Month</h4>
            </div>
            <ul>
                <li class="my-4"> <i class="fa fa-check"></i> Free Ad Posting</li>
                <li class="my-4"> <i class="fa fa-check"></i>15 Features Ad Availability</li>
                <li class="my-4"> <i class="fa fa-check"></i>For 15 Days</li>
                <li class="my-4"> <i class="fa fa-check"></i>100% Secure</li>
            </ul>
            <input type="radio"  id="inputGroupSelect" name="package_id" value="{{ $package->id }}" {{(old('package_id')==$package->id)? 'checked':''}}>
                  {{ $package->package_name }}"
        </div>
    </div>
    @endforeach
    </div>
</div>


  </section>
</fieldset>


<button type="submit" class="btn btn-primary d-block mt-2">Post Your Listing</button>
</form>
    
        </form>
    </div>
</section>

<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
      $('.ckeditor').ckeditor();
  });
</script>


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
function preview() {
    frame.src=URL.createObjectURL(event.target.files[0]);
}


$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#right").on("change", function(e) {
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
              "</span>").insertAfter("#right");
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




$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#back").on("change", function(e) {
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
              "</span>").insertAfter("#back");
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
    $('input.number').keyup(function(event) {
// skip for arrow keys
if(event.which >= 37 && event.which <= 40) return;
// format number
$(this).val(function(index, value) {
  return value
  .replace(/\D/g, "")
  .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
  ;
});
});
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
        option+='<option value="'+data[i].id+'" >'+data[i].model+'</option>';
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