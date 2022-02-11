<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\RegulatoryBodyMaster;


class RegulatoryBodyController extends Controller
{
    function index(){
      $data=RegulatoryBodyMaster::all();
      return view('admin.regulatorybody',["data"=>$data]);
    }
    function regulatoryadd(Request $req){
      $data=new RegulatoryBodyMaster;
      $data->name=$req->name;
     //$logoname=$req->file('logo')->getClientOriginalName();
     if ($req->hasfile('logo')) {
       $file=$req->file('logo');
       $extension=$req->file('logo')->getClientOriginalExtension();
       $filename=time().".".$extension;
       $file->move('uploads/regulatory_logo/',$filename);
       $data->logo=$filename;
     }
     //$req->file('logo')->storeAs('public/regulatory_logo/',$logoname);
     //$data->logo=$logoname;
     $data->description=$req->description;
     $data->save();
     return redirect()->back()->with('success','Regulatory Body added.');
    }
    function regulatoryupdate(Request $req){
    $data=RegulatoryBodyMaster::find($req->id);
    $data->name=$req->name;
   if ($req->hasfile('logo')) {
     $destination='uploads/regulatory_logo/'.$data->logo;
     if (File::exists($destination)) {
         File::delete($destination);
     }
     $file=$req->file('logo');
     $extension=$req->file('logo')->getClientOriginalExtension();
     $filename=time().".".$extension;
     $file->move('uploads/regulatory_logo/',$filename);
     $data->logo=$filename;
   }
   $data->description=$req->description;
   $data->update();
   return redirect()->back()->with('success','Regulatory Body Updated.');
    }

    function regulatorydelete(Request $req){
      $data=RegulatoryBodyMaster::find($req->id);
      $destination='uploads/regulatory_logo/'.$data->logo;
      if (File::exists($destination)) {
          File::delete($destination);
      }
      $data->delete();
      return redirect()->back()->with('success','Regulatory Body deleted.');
    }
}
