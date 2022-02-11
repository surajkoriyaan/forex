<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BrokerController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegulatoryBodyController;
use App\Http\Controllers\CountryMasterController;
use App\Http\Controllers\CityMasterController;
use App\Http\Controllers\CountryCodeMasterController;
use App\Http\Controllers\DepositWithMasterController;
use App\Http\Controllers\CkeditorController;
use App\Http\Controllers\AccountManagersController;
use App\Http\Controllers\SignalProviderController;
use App\Http\Controllers\AccountSignalController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\AgentLoginController;
use App\Http\Controllers\SocialiteController;
use App\Http\Controllers\CskEditorController;
use App\Http\Controllers\AgentAccountController;
use App\Http\Controllers\SignalProviderUserController;
use App\Http\Controllers\AccountManagerSignalController;
use App\Http\Controllers\ReviewRatingController;
use App\Http\Controllers\SearchController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/sendmail',[UserRegisterController::class,'index']);
Route::get('/account-acvivate/{email}/{token}',[UserRegisterController::class,'accountacvite']);

Route::get('/',[HomeController::class,'index']);
Route::get('/all-brokers',[HomeController::class,'brokersview']);
Route::get('/all-account-managers',[HomeController::class,'accountmanagerview']);
Route::get('/about-us',[HomeController::class,'aboutus']);
Route::get('/contact-us',[HomeController::class,'contactus']);
Route::get('/blogs',[HomeController::class,'blogs']);
Route::get('/forex',[HomeController::class,'forex']);
Route::get('/broker-details/{name}',[HomeController::class,'brokerdetail']);
Route::get('/account-manager/{id}/{name}',[HomeController::class,'accountdetail']);
Route::get('/signal-provider/{id}/{name}',[HomeController::class,'signaldetail']);
Route::post('/autocomplete-search', [SearchController::class, 'autocompleteSearch']);
Route::post('/search-result', [SearchController::class, 'searchresult']);

Route::post('/review-rating',[HomeController::class,'reviewrating']);

//AgentLoginController
Route::post('/agent-login-action',[AgentLoginController::class,'agentlogin']);

Route::group(['middleware'=>['agentuser']],function(){
  Route::get('/agent-home',[AgentLoginController::class,'agenthome']);
  Route::get('/agent-profile',[AgentLoginController::class,'agentprofile']);

  Route::get('/signal-provider-home',[AgentLoginController::class,'signalthome']);
  Route::get('/signal-provider-profile',[AgentLoginController::class,'signalprofile']);

  Route::get('/both-account-home',[AgentLoginController::class,'boththome']);
  Route::get('/both-account-profile',[AgentLoginController::class,'bothprofile']);

  Route::get('/agent-login',[AgentLoginController::class,'index']);
  Route::get('/agent-register',[AgentLoginController::class,'registration']);

  Route::post('ckeditorimage/upload',[CskEditorController::class,'index'])->name('ckeditorimage.upload');
  Route::post('agent-account-details',[AgentAccountController::class,'index'])->name('agent.account.details');

  Route::post('signalckeditorimage/upload',[CskEditorController::class,'signalcskeditor'])->name('signalckeditorimage.upload');
  Route::post('signal-provideruser-details',[SignalProviderUserController::class,'index'])->name('signal.provideruser.details');

  Route::post('signalandaccountckeditorimage/upload',[CskEditorController::class,'signalandaccountcskeditor'])->name('signalandaccountckeditorimage.upload');
  Route::post('signal-provider-account-user-details',[AccountManagerSignalController::class,'index'])->name('signal.provider.account.user.details');

});
Route::get('/users-logout',[AgentLoginController::class,'userslogout']);

// Route::get('/login/facebook',[SocialiteController::class,'facebookredirect']);
// Route::get('/login/facebook/callback',[SocialiteController::class,'loginwithfacebook']);

Route::get('/login/google',[SocialiteController::class,'googledirect']);
Route::get('/login/google/callback',[SocialiteController::class,'loginwithgoogle']);



Route::get('/auth-login',[AuthController::class,'index']);
Route::post('/auth-action',[AuthController::class,'adminuth'])->name('auth.action');

