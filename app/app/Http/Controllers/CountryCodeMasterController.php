<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MobileCode;

class CountryCodeMasterController extends Controller
{
    function index(){
      $data=MobileCode::all();
      return view('admin.countrycodemaster',["data"=>$data]);
    }
    function countrycodeadd(Request $req){
      $data=new MobileCode;
      $data->mobilecode=$req->countrycode;
      $data->save();
      return redirect()->back()->with('success','country code added.');
    }
    function countrycodeupdate(Request $req){
      $data=MobileCode::find($req->id);
      $data->mobilecode=$req->countrycodeup;
      $data->save();
      return redirect()->back()->with('success','country code updated.');
    }
    function countrycodedelete(Request $req){
        $data=MobileCode::find($req->id);
        $data->delete();
        return redirect()->back()->with('success','country code deleted.');
    }
}
