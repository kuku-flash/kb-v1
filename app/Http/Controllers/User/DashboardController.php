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
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function myads(){

        return view('user.dashboard_my_ads');

    }
    Public function dashboard_archived_ads(){

        return view ('user.dashboard_archived_ads');
        
    }
    Public function dashboard_pending_ads(){
        return view ('user.dashboard_pending_ads');
    }
    
    Public function dashboard_favourite_ads(){
    
        return view ('user.dashboard_favourite_ads');
        
    }
    
    Public function dashboard_my_ads(){
    
        return view ('user.dashboard_my_ads');
        
    }
      
    Public function dashboard(){
    
        return view ('user.dashboard');
        
    }

    public function create_listing(){
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        return view('user.listing')->with($arr);
    } 

    public function store_listing(Request $request, Listing $listing) {
        $this->validate($request,[
            'category' => 'required',
            'city' => 'required',
            ]);

      $listing->category_id = $request->category;
      $listing->city_id = $request->city;
      $listing->save();

      $currentId = $listing->id;
      $categoryid = $listing->category_id;
      if($categoryid == 2){
        $makes = Carmake::all();
        $models = Carmodel::all();
        return view('user.vehicle_ad', compact('currentId','makes','models'));


      }
      if($categoryid == 1){
        return redirect()->route('user.property_ad')->with($currentId);
      }
     
      back();
    }
   

    public function vehicle_ad(){
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        return view ('user.vehicle_ad')->with($arr);
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
