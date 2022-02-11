<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MasterCity;

class CityMasterController extends Controller
{
    function index(){
      $data=MasterCity::all();
      return view('admin.citymaster',["data"=>$data]);
    }
    function cityadd(Request $req){
      $data=new MasterCity;
      $data->city=$req->city;
      $data->save();
      return redirect()->back()->with('success','city added.');
    }
    function cityupdate(Request $req){
      $data=MasterCity::find($req->id);
      $data->city=$req->cityupdate;
      $data->save();
      return redirect()->back()->with('success','city updated.');
    }
    function citydelete(Request $req){
      $data=MasterCity::find($req->id);
      $data->delete();
      return redirect()->back()->with('success','city deleted.');
    }
}
