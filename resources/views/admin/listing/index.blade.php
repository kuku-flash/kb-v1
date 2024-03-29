@extends('layouts.admin')
@section('content')

@if(session('success'))
<div class="mt-3 alert alert-success">
    <span> {{ session('success') }} </span>
   </div>
   @endif
   <div class="container-fluid">
       
       <div class="row">
           <div class="col-12">
               <div class="card">
                   <div class="card-body">
                       @if( count ($listings) > 0)
                       <h4 class="card-title">Listings</h4>
                       <div class="table-responsive">
                           <table class="table table-striped table-bordered zero-configuration">
                               <thead>
                                   <tr>
                                       <th>ID</th> 
                                       <th>category</th> 
                                       <th>Ad Status</th> 
                                       <th>Ad Featured</th> 
                                       <th>Ad Duration</th>
                                       <th>Ad Package</th>
                                       <th>User ID</th>
                                       <th>created_at</th>  
                                       <th>updated_at</th>            
                                       <th>Actions</th>
                                       
                                   </tr>
                               </thead>
                               <tbody>
                                 @foreach ($listings as $listing)
                                   <tr>
                                       <td>{{$listing->id}}</td>
                                       <td>{{$listing->category->category_name}} - 
                                             {{$listing->city->city}}
                                        </td>
                                       <td>
                                        {{$listing->ads_status}}
                                        </td>
                                        <td>
                                            {{$listing->ads_featured}}
                                        </td>
                                        <td>
                                            {{$listing->ads_duration}}
                                        </td>
                                        <td>
                                            {{$listing->package->package_name}}
                                        </td>
                                        <td>
                                            {{$listing->user->name}}
                                        </td>
                                       <td>
                                           @if ($listing->created_at)
                                           {{$listing->created_at->diffForHumans()}}
                                           @endif
                                           
                                        </td>
                                       <td>
                                        @if ($listing->updated_at)
                                        {{$listing->updated_at->diffForHumans()}}
                                        @endif
                                           </td>
                                       <td>
                                           
                                        <a href="#" ><i class="fa fa-eye color-muted m-r-5"></i> </a>
                                        <a href="{{ route('admin.listing.edit', $listing->id)}}" ><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                           <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fa fa-close color-danger"></i></a>
                                           <form action="#" method="post" onsubmit="return confirm('Are you sure want to delete?');">
                                             @method('DELETE')
                                             <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                           </form>
                                       </td>
                                   </tr>
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