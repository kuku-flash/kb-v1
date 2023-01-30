<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Exports\UsersExport;
use App\Exports\PackagesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Carmake;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\City;
use App\Models\Invoice;
use App\Models\Listing;
use App\Models\Package;
use App\Models\Vehicle;
use App\Models\Vehicle_photo;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\List_;

class ListingController extends Controller
{
    public function model(Request $request)
    {
       $data = Carmodel::select('model','id')->where('make_id',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to aax success
    }
    public function my_list() {
        $arr['listings'] = Listing::where('user_id',Auth::id())->get();
        $arr['vehicles'] = Vehicle::all();
        $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
        $current = Carbon::now();
       // $arr['exp_date'] = DB::table('listings')->whereRaw('DATEDIFF(created_at, current_date) > 60')->get();
       

        return view('user.my_list')->with($arr);
  

    }
    
  
    Public function pending_list(){
        $listings = Listing::where('ads_status','pending')->where('user_id',Auth::id())->get();
        $vehicles = Vehicle::all();
        $vehiclephotos = Vehicle_photo::where('photo_postion',1)->get();
        return view ('user.pending_list', compact('listings','vehicles','vehiclephotos'));
    }

    Public function active_list(){
        $listings = Listing::where('ads_status','Active')->where('user_id',Auth::id())->get();
        $vehicles = Vehicle::all();
        return view ('user.active_list', compact('listings','vehicles'));
    }
    Public function sold_list(){
        $listings = Listing::where('ads_status','Sold')->where('user_id',Auth::id())->get();
        $vehicles = Vehicle::all();
        return view ('user.sold_list', compact('listings','vehicles'));
    }
    Public function expired_list(){
        $listings = Listing::where('ads_status','Expired')->where('user_id',Auth::id())->get();
        $vehicles = Vehicle::all();
        return view ('user.expired_list', compact('listings','vehicles'));
    }
    Public function archived_list(){
        $listings = Listing::where('ads_status','Archived')->where('user_id',Auth::id())->get();
        $vehicles = Vehicle::all();
        return view ('user.archived_list', compact('listings','vehicles'));
    }
    Public function favourite_list(){
    
        return view ('user.favourite_list'); 
        
    }

    
//Post the ad or the list page
    Public function new_listing(){
        return view('user.new_listing');
    }
    public function index_vehiclesale() {
        $arr['listings'] = Listing::where('user_id',Auth::id())->get();
        $arr['vehicles'] = Vehicle::all();
        $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
        $current = Carbon::now();
    // $arr['exp_date'] = DB::table('listings')->whereRaw('DATEDIFF(created_at, current_date) > 60')->get();
    

        return view('user.index_vehiclesale')->with($arr);
    }
    public function create_vehiclesale(){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        $arr['packages'] = Package::where('package_featured',null)->orderBy('id','desc')->get();
        return view('user.create_vehiclesale')->with($arr);
    } 
    public function create_listing2(){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        $arr['packages'] = Package::where('package_featured',null)->orderBy('id','desc')->get();
        return view('user.create_listing2')->with($arr);
    } 

    public function store_vehiclesale(Request $request, Listing $listing, Vehicle $vehicle) {
        $this->validate($request,[
            'category' => 'required',
            'city' => 'required',
            'model_id' => 'required', 
            'year_of_build' => 'required',
            'condition' => 'required',
            'mileage' => 'required',
            'transmission' => 'required',
            'fuel_type' => 'required',
            'exchange' => 'required',
            'price' => 'required',
            'description' => 'required',
            'body_type' => 'required',
            'duty_type' => 'required',
            'interior_type' => 'required',
            'engine_size' => 'required',
            'front_img' => ' required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'back_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'right_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'left_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'interiorf_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'interiorb_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'opt_img1' => '|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'opt_img2' => ' image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'opt_img3' => ' image|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'vehicle_type' => 'required',
            'color' => 'required',
   


            ]);

           

      $listing->category_id = $request->category;
      $listing->city_id = $request->city;
      $listing->user_id = $request->user_id;
      $listing->ads_status = 'Pending';
      $listing->save();

        $currentId = $listing->id;


 //Handle File Upload
    if($request->hasFile('front_img')){
        $imagenamewithExt = $request->file('front_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('front_img')->getClientOriginalExtension();
        $front_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('front_img')->storeAs('public/photos', $front_imgStore);
    } 

    if($request->hasFile('back_img')){
        $imagenamewithExt = $request->file('back_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('back_img')->getClientOriginalExtension();
        $back_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('back_img')->storeAs('public/photos', $back_imgStore);
    } 

    if($request->hasFile('right_img')){
        $imagenamewithExt = $request->file('right_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('right_img')->getClientOriginalExtension();
        $right_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('right_img')->storeAs('public/photos', $right_imgStore);
    } 

    if($request->hasFile('left_img')){
        $imagenamewithExt = $request->file('left_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('left_img')->getClientOriginalExtension();
        $left_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('left_img')->storeAs('public/photos', $left_imgStore);
    } 

    if($request->hasFile('interiorf_img')){
        $imagenamewithExt = $request->file('interiorf_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('interiorf_img')->getClientOriginalExtension();
        $interiorf_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('interiorf_img')->storeAs('public/photos', $interiorf_imgStore);
    } 
    //interior back image upload code
    if($request->hasFile('interiorb_img')){
        $imagenamewithExt = $request->file('interiorb_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('interiorb_img')->getClientOriginalExtension();
        $interiorb_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('interiorb_img')->storeAs('public/photos', $interiorb_imgStore);
    } 

    if($request->hasFile('engine_img')){
        $imagenamewithExt = $request->file('engine_img')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('engine_img')->getClientOriginalExtension();
        $engine_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('engine_img')->storeAs('public/photos', $engine_imgStore);
    } 

    if($request->hasFile('opt_img1')){
        $imagenamewithExt = $request->file('opt_img1')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('opt_img1')->getClientOriginalExtension();
        $opt_img1Store = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('opt_img1')->storeAs('public/photos', $opt_img1Store);
    } else { $opt_img1Store = ''; }

    if($request->hasFile('opt_img2')){
        $imagenamewithExt = $request->file('opt_img2')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('opt_img2')->getClientOriginalExtension();
        $opt_img2Store = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('opt_img2')->storeAs('public/photos', $opt_img2Store);
    } else { $opt_img2Store = ''; }

    if($request->hasFile('opt_img3')){
        $imagenamewithExt = $request->file('opt_img3')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('opt_img3')->getClientOriginalExtension();
        $opt_img3Store = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('opt_img3')->storeAs('public/photos', $opt_img3Store);
    } else { $opt_img3Store = ''; }     



        $vehicle->listing_id = $currentId;
        $vehicle->model_id = $request->model_id;
        $vehicle->year_of_build = $request->year_of_build;
        $vehicle->title = $request->title;
        $vehicle->condition = $request->condition;
        $vehicle->mileage = $request->mileage;
        $vehicle->transmission = $request->transmission;
        $vehicle->fuel_type = $request->fuel_type;
        $vehicle->exchange = $request->exchange;
        $vehicle->price = $request->price;
        $vehicle->description = $request->description;
        $vehicle->body_type = $request->body_type;
        $vehicle->duty_type = $request->duty_type;
        $vehicle->interior_type = $request->interior_type;
        $vehicle->engine_size = $request->engine_size;
        $vehicle->vehicle_type = $request->vehicle_type;
        $vehicle->color = $request->color;


        if($request->hasFile('front_img')) { $vehicle->front_img = $front_imgStore; }
        if($request->hasFile('back_img')) { $vehicle->back_img = $back_imgStore; }
        if($request->hasFile('right_img')) { $vehicle->right_img = $right_imgStore; }
        if($request->hasFile('left_img')) { $vehicle->left_img = $left_imgStore; }
        if($request->hasFile('interiorf_img')) { $vehicle->interiorf_img = $interiorf_imgStore; }
        if($request->hasFile('interiorb_img')) { $vehicle->interiorb_img = $interiorb_imgStore; }
        if($request->hasFile('engine_img')) { $vehicle->engine_img = $engine_imgStore; }
        if($request->hasFile('opt_img1')) { $vehicle->opt_img1 = $opt_img1Store; }
        if($request->hasFile('opt_img2')) { $vehicle->opt_img2 = $opt_img2Store; }
        if($request->hasFile('opt_img3')) { $vehicle->opt_img3 = $opt_img3Store;   } 


        $vehicle->save();

       


   /*   if ($request->hasFile('images')) 
      {
          $photos = $request->file('images');
          $i = 1;
         foreach ($photos as $image) {
             $name = time().'-'.$image->getClientOriginalName();
             $name = str_replace('','-',$name);
             $image->storeAs('public/photos', $name);
           
            #$vehicle_photo->photo = $name;
            #$vehicle_photo->vehicle_id = $vehicle->id;
            #$vehicle_photo->save();
    
            $vehicle->vehiclephotos()->create(['photo' => $name, 'photo_postion' => $i++]);
 
          }     
        } */
  
    return redirect() -> route('user.packages',['listing_id' => $listing->id])->with('success','Added'); 
     
    }
    public function show_vehiclesale(Listing $listing, Vehicle $vehicle){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        $arr['listing'] = $listing;
        $arr['vehicle'] = $vehicle;

        return view('user.show_vehiclesale')->with($arr);
    }

    public function edit_vehiclesale(Listing $listing, Vehicle $vehicle){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        $arr['listing'] = $listing;
        $arr['packages'] = Package::all();
        $arr['vehicle'] = $vehicle;
        $arr['vehiclephotos'] = Vehicle_photo::all();

        return view('user.edit_vehiclesale')->with($arr);
    }
    public function update_vehiclesale(Request $request, Listing $listing, Vehicle $vehicle) {
     
           

      $listing->city_id = $request->city; 
      $listing->update();

      $currentId = $listing->id;

//Handle File Upload
if($request->hasFile('front_img')){
    $imagenamewithExt = $request->file('front_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('front_img')->getClientOriginalExtension();
    $front_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('front_img')->storeAs('public/photos', $front_imgStore);
} 

if($request->hasFile('back_img')){
    $imagenamewithExt = $request->file('back_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('back_img')->getClientOriginalExtension();
    $back_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('back_img')->storeAs('public/photos', $back_imgStore);
} 

if($request->hasFile('right_img')){
    $imagenamewithExt = $request->file('right_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('right_img')->getClientOriginalExtension();
    $right_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('right_img')->storeAs('public/photos', $right_imgStore);
} 

if($request->hasFile('left_img')){
    $imagenamewithExt = $request->file('left_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('left_img')->getClientOriginalExtension();
    $left_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('left_img')->storeAs('public/photos', $left_imgStore);
} 

if($request->hasFile('interiorf_img')){
    $imagenamewithExt = $request->file('interiorf_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('interiorf_img')->getClientOriginalExtension();
    $interiorf_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('interiorf_img')->storeAs('public/photos', $interiorf_imgStore);
} 
//interior back image upload code
if($request->hasFile('interiorb_img')){
    $imagenamewithExt = $request->file('interiorb_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('interiorb_img')->getClientOriginalExtension();
    $interiorb_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('interiorb_img')->storeAs('public/photos', $interiorb_imgStore);
} 

if($request->hasFile('engine_img')){
    $imagenamewithExt = $request->file('engine_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('engine_img')->getClientOriginalExtension();
    $engine_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('engine_img')->storeAs('public/photos', $engine_imgStore);
} 

if($request->hasFile('opt_img1')){
    $imagenamewithExt = $request->file('opt_img1')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img1')->getClientOriginalExtension();
    $opt_img1Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img1')->storeAs('public/photos', $opt_img1Store);
} else { $opt_img1Store = ''; }

if($request->hasFile('opt_img2')){
    $imagenamewithExt = $request->file('opt_img2')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img2')->getClientOriginalExtension();
    $opt_img2Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img2')->storeAs('public/photos', $opt_img2Store);
} else { $opt_img2Store = ''; }

if($request->hasFile('opt_img3')){
    $imagenamewithExt = $request->file('opt_img3')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img3')->getClientOriginalExtension();
    $opt_img3Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img3')->storeAs('public/photos', $opt_img3Store);
} else { $opt_img3Store = ''; }     

    $vehicle->listing_id = $currentId;
    $vehicle->model_id = $request->model_id;
    $vehicle->year_of_build = $request->year_of_build;
    $vehicle->condition = $request->condition;
    $vehicle->mileage = $request->mileage;
    $vehicle->transmission = $request->transmission;
    $vehicle->fuel_type = $request->fuel_type;
    $vehicle->exchange = $request->exchange;
    $vehicle->price = $request->price;
    $vehicle->description = $request->description;
    $vehicle->body_type = $request->body_type;
    $vehicle->duty_type = $request->duty_type;
    $vehicle->interior_type = $request->interior_type;
    $vehicle->engine_size = $request->engine_size;
    $vehicle->vehicle_type = $request->vehicle_type;
    $vehicle->color = $request->color;

    if($request->hasFile('front_img')) { $vehicle->front_img = $front_imgStore; }
    if($request->hasFile('back_img')) { $vehicle->back_img = $back_imgStore; }
    if($request->hasFile('right_img')) { $vehicle->right_img = $right_imgStore; }
    if($request->hasFile('left_img')) { $vehicle->left_img = $left_imgStore; }
    if($request->hasFile('interiorf_img')) { $vehicle->interiorf_img = $interiorf_imgStore; }
    if($request->hasFile('interiorb_img')) { $vehicle->interiorb_img = $interiorb_imgStore; }
    if($request->hasFile('engine_img')) { $vehicle->engine_img = $engine_imgStore; }
    if($request->hasFile('opt_img1')) { $vehicle->opt_img1 = $opt_img1Store; }
    if($request->hasFile('opt_img2')) { $vehicle->opt_img2 = $opt_img2Store; }
    if($request->hasFile('opt_img3')) { $vehicle->opt_img3 = $opt_img3Store;   } 

      $vehicle->update();

     /* if ($request->hasFile('images')) 
      {
          $photos = $request->file('images');
          $i = 1;
         foreach ($photos as $image) {
             $name = time().'-'.$image->getClientOriginalName();
             $name = str_replace('','-',$name);
             $image->storeAs('public/photos', $name);
            #$vehicle_photo->photo = $name;
            #$vehicle_photo->vehicle_id = $vehicle->id;
            #$vehicle_photo->save(); 
            $vehicle->vehiclephotos()->update(['photo' => $name,'photo_postion' => $i++]);
          }     
        }  */
     
    return redirect() -> route('user.edit_vehiclesale', [$listing->id, $vehicle->id])->with('success','Updated');
     
    }
    public function delete_vehiclesale($listing, $vehicle){
      
        $vehicle = Vehicle::find($vehicle);
        $listing = Listing::find($listing);

        Storage::delete(
        'public/photos/'.$vehicle->front_img, 
        'public/photos/'.$vehicle->back_img,
        'public/photos/'.$vehicle->right_img,
        'public/photos/'.$vehicle->left_img,
        'public/photos/'.$vehicle->interiorf_img,
        'public/photos/'.$vehicle->interiorb_img,
        'public/photos/'.$vehicle->engine_img,
        'public/photos/'.$vehicle->opt_img1,
        'public/photos/'.$vehicle->opt_img2,
        'public/photos/'.$vehicle->opt_img3,
        );

       /* $vehicle_photos = Vehicle_photo::where('vehicle_id', $vehicle->id)->get();
        foreach ($vehicle_photos as $vehicle_photo){       
                Storage::delete('public/photos/'.$vehicle_photo->photo);
                $vehicle_photo->delete();
        } */
    
        $vehicle->delete();
        $listing->delete();
        return redirect()->route('user.index_vehiclesale')->with('success','Removed successfully');
    }
   
    /* This where Carehire Logic is handled */
   public function index_carhire() {
    $arr['listings'] = Listing::where('user_id',Auth::id())->where('category_id',4)->get();
    $arr['vehicles'] = Vehicle::all();
    return view('user.index_carhire')->with($arr);
   }

   public function create_carhire () {
    $arr['categories'] = Category::all();
    $arr['cities'] = City::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['packages'] = Package::where('package_featured',null)->orderBy('id','desc')->get();
    return view('user.create_carhire')->with($arr);
   }

   public function store_carhire(Request $request, Listing $listing, Vehicle $vehicle) {
    $this->validate($request,[
        'category' => 'required',
        'city' => 'required',
        'model_id' => 'required', 
        'year_of_build' => 'required',
        'condition' => 'required',
        'mileage' => 'required',
        'transmission' => 'required',
        'fuel_type' => 'required',
        'exchange' => 'required',
        'description' => 'required',
        'body_type' => 'required',
        'package_id' => 'required',
        'vehicle_type' => 'required',
        'color' => 'required',
        'front_img' => ' required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'back_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'right_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'left_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'interiorf_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'interiorb_img' => 'required|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'opt_img1' => '|image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'opt_img2' => ' image|max:2048|mimes:jpeg,png,jpg,gif,svg',
        'opt_img3' => ' image|max:2048|mimes:jpeg,png,jpg,gif,svg',

        'pickup_date' => 'nullable|required|date',
        'return_date' => 'nullable|required|date|after:pickup_date',



        ]);

       

  $listing->category_id = $request->category;
  $listing->city_id = $request->city;
  $listing->package_id = $request->package_id;
  $listing->user_id = $request->user_id;
  $listing->ads_status = 'Pending';
  $listing->save();

    $currentId = $listing->id;


//Handle File Upload
if($request->hasFile('front_img')){
    $imagenamewithExt = $request->file('front_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('front_img')->getClientOriginalExtension();
    $front_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('front_img')->storeAs('public/photos', $front_imgStore);
} 

if($request->hasFile('back_img')){
    $imagenamewithExt = $request->file('back_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('back_img')->getClientOriginalExtension();
    $back_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('back_img')->storeAs('public/photos', $back_imgStore);
} 

if($request->hasFile('right_img')){
    $imagenamewithExt = $request->file('right_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('right_img')->getClientOriginalExtension();
    $right_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('right_img')->storeAs('public/photos', $right_imgStore);
} 

if($request->hasFile('left_img')){
    $imagenamewithExt = $request->file('left_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('left_img')->getClientOriginalExtension();
    $left_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('left_img')->storeAs('public/photos', $left_imgStore);
} 

if($request->hasFile('interiorf_img')){
    $imagenamewithExt = $request->file('interiorf_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('interiorf_img')->getClientOriginalExtension();
    $interiorf_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('interiorf_img')->storeAs('public/photos', $interiorf_imgStore);
} 
//interior back image upload code
if($request->hasFile('interiorb_img')){
    $imagenamewithExt = $request->file('interiorb_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('interiorb_img')->getClientOriginalExtension();
    $interiorb_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('interiorb_img')->storeAs('public/photos', $interiorb_imgStore);
} 

if($request->hasFile('opt_img1')){
    $imagenamewithExt = $request->file('opt_img1')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img1')->getClientOriginalExtension();
    $opt_img1Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img1')->storeAs('public/photos', $opt_img1Store);
} else { $opt_img1Store = ''; }

if($request->hasFile('opt_img2')){
    $imagenamewithExt = $request->file('opt_img2')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img2')->getClientOriginalExtension();
    $opt_img2Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img2')->storeAs('public/photos', $opt_img2Store);
} else { $opt_img2Store = ''; }

if($request->hasFile('opt_img3')){
    $imagenamewithExt = $request->file('opt_img3')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img3')->getClientOriginalExtension();
    $opt_img3Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img3')->storeAs('public/photos', $opt_img3Store);
} else { $opt_img3Store = ''; }     

    $vehicle->listing_id = $currentId;
    $vehicle->model_id = $request->model_id;
    $vehicle->year_of_build = $request->year_of_build;
    $vehicle->condition = $request->condition;
    $vehicle->mileage = $request->mileage;
    $vehicle->transmission = $request->transmission;
    $vehicle->fuel_type = $request->fuel_type;
    $vehicle->exchange = $request->exchange;
    $vehicle->description = $request->description;
    $vehicle->body_type = $request->body_type;
    $vehicle->interior_type = $request->interior_type;
    $vehicle->engine_size = $request->engine_size;
    $vehicle->vehicle_type = $request->vehicle_type;
    $vehicle->color = $request->color;
    $vehicle->rent_days = $request->rent_days;
    $vehicle->price_per_day = $request->price_per_day;
    $vehicle->pickup_date = $request->pickup_date;
    $vehicle->return_date = $request->return_date;
    

    if($request->hasFile('front_img')) { $vehicle->front_img = $front_imgStore; }
    if($request->hasFile('back_img')) { $vehicle->back_img = $back_imgStore; }
    if($request->hasFile('right_img')) { $vehicle->right_img = $right_imgStore; }
    if($request->hasFile('left_img')) { $vehicle->left_img = $left_imgStore; }
    if($request->hasFile('interiorf_img')) { $vehicle->interiorf_img = $interiorf_imgStore; }
    if($request->hasFile('interiorb_img')) { $vehicle->interiorb_img = $interiorb_imgStore; }
    if($request->hasFile('opt_img1')) { $vehicle->opt_img1 = $opt_img1Store; }
    if($request->hasFile('opt_img2')) { $vehicle->opt_img2 = $opt_img2Store; }
    if($request->hasFile('opt_img3')) { $vehicle->opt_img3 = $opt_img3Store;   } 

    $vehicle->save();

    return redirect() -> route('user.invoice', [$listing->id, $vehicle->id])->with('success','Added');
   }

   public function edit_carhire(Listing $listing, Vehicle $vehicle) {
    $arr['categories'] = Category::all();
    $arr['cities'] = City::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listing'] = $listing;
    $arr['packages'] = Package::all();
    $arr['vehicle'] = $vehicle;

    return view('user.edit_carhire')->with($arr);
    }

   public function update_carhire(Request $request, Listing $listing, Vehicle $vehicle) {
 

  $listing->city_id = $request->city;
  $listing->update();

    $currentId = $listing->id;


//Handle File Upload
if($request->hasFile('front_img')){
    $imagenamewithExt = $request->file('front_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('front_img')->getClientOriginalExtension();
    $front_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('front_img')->storeAs('public/photos', $front_imgStore);
} 

if($request->hasFile('back_img')){
    $imagenamewithExt = $request->file('back_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('back_img')->getClientOriginalExtension();
    $back_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('back_img')->storeAs('public/photos', $back_imgStore);
} 

if($request->hasFile('right_img')){
    $imagenamewithExt = $request->file('right_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('right_img')->getClientOriginalExtension();
    $right_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('right_img')->storeAs('public/photos', $right_imgStore);
} 

if($request->hasFile('left_img')){
    $imagenamewithExt = $request->file('left_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('left_img')->getClientOriginalExtension();
    $left_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('left_img')->storeAs('public/photos', $left_imgStore);
} 

if($request->hasFile('interiorf_img')){
    $imagenamewithExt = $request->file('interiorf_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('interiorf_img')->getClientOriginalExtension();
    $interiorf_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('interiorf_img')->storeAs('public/photos', $interiorf_imgStore);
} 
//interior back image upload code
if($request->hasFile('interiorb_img')){
    $imagenamewithExt = $request->file('interiorb_img')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('interiorb_img')->getClientOriginalExtension();
    $interiorb_imgStore = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('interiorb_img')->storeAs('public/photos', $interiorb_imgStore);
} 

if($request->hasFile('opt_img1')){
    $imagenamewithExt = $request->file('opt_img1')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img1')->getClientOriginalExtension();
    $opt_img1Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img1')->storeAs('public/photos', $opt_img1Store);
} else { $opt_img1Store = ''; }

if($request->hasFile('opt_img2')){
    $imagenamewithExt = $request->file('opt_img2')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img2')->getClientOriginalExtension();
    $opt_img2Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img2')->storeAs('public/photos', $opt_img2Store);
} else { $opt_img2Store = ''; }

if($request->hasFile('opt_img3')){
    $imagenamewithExt = $request->file('opt_img3')->getClientOriginalName();
    $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
    $extension = $request->file('opt_img3')->getClientOriginalExtension();
    $opt_img3Store = $imagename.'_'.time().'.'.$extension;
    $path = $request->file('opt_img3')->storeAs('public/photos', $opt_img3Store);
} else { $opt_img3Store = ''; }     

    $vehicle->listing_id = $currentId;
    $vehicle->model_id = $request->model_id;
    $vehicle->year_of_build = $request->year_of_build;
    $vehicle->condition = $request->condition;
    $vehicle->mileage = $request->mileage;
    $vehicle->transmission = $request->transmission;
    $vehicle->fuel_type = $request->fuel_type;
    $vehicle->exchange = $request->exchange;
    $vehicle->description = $request->description;
    $vehicle->body_type = $request->body_type;
    $vehicle->interior_type = $request->interior_type;
    $vehicle->engine_size = $request->engine_size;
    $vehicle->vehicle_type = $request->vehicle_type;
    $vehicle->color = $request->color;
    $vehicle->rent_days = $request->rent_days;
    $vehicle->price_per_day = $request->price_per_day;
    $vehicle->pickup_date = $request->pickup_date;
    $vehicle->return_date = $request->return_date;
    

    if($request->hasFile('front_img')) { $vehicle->front_img = $front_imgStore; }
    if($request->hasFile('back_img')) { $vehicle->back_img = $back_imgStore; }
    if($request->hasFile('right_img')) { $vehicle->right_img = $right_imgStore; }
    if($request->hasFile('left_img')) { $vehicle->left_img = $left_imgStore; }
    if($request->hasFile('interiorf_img')) { $vehicle->interiorf_img = $interiorf_imgStore; }
    if($request->hasFile('interiorb_img')) { $vehicle->interiorb_img = $interiorb_imgStore; }
    if($request->hasFile('opt_img1')) { $vehicle->opt_img1 = $opt_img1Store; }
    if($request->hasFile('opt_img2')) { $vehicle->opt_img2 = $opt_img2Store; }
    if($request->hasFile('opt_img3')) { $vehicle->opt_img3 = $opt_img3Store;   } 

    $vehicle->update();

    return redirect() -> route('user.edit_carhire', [$listing->id, $vehicle->id])->with('success','Updated');
   }

   public function show_carhire(Listing $listing, Vehicle $vehicle) {
    $arr['categories'] = Category::all();
    $arr['cities'] = City::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listing'] = $listing;
    $arr['vehicle'] = $vehicle;
    $arr['vehiclephotos'] = Vehicle_photo::all();

    return view('user.show_carhire')->with($arr);
   }
   
   public function delete_carhire($listing, $vehicle){
      
    $vehicle = Vehicle::find($vehicle);
    $listing = Listing::find($listing);

    Storage::delete(
    'public/photos/'.$vehicle->front_img, 
    'public/photos/'.$vehicle->back_img,
    'public/photos/'.$vehicle->right_img,
    'public/photos/'.$vehicle->left_img,
    'public/photos/'.$vehicle->interiorf_img,
    'public/photos/'.$vehicle->interiorb_img,
    'public/photos/'.$vehicle->opt_img1,
    'public/photos/'.$vehicle->opt_img2,
    'public/photos/'.$vehicle->opt_img3,
    );

    $vehicle->delete();
    $listing->delete();
    return redirect()->route('user.index_carhire')->with('success','removed successfully');
   }

    public function invoice (Listing $listing, Vehicle $vehicle){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        $arr['listing'] = $listing;
        $arr['vehicle'] = $vehicle;
        $arr['packages'] = Package::all();

        return view('user.invoice')->with($arr);
    }

    public function packages(Request $request )
    {
        $listingid = $request->listing_id;
        $arr['packages'] = Package::all();
        $arr['listing'] =   $listingid;


        return view('user.packages')->with($arr);

    }

    public function post_invoice(Request $request,  Invoice $invoice, Listing $listing)
    {
        
      
        $current = Carbon::now();
        // add 3 days to the current time
        $InvoiceExpires = $current->addDays(3);

        $invoice->user_id = $request->user_id;
        $invoice->bill_to = auth::user()->name;
        $invoice->generate_date = Carbon::now()->format('Y-m-d');
        $invoice->due_date = $InvoiceExpires;
        $invoice->package_id = $request->package_id;
        $invoice->listing_id = $request->listing_id;
        $invoice->status = 'UNPAID';


        $invoice->save();

        $listing->package_id = $request->package_id;
        $listing->update();

        return redirect() -> route('user.invoice.show', $invoice->id)->with('success','Added');
       

    /*    
        $invoice->bill_to
        $invoice->generate_date
        $invoice->due_date
        $invoice->subtotal
        $invoice->tax
        $invoice->total 
        $invoice->bill_to

        */
    }
    

    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
    public function exportpackage()
    {
        return Excel::download(new PackagesExport, 'packages.xlsx');
    }

 
}