Route::group(['middleware'=>'admin_auth'],function(){
  Route::get('/admin',function(){
       return view('admin.dashboard');
  });
Route::get('/broker',[BrokerController::class,'index']);
Route::get('/broker-review',[BrokerController::class,'brokerrview']);
Route::get('/regulatory-body-master',[RegulatoryBodyController::class,'index']);
Route::get('/country-master',[CountryMasterController::class,'index']);
Route::get('/city-master',[CityMasterController::class,'index']);
Route::get('/country-code-master',[CountryCodeMasterController::class,'index']);
Route::get('/deposit-Withdrawal-master',[DepositWithMasterController::class,'index']);
Route::post('/country-action',[CountryMasterController::class,'countryinsert'])->name('country');
Route::post('/country-update',[CountryMasterController::class,'countryupdate'])->name('countryupdate');
Route::post('/countrydelete',[CountryMasterController::class,'countrydelete'])->name('country.delete');
Route::post('/city-add',[CityMasterController::class,'cityadd'])->name('city.add');
Route::post('/city-update',[CityMasterController::class,'cityupdate'])->name('city.update');
Route::post('/city-deleted',[CityMasterController::class,'citydelete'])->name('city.delete');
Route::post('/country-code-add',[CountryCodeMasterController::class,'countrycodeadd'])->name('countrycode.add');
Route::post('/country-code-upudate',[CountryCodeMasterController::class,'countrycodeupdate'])->name('countrycode.update');
Route::post('/country-code-delete',[CountryCodeMasterController::class,'countrycodedelete'])->name('countrycode.delete');
Route::post('/regulatory-body-add',[RegulatoryBodyController::class,'regulatoryadd'])->name('regulatory.add');
Route::post('/regulatory-body-update',[RegulatoryBodyController::class,'regulatoryupdate'])->name('regulatory.update');
Route::post('/regulatory-body-delete',[RegulatoryBodyController::class,'regulatorydelete'])->name('regulatory.delete');
Route::post('/deposit-Withdrawal-add',[DepositWithMasterController::class,'depositwithdrawaladd'])->name('deposit.withdrawal.add');
Route::post('/deposit-Withdrawal-update',[DepositWithMasterController::class,'depositwithdrawalupdate'])->name('deposit.withdrawal.update');
Route::post('/deposit-Withdrawal-delete',[DepositWithMasterController::class,'depositwithdrawaldelete'])->name('deposit.withdrawal.delete');
Route::post('/broker-action',[BrokerController::class,'brokerinsert'])->name('broker.action');
Route::get('broker-show-details/{id}',[BrokerController::class,'brokershowdetails'])->name('broker.show.details');
Route::post('/broker-update',[BrokerController::class,'brokersupdate'])->name('broker.update');
Route::post('/broker-delete',[BrokerController::class,'brokersdelete'])->name('broker.delete');

Route::post('ckeditor/upload',[CkeditorController::class,'index'])->name('ckeditor.upload');

Route::get('/account-manager-registration',[AccountManagersController::class,'index'])->name('account.manager.registration');
Route::post('/account-manager-insert',[AccountManagersController::class,'storedata'])->name('account.manager.insert');
Route::get('/account-details',[AccountManagersController::class,'show'])->name('account.details');
Route::get('/account-edit/{id}',[AccountManagersController::class,'edit'])->name('account.edit');
Route::post('/account-delete',[AccountManagersController::class,'delete'])->name('account.delete');
Route::post('/account-update',[AccountManagersController::class,'update'])->name('account.update');

Route::get('/signal-provider',[SignalProviderController::class,'index'])->name('signal.provider');
Route::post('/signal-add',[SignalProviderController::class,'store'])->name('signal.add');
Route::get('/signal-provider-details',[SignalProviderController::class,'viewlook'])->name('signal.provider.details');
Route::post('/signal-provider-delete',[SignalProviderController::class,'delete'])->name('signal.provider.delete');
Route::get('/signal-provider-edit/{id}',[SignalProviderController::class,'edit'])->name('signal.provider.edit');
Route::post('/signal-provider-update',[SignalProviderController::class,'update'])->name('signal.provider.update');

Route::get('/add-account-and-signal',[AccountSignalController::class,'index'])->name('add.account.and.signal');
Route::post('/add-account-and-signal-store',[AccountSignalController::class,'storedata'])->name('add.account.and.signal.store');
Route::get('/add-account-and-signal-view',[AccountSignalController::class,'showdata'])->name('add.account.and.signal.view');
Route::post('/add-account-and-signal-delete',[AccountSignalController::class,'delete'])->name('add.account.and.signal.delete');
Route::get('/add-account-and-signal-edit/{id}',[AccountSignalController::class,'edit'])->name('add.account.and.signal.edit');
Route::post('/add-account-and-signal-update',[AccountSignalController::class,'update'])->name('add.account.and.signal.update');
Route::get('/review-rating',[ReviewRatingController::class,'index']);
Route::get('/review-rating-edit/{id}',[ReviewRatingController::class,'editreview']);

Route::post('/review-rating-action',[ReviewRatingController::class,'reviewratingaction']);

Route::get('/logout', function () {
  session()->forget('USER_LOGIN');
  session()->forget('USER_EMAIL');
  session()->flash('error','Logout Successfull');
  return redirect('/auth-login');
});
});
