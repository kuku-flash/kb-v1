@extends('layouts.kingsbridge')
@section('content')

<section class="section-sm">
    <div class="container">
      <form action="{{ route('user.post_invoice')}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">     
        @csrf
       

<fieldset class="border border-gary p-4 mb-5">
  <h4 style=" text-align: center;">Choose your boosting Plan</h4>
  <section>
  <div class="row">
      <div class="col-lg-12">
          <h3>Ad Boost Plan</h3>

          <h6 class="font-weight-bold pt-4 pb-1">Boost your Listing</h6>
       
      </div>
  </div>
  <input type="hidden" name="user_id" value="{{ Auth::user()->id}}" >
  <input type="hidden" name="listing_id" value="{{ $listing }}" >
  <div class="container">
    <div class="row">
      @foreach ($packages as $package )
      <div class="col-lg-4 col-md-6">
        <div class="package-content bg-light border text-center p-5 my-2 my-lg-0">
            <div class="package-content-heading border-bottom">
                <i class="fa fa-paper-plane"></i>
                <h2>{{ $package->package_name }}</h2>
                <h4 class="py-3"> <span>{{ $package->package_duration }}</span> Per Days</h4>
            </div>
            <ul>
                <li class="my-4"> <i class="fa fa-check"></i> Free Ad Posting  </li>
                <li class="my-4"> <i class="fa fa-check"></i>15 Features Ad Availability</li>
                <li class="my-4"> <i class="fa fa-check"></i>For 15 Days</li>
                <li class="my-4"> <i class="fa fa-check"></i>100% Secure</li>
            </ul>
            <input type="radio"  id="inputGroupSelect" class="form-control" name="package_id" value="{{ $package->id }}" {{(old('package_id')==$package->id)? 'checked':''}}>
        
                  @error('package_id')
                  <span class="invalid" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
        </div>
        
    </div>
    @endforeach
    </div>
</div>


  </section>
</fieldset>


<button type="submit" class="btn btn-primary d-block mt-2 float-right">Click to Pay</button>
</form>
    
        </form>
    </div>
</section>

  @endsection