@extends('layouts.kingsbridge')
@section('content')

<section class="section-sm">
@if(session('success'))
<div class="mt-3 alert alert-success">
<span> {{ session('success') }} </span>
</div>
@endif

    <div class="container">
      <form action="{{ route('user.update_carevent',$carevent->id)}}" method="POST" id="step-form-horizontal" class="step-form-horizontal" enctype="multipart/form-data">     
        @csrf
        @method('put')
            <!-- Post Your ad start -->
            <a href="{{ route('user.carevent')}}" class="btn btn-primary  mb-2">Back</a>
            <fieldset class="border border-gary p-4 mb-5">
              <div class="row">
                <div class="col-lg-12">
                  <h1 style=" text-align: center;">Edit your Car Event</h1>
                </div>
              </div>
             </fieldset>

<!-- Post Your ad start -->
<fieldset class="border border-gary p-4 mb-5">
  <div class="row">

            <div class="col-lg-12"> 
          <h6 class="font-weight-bold pt-4 pb-1">The Event Title:</h6>
          <input type="text" value="{{$carevent->event_title}}"  name="event_title" class="border w-100 p-2 bg-white text-capitalize @error('year_of_build') is-invalid @enderror" placeholder="Car Event Title">
              @error('year_of_build')
                  <span class="invalid"  role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="col-lg-6"> 
              <h6 class="font-weight-bold pt-4 pb-1">Pick a Date</h6>
              <input name="event_date" value="{{$carevent->event_date}}"type="date" class="border w-100 p-2 bg-white text-capitalize" >
              @error('event_date') 
                <span class="invalid" role="alert"> <strong>{{ $message }}</strong> </span> 
              @enderror
          </div>
     
           <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Time</h6>
              <input name="event_time" value="{{$carevent->event_time}}"="time" class="border w-100 p-2 bg-white text-capitalize" >
              @error('event_time') 
               <span class="invalid" role="alert"> <strong>{{ $message }}</strong> </span> 
              @enderror
          </div>
          <div class="col-lg-6">
              <h6 class="font-weight-bold pt-4 pb-1">Event Duration</h6>
              <input name="event_duration" value="{{$carevent->event_duration}}" type="number" class="border w-100 p-2 bg-white text-capitalize" >
              @error('event_duration') 
               <span class="invalid" role="alert"> <strong>{{ $message }}</strong> </span> 
              @enderror
          </div>
          <div class="col-lg-6">
            <h6 class="font-weight-bold pt-4 pb-1">Ticket Price AUD</h6>
            <input name="ticket_price" value="{{$carevent->ticket_price}}"" type="text" class="border w-100 p-2 bg-white text-capitalize" >
            @error('ticket_price') 
             <span class="invalid" role="alert"> <strong>{{ $message }}</strong> </span> 
            @enderror
        </div>
          <div class="col-lg-12"> 
            <h6 class="font-weight-bold pt-4 pb-1">Event Location:</h6>
            <input type="text" value="{{$carevent->event_location}}" name="event_location" class="border w-100 p-2 bg-white text-capitalize @error('event_location') is-invalid @enderror" >
                @error('event_location')
                    <span class="invalid"  role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
    

        
          <div class="col-lg-12">
          <h6 class="font-weight-bold pt-4 pb-1">Description:</h6>
          <textarea name="event_description"  class="description ckeditor form-control" name="wysiwyg-editor">
            {{ $carevent->event_description }}
          </textarea>

          @error('event_description')
            <span class="invalid"  role="alert">
                <strong>{{ $message }}</strong>
            </span>
          @enderror

          </div>
          <div class="col-lg-12"> 
            <h6 class="font-weight-bold pt-4 pb-1">Event Organizer:</h6>
            <input type="text" value="{{ Auth::user()->name}}" name="organizer" class="border w-100 p-2 bg-white text-capitalize @error('organizer') is-invalid @enderror" >
                @error('organizer')
                    <span class="invalid"  role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <img class="img-square-wrapper" src="/storage/photos/{{ $carevent->event_image }}" alt="image description">
              <div class="col-lg-12">
                <div class="card">
                  <div class="row">
                    <div class="space column">
                        <h3>Poster Image</h3>
                        <input type="file" id="files"  name="event_image"/>
                      </div>
                      @error('event_image')
                            <span class="invalid"  role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                      @enderror
                    </div>
              </div>
 
  </div>
</fieldset>


<input type="hidden" name="user_id" value="{{ Auth::user()->id}}" >

<button type="submit" class="btn btn-primary d-block mt-2">Update Your Event</button>
</form>
    
        </form>
    </div>
</section>
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
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
      $('.ckeditor').ckeditor();
  });
</script>


<style>
  
input[type="file"] {
  display: block;
}
.imageThumb {
  max-height: 100px;
  border: 2px solid;
  padding: 1px;
  cursor: pointer;
}
.pip {
  display: inline-block;
  margin: 10px 10px 0 0;
}
.remove {
  display: block;
  background: #444;
  border: 1px solid black;
  color: white;
  text-align: center;
  cursor: pointer;
}
.remove:hover {
  background: white;
  color: black;
}
</style>

<script>



$(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
      $("#files").on("change", function(e) {
        var files = e.target.files,
          filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
          var f = files[i]
          var fileReader = new FileReader();
          fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
              "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
              "<br/><span class=\"remove\">Remove image</span>" +
              "</span>").insertAfter("#files");
            $(".remove").click(function(){
              $(this).parent(".pip").remove();
            });
            
            // Old code here
            /*$("<img></img>", {
              class: "imageThumb",
              src: e.target.result,
              title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/
            
          });
          fileReader.readAsDataURL(f);
        }
      });
    } else {
      alert("Your browser doesn't support to File API")
    }
  });




  </script>


  @endsection