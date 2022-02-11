<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broker;
use App\Models\AccountManager;
use App\Models\ForexSignalProvider;
use App\Models\ReviewUser;
use App\Models\ReviewRating;
use App\Models\AccountSignal;
use Session;

class SearchController extends Controller
{
    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('name');
          $lencount=strlen($query);
          if($lencount >= 2){
             $filterResult = Broker::where('name', 'LIKE', '%'. $query. '%')->get();
             foreach($filterResult as $brokerdata){
              echo"<option value='".$brokerdata->name."(Broker)'>";
          } 
          $filterResult1 = ForexSignalProvider::where('fname', 'LIKE', '%'. $query. '%')
                                              ->orwhere('lname', 'LIKE', '%'. $query. '%')
                                            //   ->orwhere('email', 'LIKE', '%'. $query. '%')
                                            //   ->orwhere('company_name', 'LIKE', '%'. $query. '%')
                                              ->get();
                foreach($filterResult1 as $signaldata){
                    echo"<option value='".$signaldata->fname."-".$signaldata->lname."(Signal Provider)'>";
                }
                
                $filterResult2 = AccountManager::where('first_name', 'LIKE', '%'. $query. '%')
                                              ->orwhere('last_name', 'LIKE', '%'. $query. '%')
                                            //   ->orwhere('email', 'LIKE', '%'. $query. '%')
                                            //   ->orwhere('company_name', 'LIKE', '%'. $query. '%')
                                              ->get();
                foreach($filterResult2 as $accountdata){
                    echo"<option value='".$accountdata->first_name."-".$accountdata->last_name."(Account Manager)'>";
                }
                
                $filterResult3 = AccountSignal::where('first_name', 'LIKE', '%'. $query. '%')
                                              ->orwhere('last_name', 'LIKE', '%'. $query. '%')
                                            //   ->orwhere('email', 'LIKE', '%'. $query. '%')
                                            //   ->orwhere('company_name', 'LIKE', '%'. $query. '%')
                                              ->get();
                foreach($filterResult3 as $accountsignaldata){
                    echo"<option value='".$accountsignaldata->first_name."-".$accountsignaldata->last_name."(Account Manager And Signal Provider)'>";
                }
          
          }
          
        //   return response()->json($filterResult);
          
        //   $filterResult = ForexSignalProvider::where('fname', 'LIKE', '%'. $query. '%')->get();
        //  // ->where('lname', 'LIKE', '%'. $query. '%')
        // //   ->where('email', 'LIKE', '%'. $query. '%')
        // //   ->where('company_name', 'LIKE', '%'. $query. '%')
          
        //   return response()->json($filterResult);
          
    } 
    
    function searchresult(Request $req){
        $sr=$req->relationshipTemp;
        $srarr=explode("(",$sr);
        if($srarr[1]=='Broker)'){
             $broker = Broker::where('name','=',$srarr[0])->get();
            //print_r($broker);
             echo"broker".",".$srarr[0];
             //echo"<script>window.location='{{url('broker-details/$srarr[0]')}}' </script>";
            
        }elseif($srarr[1]=='Account Manager)'){
            // $broker = Broker::where('name','=',$srarr[0])->get();
            // echo"account".",".;
           
        }elseif($srarr[1]=='Signal Provider)'){
            echo"signal";
        }elseif($srarr[1]=='Account Manager And Signal Provider)'){
            echo"both";
        }
    }
}
