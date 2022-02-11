<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Mail;
use App\Models\User;

class UserRegisterController extends Controller
{
    function index(Request $req){
        //echo $req->usernameemail;
        $validatedData = $req->validate([
          'fullname' => 'required',
          'usernameemail' => 'required|email|unique:users,email',
          'usertype' => 'required',
          'password' => 'required|min:8|confirmed',
        ]);
        $fullname=$req->fullname;
        $email=$req->usernameemail;
        $usertype=$req->usertype;
        $password=Hash::make($req->password);
        $token=rand();
        $shipdata=User::where('email',$req->usernameemail)->get();
        $cc=count($shipdata);
        if($cc > 0){
           return redirect()->back()->with('error','email id already exits');
        }else{
            $datarow=new User;
            $datarow->name=$fullname;
            $datarow->email=$email;
            $datarow->password=$password;
            $datarow->usertype=$usertype;
            $datarow->remember_token=$token;
            $save=$datarow->save();
            if ($save) {
              $data=['name'=>"$fullname",'token'=>$token,'email'=>$email];
                $user['to']=$email;
                Mail::send('mail',$data,function($message) use ($user){
                $message->to($user['to']);
                $message->subject('account verification link');
             });
             return redirect()->back()->with('error','verification link send to your mail');
           }else {
           return redirect()->back()->with('error','something went wrong.');
        }
      }
    }

    function accountacvite(Request $req,$email,$token){
        $shipdata=User::where('email',$email)->get();
        $cc=count($shipdata);
        if($cc > 0){
            foreach($shipdata as $val){
                if($val->remember_token===$token){
                    $data=User::find($val->id);
                    $data->email_verified_at=date('d-m-Y');
                    $data->remember_token=null;
                    $data->status='1';
                    $data->update();
                    return view('accountactivate');
                }else{
                    echo"token expire";
                }
            }
        }
        else{
            echo"link expire";
        }
        //return view('accountactivate');
    }
}
