<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\ReviewUser;
use Session;

class SocialiteController extends Controller
{
//   function facebookredirect(){
//     return Socialite::driver('facebook')->redirect();
//   }
//   function loginwithfacebook(){
//     $user=Socialite::driver('facebook')->stateless()->user();
//     $finduser=User::where('facebook_id',$user->id)->first();
//     if($finduser){
//         echo"id matched";
//     }else{
//         $newuser=new User();
//         $newuser->name=$user->name;
//         $newuser->email=$user->email;
//          $newuser->facebook_id=$user->id;
//          $pass=rand();
//          $newuser->password=Hash::make($pass);
//          $result=$newuser->save();
//          if($result){
//              echo"regsitration successfull";
//          }else{
//              echo"error";
//          }
//     }
//   }

    function googledirect(){
        return Socialite::driver('google')->redirect();
    }
    function loginwithgoogle(){
        $user=Socialite::driver('google')->stateless()->user();
        $finduser=ReviewUser::where('google_id',$user->id)->first();
        if($finduser){
        session()->put('googlename',$user->name);
        session()->put('google_id',$user->id);
        return redirect('');
        }else{
         $newuser=new ReviewUser();
         $newuser->name=$user->name;
         $newuser->email=$user->email;
         $newuser->google_id=$user->id;
         $newuser->imgs=$user->avatar;
         $result=$newuser->save();
         if($result){
             session()->put('googlename',$user->name);
             session()->put('google_id',$user->id);
             return redirect('');
         }else{
             return redirect('');
         }
    }
}
}