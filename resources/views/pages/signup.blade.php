@extends('layouts.kingsbridge')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/gsdk-bootstrap-wizard.css')}}" >
<link rel="stylesheet" href="{{ asset('phone/build/css/intlTelInput.css')}}">


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
  <div class="container">
  <div class="row">
  <div class="col-sm-8 col-sm-offset-2 m-auto">
      <!--      Wizard container        -->
      <div class="wizard-container">
          <div class="card wizard-card" data-color="orange" id="wizardProfile">
              <form action="{{ route('storeuser')}}" method="POST">
          <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->
          @csrf
                <div class="wizard-header">
                    <h3>
                       <b>KINGSBRIDGE</b><br>SIGN UP<br>
                    </h3>
                </div>

      <div class="wizard-navigation">
        <ul>
                        
                        <li><a href="#account" data-toggle="tab">Account</a></li>
                        <li><a href="#information" data-toggle="tab">Registration</a></li>
                     <!--   <li><a href="#photo" data-toggle="tab">Profile Picture</a></li> -->
                    </ul>

      </div>

                  <div class="tab-content">
                      
                      <div class="tab-pane " id="account">
                          <h4 class="info-text"> What type of User are you? (checkboxes) </h4>
                         
                          <div class="row">
                            <div class="col-lg-4 col-md-4">
                              <div class="package-content bg-light border text-center p-1 my-2 my-lg-0">
                                  <div class="package-content-heading ">
                                      <i class="fa fa-user" style="font-size: 50px"></i>
                                      <h4>Buyer or Seeker</h4>
              
                                  </div>
                                  
                                  <input type="radio"  id="inputGroupSelect" class=" user-radios" name="role" value="3" required>
                                  @error('role')
                                  <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                   @enderror
                                      
                              </div>
                              
                            </div>
                            <div class="col-lg-4 col-md-4">
                              <div class="package-content bg-light border text-center p-1 my-2 my-lg-0">
                                  <div class="package-content-heading">
                                      <i class="fa fa-user" style="font-size: 50px"></i>
                                      <h4>Individual seller</h4>             
                                  </div>
                               
                                  <input type="radio"  id="inputGroupSelect" class="f user-radios" name="role" value="16" required>
                                  @error('role')
                                  <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                   @enderror
                                      
                              </div>
                              
                            </div>
                            <div class="col-lg-4 col-md-4">
                              <div class="package-content bg-light border text-center p-1 my-2 my-lg-0">
                                  <div class="package-content-heading">
                                      <i class="fa fa-user" style="font-size: 50px"></i>
                                      <h4>Business </h4>
              
                                  </div>                    
                                  <input type="radio"  id="inputGroupSelect" class=" user-radios" name="role" value="4" required>
                                  @error('role')
                                  <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                   @enderror
                                      
                              </div>
                              
                            </div>
                          </div>
                      
                      </div>
                      <div class="tab-pane" id="information">
                        <div class="row">
                            
                            <div class="col-sm-6">
                                <div class="form-group">
                                  <label>Full Name<small> *</small></label>
                                  <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror"  placeholder="Full Name">
                                  @error('name')
                                  <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                   @enderror
                                </div>
                                
                            </div>
                            <div class="col-sm-6 ">
                              <div class="form-group">
                                <label>Phone Number<small> *</small></label>
                                  <input name="phone_number" type="tel" id="phone" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" 
                                  >
                                  @error('phone_number')
                                  <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                   @enderror
                                </div>
                          </div>
                            <div class="col-md-12">
                              <div class="form-group">
                       
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                 name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                @enderror
                            </div>
                                </div>
                               
    
                                  <div class="col-md-6">
                                    <div class="form-group ">
                                      <label>Password<small> *</small></label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                     name="password" required autocomplete="new-password" placeholder="Password">
                                    </div>

                                  </div>
                                    <div class="col-md-6">
                                     <div class="form-group ">
                                      <label>Confirm Password<small> *</small></label>
                                     <input id="password-confirm" type="password" class="form-control" name="password_confirmation" 
                                    required autocomplete="new-password" placeholder="Password">
                                 </div>
                                  @error('password')
                                      <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                  @enderror
                              </div>
                             
                              
    
                                <div class="col-md-12">
                                  <div class="form-group ">
                                    
                                  </div>
                                </div>
                       
                            <div class="col-sm-12 col-sm-offset-1">
                              <div class="form-group individual">
                                <label>Identification Number<small> *</small></label>
                                  <input name="identification_number" type="text" class="form-control @error('identification_number') is-invalid @enderror" placeholder="Identification Number">
                                  @error('identification_number')
                                  <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                   @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group business">
                                <label>Business Type<small> </small></label>
                                 <select name="category" class="form-control">
                                    <option value="1"> Care hiring agency </option>
                                    <option value="2"> Dealership </option>
                                    <option value="3"> Vehicles Parts and accessories </option>
                                   
                                </select>                             
                             </div>
                            </div>
                            <div class="col-sm-6  col-sm-offset-1">
                              <div class="form-group business">
                                <label>Business Name<small> </small></label>
                                <input name="business_name" type="text" class="form-control" placeholder="Business Name">
                                </div> 
                            </div>

                            <div class="col-md-12">
                                <div class="form-group business">
                                  <label>Tax Identification Number <small>(required)</small></label>
                                  <input name="kra_pin" type="text" class="form-control @error('kra_pin') is-invalid @enderror" placeholder="Tax Identification Number or KRA pin">
                                  @error('kra_pin')
                                       <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span>
                                  @enderror
                                </div>  
                            </div>
                            <div class="col-sm-6">
                              <div class="form-group business">
                                 <label>City</label>
                                  <select name="country" class="form-control">
                                     <option value="Nairobi"> Nairobi </option>
                                     <option value="Kisumu"> Kisumu </option>
                                     <option value="Mombasa"> Mombasa </option>
                                     <option value="...">...</option>
                                 </select>                             
                              </div>
                            </div>

                            <div class="col-sm-6  col-sm-offset-1">
                              <div class="form-group business">
                                <label>Business Address</label>
                                <input name="address" type="text" class="form-control" placeholder="Business Address Location">
                            </div>  
                          </div>

                        </div>
                      </div>
              <!--        <div class="tab-pane" id="photo">
                        <div class="row">
                          <div class="col-sm-12 ">
                            <div class="picture-container">
                                <div class="picture">
                                    <img src="../images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                    <input type="file" name="avatar" id="wizard-picture">
                                </div>
                                <h6>Choose Picture</h6>
                            </div>
                            </div>
                        </div>
                      </div>  -->
                      
                  </div>
                  <div class="wizard-footer height-wizard">
                      <div class="pull-right">
                          <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                          <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

                      </div>

                      <div class="pull-left">
                          <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
                      </div>
                      <div class="clearfix"></div>
                  </div>

              </form>
          </div>
      </div> <!-- wizard container -->
  </div>
  </div><!-- end row -->
