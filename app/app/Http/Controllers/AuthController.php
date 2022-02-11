<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class AuthController extends Controller
{
    public function index(Request $request)
    {
      if ($request->session()->has('USER_LOGIN')) {
     return redirect('admin');
    }else {
        return view('login');
    }
    return view('login');
    }
    function adminuth(Request $req){

      $email=$req->post('username');
      $password=$req->post('password');
     $result=User::where(['email'=>$email])->first();
    if ($result) {
    //  Hash::check($req->post('password'),
    if ($req->post('password')==$result->password) {
      $req->session()->put('USER_LOGIN',true);
      $req->session()->put('USER_ID',$result->id);
      $req->session()->put('USER_EMAIL',$result->email);
      $req->session()->put('USER_NAME',$result->name);
      return redirect('admin');
    }else {
      $req->session()->flash('error','Please enter valid password');
      return redirect('/auth-login');
    }

  }else {
    $req->session()->flash('error','Please enter valid login details');
    return redirect('/auth-login');
  }
    }
}
