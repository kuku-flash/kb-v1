<?php

namespace App\Http\Controllers;
use App\Models\Carevent;
use App\Models\Carmake;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\City;
use App\Models\Favourites;
use App\Models\Listing;
use App\Models\Package;
use App\Models\User;
use App\Models\Vehicle;
use App\Models\Vehicle_photo;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Intersection;

class PagesController extends Controller
{
    
Public function index (){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['makes'] = Carmake::all();
    $arr['models'] = Carmodel::all();
    $arr['carevents'] = Carevent::all();
    $arr['listings'] = Listing::where('category_id',2)->get(); 
    
    return view ('pages.index')->with($arr);
    
}
public function carmodel(Request $request) {
    $data = Carmodel::select('model','id')->where('make_id',$request->id)->get();
    return response()->json($data);//then sent this data to aax success
}

Public function category (){
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::all();
    return view ('pages.category')->with($arr);
    
}

public function showEventsPage()
{
    $carevents = Carevent::all();
    view()->share('pages.eventspage', $carevents);
 
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
    // $arr['price'] = 
    $price_max = 500000;
    $arr['listings'] = Listing::where([
        ['city_id', '!=', Null],
   
        [ function ($query) use ($request) {
           
            if (( $city = $request->city)){
                $query->orWhere('city_id', 'LIKE', '%' .$city. '%')->get();
            }
           
        }]

    ])
    ->orderBy("id", "desc")->paginate(20);

  
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
    ->orderBy("id", "desc")->take(20)->get();  
    
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
    $arr['listings'] = Listing::where('category_id',2)->paginate(16); //the 2 is the id of car category
   // $arr['carcities'] = Listing::where('category_id',2)->where('city_id',$request->city_id)->take(20)->get();
   $imagecount =! Null;
   $arr['imgcount'] = Vehicle::where(['front_img' => Null,'back_img'=> Null, 'right_img'=> Null, 'left_img'=> Null])->count();
  
    $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
    return view ('pages.vehicleslist')->with($arr);
    
}
Public function vehicles_list(){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::where('category_id',2)->paginate(8); //the 2 is the id of car category
  
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



public function addToFavorites(Request $request)
{
    // Get the user ID of the authenticated user
    $userId = Auth::id();

    // Get the vehicle ID from the request
    $vehicleId = $request->input('vehicle_id');

    // Check if the user has already favorited the vehicle
    $existingFavorite = Favourites::where('user_id', $userId)
        ->where('vehicle_id', $vehicleId)
        ->first();

    if ($existingFavorite) {
        // The user has already favorited this vehicle, no need to add it again
        return back()->with('info', 'Vehicle is already in favorites.');
    }

    // If the vehicle is not already favorited, add it to favorites
    $favorite = new Favourites();
    $favorite->user_id = $userId;
    $favorite->vehicle_id = $vehicleId;
    $favorite->save();

    return back()->with('success', 'Vehicle added to favorites.');
}






Public function dashboard_favorites(){

    return view ('pages.dashboard_favourites');
    
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

public function storeuser(Request $request, User $user)
{
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

    // Check if the phone number starts with '+254'
    $phoneNumber = $validatedData['phone_number'];
    if (!str_starts_with($phoneNumber, '+254')) {
        // If it doesn't start with '+254', prepend it
        $phoneNumber = '+254' . $phoneNumber;
    }

    $validatedData['phone_number'] = $phoneNumber; // Update the phone_number in the validated data

    $user = User::create($validatedData);
    $user->roles()->sync($request->input('role',[]));

    return redirect()->route('user.my_list')->with('success', 'Successfully Added');
}

  
    


Public function login(){

    return view ('pages.login');
    
}

public function events(){
    return view ('pages.eventspage');
}

public function show($id)
{
    // Retrieve the event by its ID
    $carevent = Carevent::find($id);
  // Pass the retrieved event to the view for display
    return view('pages.single_event', compact('carevent'));
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