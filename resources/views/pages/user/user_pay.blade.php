@extends('layouts.kingship')
@section('content')
<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images/navbg.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"> <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Payments<span><i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">cart</h1>
        </div>
      </div>
    </div></div>
    
  </section>

      <section class="ftco-section mt-1"> 
          <div class="container">
              
              
              <div class="row m-auto">
                 
                  <div class="col-xl-12 col-lg-12 col-sm-12 col-12 m-auto">
                  
                    
                      <div class="row">
                          <div class="col-md-12">
                            @if(session('success'))
                            <div class="mt-3 alert alert-success">
                            <span> {{ session('success') }} </span>
                            </div>
                            @endif
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">Payment Method</h4>
                
                                <div class="card-tools">
                                 
                              </div>
                               
                              <div class="card-body  w-100">
                          <form method="post" accept="#"> 
                             package Amount
                            Payment - Method    
                         <input class="btn-primary" type="submit" value="Pay Now">

                          </form>
                              <div class="card-footer">
                          
                              </div>
                            
                              </div>  
                            </div>    
                          </div> 
                        
                
      </div>
      </section>

      <script language="javascript" type="text/javascript">
        var tds = document.getElementById('countit').getElementsByTagName('td');
        var sum = 0;
        for(var i = 0; i < tds.length; i ++) {
            if(tds[i].className == 'count-me') {
                sum += isNaN(tds[i].innerHTML) ? 0 : parseInt(tds[i].innerHTML);
            }
        }
        document.getElementById('countit').innerHTML += '<tr><td>Total:</td><td> kes ' + sum + '</td></tr>  <input type="hidden" name="grant_total" value=" '+ sum +' ">';
        document.getElementById('total').innerHTML += '<tr><td>Total:</td><td> kes ' + sum + '</td></tr>  <input type="hidden" name="grant_total" value="'+ sum +'">';
    </script>
@endsection