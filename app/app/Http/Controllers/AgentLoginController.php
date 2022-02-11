<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\CountryMaster;
use App\Models\MobileCode;
use App\Models\AccountManager;
use App\Models\ForexSignalProvider;
use App\Models\AccountSignal;
use Session;

class AgentLoginController extends Controller
{
  function index(){
    return view('agentslogin');
  }
  function registration(){
    return view('agentregistration');
  }
  function agenthome(){
    $id=Session::get('user_id');
    $data=User::find($id);
    $account=AccountManager::where('user_id',$id)->first();
    if(Session::get('usertype')==2){
    return view('agents.accountmanager.agentdashboard',["account"=>$account,"data"=>$data]);
    }else{
          return redirect()->back();
    }
  }
  function agentprofile(){
       $id=Session::get('user_id');
       $data=User::find($id);
       $country=CountryMaster::all();
       $mobilecode=MobileCode::all();
       $account=AccountManager::where('user_id',$id)->first();
        if(Session::get('usertype')==2){
       return view('agents.accountmanager.agentprofile',['data'=>$data,"country1"=>$country,"mobilecode"=>$mobilecode,"account"=>$account]);
        }else{
          return redirect()->back();
    }
        
  }
  function signalthome(){
    $id=Session::get('user_id');
    $data=User::find($id);
    $account=ForexSignalProvider::where('user_id',$id)->first();
    if(Session::get('usertype')==3){
    return view('agents.signalprovider.agentdashboard',["account"=>$account,"data"=>$data]);
    }else{
          return redirect()->back();
    }
  }
  function signalprofile(){
    $id=Session::get('user_id');
    $data=User::find($id);
    $country=CountryMaster::all();
    $mobilecode=MobileCode::all();
    $account=ForexSignalProvider::where('user_id',$id)->first();
    if(Session::get('usertype')==3){
    return view('agents.signalprovider.agentprofile',['data'=>$data,"country1"=>$country,"mobilecode"=>$mobilecode,"account"=>$account]);
    }else{
          return redirect()->back();
    }
  }
  function boththome(){
    $id=Session::get('user_id');
    $data=User::find($id);
    $account=AccountSignal::where('user_id',$id)->first();
    if(Session::get('usertype')==4){
    return view('agents.both.agentdashboard',["account"=>$account,"data"=>$data]);
    }else{
          return redirect()->back();
    }
  }
  function bothprofile(){
    $id=Session::get('user_id');
    $data=User::find($id);
    $country=CountryMaster::all();
    $mobilecode=MobileCode::all();
    $account=AccountSignal::where('user_id',$id)->first();
     if(Session::get('usertype')==4){
    return view('agents.both.agentprofile',['data'=>$data,"country1"=>$country,"mobilecode"=>$mobilecode,"account"=>$account]);
     }else{
          return redirect()->back();
    }
  }
  function agentlogin(Request $req){
    $validatedData = $req->validate([
      'email' => 'required|email',
      'password' => 'required|min:8'
    ]);
    $user=User::where('email','=',$req->email)->first();
    if (!$user) {
      return back()->with('fail','We do not recognize your email address');
    }else {
       if ($user->status==1) {
         if (Hash::check($req->password,$user->password)) {
             $req->session()->put('user_id',$user->id);
             $req->session()->put('usertype',$user->usertype);
             $req->session()->put('email',$user->email);
             if ($user->usertype==2) {
                  return redirect('agent-home');
             }elseif ($user->usertype==3) {
               return redirect('signal-provider-home');
             }elseif ($user->usertype==4) {
               return redirect('both-account-home');
             }else {
               echo"something went wrong to your account properly not varified plase contact to admin.";
             }

         }else {
           return back()->with('fail','Inccorect password .');
         }
       }else {
         return back()->with('fail','You account is not activate.');
       }

    }
  }

  function userslogout(){
    if (session()->has('user_id')) {
       session()->pull('user_id');
       session()->pull('usertype');
       return redirect('agent-login');
    }
  }
}
