@extends('layouts.admin')
@section('content')

@if(session('success'))
<div class="mt-3 alert alert-success">
 <span> {{ session('success') }} </span>
</div>
@endif
<div class="container-fluid">
  
        <div class="rounded-button">
           <a href="{{route('admin.carmake.create')}}"> <button type="button" class="btn mb-3 btn-rounded btn-primary">Create</button> </a>
        
        </div>
  
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if( count ($carmakes) > 0)
                    <h4 class="card-title">Car Makes</h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>carmake</th>          
                                    <th>Actions</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                              @foreach ($carmakes as $carmake)
                                <tr>
                                    <td>{{$carmake->make}}</td>
                                    <td>
                                        <a href="{{ route('admin.carmake.edit',$carmake->id)}}" ><i class="fa fa-pencil color-muted m-r-5"></i> </a>
                                        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit()" class="btn btn-app"><i class="fa fa-close color-danger"></i></a>
                                        <form action="{{ route('admin.carmake.destroy',$carmake->id)}}" method="post">
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
                    <p> please add car makes </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

@endsection