<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
Public function index (){

        return view ('pages.index');
        
}

Public function category (){

    return view ('pages.category');
    
}

Public function single (){

    return view ('pages.single');
    
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

Public function vehicles(){

    return view ('pages.vehicles');
    
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

Public function user_profile(){

    return view ('pages.user_profile');
    
}

























}