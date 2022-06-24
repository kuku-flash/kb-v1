@extends('layouts.kingsbridge')
@section('content')
<section class="section-sm">
<div class="container">
    <a href="{{ route('user.my_list')}}"  class="btn btn-success"><i class="fa fa-arrow-left"></i> </a>
<div class="invoice p-3 mb-3">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h4>
          <i class="fa fa-globe"></i> Kingsbridge Limit Company
          <small class="float-right">Date: {{ $listing->created_at}}</small>
        </h4>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        From
        <address>
          <strong>Admin, Inc.</strong><br>
          Nairobi, Ngong road, Kenya<br>
          Phone: (804) 123-5432<br>
          Email: info@kingsbridge.com
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        To
        <address>
          <strong>{{ $listing->user->name}}</strong><br>
          <br>
          Phone: {{ $listing->user->phone_number}}<br>
          Email: {{ $listing->user->email}}
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
        <b>Invoice #{{ $listing->id}}</b><br>
        <br>
        <b>Order ID:</b> {{ $listing->id}}<br>
        <b>Payment Due:</b> 2/22/2014<br>
        <b>Account:</b> 968-34567
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead>
          <tr>
           
            <th>Description</th>
            <th>Subtotal</th>
          </tr>
          </thead>
          <tbody>
          <tr>
            
            <td>{{ $listing->package->package_name}} - {{ $vehicle->title}} </td>
            <td>kes {{ $listing->package->package_amount}}</td>
          </tr>
          
   
     
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
   
      <!-- /.col -->
      <div class="col-12" style="text-align: right;">
        <p class="lead">Amount Due {{ $listing->created_at}}</p>

        <div class="table-responsive">
          <table class="table">
            <tr>
              <th style="width:50%">Subtotal:</th>
              <td>kes {{ $listing->package->package_amount}}</td>
            </tr>
            <tr>
              <th>Tax (9.3%)</th>
              <td>kes 10.34</td>
            </tr>
         
            <tr>
              <th>Total:</th>
              <td>kes {{ $listing->package->package_amount}}</td>
            </tr>
          </table>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">
    
            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
              plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div>
    </div>

    <!-- this row will not appear when printing -->
    <div class="row no-print">
      <div class="col-12">
        <a href="#" target="_blank" class="btn btn-dark"><i class="fa fa-print"></i> Print</a>
        <a href="#"  class="btn btn-dark float-right"><i class="fa fa-cog"></i> My List</a>
        <button type="button" class="btn btn-success float-right"><i class="fa fa-credit-card"></i> Submit
          Payment
        </button>
        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
          <i class="fa fa-download"></i> Generate PDF
        </button>
      </div>
    </div>
  </div>
</div>
</section>
  @endsection