<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\CountryMaster;
use App\Models\MobileCode;
use App\Models\AccountSignal;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AccountSignalController extends Controller
{
    function index(){
        $country=CountryMaster::all();
        $mobilecode=MobileCode::all();
        return view('admin.accountandsignal',["country"=>$country,"mobilecode"=>$mobilecode]);
    }
    function storedata(Request $req){
        $userreg=new User;
        $userreg->name=$req->fname ." ".$req->lname;
        $userreg->email=$req->email;
        $userreg->password=Hash::make($req->password);
        $userreg->usertype="4";
        $userreg->status="1";
        $userreg->created_by="1";
        $user_result=$userreg->save();
         if($user_result){
        $data=new AccountSignal;
        $data->user_id=$userreg->id;
        $data->first_name=$req->fname;
        $data->last_name=$req->lname;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->dob=$req->dob;
        $data->gender=$req->gender;
        $data->company_name=$req->companyname;
        if ($req->hasfile('logo')) {
        $file=$req->file('logo');
        $extension=$req->file('logo')->getClientOriginalExtension();
        $filename=time().rand().".".$extension;
        $file->move('uploads/account_and_signal/logo/',$filename);
        $data->logo=$filename;
      }
      $data->description=$req->description;
      $data->services=$req->services;
      $data->address=$req->address;
      $data->city=$req->city;
      $data->country=$req->country;
      $data->country_code=$req->countrycode;
      $data->mobile=$req->mobilenumber;
      $data->whatsappno=$req->whatsappno;
      $data->telegram_link=$req->telegramid;
      $data->facebook_id=$req->facebookid;
      $data->instagram_id=$req->instagramid;
      $data->linkedin_id=$req->linkedinid;
      $data->website_url=$req->websiteurl;
      $data->video_gallery=implode(",",$req->videogallery);
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
          $data->image_gallery=$imgarr;
         }
        $data->price=$req->price;
        $data->signal_frequency=$req->signalfreq;
        $data->signal_provider_via=$req->signalprovia;
        $data->trading_strategy=$req->stragery;
        $data->minimum_equity=$req->minimum_equity;
        $data->profit_sharing=$req->profitsharing;
        $data->currency_pair=$req->currencypairs;
        $data->trading_plateform=$req->tradingplateform;
        $data->tradable_assets=$req->tradableassets;
        $data->minimum_deposit=$req->minimum_deposit;
        $data->forex_bokers=$req->forex_broker;
        $data->investor_id=$req->investerid;
        //$data->passdord_details=$req->passworddetails;
        $data->created_by="1";
        $data->save();
        return redirect()->back()->with('success','account manager and signal provider has been added.');
         }
    }
    
    function showdata(){
        $data=AccountSignal::all();
        return view('admin.accountandsignalview',["data"=>$data]);
    }
    
    function delete(Request $req){
        $data=AccountSignal::find($req->id);
        $path='uploads/account_and_signal/image_gallery/';
        $path2='uploads/account_and_signal/logo/';
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
        return redirect()->back()->with('success','account manager and signal provider has been deleted.');
    }
    
    function edit($id){
        $country=CountryMaster::all();
        $mobilecode=MobileCode::all();
        $data=AccountSignal::find($id);
        return view('admin.accountsignaledit',["country"=>$country,"mobilecode"=>$mobilecode,"acountdetails"=>$data]);
    }
    
    function update(Request $req){
        $userreg=User::find($req->user_id);
        $userreg->name=$req->fname ." ".$req->lname;
        $userreg->email=$req->email;
        $userreg->password=Hash::make($req->password);
        $userreg->updated_by="1";
        $user_result=$userreg->save();
         if($user_result){
        $data=AccountSignal::find($req->id);
        $data->first_name=$req->fname;
        $data->last_name=$req->lname;
        $data->email=$req->email;
        $data->password=Hash::make($req->password);
        $data->dob=$req->dob;
        $data->gender=$req->gender;
        $data->company_name=$req->companyname;
        if ($req->hasfile('logo')) {
        $file=$req->file('logo');
        $path2='uploads/account_and_signal/logo/';
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
      $data->mobile=$req->mobilenumber;
      $data->whatsappno=$req->whatsappno;
      $data->telegram_link=$req->telegramid;
      $data->facebook_id=$req->facebookid;
      $data->instagram_id=$req->instagramid;
      $data->linkedin_id=$req->linkedinid;
      $data->website_url=$req->websiteurl;
      $data->video_gallery=implode(",",$req->videogallery);
      $path='uploads/account_and_signal/image_gallery/';
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
        $data->trading_strategy=$req->stragery;
        $data->minimum_equity=$req->minimum_equity;
        $data->profit_sharing=$req->profitsharing;
        $data->currency_pair=$req->currencypairs;
        $data->trading_plateform=$req->tradingplateform;
        $data->tradable_assets=$req->tradableassets;
        $data->minimum_deposit=$req->minimum_deposit;
        $data->forex_bokers=$req->forex_broker;
        $data->investor_id=$req->investerid;
        //$data->passdord_details=$req->passworddetails;
        $data->updated_by="1";
        $data->update();
       return redirect('add-account-and-signal-view')->with('success','account manager and signal provider has been updated.');  
    }
    }
}
