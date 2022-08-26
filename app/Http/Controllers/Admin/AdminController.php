<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

   public function dashboard(){
    $arr['listings'] = Listing::all();
    $arr['users'] = User::all();
       return view('admin.dashboard')->with($arr);
   }
}
