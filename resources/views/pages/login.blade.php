@extends('layouts.kingsbridge')
@section('content')


<section class="login py-5 border-top-1">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 align-item-center">
                <div class="border">
                    <h3 class="bg-gray p-4">Login Now</h3>
                    <form  method="POST" action="{{ route('login') }}">
                        @csrf
                        <fieldset class="p-4">
                            <input type="email" class="border p-3 w-100 my-2 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                            placeholder="Email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            <input type="password" class="border p-3 w-100 my-2 form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" 
                            >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                
                            <button type="submit" class="d-block py-3 px-5 bg-primary text-white border-0 rounded font-weight-bold mt-3">Log in</button>
                            <a class="mt-3 d-block  text-primary" href="#">Forget Password?</a>
                            <a class="mt-3 d-inline-block text-primary" href="register.html">Register Now</a>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection