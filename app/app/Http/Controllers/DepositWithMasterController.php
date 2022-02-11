<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\DepositWithdrawal;

class DepositWithMasterController extends Controller
{
    function index(){
      $data=DepositWithdrawal::all();
      return view('admin.depositwithdrawalmaster',["data"=>$data]);
    }
    function depositwithdrawaladd(Request $req){
      $data=new DepositWithdrawal;
      $data->name=$req->name;
     if ($req->hasfile('logo')) {
       $file=$req->file('logo');
       $extension=$req->file('logo')->getClientOriginalExtension();
       $filename=time().".".$extension;
       $file->move('uploads/deposit_withdrawal/',$filename);
       $data->logo=$filename;
     }
     $data->description=$req->description;
     $data->save();
     return redirect()->back()->with('success','Deposit and Withdrawal added.');
    }

    function depositwithdrawalupdate(Request $req){
      $data=DepositWithdrawal::find($req->id);
      $data->name=$req->name;
     if ($req->hasfile('logo')) {
       $destination='uploads/deposit_withdrawal/'.$data->logo;
       if (File::exists($destination)) {
           File::delete($destination);
       }
       $file=$req->file('logo');
       $extension=$req->file('logo')->getClientOriginalExtension();
       $filename=time().".".$extension;
       $file->move('uploads/deposit_withdrawal/',$filename);
       $data->logo=$filename;
     }
     $data->description=$req->description;
     $data->update();
     return redirect()->back()->with('success','deposit and withdrawal updated.');
    }
    function depositwithdrawaldelete(Request $req){
      $data=DepositWithdrawal::find($req->id);
      $destination='uploads/deposit_withdrawal/'.$data->logo;
      if (File::exists($destination)) {
          File::delete($destination);
      }
      $data->delete();
      return redirect()->back()->with('success','Deposit and Withdrawal deleted.');
    }
}
