<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Carmake;
use App\Models\Carmodel;
use App\Models\Category;
use App\Models\City;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function myads(){
        return view('user.dashboard_my_ads');
    }
    Public function dashboard_archived_ads(){

        return view ('user.dashboard_archived_ads');
        
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
    Public function post_ad (){

        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        return view ('user.post_ad')->with($arr);
        
    }
    public function vehicle_ad(){
        $arr['makes'] = Carmake::all();
        $arr['models'] = Carmodel::all();
        return view ('user.vehicle_ad')->with($arr);
    }
    public function model(Request $request)
    {
       $data = Carmodel::select('model','id')->where('make_id',$request->id)->take(10)->get();
        return response()->json($data);//then sent this data to ajax success
    }
}
