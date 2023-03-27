@extends('layouts.kingsbridge')
@section('content')


<section class=" bg-gray py-5">
    <div class="container">

<fieldset class="border bg-white p-4 my-5 ad-feature bg-gray">
  <div class="row">
        
      <div class="col-lg-12">

          <h2 class="pb-3">Your Order Summary
              
          </h2>

      </div>
      <div class="col-lg-6 my-3">
        @foreach ($packages as $package)
        @if ($package->id == $packageid)


        
          
          <div class="package-content  border text-center p-5  mb-4 my-lg-0">
            <div class="package-content-heading border-bottom">
             
                <h2>{{ $package->package_name}}</h2>
                <h2 class="py-3"> Kes {{ $package->package_amount}}</h2>
                <h5 class="py-3"> <span> For {{ $package->package_duration}} Days</h5>
            </div>
            <ul>
                <li class="my-4"> <i class="fa fa-check"></i> Features Ad Availability</li>
                <li class="my-4"> <i class="fa fa-check"></i>For {{ $package->package_duration}} Days</li>
                <li class="my-4"> <i class="fa fa-check"></i>100% Secure</li>
            </ul>
 
        </div>

        @endif
        @endforeach 
        <div class="package-content  border text-center p-5  mt-4 my-lg-0">
        <span class="mb-3 d-block">Please select the preferred payment method:</span>
          <select>
            <option>Mpesa</option>
          </select>
        </div>

      </div>
      
      <div class="col-lg-6 my-3">
        <form action="{{ route('user.post_invoice')}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data"> 
          @csrf
          <input type="hidden"  name="user_id" value="{{ Auth::user()->id}}" >
          <input type="hidden" name="listing_id" value="{{ $listing }}" >
          <input type="hidden" name="package_id" value="{{ $packageid }}" >
          @foreach ($packages as $package)
          @if ($package->id == $packageid)
          <input type="hidden" name="total" value=" {{ $package->package_amount}}" >
          <input type="hidden" name="package_duration" value=" {{ $package->package_duration}}" >
          <span class="mb-3 d-block">{{$package->package_name}}</span>
         
          
          <table class="table ">
           
            <tbody>
            <tr>
              <tr>
                <th class="text-right">Subtotal</th>
                <td class="text-center">kes {{$package->package_amount}}</td>
              </tr>
              <tr>
                <th class="text-right">VAT</th>
                <td class="text-center"> 0%</td>
              </tr>
           
              <tr>
                <th class="text-right">Total Amount</th>
                <td class="text-center"> <h2> <b>kes {{ $package->package_amount}} </b> </h2></td>
              </tr>
            </tr>
            </tbody>
    
          </table>

          <button type="submit" class="btn btn-primary d-block mt-2 float-right">Checkout to Pay Now</button>
        </form>
      </div>
    
  </div>
  @endif
  @endforeach
</fieldset>
    </div>
</section>


  @endsection