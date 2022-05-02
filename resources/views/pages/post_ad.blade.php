@extends('layouts.kingsbridge')
@section('content')

<section class="hero-wrap-3 js-smallheight" style="background-image: url('{{ asset('images')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"> <div class="container">
      <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        <div class="col-md-9 ftco-animate pb-5">
            <p class="breadcrumbs"><span class="mr-2">Dashbord  <i class="ion-ios-arrow-forward"></i></span>Post Ad <span><i class="ion-ios-arrow-forward"></i></span></p>
          <h1 class="mb-3 bread">Choose a Category</h1>
        </div>
      </div>
    </div></div>
    
  </section>
  <section class="ftco-section">
   <div class="container">
    <div class="row d-flex mt-5 mb-2">
  
  
     <div class="card-body mt-2"> 
       
         
           <div class="form-group">
              
            <select name="ap" class="form-control">
              <option>Please choose an option</option>
            </select>
        </div>
  
       
  
          
   <script src="{{ asset('js/jquery.min.js')}}"></script>
          
          <script type="text/javascript">
            $(document).ready(function(){
          
              $(document).on('change','.category',function(){
                // console.log("hmm its change");
          
                var category_id=$(this).val();
                // console.log(cat_id);
                var div=$(this).parent();
          
                var op=" ";
          
                $.ajax({
                  type:'get',
                  url:'{!!URL::to('postad/subcategory')!!}',
                  data:{'id':category_id},
                  success:function(data){
                    //console.log('success');
          
                    //console.log(data);
          
                    //console.log(data.length);
                    op+='<option value="0" selected disabled>chose subcategory </option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'.php">'+data[i].subcategory_name+'</option> ';
                     }
          
                     div.find('.subcategory' ).html(" ");
                     div.find('.subcategory').append(op);
                  },
                  error:function(){
          
                  }
                });
              });
          
              $(document).on('change','.county',function(){
        // console.log("hmm its change");
  
        var county_id=$(this).val();
        // console.log(cat_id);
        var div=$(this).parent();
  
        var op=" ";
  
        $.ajax({
          type:'get',
          url:'{!!URL::to('user/appartment_ads/city')!!}',
          data:{'id':county_id},
          success:function(data){
            //console.log('success');
  
            //console.log(data);
  
            //console.log(data.length);
            op+='<option value="0" selected disabled>Choose City </option>';
            for(var i=0;i<data.length;i++){
            op+=' <option value="'+data[i].id+'">'+data[i].city+'</option> ';
             }
  
             div.find('.city').html(" ");
             div.find('.city').append(op);
          },
          error:function(){    }
        });
      });
        div.find('.city').html("")
        div.find('cars').html("")
            });
  
           
        const $select = $('select[name="ap"]');
        const opts = [
          {'value':'{{route('postad.apartment_ad_post',['category_id'=>1,'subcategory_id'=>1])}}', 'text':'Post Appartment Ad'},
          {'value':'{{route('postad.car_ad_post', ['category_id'=>2, 'subcategory_id'=>2])}}', 'text':'Post Car Ad'},
          {'value':'{{route('postad.house_ad_post', ['category_id'=>1, 'subcategory_id'=>3])}}', 'text':'Post House Ad'},
          {'value':'{{route('postad.land_ad_post', ['category_id'=>1, 'subcategory_id'=>4])}}', 'text':'Post Land Ad'},
        
        ];
  
        opts.forEach(function(obj){
          $("<option />", {
            value: obj.value,
            text: obj.text
          }).appendTo($select)
        });
  
        $select.on("change", function(){
          window.location = this.value;
        });
     
          </script>
           
  
  
  </div>
      </div>
    </div>  
    
  </section>

  @endsection