</div> <!--  big container -->

</div>
  </div>
  </div>
  

<script src="{{ asset('js/gsdk-bootstrap-wizard.js')}}"></script>
<script src="{{ asset('js/jquery-1.10.2.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
<script src="{{ asset('js/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{ asset('js/wizard.js')}}"></script>  

<script src="{{ asset('phone/build/js/intlTelInput.min.js')}}"></script>

<script>
   var input = document.querySelector("#phone");
   intlTelInput(input, {
  initialCountry: "ke",
  geoIpLookup: function(success, failure) {
    $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
      var countryCode = (resp && resp.country) ? resp.country : "ke";
      success(countryCode);
    });
  },
  utilsScript: "phone/build/js/utils.js?1638200991544"

});
var number = iti.getNumber(intlTelInputUtils.numberFormat.E164);
var error = iti.getValidationError();
  if (error === intlTelInputUtils.validationError.TOO_SHORT) {
    // the number is too short
}
</script>
<script>

  
$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
    });

    new ConditionalField({
          control: ' .user-radios',
          visibility: {
            '16': '.individual',
            '4': '.business',
            '3': '.seeker'
          }
        });

});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
        }
        reader.readAsDataURL(input.files[0]);
    }
}


  
  $('.wizard-card').bootstrapWizard({
        'tabClass': 'nav nav-pills',
        'nextSelector': '.btn-next',
        'previousSelector': '.btn-previous',

         onInit : function(tab, navigation, index){

           //check number of tabs and fill the entire row
           var $total = navigation.find('li').length;
           $width = 100/$total;

           $display_width = $(document).width();

           console.log($total);

           if($display_width < 600 && $total > 3){
               $width = 50;
           }

           navigation.find('li').css('width',$width + '%');

        },
        
        onTabClick : function(tab, navigation, index){
            // Disable the posibility to click on tabs
            return false;
        },
        onTabShow: function(tab, navigation, index) {
            var $total = navigation.find('li').length;
            var $current = index+1;

            var wizard = navigation.closest('.wizard-card');

            // If it's the last tab then hide the last button and show the finish instead
            if($current >= $total) {
                $(wizard).find('.btn-next').hide();
                $(wizard).find('.btn-finish').show();
            } else {
                $(wizard).find('.btn-next').show();
                $(wizard).find('.btn-finish').hide();
            }
        }
    });
    $('[data-toggle="wizard-radio"]').click(function(){
        wizard = $(this).closest('.wizard-card');
        wizard.find('[data-toggle="wizard-radio"]').removeClass('active');
        $(this).addClass('active');
        $(wizard).find('[type="radio"]').removeAttr('checked');
        $(this).find('[type="radio"]').attr('checked','true');
    });

        
         
  </script>
  
<section>

@endsection