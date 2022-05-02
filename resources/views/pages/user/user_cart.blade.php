@extends('layouts.kingship')
@section('content')
<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"> <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>Payments<span><i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">cart</h1>
        </div>
      </div>
    </div></div>
    
  </section>

<section class="ftco-section bg-light"> 
<div class="container">

<div class="row">
<div class="col-xl-2 col-lg-2 col-sm-12 rounded"> 
    <div class="mb-4 p-2 text-center bg-white rounded"> 
        <p> 
        <div class="avatar">
            <img src="/storage/users-avatar/{{ Auth::user()->avatar }}" alt="Avatar" class="avatar">
        </div> 
        <a href="#" class="text-dark" >View profile</a>
        </p>
        <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-cog"> </i>Dashbord</a> </p>	
        <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>My Ads</a> </p>
        <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-view_list"> </i>Draft Ads</a> </p>
        <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-chat"> </i>Messages</a> </p>
        <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-dollar"> </i>Payments</a> </p>
            
        </div>   
    </div>

    <div class="col-xl-10 col-lg-10 col-sm-12 col-12 rounded "> 
        <div class="row">
            <div class="col-md-12">
            @if(session('success'))
            <div class="mt-3 alert alert-success">
            <span> {{ session('success') }} </span>
            </div>
            @endif
            <div class="card p-1">
                <div class="col-lg-4 mt-2 mb-2">
                <h4 class="card-title">My Ads Draft</h4>
                </div>
                <div class=" table-responsive w-100">
                <table id="countit"  class="table  table-hover text-wrap ">
                    <thead class="thead">
                        <tr>
                            <th>ID</th>
                            <th>Photo</th>
                            <th>Title</th>
                            <th>Category</th>
    
                            <th>Ad Status</th>
                            
                            <th>Package</th>
                            <th>Amount</th>
                            <th>Action</th>
                            <th>Publish</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($house_ads as $ad)
                        <tr data-category="active">
                            <td>
                                <span class="tom-checkbox">
                                    <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                    <label for="tg-adone"></label>
                                </span>
                            </td>
                            <td><img src="{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px; margin-left: -28px;"></td>
                            <td>
                                <h6>{{ $ad->title }}</h6>
                                <span>Ad ID: {{ $ad->id }}</span>
                                
                                <input type="hidden" name="house_ad_id[]" value="{{ $ad->id }}" multiple="true">
                            </td>
                            <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                            
                            <td><span class="round btn-warning">Not Published</span></td>
                            <td>
                                <h6>{{ $ad->Package->package_name }}</h6>            
                            </td>
                            <td class="count-me">
                                {{ $ad->Package->package_amount }}
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="{{route('postad.show_house_ad_post',$ad->id)}}"><i class="icon-eye"></i></a>
                                    <a href="{{route('postad.edit_house_ad',$ad->id)}}"><i class="icon-pencil"></i></a>
                                
                                </div>
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary">Publish</a>
                            </td>
                        </tr>
                        @endforeach
                        @foreach($apartment_ads as $ad)
                        <tr data-category="active">
                            <td>
                                <span class="tom-checkbox">
                                    <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                    <label for="tg-adone"></label>
                                </span>
                            </td>
                            <td><img src="{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px; margin-left: -28px;"></td>
                            <td>
                                <h6>{{ $ad->title }}</h6>
                                <span>Ad ID: {{ $ad->id }}</span>
                                <input type="hidden" name="appartment_ad_id[]" value="{{ $ad->id }}" multiple="true">
                            </td>
                            <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                            
                            <td><span class="round btn-warning">Not Published</span></td>
                            <td>
                            <h6>{{ $ad->Package->package_name }}</h6>            
                        </td>
                        <td class="count-me">
                            {{ $ad->Package->package_amount }}
                        </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="{{route('postad.show_apartment_ad_post',$ad->id)}}"><i class="icon-eye"></i></a>
                                    <a href="{{route('postad.edit_apartment_ad',$ad->id)}}"><i class="icon-pencil"></i> </a>
                            
                                </div>
                            </td>
                            <td>
                            <a href="{{route('postad.pay_apartment_ad_post',$ad->id)}}" class="btn btn-primary">Publish</a>
                        </td>
                        </tr>
                        @endforeach
                        @foreach($car_ads as $ad)
                        <tr data-category="active">
                            <td>
                                <span class="tom-checkbox">
                                    <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                    <label for="tg-adone"></label>
                                </span>
                            </td>
                            <td><img src="{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px; margin-left: -28px;"></td>
                            <td>
                                <h6>{{ $ad->title }}</h6>
                                <span>Ad ID: {{ $ad->id }}</span>
                                <input type="hidden" name="car_ad_id[]" value="{{ $ad->id }}" multiple="true">
                            </td>
                            <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                        
                            <td><span class="round btn-warning">Not Published</span></td>
                            <td>
                            <h6>{{ $ad->Package->package_name }}</h6>            
                        </td>
                        <td class="count-me">
                            {{ $ad->Package->package_amount }}
                        </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="{{route('postad.show_car_ad_post',$ad->id)}}"><i class="icon-eye"></i></a>
                                    <a href="{{route('postad.edit_car_ad',$ad->id)}}"><i class="icon-pencil"></i></a>
                                    
                                </div>
                            </td>
                            <td>
                            <a href="#" class="btn btn-primary">Publish</a>
                        </td>
                        </tr>
                        @endforeach
                        @foreach($land_ads as $ad)
                        <tr data-category="active">
                            <td>
                                <span class="tom-checkbox">
                                    <input id="tg-adone" type="checkbox" name="myads" value="myadone">
                                    <label for="tg-adone"></label>
                                </span>
                            </td>
                            <td><img src="{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px; margin-left: -28px;"></td>
                            <td>
                                <h6>{{ $ad->title }}</h6>
                                <span>  ID: {{ $ad->id }}</span>
                                <input type="hidden" name="land_ad_id[]" value="{{ $ad->id }}" multiple="true">
                            </td>
                            <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                            
                            <td><span class="round btn-warning">Not Published</span></td>
                            <td>{{ $ad->Package->package_name }}</td>
                            <td class="count-me">
                                {{ $ad->Package->package_amount }}
                                
                            </td>
                            <td>
                                <div class="tg-btnsactions">
                                    <a href="{{route('postad.show_land_ad_post',$ad->id)}}"><i class="icon-eye"></i></a>
                                    <a href="{{route('postad.edit_land_ad',$ad->id)}}"><i class="icon-pencil"></i></a>
                                    
                                </div>
                            </td>
                            <td>
                            <a href="#" class="btn btn-primary">Publish</a>
                        </td>
                        </tr>
                        @endforeach
                    
                    

                    </tbody>

                </table>
            
                
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