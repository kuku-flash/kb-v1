@extends('layouts.admin')
@section('content')
<div class="bootstrap-modal">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Basic modal</button>
    <!-- Modal -->
    <div class="modal fade" id="basicModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="{{ route('admin.carmodel.update',$carmodel->id) }}">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label>Car Make</label>
                          <select name="make_id" class="form-control input-default  @error('make_id') is-invalid @enderror">
                              <option value=" ">Choose a Make</option>
                              @foreach ($carmakes as $carmake)
                                <option value="{{$carmake->id}}"
                                    @if($carmake->id == $carmodel->make_id)
                                        selected
                                    @endif
                                    >{{$carmake->make}}</option>
                              @endforeach
                          </select>
                            @error('make_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Car Model</label>
                            <input type="text" name="model" class="form-control input-default  @error('model') is-invalid @enderror" 
                            value="{{$carmodel->model}}">
                                @error('model')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Car Model Year</label>
                            <input type="number" name="model_year" class="form-control input-default  @error('model_year') is-invalid @enderror" 
                            value="{{$carmodel->model_year}}" >
                                @error('model_year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                 
                  

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection