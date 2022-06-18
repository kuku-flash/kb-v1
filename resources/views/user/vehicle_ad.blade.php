@extends('layouts.kingsbridge')
@section('content')

<section class="ad-post bg-gray py-5">
    <div class="container">
        <form method="POST" action="{{ route('user.store_vehicle_ad')}}" >
            @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Post Your Vehicle <!--  $currentId --></h3>
                        <h6 class="font-weight-bold pt-4 pb-1">Select Car Model:</h6>
                        <input type="text" name="listing_id" value="{{$currentId}}">
                        <div class="input-group mt-2 mb-2 col-md-6"> 
                            <select name="make" class="form-control make  @error('make') is-invalid  @enderror">
                              <option value="">Choose a Make</option>
                  
                                @foreach($makes as $make)
                                  <option value="{{ $make->id }}">{{ $make->make }}</option>
                                @endforeach
                           
                            </select>
                                            
                            <select name="model" class="form-control model  @error('model') is-invalid  @enderror">

                              <option value="0" disabled="true" selected="true">Choose a model</option>
                             

                                 @foreach($models as $model)
                                 @if ($make->id = $model->make_id)
                                  <option value="{{ $model->id }}">{{ $model->model }}</option>
                                  @endif
                                @endforeach

                                
                            </select>
                              @error('model')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                        </div>
                        
                        <h6 class="font-weight-bold pt-4 pb-1">Year of Build:</h6>
                        <input type="number" name="year_of_build" class="border w-100 p-2 bg-white text-capitalize @error('year_of_build') is-invalid @enderror" placeholder="1964">
                            @error('year_of_build')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        
                        <h6 class="font-weight-bold pt-4 pb-1">Car Condition</h6>
                        <select name="condition" id="inputGroupSelect" class="w-100">
                            <option value="">Select Condition</option>     
                            <option>Foreign Used</option>     
                            <option>Local Used</option>    
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Mileage:</h6>
                        <input type="text" name="mileage" class="border w-100 p-2 bg-white text-capitalize" placeholder="Mileage go There">
                        
                        <h6 class="font-weight-bold pt-4 pb-1">Car Transmission</h6>
                        <select name="transmission" id="inputGroupSelect" class="w-100">
                            <option value="">Select Transmission</option>     
                            <option>Manual</option>     
                            <option>Automatic </option>    
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Car Fuel Type</h6>
                        <select name="transmission" id="inputGroupSelect" class="w-100">
                            <option value="">Select Fuel type</option>     
                            <option>Petrol</option>     
                            <option>Diesel</option>    
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Exchange</h6>
                        <input name="exchange" type="text" class="border w-100 p-2 bg-white text-capitalize">

                        <h6 class="font-weight-bold pt-4 pb-1">Price</h6>
                        <input name="price" type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="Kes 00.00">

                        <h6 class="font-weight-bold pt-4 pb-1">Car Body Type</h6>
                        <select name="body_type" id="inputGroupSelect" class="w-100">
                            <option value="">Select Body type</option>     
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
                        <input name="color" type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="color of your car">
                        
                        <h6 class="font-weight-bold pt-4 pb-1">Car Duty Type</h6>
                        <select name="duty_type" id="inputGroupSelect" class="w-100">
                            <option value="">Select Duty type</option>     
                            <option>Paid</option>     
                            <option>unpaid</option>    
                    
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Car Interior Type</h6>
                        <select name="interior_type" id="inputGroupSelect" class="w-100">
                            <option value="">Select Body type</option>     
                            <option>leather</option>     
                            <option>cloth</option>     
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Engine size</h6>
                        <input name="engine_size" type="text" class="border w-100 p-2 bg-white text-capitalize" placeholder="Your Engine size">
                        
                        <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
                        <textarea name="description" id="" class="border p-3 w-100" rows="7" placeholder="Write details about your product"></textarea>
                        <button class="btn btn-primary d-block mt-2">Next</button>
                    </div>
                </div>
            </fieldset>

       


            <!-- submit button -->
            <div class="checkbox d-inline-flex">
                <input type="checkbox" id="terms-&-condition" class="mt-1">
                <label for="terms-&-condition" class="ml-2">By click you must agree with our
                    <span> <a class="text-success" href="terms-condition.html">Terms & Condition and Posting Rules.</a></span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary d-block mt-2">Post Your Ad</button>
        </form>
    </div>
</section>
<script>
      $(document).on('change','.make',function(){
      // console.log("hmm its change");

      var make_id=$(this).val();
      // console.log(cat_id);
      var div=$(this).parent();

      var op=" ";

      $.ajax({
        type:'get',
        url:'{!!URL::to('/user/model')!!}',
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
</script>
  @endsection