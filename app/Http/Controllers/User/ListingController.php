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
use App\Models\Listing;
use App\Models\Vehicle;
use App\Models\Vehicle_photo;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function my_list () {

        return view('user.my_list');

    }
    Public function archived_list(){

        return view ('user.archived_list');
        
    }
    Public function pending_list(){
        return view ('user.pending_list');
    }
    
    Public function favourite_list(){
    
        return view ('user.favourite_list');
        
    }
    

    public function create_listing(){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        return view('user.listing')->with($arr);
    } 

    public function store_listing(Request $request, Listing $listing, Vehicle $vehicle, Vehicle_photo $vehicle_photo) {
        $this->validate($request,[
            'category' => 'required',
            'city' => 'required',
            'title' => 'required', 
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
  
            ]);

           

      $listing->category_id = $request->category;
      $listing->city_id = $request->city;
      $listing->save();

      $currentId = $listing->id;

      $vehicle->listing_id = $currentId;
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
      $vehicle->save();

      $vehiclecurrentId = $vehicle->id;
      $vehicle_photo->vehicle_id = $vehiclecurrentId;
      $vehicle_photo->photo = $request->photo;
      $vehicle_photo->save();
      

     
    return redirect() -> route('user.my_list')->with('success','Added');
     

    }
   

    public function vehicle_ad(){
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        return view ('user.vehicle_ad')->with($arr);
    } 
    public function store_vehicle_ad(Request $request, Vehicle $vehicle){
        $validatedData = $this->validate($request, [
            'make' => 'required',
            'year_of_build'  => 'required',
            'title' => 'required', 
            'ad_type' => 'required',
            'year_of_build' => 'required',
            'is_carhire' => 'required',
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
            'address' => 'required',
        ]);
       
        $vehicle = Vehicle::create($validatedData);
        $vehicle->listing()->sync($request->input('currentId'));

       
      return redirect() -> route('user.my_list')->with('success','Added');
    }
    
    public function property_ad(){
      
        return view ('user.property_ad');
    }
    public function model(Request $request)
    {
       $data = Carmodel::select('model','id')->where('make_id',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to ajax success
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
