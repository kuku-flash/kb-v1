@extends('layouts.admin')
@section('content')
<div class="container-fluid">
    <div class="rounded-button">
    <a href="{{ route('admin.user.index')}}" class="btn mb-1 btn-rounded btn-primary">Back</a>
    </div>
<div class="row">
<div class="col-lg-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">user Create</h4>
            <div class="basic-form">
                <form method="POST" action="{{ route('admin.user.update',$user->id) }}">
                    @csrf
                   @method('PUT') 
                    <div class="form-group">
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control input-default  @error('name') is-invalid @enderror"
                        value="{{ $user->name}}" >
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input id="email" type="email" class="form-control input-default @error('email') is-invalid @enderror" name="email" 
                        value="{{ $user->email }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>
                    <div class="form-group ">
                        <label>Password</label>
                            <input id="password" type="password" class="form-control input-default @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group ">
                        <label>Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control input-default" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    <div class="form-group">
                        <label>Phone Number </label>
                        <input type="text" name="phone_number" class="form-control input-default @error('phone_number') is-invalid @enderror" placeholder="+25492947351"
                        value="{{ $user->phone_number}}"  >
                            @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>social Links </label>
                        <input type="text" name="social_link" class="form-control input-default @error('social_link') is-invalid @enderror" placeholder="social link"
                        value="{{$user->social_link }}" >
                            @error('social_link')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="form-group">
                        <label>User Type</label>
                      <select name="user_type" class="form-control input-default  @error('user_type') is-invalid @enderror">
                          <option value="{{ $user->user_type }}">Choose a User Type</option>
                            <option value="isUser">isUser</option>
                            <option value="isAdmin">isAdmin</option>
                      </select>
                        @error('county_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                  

                    <div class="form-group">
                        <label>Avatar </label>
                
                            <label class="form-check-label">
                                <input type="file" name="avatar" class="form-control input-default" value="{{ old('avatar') }}">
                                @error('avatar')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-dark">Update</button>
                    
                </form>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection