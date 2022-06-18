@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="rounded-button">
    <a href="{{ route('admin.permission.index')}}" class="btn mb-1 btn-rounded btn-primary">Back</a>
    </div>
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Permission Create</h4>
            <div class="basic-form">
                <form method="POST" action="{{ route('admin.permission.store') }}">
                    @csrf
                    
                    <div class="form-group">
                        <label>Permission Name</label>
                        <input type="text" name="title" class="form-control  @error('title') is-invalid @enderror" placeholder="permission name">
                            @error('title')
                                <span class="invalid-feedback" permission="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    
                
                    <button type="submit" class="btn btn-dark">Add</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection