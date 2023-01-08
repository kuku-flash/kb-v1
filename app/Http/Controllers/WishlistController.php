<?php

namespace App\Http\Controllers;


use App\Wishlist;
use App\Models\Vehicle;
use App\Models\Listing;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function add_wishlist(Request $request)
    {
        $wishlist = new Wishlist();
        $wishlist->user_id = $request->user()->id;
        $wishlist->vehicle_id = $request->vehicle_id;
        $wishlist->save();

        return back()->with('success', 'Product added to wishlist');
        //return view ('pages.vehicle')->with ('success', 'Product added to wishlist');
    }

    public function get_wishlist(Request $request)
    {
        $arr['listings'] = Listing::all();
        $arr['vehicles'] = Vehicle::all();
        $arr['wishlists'] = wishlist::all();

        
        return view ('user.wishlist')->with ($arr);
    }



}