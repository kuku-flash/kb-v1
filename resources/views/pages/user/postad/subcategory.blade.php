@extends('layouts.kingship')
@section('content')



<section class="content">
 <div class="container">
  <div class="row d-flex mt-5 mb-2">


   <div class="card-body mt-5"> 
 	
         
         <div class="form-group">
             <label>SubCategory</label>
             <select class="form-control">
                @foreach($subcategories as $subcategory)
                    @if($subcategory->id)
                 <option value="{{ $subcategory->id}}">{{ $subcategory->subcategory_name}}</option>
                 @endif
                @endforeach
             </select>
             <a href="{{ route('postad.subcategory', ['category_id'=>2, 'subcategory_id'=>1])}}" class="btn btn-info">Next</a> 
         </div>
       
 		
         


</div>
    </div>
  </div>  
  
</section>
@endsection