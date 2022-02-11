<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CountryMaster;
class CountryMasterController extends Controller
{
    function index(){
      $data=CountryMaster::all();
      return view('admin.countrymaster',['data'=>$data]);
    }
    function countryinsert(Request $req){
          $data=new CountryMaster;
          $data->country_name=$req->countryname;
          $data->save();
          return redirect()->back()->with('success','country added.');
    }
    function countryupdate(Request $req){
        $data=CountryMaster::find($req->id);
        $data->country_name=$req->countryname;
        $data->save();
        return redirect()->back()->with('success','country updated.');
    }
    function countrydelete(Request $req){
      $query=CountryMaster::find($req->id);
      $query->delete();
      return redirect()->back()->with('success','country deleted.');
    }
}
