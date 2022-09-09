<?php

namespace App\Http\Controllers;

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

        return view ('pages.index');
        
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

Public function vehicles_grid(){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::where('category_id',2)->take(20)->get(); //the 2 is the id of car category
  
    $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
    return view ('pages.vehicles_grid')->with($arr);
    
}
Public function vehicles_list(){
    $arr['cities'] = City::all();
    $arr['vehicles'] = Vehicle::all();
    $arr['listings'] = Listing::where('category_id',2)->take(20)->get(); //the 2 is the id of car category
  
    $arr['vehiclephotos'] = Vehicle_photo::where('photo_postion',1)->get();
    return view ('pages.vehicles_list')->with($arr);
    
}
public function vehicle(Listing $listing, Vehicle $vehicle){
    $arr['listing'] = $listing;
    $arr['vehicle'] = $vehicle;
    $arr['vehiclephotos'] = Vehicle_photo::all();
    return view ('pages.vehicle')->with($arr);
}
Public function post_ad_form(){

    return view ('pages.post_ad_form');
    
}

Public function dashboard_archived_ads(){

    return view ('pages.dashboard_archived_ads');
    
}


Public function dashboard_favourite_ads(){

    return view ('pages.dashboard_favourite_ads');
    
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