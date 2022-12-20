@extends('layouts.admin')
@section('content')

@if(session('success'))
<div class="mt-3 alert alert-success">
    <span> {{ session('success') }} </span>
   </div>
   @endif
   <div class="container-fluid">
     
           <div class="rounded-button">
              <a href="#"> <button type="button" class="btn mb-3 btn-rounded btn-primary">Create</button> </a>
           
           </div>
     
       
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-body">
                       @if( count ($vehicles) > 0)
                       <h4 class="card-title">vehicles</h4>
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered zero-configuration">
                               <thead>
                                   <tr>
                                       <th>ID</th> 
                                       <th>Title</th> 
                                       <th>Category</th> 
                                       <th>Listing_id</th>
                                       <th>Images</th> 
                                    
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach($listings as $listing)
                                <tr>
                                    @foreach ($vehicles as $vehicle)
                                        @if($listing->id == $vehicle->listing_id)
                                       <td>{{$vehicle->id}}</td>
                                       <td>{{$vehicle->title}}</td>
                                       <td>{{$listing->category->category_name}}</td>
                                       <td>{{$vehicle->listing_id}}</td>
                                      <td> 

<div class="row">
    <div class="col-lg-4">
        <div class="card">
            <div class="card-body">
                <div class="bootstrap-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                @if ($vehicle->front_img)<img  class="d-block w-100"  src="/storage/photos/{{ $vehicle->front_img }}">  @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->back_img) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->back_img }}">  @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->right_img) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->right_img }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->left_img) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->left_img }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->interiorf_img) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->interiorf_img }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->interiorb_img) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->interiorb_img }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->engine_img) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->engine_img }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->opt_img1) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->opt_img1 }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->opt_img2) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->opt_img2 }}"> @endif
                            </div>
                            <div class="carousel-item">
                                @if ($vehicle->opt_img3) <img class="d-block w-100"   src="/storage/photos/{{ $vehicle->opt_img3 }}"> @endif
                            </div>
                            
                        </div><a class="carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span> </a><a class="carousel-control-next" href="#carouselExampleIndicators"
                            data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                                      </td>
                                       <td>
                                           <a href="#" ><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                           <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fa fa-close color-danger"></i></a>
                                           <form action="#" method="post" onsubmit="return confirm('Are you sure want to delete?');">
                                             @method('DELETE')
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           </form>


                                       </td>
                                   </tr>
                                    @endif
                                   @endforeach
                                   @endforeach
                               </tbody>
               
                           </table>
                       </div>
                       @else
                       <p> please add listing </p>
                       @endif
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection