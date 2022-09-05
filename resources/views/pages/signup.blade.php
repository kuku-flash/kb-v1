@extends('layouts.kingsbridge')
@section('content')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="{{ asset('css/gsdk-bootstrap-wizard.css')}}" >


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
  <div class="col-sm-8 col-sm-offset-2">
      <!--      Wizard container        -->
      <div class="wizard-container">
          <div class="card wizard-card" data-color="orange" id="wizardProfile">
              <form action="" method="POST">
          <!--        You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                <div class="wizard-header">
                    <h3>
                       <b>KINGSBRIDGE</b><br>SIGN UP<br>
                    </h3>
                </div>

      <div class="wizard-navigation">
        <ul>
                        <li><a href="#about" data-toggle="tab">About</a></li>
                        <li><a href="#account" data-toggle="tab">Account</a></li>
                        <li><a href="#address" data-toggle="tab">Address</a></li>
                    </ul>

      </div>

                  <div class="tab-content">
                      <div class="tab-pane" id="about">
                        <div class="row">
                            <div class="col-sm-4 col-sm-offset-1">
                               <div class="picture-container">
                                    <div class="picture">
                                        <img src="../images/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                        <input type="file" id="wizard-picture">
                                    </div>
                                    <h6>Choose Picture</h6>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                  <label>First Name <small>(required)</small></label>
                                  <input name="firstname" type="text" class="form-control" placeholder="Andrew...">
                                </div>
                                <div class="form-group">
                                  <label>Last Name <small>(required)</small></label>
                                  <input name="lastname" type="text" class="form-control" placeholder="kb...">
                                </div>
                            </div>
                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="form-group">
                                    <label>Email <small>(required)</small></label>
                                    <input name="email" type="email" class="form-control" placeholder="andrew@kingsbridge.com">
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="tab-pane " id="account">
                          <h4 class="info-text"> What type of User are you? (checkboxes) </h4>
                          <div class="row">

                              <div class="col-sm-10 col-sm-offset-1">
                                  <div class="userselect col-sm-4">
                                      <div class="choice" data-toggle="wizard-checkbox">
                                          <input type="checkbox" name="jobb" value="Design">
                                          <div class="icon">
                                              <i class="fa fa-pencil"></i>
                                          </div>
                                          <h6>Individual</h6>
                                      </div>
                                  </div>
                                  <div class="userselect col-sm-4">
                                      <div class="choice" data-toggle="wizard-checkbox">
                                          <input type="checkbox" name="jobb" value="Code">
                                          <div class="icon">
                                              <i class="fa fa-terminal"></i>
                                          </div>
                                          <h6>Dealers</h6>
                                      </div>

                                  </div>
                                  <div class="userselect col-sm-4">
                                      <div class="choice" data-toggle="wizard-checkbox">
                                          <input type="checkbox" name="jobb" value="Develop">
                                          <div class="icon">
                                              <i class="fa fa-laptop"></i>
                                          </div>
                                          <h6>Business</h6>
                                      </div>

                                  </div>
                              </div>

                          </div>
                      </div>
                      <div class="tab-pane" id="address">
                          <div class="row">
                              <div class="col-sm-12">
                                  <h4 class="info-text"> Are you living in a nice area? </h4>
                              </div>
                              <div class="col-sm-7 col-sm-offset-1">
                                   <div class="form-group">
                                      <label>Street Name</label>
                                      <input type="text" class="form-control" placeholder="5h Avenue">
                                    </div>
                              </div>
                              <div class="col-sm-3">
                                   <div class="form-group">
                                      <label>Street Number</label>
                                      <input type="text" class="form-control" placeholder="242">
                                    </div>
                              </div>
                              <div class="col-sm-5 col-sm-offset-1">
                                   <div class="form-group">
                                      <label>City</label>
                                      <input type="text" class="form-control" placeholder="New York...">
                                    </div>
                              </div>
                              <div class="col-sm-5">
                                   <div class="form-group">
                                      <label>County</label><br>
                                       <select name="country" class="form-control">
                                          <option value="Nairobi"> Nairobi </option>
                                          <option value="Kisumu"> Kisumu </option>
                                          <option value="Mombasa"> Mombasa </option>
                                          <option value="...">...</option>
                                      </select>
                                    </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="wizard-footer height-wizard">
                      <div class="pull-right">
                          <input type='button' class='btn btn-next btn-fill btn-warning btn-wd btn-sm' name='next' value='Next' />
                          <input type='button' class='btn btn-finish btn-fill btn-warning btn-wd btn-sm' name='finish' value='Finish' />

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

<script>

  
$(document).ready(function(){
// Prepare the preview for profile picture
    $("#wizard-picture").change(function(){
        readURL(this);
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
        
         
  </script>
<section>

@endsection