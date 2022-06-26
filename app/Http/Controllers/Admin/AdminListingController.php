<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\Vehicle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminListingController extends Controller
{
    public function index(){
        $arr['listings'] = Listing::all();
        return view('admin.listing.index')->with($arr);
    }
    public function edit(Listing $listing){
        $arr['listing'] = $listing;
        return view('admin.listing.edit')->with($arr);
    }
    public function update(Listing $listing, Request $request){
        $validatedData = $this->validate($request, [
            'ads_status' => '',
            'ads_duration' => '',
            'ads_featured' => '',
            'package_id' => '',
            'user_id' => '',
            
        ]);
    
      $listing->update($validatedData);
      return redirect() -> route('admin.listing.index')->with('success',' Listing updated');
    }
    public function vehicles(){
 
        $vehicles = DB::table('vehicles')
        ->join('listings', 'listings.id', '=', 'vehicles.listing_id')
        ->get();
        return view('admin.listing.vehicles', compact('vehicles'));
    }
}
