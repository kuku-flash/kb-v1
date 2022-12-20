<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller
{

   public function dashboard(){
   abort_if(Gate::denies('admindashboard-access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
    $arr['listings'] = Listing::all();
    $arr['users'] = User::all();
       return view('admin.dashboard')->with($arr);
   }
}
