<?php

namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;

use App\Models\Category;
use App\Models\City;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    public function create()
    {
        $arr['categories'] = Category::all();
        $arr['cities'] = City::all();
        return view('user.listing.create')->with($arr);
    }
    public function store(Request $request, Listing $listing) {
        $this->validate($request,[
            'category' => 'required',
            'city_id' => 'required',
            ]);

      $listing->category_id = $request->category;
      $listing->city_id = $request->city;
      $listing->save();

      $currentId = $listing->id;
      $categoryid = $listing->category_id;
      if($categoryid == 2){
        return redirect()->route('user.vehicle_ad')->compact($currentId);
      }
      if($categoryid == 1){
        return redirect()->route('user.property_ad')->compact($currentId);
      }
     
      back();
    }

}
