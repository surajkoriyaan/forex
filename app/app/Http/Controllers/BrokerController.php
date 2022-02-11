<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\CountryMaster;
use App\Models\MobileCode;
use App\Models\MasterCity;
use App\Models\RegulatoryBodyMaster;
use App\Models\DepositWithdrawal;
use App\Models\Broker;

class BrokerController extends Controller
{
    function index(){
      $city=MasterCity::all();
      $country=CountryMaster::all();
      $mobilecode=MobileCode::all();
      $regulatorymaster=RegulatoryBodyMaster::all();
      $deposit_withdrawal=DepositWithdrawal::all();
      return view('admin.broker',["city"=>$city,"country"=>$country,"mobilecode"=>$mobilecode,"regulatorymaster"=>$regulatorymaster,"deposit_withdrawal"=>$deposit_withdrawal]);
    }
    function brokerrview(){
      $data=Broker::all();
      return view('admin.brokerreview',["data"=>$data]);
    }
    function brokerinsert(Request $req){
      $data=new Broker;
      $data->name=$req->fullname;
      if ($req->hasfile('logo')) {
        $file=$req->file('logo');
        $extension=$req->file('logo')->getClientOriginalExtension();
        $filename=time().".".$extension;
        $file->move('uploads/broker/',$filename);
        $data->logo=$filename;
      }
      $data->founded_year=$req->foundedyear;
      $data->regulations=$req->regalations;
      $data->regulated_by=$req->regulatedby;
      $data->min_deposit=$req->mindeposit;
      $data->headquarters=$req->headquarters;
      $data->maxleverage=$req->maxleverage;
      $data->country_code=$req->countrycode;
      $data->mobileno=$req->mobilenumber;
      $data->email=$req->email;
      $data->address=$req->fulladdress;
      $data->city=$req->city;
      $data->country=$req->country;
      $data->website_url=$req->website;
      $data->youtubevideo1=$req->youtube1;
      $data->youtubevideo2=$req->youtube2;
      $data->youtubevideo3=$req->youtube3;
       
       //$accmindeposit=implode(",",$req->accountmindeposit);
      
      $data->mindeposit=implode(",",$req->accountmindeposit);
      $data->account_type=implode(",",$req->account_type);
      $data->maxleverage_account=implode(",",$req->accountmaxleverage);
      $data->minimum_trade_volume=implode(",",$req->account_minimumtradevolume);
      $data->commission_acount=implode(",",$req->commission);
      $data->spreads=implode(",",$req->spreades);
      $data->accountcurrencies=implode(",",$req->account_currency);
      $data->trading_instruments=implode(",",$req->trading_instrument);
      $data->ea=implode(",",$req->ea);
      $data->hedging_allowed=implode(",",$req->hedging);
      $data->scaling_allowed=implode(",",$req->scalping);
      $data->islamic_account=implode(",",$req->islamicaccount);
      $data->deposit_method=implode(",",$req->deposit_method);
      $data->commission=implode(",",$req->deposit_comission);
      $data->exchange_rate=implode(",",$req->deposit_exchange);
      $data->processing_time=implode(",",$req->processing_time);
      $data->withdrawalmethod=implode(",",$req->withdrawal_mehtod);
      $data->withdrawal_comission=implode(",",$req->withdrawal_comission);
      $data->withdrawal_exchange_rate=implode(",",$req->withdrawal_exchange);
      $data->withdrawal_processing_time=implode(",",$req->withdrawal_processingtime);
      $data->account_link=$req->account_link;
      $data->trading_platrform=$req->trading_plateform;
      $data->customer_support=$req->customer_support;
      $data->education=$req->education;
      $data->awards=$req->awards;
      $data->conclusion=$req->conclusion;
      $data->created_by=$req->createdby;
      $data->save();
      return redirect()->back()->with('success','broker has been added.');
    }
    function brokershowdetails($id){
      $city=MasterCity::all();
      $country=CountryMaster::all();
      $mobilecode=MobileCode::all();
      $regulatorymaster=RegulatoryBodyMaster::all();
      $deposit_withdrawal=DepositWithdrawal::all();
      $borkerdata=Broker::find($id);
      return view('admin.brokerupdate',["city"=>$city,"country"=>$country,"mobilecode"=>$mobilecode,"regulatorymaster"=>$regulatorymaster,"deposit_withdrawal"=>$deposit_withdrawal,"borkerdata"=>$borkerdata]);
    }
    function brokersupdate(Request $req){
      $data=Broker::find($req->id);
      $data->name=$req->fullname;
      if ($req->hasfile('logo')) {
        $destination='uploads/broker/'.$data->logo;
        if (File::exists($destination)) {
            File::delete($destination);
        }
        $file=$req->file('logo');
        $extension=$req->file('logo')->getClientOriginalExtension();
        $filename=time().".".$extension;
        $file->move('uploads/broker/',$filename);
        $data->logo=$filename;
      }
      $data->founded_year=$req->foundedyear;
      $data->regulations=$req->regalations;
      $data->regulated_by=$req->regulatedby;
      $data->min_deposit=$req->mindeposit;
      $data->headquarters=$req->headquarters;
      $data->maxleverage=$req->maxleverage;
      $data->country_code=$req->countrycode;
      $data->mobileno=$req->mobilenumber;
      $data->email=$req->email;
      $data->address=$req->fulladdress;
      $data->city=$req->city;
      $data->country=$req->country;
      $data->website_url=$req->website;
      $data->youtubevideo1=$req->youtube1;
      $data->youtubevideo2=$req->youtube2;
      $data->youtubevideo3=$req->youtube3;
      $data->mindeposit=implode(",",$req->accountmindeposit);
      $data->account_type=implode(",",$req->account_type);
      $data->maxleverage_account=implode(",",$req->accountmaxleverage);
      $data->minimum_trade_volume=implode(",",$req->account_minimumtradevolume);
      $data->commission_acount=implode(",",$req->commission);
      $data->spreads=implode(",",$req->spreades);
      $data->accountcurrencies=implode(",",$req->account_currency);
      $data->trading_instruments=implode(",",$req->trading_instrument);
      $data->ea=implode(",",$req->ea);
      $data->hedging_allowed=implode(",",$req->hedging);
      $data->scaling_allowed=implode(",",$req->scalping);
      $data->islamic_account=implode(",",$req->islamicaccount);
      $data->deposit_method=implode(",",$req->deposit_method);
      $data->commission=implode(",",$req->deposit_comission);
      $data->exchange_rate=implode(",",$req->deposit_exchange);
      $data->processing_time=implode(",",$req->processing_time);
      $data->withdrawalmethod=implode(",",$req->withdrawal_mehtod);
      $data->withdrawal_comission=implode(",",$req->withdrawal_comission);
      $data->withdrawal_exchange_rate=implode(",",$req->withdrawal_exchange);
      $data->withdrawal_processing_time=implode(",",$req->withdrawal_processingtime);
      $data->account_link=$req->account_link;
      $data->trading_platrform=$req->trading_plateform;
      $data->customer_support=$req->customer_support;
      $data->education=$req->education;
      $data->awards=$req->awards;
      $data->conclusion=$req->conclusion;
      $data->updated_by=$req->createdby;
      $data->update();
      return redirect('broker-review')->with('success','broker has been updated.');
    }
    function brokersdelete(Request $req){
      $data=Broker::find($req->id);
      $destination='uploads/broker/'.$data->logo;
      if (File::exists($destination)) {
          File::delete($destination);
      }
      $data->delete();
      return redirect()->back()->with('success','broker has been deleted.');
    }
}
