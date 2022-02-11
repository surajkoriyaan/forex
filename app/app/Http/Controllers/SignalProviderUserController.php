<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\CountryMaster;
use App\Models\MobileCode;
use App\Models\ForexSignalProvider;
use Session;

class SignalProviderUserController extends Controller
{
  function index(Request $req){
    $usr_id=Session::get('user_id');
   $manager=new ForexSignalProvider;
   if ($req->idaccount!='') {
     $manager=ForexSignalProvider::find($req->idaccount);
   }else {
     $manager=new ForexSignalProvider;
   }
   $manager->user_id=$usr_id;
   $manager->fname=$req->fname;
   $manager->lname=$req->lname;
   $manager->email=$req->email;
   $manager->register_as="3";
   $manager->dob=$req->dob;
   $manager->gender=$req->gender;
   $manager->company_name=$req->companyname;
   if ($req->idaccount!='') {
     if ($req->hasfile('logo')) {
     $file=$req->file('logo');
     $path2='uploads/signal_provider/logo/';
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
   $file->move('uploads/signal_provider/logo/',$filename);
   $manager->logo=$filename;
 }
 }
   $manager->description=$req->description;
   $manager->services=$req->services;
   $manager->address=$req->address;
   $manager->city=$req->city;
   $manager->country=$req->country;
   $manager->country_code=$req->countrycode;
   $manager->mobileno=$req->mobileno;
   $manager->whatsappno=$req->whatsappno;
   $manager->telegramlink=$req->telegramlink;
   $manager->facebookid=$req->facebookid;
   $manager->instagramid=$req->instgramid;
   $manager->linkedin=$req->linkedinid;
   $manager->website_url=$req->websiteurl;
   $path='uploads/signal_provider/image_gallery/';
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
           $files->move('uploads/signal_provider/image_gallery/',$filename);
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
   $manager->trading_stratergy=$req->trading_stratergy;
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
