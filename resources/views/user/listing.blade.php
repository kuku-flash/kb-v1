@extends('layouts.kingsbridge')
@section('content')

<section class="ad-post bg-gray py-5">
    <div class="container">
      <form action="{{ route('user.store_listing')}}" method="POST" id="step-form-horizontal" class="step-form-horizontal">     
        @csrf
            <!-- Post Your ad start -->
            <fieldset class="border border-gary p-4 mb-5">
                <h4 style=" text-align: center;">Post your AD</h4>
                <section>
                <div class="row">
<<<<<<< HEAD
                    <div class="col-lg-12">
                        <h3>Post Your Listing</h3>

=======
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  " role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
 
>>>>>>> 8858ca6be508eaa862a5e198ef67d10b58f0db7c
                        <h6 class="font-weight-bold pt-4 pb-1">Select Ad Category:</h6>
                        <select name="category" id="inputGroupSelect" class="w-100">
                            <option value="">Select category</option>
                            @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                            @endforeach
               
                        </select>
                        <h6 class="font-weight-bold pt-4 pb-1">Select Your City</h6>
                        <select name="city" id="inputGroupSelect" class="w-100">
                            <option value="">Select City</option>
                            @foreach ($cities as $city )
                            <option value="{{ $city->id }}">{{ $city->city }}</option>
                            @endforeach
                        </select>
<<<<<<< HEAD
                     
                    </div>
=======
                      <button type="submit" class="btn btn-primary d-block mt-2">Next</button>
>>>>>>> 8858ca6be508eaa862a5e198ef67d10b58f0db7c
                </div>
                </section>
            </fieldset>
<!-- Post Your ad start -->
<fieldset class="border border-gary p-4 mb-5">
  <div class="row">
      <div class="col-lg-12">
          <h3>Post Your Vehicle <!--  $currentId --></h3>
          <h6 class="font-weight-bold pt-4 pb-1">Select Car Model:</h6>
     
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
          <h6 class="font-weight-bold pt-4 pb-1">Title</h6>
          <input name="title" type="text" class="border w-100 p-2 bg-white text-capitalize" >

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
          <select name="fuel_type" id="inputGroupSelect" class="w-100">
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
   
          <div class="form-group" >
            <label class="label-control">photos</label>
            <div class="input-group mb-3 col-md-12">
            <span class="input-group-text"><i class="fa fa-image"></i></span>
            <input type="file" name="photo" multiple="true" class="form-control  @error('photos') is-invalid  @enderror">
              @error('photos')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
              @enderror
            </div>
          </div>
      </div>
  </div>
</fieldset>

<button type="submit" class="btn btn-primary d-block mt-2">Post Your Listing</button>
</form>
    
        </form>
    </div>
</section>

  @endsection