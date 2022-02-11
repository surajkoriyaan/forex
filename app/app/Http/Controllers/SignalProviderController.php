<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\CountryMaster;
use App\Models\MobileCode;
use App\Models\ForexSignalProvider;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SignalProviderController extends Controller
{
    function index(){
         $country=CountryMaster::all();
         $mobilecode=MobileCode::all();
         return view('admin.addsignalprovider',["country"=>$country,"mobilecode"=>$mobilecode]);
    }
    function store(Request $req){
        $userreg=new User;
        $userreg->name=$req->fname ." ".$req->lname;
        $userreg->email=$req->email;
        $userreg->password=Hash::make($req->password);
        $userreg->usertype="3";
        $userreg->status="1";
        $userreg->created_by="1";
        $user_result=$userreg->save();
         if($user_result){
         $data=new ForexSignalProvider;
        $data->user_id=$userreg->id;
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->dob=$req->dob;
        $data->gender=$req->gender;
        $data->company_name=$req->companyname;
        if ($req->hasfile('logo')) {
        $file=$req->file('logo');
        $extension=$req->file('logo')->getClientOriginalExtension();
        $filename=time().rand().".".$extension;
        $file->move('uploads/signal_provider/logo/',$filename);
        $data->logo=$filename;
      }
      $data->description=$req->description;
      $data->services=$req->services;
      $data->address=$req->address;
      $data->city=$req->city;
      $data->country=$req->country;
      $data->country_code=$req->countrycode;
      $data->mobileno=$req->mobilenumber;
      $data->whatsappno=$req->whatsappno;
      $data->telegramlink=$req->telegramid;
      $data->facebookid=$req->facebookid;
      $data->instagramid=$req->instagramid;
      $data->linkedin=$req->linkedinid;
      $data->website_url=$req->websiteurl;
      $data->video_gallery=implode(",",$req->videogallery);
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
          $data->image_gallery=$imgarr;
         }
        
        $data->price=$req->price;
        $data->signal_frequency=$req->signalfreq;
        $data->signal_provider_via=$req->signalprovia;
        $data->trading_stratergy=$req->stragery;
        $data->created_by="1";
        $data->save();
        return redirect()->back()->with('success','signal provider has been added.');
         }
    }
    
    function viewlook(){
        $data=ForexSignalProvider::all();
        return view('admin.signalproviderdetails',["data"=>$data]);
    }
   
   function delete(Request $req){
       $data=ForexSignalProvider::find($req->id);
        $path='uploads/signal_provider/image_gallery/';
        $path2='uploads/signal_provider/logo/';
        if($data->logo!=''){
            if (File::exists($path2.$data->logo)) {
            unlink($path2.$data->logo);
        }
        }
         if($data->image_gallery!=''){
             $gimg=explode(",",$data->image_gallery);
            $cc=count($gimg);
            for($i=0;$i<$cc;$i++){
             if (File::exists($path.$gimg[$i])) {
             unlink($path.$gimg[$i]);
             } 
          }
         }
        
        $data->delete();
        return redirect()->back()->with('success','signal provider has been deleted.');
   }
   
   function edit($id){
         $country=CountryMaster::all();
         $mobilecode=MobileCode::all();
         $data=ForexSignalProvider::find($id);
       return view('admin.signalproviderupdate',["country"=>$country,"mobilecode"=>$mobilecode,"acountdetails"=>$data]);
   }
   
   function update(Request $req){
        $userreg=User::find($req->user_id);
        $userreg->name=$req->fname ." ".$req->lname;
        $userreg->email=$req->email;
        $userreg->password=Hash::make($req->password);
        $userreg->updated_by="1";
        $user_result=$userreg->save();
         if($user_result){
        $data=ForexSignalProvider::find($req->id);
        $data->fname=$req->fname;
        $data->lname=$req->lname;
        $data->email=$req->email;
        $data->password=$req->password;
        $data->dob=$req->dob;
        $data->gender=$req->gender;
        $data->company_name=$req->companyname;
       if ($req->hasfile('logo')) {
        $file=$req->file('logo');
        $path2='uploads/signal_provider/logo/';
        $extension=$req->file('logo')->getClientOriginalExtension();
        $filename=time().rand().".".$extension;
        $file->move($path2,$filename);
        if (File::exists($path2.$data->logo)) {
        unlink($path2.$data->logo);
        }
        $data->logo=$filename;
      }
      $data->description=$req->description;
      $data->services=$req->services;
      $data->address=$req->address;
      $data->city=$req->city;
      $data->country=$req->country;
      $data->country_code=$req->countrycode;
      $data->mobileno=$req->mobilenumber;
      $data->whatsappno=$req->whatsappno;
      $data->telegramlink=$req->telegramid;
      $data->facebookid=$req->facebookid;
      $data->instagramid=$req->instagramid;
      $data->linkedin=$req->linkedinid;
      $data->website_url=$req->websiteurl;
      $data->video_gallery=implode(",",$req->videogallery);
      $path='uploads/signal_provider/image_gallery/';
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
            $gimg=explode(",",$data->image_gallery);
            $cc=count($gimg);
            for($i=0;$i<$cc;$i++){
             if (File::exists($path.$gimg[$i])) {
             unlink($path.$gimg[$i]);
             } 
          }
          $imgarr=implode(",",$arr);
          $data->image_gallery=$imgarr;
         }
        
        $data->price=$req->price;
        $data->signal_frequency=$req->signalfreq;
        $data->signal_provider_via=$req->signalprovia;
        $data->trading_stratergy=$req->stragery;
        $data->updated_by="1";
        $data->update();
        return redirect('signal-provider-details')->with('success','signal provider has been updated.');
   }
       
   }
}
