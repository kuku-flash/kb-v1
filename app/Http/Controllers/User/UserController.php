<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon; 
use Mail; 
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
   public function create_user() 
   {

   }
   Public function user_profile(User $user) {
    $user = User::where('id', Auth::id())->first();
    return view('user.user_profile',compact('user'));
  
    
    }
   public function store_user() 
   {

   }
   public function update_user( User $user, Request $request) 
   {
    $this->validate($request, [
        'name' => 'required|max:255',
        'phone_number' => 'required|max:14',
        'avatar' => 'image|max:2048|mimes:jpeg,png,jpg,gif,svg',

    ]);
    if($request->hasFile('avatar')){
        $imagenamewithExt = $request->file('avatar')->getClientOriginalName();
        $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
        $extension = $request->file('avatar')->getClientOriginalExtension();
        $avatar_imgStore = $imagename.'_'.time().'.'.$extension;
        $path = $request->file('avatar')->storeAs('public/photos', $avatar_imgStore);
    }
        $user->name = $request->name;
        $user->phone_number = $request->phone_number; 
     if($request->hasFile('avatar')) { $user->avatar = $avatar_imgStore;   } 
        

        $user->update();
        return redirect() -> route('user.user_profile',$user->id)->with('success','Updated Successfully');
   
      
      /*  if($request->hasFile('avatar')){
            $imagenamewithExt = $request->file('avatar')->getClientOriginalName();
            $imagename = pathinfo($imagenamewithExt, PATHINFO_FILENAME);
            $extension = $request->file('avatar')->getClientOriginalExtension();
            $avatar_imgStore = $imagename.'_'.time().'.'.$extension;
            $path = $request->file('avatar')->storeAs('public/photos', $avatar_imgStore);
        } */ 
        
   } 

   public function submitResetPasswordForm(Request $request)
   {
       $request->validate([
           'email' => 'required|email|exists:users',
           'password' => 'required|string|min:6|confirmed',
           'password_confirmation' => 'required'
       ]);
   
       $updatePassword = DB::table('password_resets')
                           ->where([
                               'email' => $request->email, 
                               'token' => $request->token
                           ])
                           ->first();
   
       if(!$updatePassword){{
           return redirect()->to(route('auth.email'));
       };    
       }
   
       User::where('email', $request->email)
                   ->update(['password' =>Hash::make($request->password)]);
   
       DB::table('password_resets')->where(['email'=> $request->email])->delete();
   
       return redirect('/')->with('message', 'Your password has been changed!');
   }
   public function change_email() 
   {

   } 
   public function delete_account() 
   {

   }


} 
    
