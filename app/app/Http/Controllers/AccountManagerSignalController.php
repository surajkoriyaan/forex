<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\CountryMaster;
use App\Models\MobileCode;
use App\Models\AccountSignal;
use Session;

class AccountManagerSignalController extends Controller
{
  function index(Request $req){
    $usr_id=Session::get('user_id');
   $manager=new AccountSignal;
   if ($req->idaccount!='') {
     $manager=AccountSignal::find($req->idaccount);
   }else {
     $manager=new AccountSignal;
   }
   $manager->user_id=$usr_id;
   $manager->first_name=$req->fname;
   $manager->last_name=$req->lname;
   $manager->email=$req->email;
   //$manager->register_as="4";
   $manager->dob=$req->dob;
   $manager->gender=$req->gender;
   $manager->company_name=$req->companyname;
   if ($req->idaccount!='') {
     if ($req->hasfile('logo')) {
     $file=$req->file('logo');
     $path2='uploads/account_and_signal/logo/';
     $extension=$req->file('logo')->getClientOriginalExtension();
     $filename=time().rand().".".$extension;
     $file->move($path2,$filename);
     if (File::exists($path2.$manager->logo)) {
     unlink($path2.$manager->logo);
     }
     $manager->logo=$filename;
   }
   }else {
   if ($req->hasfile('logo')) {
   $file=$req->file('logo');
   $extension=$req->file('logo')->getClientOriginalExtension();
   $filename=time().rand().".".$extension;
   $file->move('uploads/account_and_signal/logo/',$filename);
   $manager->logo=$filename;
 }
 }
   $manager->description=$req->description;
   $manager->services=$req->services;
   $manager->address=$req->address;
   $manager->city=$req->city;
   $manager->country=$req->country;
   $manager->country_code=$req->countrycode;
   $manager->mobile=$req->mobileno;
   $manager->whatsappno=$req->whatsappno;
   $manager->telegram_link=$req->telegramlink;
   $manager->facebook_id=$req->facebookid;
   $manager->instagram_id=$req->instgramid;
   $manager->linkedin_id=$req->linkedinid;
   $manager->website_url=$req->websiteurl;
   $path='uploads/account_and_signal/image_gallery/';
   if ($req->idaccount!='') {
     $arr=array();
     if($req->hasfile('imagegallery'))
      {
         foreach($req->file('imagegallery') as $key => $files)
         {
             $name = $files->getClientOriginalExtension();
             $filename=time().rand().".".$name;
             $files->move($path,$filename);
             array_push($arr,$filename);
         }
         $gimg=explode(",",$manager->image_gallery);
         $cc=count($gimg);
         for($i=0;$i<$cc;$i++){
          if (File::exists($path.$gimg[$i])) {
          unlink($path.$gimg[$i]);
          }
       }
       $imgarr=implode(",",$arr);
       $manager->image_gallery=$imgarr;
      }
   }else{
   $arr=array();
   if($req->hasfile('imagegallery'))
    {
       foreach($req->file('imagegallery') as $key => $files)
       {
           $name = $files->getClientOriginalExtension();
           $filename=time().rand().".".$name;
           $files->move('uploads/account_and_signal/image_gallery/',$filename);
           array_push($arr,$filename);
       }
     $imgarr=implode(",",$arr);
     $manager->image_gallery=$imgarr;
   }
 }
   $manager->video_gallery=$req->videogallery;
   $manager->price=$req->price;
   $manager->signal_frequency=$req->signalfrequency;
   $manager->signal_provider_via=$req->signalprovider;
   $manager->trading_strategy=$req->trading_stratergy;
   $manager->minimum_equity=$req->minimum_equity;
   $manager->profit_sharing=$req->profitsharing;
   $manager->currency_pair=$req->currencypairs;
   $manager->trading_plateform=$req->tradingplatform;
   $manager->tradable_assets=$req->tradableassets;
   $manager->minimum_deposit=$req->minimum_deposit;
   $manager->forex_bokers=$req->forex;
   $manager->investor_id=$req->investerid;
   if ($req->idaccount!='') {
     $manager->updated_by="1";
      $result=$manager->update();
   }else {
      $manager->created_by="1";
      $result=$manager->save();
   }
   if ($result) {
      return redirect()->back()->with('success','profile details updated.');
   }
  }
}
