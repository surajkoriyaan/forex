<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broker;
use App\Models\AccountManager;
use App\Models\ForexSignalProvider;
use App\Models\ReviewUser;
use App\Models\ReviewRating;
use Session;

class HomeController extends Controller
{
    function index(){
        $brokers=Broker::paginate(6);
         $accounts=AccountManager::paginate(6);
         $signalprovider=ForexSignalProvider::paginate(6);
        return view('welcome',["brokers"=>$brokers,"accounts"=>$accounts,"signalprovider"=>$signalprovider]);
    }
    
    function brokersview(){
        return view('brokers');
    }
    function accountmanagerview(){
        return view('allaccountmanagers');
    }
    function aboutus(){
        return view('aboutus');
    }
    function contactus(){
         return view('contactus');
    }
    function blogs(){
        return view('blogs');
    }
    function forex(){
        return view('forex');
    }
    function brokerdetail($name){
        $data=Broker::where('name',$name)->first(); 
        $revierating=ReviewRating::select('*')
                                  ->where('status','=','1')
                                  ->where('type','=','1')
                                  ->where('type_name','=',$name)
                                  ->get();
        $reviewuser=ReviewUser::all();
        return view('viewbokersdetails',["data"=>$data,"revieuser"=>$reviewuser,"reviewrating"=>$revierating]);
    }
    function accountdetail($id,$name){
         $data=AccountManager::find($id);
         return view('accountmanagerdetails',["data"=>$data]);
    }
    function signaldetail($id,$name){
         $data=ForexSignalProvider::find($id);
         return view('signalprodiverdetails',["data"=>$data]);
    }
    function reviewrating(Request $req){
        $googleid=Session::get('google_id');
        $rname=Session::get('googlename');
        $row=ReviewUser::where('google_id',$googleid)->first();
        $data=new ReviewRating();
        $data->google_id=$googleid;
        $data->name=$rname;
        $data->avatar=$row->imgs;
        $data->type='1';
        $data->type_name=$req->typename;
        $data->rating=$req->rate;
        $data->comments=$req->message;
        $data->save();
        return redirect()->back()->with('message','your review has submitted , it will display after approval by the admin.');
    }
}
