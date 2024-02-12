@extends('layouts.kingsbridge')
@section('content')



<section class="login py-5 border-top-1">
    <div class="container">
    <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh;flex-grow: 1;">
          <div class="loginbackground box-background--white padding-top--64">
            <div class="loginbackground-gridContainer">
              <div class="box-root flex-flex" style="grid-area: top / start / 8 / end;">
                <div class="box-root" style="background-image: linear-gradient(white 0%, rgb(247, 250, 252) 33%); flex-grow: 1;">
                </div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 2 / auto / 5;">
                <div class="box-root box-divider--light-all-2 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 6 / start / auto / 2;">
                <div class="box-root box-background--gold800" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 7 / start / auto / 4;">
                <div class="box-root box-background--gold animationLeftRight" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 8 / 4 / auto / 6;">
                <div class="box-root box-background--silver100 animationLeftRight tans3s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 2 / 15 / auto / end;">
                <div class="box-root box-background--cyan200 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 3 / 14 / auto / end;">
                <div class="box-root box-background--gold animationRightLeft" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 4 / 17 / auto / 20;">
                <div class="box-root box-background--silver100 animationRightLeft tans4s" style="flex-grow: 1;"></div>
              </div>
              <div class="box-root flex-flex" style="grid-area: 5 / 14 / auto / 17;">
                <div class="box-root box-divider--light-all-2 animationRightLeft tans3s" style="flex-grow: 1;"></div>
              </div>
            </div>
          </div>
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="box-root padding-top--48 padding-bottom--24 flex-flex flex-justifyContent--center">
            </div>
            <div class="formbg-outer">
              <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                   <div class="wizard-header">
                    <h3>
                      <p style="font-weight: 450; font-size:20px; text-align: center;"> <b>KINGSBRIDGE</b><br>LOGIN<br> </p>
                    </h3>
                </div>
                  <form  method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="field padding-bottom--24">
                      <label for="email">Email</label>
                      <input type="email"  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" 
                      placeholder="Email" >
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                    </div>
                    <div class="field padding-bottom--24">
                      <div class="grid--50-50">
                        <label for="password">Password</label>
                      </div>
                      <input type="password"  @error('password') is-invalid @enderror" name="password" placeholder="Password" 
                      >
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                       @enderror
                    </div>
                    <div class="reset-pass">
                      <a href="{{route('forget.password.get')}}">Forgot your password?</a>
                    </div>
                    <div class="field field-checkbox padding-bottom--24 flex-flex align-center">
                      <label for="checkbox">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                    <div class="field padding-bottom--24">
                      <input type="submit" name="submit" value="Continue">
                    </div>
                    
                    <!--<div class="field text-center padding-bottom--5 inline-flex items-center bg-gray-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">-->
                    <!--  <a href=" {{ route('login.google')}}" class="">-->
                    <!--  <img style="height: 50px; width:50px;  padding:1px;" src="{{asset('images/gp.png')}}"   >-->
                    <!--  <span style="color: black;">Continue with Google</span>                -->
                    <!--  </a>-->
                      
                     
                    <!--  </div>-->
                    <!--  <div class="field text-center mt-3 inline-flex items-center bg-gray-800 border border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">-->
                    <!--  <a href=" {{ route('login.facebook')}}" >-->
                    <!--    <img style="height: 50px; width:50px; padding:5px;" src="{{asset('images/fb.png')}}"   >-->
                    <!--    <span style="color: black;">Continue with Facebook</span>                -->
                    <!--    </a> -->
                    <!--  </div>-->
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
      </div>

</section>

@endsection