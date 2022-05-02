@extends('layouts.kingship')
@section('content')
<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
  <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Dashbord  <i class="ion-ios-arrow-forward"></i></a></span>all ads<span><i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Dashbord</h1>
        </div>
      </div>
    </div>
    
  </section>

      <section class="ftco-section bg-light"> 
          <div class="container">
              
              
              <div class="row ">
                <div class="col-xl-2 col-lg-2 col-sm-12 rounded"> 
                  <div class="mb-4 p-2 text-center bg-white rounded">
                      
                       <p> <div class="avatar">
                           @if (Auth::user()->name)
                           <img src="{{ Auth::user()->avatar }}" alt="Avatar" class="avatar">
                           @else
                           <img src="/storage/users-avatar/{{ Auth::user()->avatar }}" alt="Avatar" class="avatar">
                           @endif
                      
                      </div> <a href="#" class="text-dark" >View profile</a></p>
      
                       <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-cog"> </i>Dashbord</a> </p>	
                      <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-heart"> </i>My Ads</a> </p>
                      <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-view_list"> </i>Draft Ads</a> </p>
                      <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-chat"> </i>Messages</a> </p>
                      <p><a href="#" class="btn btn-primary py-2 mr-1 w-100"><i class="icon-dollar"> </i>Payments</a> </p>
                         
                  </div>   
                </div>
                  <div class="col-xl-10 col-lg-10 col-sm-12 col-12 rounded">
                      <div class="row">
                        
                          <div class="col-md-12">
                            <div class="card">
                              <div class="card-header">
                                <h4 class="card-title">My Ads</h4>
                
                                <div class="card-tools">
                                  <nav class="navbar navbar-expand" style="float: left;">
                                    <ul class="navbar-nav">
                                      <li class="nav-item"><a href="#" class="nav-link">All Ads(12)</a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Featured(10)</a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Active(5)</a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Sold(2)</a></li>
                                      <li class="nav-item"><a href="#" class="nav-link">Expired(2)</a></li>
                                      </ul>
                                  </nav>
                                  <div class="input-group input-group-sm" style="width: 150px; float: right; ">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                
                                    <div class="input-group-append">
                                      <button type="submit" class="btn btn-default"><i class="icon-search"></i></button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="card-body table-responsive pt-1 pr-1 pl-1">
                                <table  class="table  table-hover table-responsive text-wrap ">
                                  <thead class="thead bg-light">
                                      <tr>
                                          <th>ID</th>
                                          <th>Photo</th>
                                          <th>Title</th>
                                          <th>Category</th>
                                          <th>Featured</th>
                                          <th>Ad Status</th>
                                          <th>Price &amp; Location</th>
                                          <th>Date</th>
                                          <th>Action</th>
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
                                          <td><img src="/storage/photos/{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px margin-left: -28px;"></td>
                                          <td>
                                              <h6>{{ $ad->title }}</h6>
                                              <span>Ad ID: {{ $ad->id }}</span>
                                          </td>
                                          <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                                          <td>Yes</td>
                                          <td><span class="round btn-success">active</span></td>
                                          <td>
                                              <h6>Ksh {{ $ad->price }} </h6>            
                                          </td>
                                          <td>
                                              <time datetime="2017-08-08">April 27, 2020</time>
                                              <span>Published</span>
                                          </td>
                                          <td>
                                              <div class="tg-btnsactions">
                                                  <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                              </div>
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
                                          <td><img src="/storage/photos/{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px margin-left: -28px;"></td>
                                          <td>
                                              <h6>{{ $ad->title }}</h6>
                                              <span>Ad ID: {{ $ad->id }}</span>
                                          </td>
                                          <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                                          <td>Yes</td>
                                          <td><span class="round btn-success">active</span></td>
                                          <td>
                                              <h6>Ksh {{ $ad->price }} </h6>            
                                          </td>
                                          <td>
                                              <time datetime="2017-08-08">April 27, 2020</time>
                                              <span>Published</span>
                                          </td>
                                          <td>
                                              <div class="tg-btnsactions">
                                                  <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                              </div>
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
                                          <td><img src="/storage/photos/{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px margin-left: -28px;"></td>
                                          <td>
                                              <h6>{{ $ad->title }}</h6>
                                              <span>Ad ID: {{ $ad->id }}</span>
                                          </td>
                                          <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                                          <td>{{ $ad->Package->package_amount }}</td>
                                          <td><span class="round btn-success">active</span></td>
                                          <td>
                                              <h6>Ksh {{ $ad->price }} </h6>            
                                          </td>
                                          <td>
                                              <time datetime="2017-08-08">April 27, 2020</time>
                                              <span>Published</span>
                                          </td>
                                          <td>
                                              <div class="tg-btnsactions">
                                                  <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                              </div>
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
                                          <td><img src="/storage/photos/{{ strtok($ad->photos, ',') }}" width="70" height="70" alt="image description" style="border-radius: 16px margin-left: -28px;"></td>
                                          <td>
                                              <h6>{{ $ad->title }}</h6>
                                              <span>Ad ID: {{ $ad->id }}</span>
                                          </td>
                                          <td><h6>{{ $ad->Category->category_name }}</h6><span class="tg-adcategories">{{ $ad->Subcategory->subcategory_name }}</span></td>
                                          <td>{{ $ad->Package->package_amount }}</td>
                                          <td><span class="round btn-success">active</span></td>
                                          <td>
                                              <h6>Ksh {{ $ad->price }} </h6>            
                                          </td>
                                          <td>
                                              <time datetime="2017-08-08">April 27, 2020</time>
                                              <span>Published</span>
                                          </td>
                                          <td>
                                              <div class="tg-btnsactions">
                                                  <a href="javascript:void(0);"><i class="icon-eye"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-pencil"></i></a>
                                                  <a href="javascript:void(0);"><i class="icon-trash"></i></a>
                                              </div>
                                          </td>
                                      </tr>
                                      @endforeach
                                    
                                  
        
                                  </tbody>
      
                              </table>
                              <div class="card-footer">
                                <div class="block-27" style="float: left;">
                                  <ul>
                                    <li><a href="#">&lt;</a></li>
                                    <li class="active"><span>1</span></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">&gt;</a></li>
                                  </ul>
                                </div>
                              </div>
                              </div>
                              
      
                            </div>
                            
                              
                       
                          
      
                          </div> 
              </div>

      </div>
      </section>
@endsection