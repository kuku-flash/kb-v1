@extends('layouts.invoice')
@section('content')

<!--==================================
=            User Profile            =
===================================-->


<section class="section-sm">
	<!-- Container Start -->
	<div class="container">
		<!-- Row Start -->
		<div class="row">

			<div class="col-md-10 col-lg-10 offset-lg-0">
				<!-- Recently Favorited -->
				<div class="widget dashboard-container my-adslist">
					<table class="table table-responsive product-dashboard-table">
						<thead>
              <h1>
                <a class="navbar-brand" href="/" style="font-size: 2.25rem;"><img src="{{ asset('images/king2.png')}}" 
                style=" width:80px; height:80px;vertical-align: middle;padding-left: 0px;padding-right: 0px; padding-top: 0px; border-style: none; " >
                <span style="color:#d4af37">Kings</span><span style="color:#aaa9ad">bridge</span></a>
                <h2><b>Invoice #{{ $invoice->id}}</b></h2>
                <br>
              </h1>

            <div class=" invoice-col text-right">

                  <div class="invoice-status">
                    <!--@if ($invoice->status == 'PAID')-->
                    <!--<h2 class="status" style="color: green;">{{ $invoice->status}}</h2>-->
                    <!--@endif-->
                    <!--@if ($invoice->status == 'UNPAID')-->
                    <!--<h2 class="status" style="color: red;">{{ $invoice->status}}</h2>-->
                    <!--@endif-->
                                        <h2 class="status" style="color: green;">Paid Invoice</h2>

                       
                  </div>

                  <div class="small-text">
                      Due Date: {{ $invoice->due_date}}
                  </div>

          </div>
       
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info ">
          <div class="col-sm-4 invoice-col">

            <strong>Invoiced To</strong>
                    <address class="small-text">
                      {{ $invoice->user->name}}<br />
                      {{ $invoice->user->address}} <br />
                      <br />
                        
                                                                    </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
      
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col text-right">
            <strong>Pay To</strong>
                    <address class="small-text ">
                                                      Kingsbridge <br />
                              P. O Box 60278-00200<br />
                              Nairobi - Kenya <br />
                              <br />
                              info@kingsbridge.com<br />
                     </address>
                </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
    
        <!-- Table row -->
        <div class="row widget-header">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
               
                <th>Description</th>
                <th class="text-center">Amount</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>{{ $invoice->package->package_name}} </br>
                  Payment ID : {{ $invoice->id}} </br>
                  Your Listing ID : {{ $invoice->listing_id}}
                </td>
                <td class="text-center">kes {{ $invoice->package->package_amount}}</td>
                <tr>
                  <th class="text-right">Subtotal:</th>
                  <td class="text-center">kes {{ $invoice->package->package_amount}}</td>
                </tr>
                <tr>
                  <th class="text-right">VAT</th>
                  <td class="text-center"> {{ $invoice->tax}}</td>
                </tr>
             
                <tr>
                  <th class="text-right">Total:</th>
                  <td class="text-center">kes {{ $invoice->package->package_amount}}</td>
                </tr>
              </tr>
              </tbody>
      
            </table>
             </div> 
             <div class="d-print-none">
          <!--   @if ($invoice->status == 'UNPAID')-->
          <!--  <p class="lead ">Payment Method:</p>-->
          <!--  <img src="{{ asset('images/M-PESA_LOGO-01.svg')}}"style=" width:65px; height:65px;"> -->
          <!--  <form action="modules/gateways/callback/paybill.php" method="post">          -->
          <!--</ul><b>From your phone,</b>-->
          <!--  <ul style="text-align: left;list-style-image: url(modules/gateways/images/check.gif);">-->
          <!--    <li>Go to <b>Safaricom</b> Menu</li>-->
          <!--    <li>Select <b>M-PESA</b></li>-->
          <!--    <li>Select <b>Lipa na MPESA</b></li>-->
          <!--    <li>Select <b>Buy Goods</b></li>-->
          <!--    <li>Enter Till Number <b>5750721</b></li>-->
          <!--    <li>Enter Amount  <b>{{ $invoice->package->package_amount}}</b> <br> then Confirm</li>  -->
          <!--  </ul>-->
          <!--  </ul>-->
          <!--  <hr/>-->
          <!--  @else-->
          <!--  <br>-->
          <!--  @endif-->
            
            <!-- Enter the transaction code you received from MPESA<br/>
            <input type="hidden" name="username" value="" />
            <input type="hidden" name="testmode" value="" />
            <input type="hidden" name="description" value="kingsbridge.co.ke - Invoice #11111" />
            <input type="hidden" name="invoiceid" value="255952" />
            <input type="hidden" name="amount" value="{{ $invoice->package->package_amount}}" />
            <b><font color="red"></font></b>
            <input id="transid" type="text" name="mcode" />
            <input type="submit" value="Verify Code" />
            </form> -->

                 
            <p class="text-muted well well-sm shadow-none" style="text-align: center; margin-top: 10px;"> 
             KingsBridge the leading online platform that sells Vehicles
            </p>
             </div>
            
            
            
          </div>
        </div>

      
      </div>
						</thead>
						<tbody>
							</tr>
						</tbody>
					</table>
          <a href="{{ route('user.index_vehiclesale')}}" class="fa fa-arrow-left d-print-none mb-3 margin-auto">  My List</a>
			</div>
     
		</div>
	</div>

</section>

@endsection