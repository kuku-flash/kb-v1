<?php

namespace App\Http\Controllers;
use App\Models\Carmake;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\City;
use App\Models\Listing;
use App\Models\Package;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Vehicle_photo;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Intersection;

class PagesController extends Controller
{
    
Public function index (){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listings'] = Listing::where('category_id',2)->get(); 
    
    return view ('pages.index')->with($arr);
        
}
public function carmodel(Request $request) {
    // $data = Carmodel::select('model','id')->where('make_id',$request->id)->take(10)->get();
    $data = Carmodel::select('model','id')->where('make_id',$request->id)->get();
    return response()->json($data);//then sent this data to aax success
}

Public function category (){
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::all();
    return view ('pages.category')->with($arr);
    
}

Public function single (Vehicle $vehicle){
    $arr['vehicle'] = $vehicle;
    return view ('pages.single')->with($arr);
    
}
Public function houses (){

    return view ('pages.houses');
    
}

Public function about_us (){

    return view ('pages.about_us');
    
}


Public function ad_list_view (){

    return view ('pages.ad_list_view');
    
}

Public function blog(){

    return view ('pages.blog');
    
}

Public function contact_us(){

    return view ('pages.contact_us');
    
}
public function vehicle_search(Request $request){
    $arr['cities'] = City::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $price_max = 500000;
    $arr['listings'] = Listing::where([
        ['city_id', '!=', Null],
   
        [ function ($query) use ($request) {
           
            if (( $city = $request->city)){
                $query->orWhere('city_id', 'LIKE', '%' .$city. '%')->get();
            }
           
        }]

    ])
    ->orderBy("id", "desc")->paginate(4);

  
    $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
    $arr['vehicles'] = Vehicle::where([
        ['model_id', '!=', Null],
        ['price', '!=', Null],
        [ function ($query) use ($request) {
           
            if (( $make_id = $request->make_id)){
                $query->orWhere('make', 'LIKE', '%' .$make_id. '%')->get();
            }
            if (( $model_id = $request->model_id)){
                $query->orWhere('model_id', 'LIKE', '%' .$model_id. '%')->get();
            }
            if (( $price_max = $request->price_max)){
                $query->orWhere('price', '>=', $price_max)->get();
            }
        }]

    ])
    ->orderBy("id", "desc")->take(10)->get();  
    
    return view ('pages.vehicleslist')->with($arr);
}

public function listing_filter(Request $request){
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::where('category_id',2)->Where('city_id',$request->id)->take(20)->get(); 
    $arr['cities'] = City::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    return view ('pages.vehicleslist')->with($arr);
}
public function vehicle_filter(Request $request){
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listings'] = Listing::where('category_id',2)->take(20)->get(); 
    $arr['vehicles'] = vehicle::Where('model_id',$request->id)->take(20)->get(); 
    $arr['cities'] = City::all();
    return view ('pages.vehicleslist')->with($arr);
}

Public function vehicleslist(){
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::where('category_id',2)->paginate(4); //the 2 is the id of car category
   // $arr['carcities'] = Listing::where('category_id',2)->where('city_id',$request->city_id)->take(20)->get();
   $imagecount =! Null;
   $arr['imgcount'] = Vehicle::where(['front_img' => Null,'back_img'=> Null, 'right_img'=> Null, 'left_img'=> Null])->count();
  
    $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
    return view ('pages.vehicleslist')->with($arr);
    
}
Public function vehicles_list(){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::where('category_id',2)->take(20)->get(); //the 2 is the id of car category
  
    $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
    return view ('pages.vehicles_list')->with($arr);
    
}
public function vehicle(Listing $listing, Vehicle $vehicle){
    $vehicle->increment('views');
    $arr['listing'] = $listing;
    $arr['vehicle'] = $vehicle;
    $vehicle->save();
    $arr['vehiclephotos'] = Vehicle_photo::all();

    return view ('pages.vehicle')->with($arr);
}
Public function carhire(){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listings'] = Listing::where('category_id',4)->take(20)->get(); 
    return view ('pages.carhire')->with($arr);
}
Public function carhirelist() {
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listings'] = Listing::where('category_id',4)->take(20)->get(); 
    return view ('pages.carhirelist')->with($arr);
}
Public function showcarhire(Listing $listing, Vehicle $vehicle) {
    $arr['categories'] = Category::all();
    $arr['cities'] = City::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['listing'] = $listing;
    $arr['vehicle'] = $vehicle;

    return view('pages.showcarhire')->with($arr);
}

Public function post_ad_form(){

    return view ('pages.post_ad_form');
    
}

Public function dashboard_archived_ads(){

    return view ('pages.dashboard_archived_ads');
    
}


Public function dashboard_favorites(){

    return view ('pages.dashboard_favourites');
    
}

public function toggleFavorite(Request $request, Vehicle $vehicle)
{
    $user = $request->user();
    $user->favorites()->toggle($vehicle);

    return redirect()->back();
}


Public function dashboard_my_ads(){

    return view ('pages.dashboard_my_ads');
    
}


Public function dashboard(){

    return view ('pages.dashboard');
    
}
Public function signup(){

    return view ('pages.signup');
    
}

Public function storeuser(Request $request, User $user){
    $validatedData = $this->validate($request, [
        'name' => 'required|max:255',
        'email' => 'required|unique:users|email|max:255',
        'password' => 'required|between:8,255|confirmed',
        'password_confirmation' => 'required',
        'phone_number' => 'required',
        'identification_number' => '',
        'kra_pin' => '',  
        'role' => 'required',
        
    ]);
   
    $user = User::create($validatedData);
    $user->roles()->sync($request->input('role',[]));


  return redirect() -> route('user.my_list')->with('success','Succesfully Added');
  
    
}

Public function login(){

    return view ('pages.login');
    
}


Public function register(){

    return view ('pages.register');
    
}

Public function single_blog(){

    return view ('pages.single_blog');
    
}

Public function terms_condition(){

    return view ('pages.terms_condition');
    
}


public function package (){
    return view ('pages.package');
    
}
























}