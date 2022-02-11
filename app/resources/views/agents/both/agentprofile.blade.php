<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Title -->
        <title>Forex | Account Manager And Signal Provider</title>
		<!-- Favicon -->
		<link rel="icon" href="{{asset('agentasset/assets/img/brand/favicon.png')}}" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="{{asset('agentasset/assets/plugins/icons/icons.css')}}" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="{{asset('agentasset/assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

		<!--- Animations css-->
		<link href="{{asset('agentasset/assets/css/animate.css')}}" rel="stylesheet">

		<!--  Custom Scroll bar-->
		<link href="{{asset('agentasset/assets/plugins/custom-scroll/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>

		<!--  Left-Sidebar css -->
		<link href="{{asset('agentasset/assets/css/sidemenu.css')}}" rel="stylesheet">


		<!-- Select2 css -->
		<link href="{{asset('agentasset/assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">

		<!-- Internal  Datetimepicker-slider css -->
		<link href="{{asset('agentasset/assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
		<link href="{{asset('agentasset/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
		<link href="{{asset('agentasset/assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

		<!-- Internal Spectrum-colorpicker css -->
		<link href="{{asset('agentasset/assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">


		<!-- style css-->
		<link href="{{asset('agentasset/assets/css/style.css')}}" rel="stylesheet">

		<!-- skin css-->
		<link href="{{asset('agentasset/assets/css/skin-modes.css')}}" rel="stylesheet">

		<!-- dark-theme css-->
		<link href="{{asset('agentasset/assets/css/style-dark.css')}}" rel="stylesheet">

        <!-- Switcher css -->
		<link href="{{asset('agentasset/assets/switcher/css/switcher.css')}}" rel="stylesheet">
		<link rel="stylesheet" href="{{asset('agentasset/assets/switcher/demo.css')}}">

		<!--- Internal Fileupload css-->
		<link href="{{asset('agentasset/assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

		<!--- Internal Fancy uploader css-->
		<link href="{{asset('agentasset/assets/plugins/fancyuploder/fancy_fileupload.css')}}" rel="stylesheet" />
	</head>
	<body class="main-body app sidebar-mini Light-mode">
		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="{{asset('agentasset/assets/img/loaders/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->
		<!-- Page -->
		<div class="page">
			<!-- main-sidebar opened -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll ">
			<div class="main-sidebar-header">
				<a class=" desktop-logo logo-light" href="{{url('both-account-home')}}"><img src="{{asset('agentasset/assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class=" desktop-logo logo-dark" href="{{url('both-account-home')}}"><img src="{{asset('agentasset/assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light" href="{{url('both-account-home')}}"><img src="{{asset('agentasset/assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark" href="{{url('both-account-home')}}"><img src="{{asset('agentasset/assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidebar-body circle-animation ">

				<ul class="side-menu circle">
					<li><h3 class="">Dashboard</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('both-account-home')}}"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
                    <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{url('both-account-profile')}}"><i class="side-menu__icon ti-layout menu-icon"></i><span class="side-menu__label">Profile</span><i class="angle fe fe-chevron-down"></i></a>

					</li>
				</ul>
			</div>
		</aside>
		<!-- main-sidebar -->
			<!-- main-content -->
			<div class="main-content app-content">
				<!-- main-header -->
			<div class="main-header sticky side-header nav nav-item">
				<div class="container-fluid">
					<div class="main-header-left ">
						<div class="app-sidebar__toggle mobile-toggle" data-toggle="sidebar">
							<a class="open-toggle" href="#"><i class="header-icons" data-eva="menu-outline"></i></a>
							<a class="close-toggle" href="#"><i class="header-icons" data-eva="close-outline"></i></a>
						</div>
						<div class="main-header-center ml-3 d-sm-none d-md-none d-lg-block">
							<input type="search" class="form-control" placeholder="Search for anything...">
							<button class="btn"><i class="fas fa-search"></i></button>
						</div>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="{{url('both-account-home')}}">
                                <img src="{{asset('agentasset/assets/img/brand/logo.png')}}" class="mobile-logo" alt="logo">
                                <img src="{{asset('agentasset/assets/img/brand/logo-theme-dark.png')}}" class="dark-mobile-logo" alt="logo">
                            </a>
						</div>
					</div>
					<div class="main-header-right">
						<div class="nav nav-item  navbar-nav-right ml-auto">
							<form class="navbar-form nav-item my-auto d-lg-none" role="search">
								<div class="input-group nav-item my-auto">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="ti-close"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="ti-search"></i>
										</button>
									</span>
								</div>
							</form>
							<div class="nav-item full-screen fullscreen-button">
								<a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
							</div>
								<button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
								aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon fe fe-more-vertical "></span>
							</button>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user" href="#"><img alt="" src="{{asset('agentasset/assets/img/faces/5.jpg')}}"></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
									<div class="main-header-profile header-img">
										<div class="main-img-user"><img alt="" src="{{asset('agentasset/assets/img/faces/5.jpg')}}"></div>
										<h6>{{$data['name']}}</h6><span>{{$data['email']}}</span>
									</div>
									<a class="dropdown-item" href="{{url('both-account-home')}}"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="{{url('both-account-profile')}}"><i class="far fa-edit"></i> Edit Profile</a>
										<a class="dropdown-item" href="{{url('users-logout')}}"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
							</div>
							<div class="dropdown main-header-message right-toggle">
								<a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="ti-menu tx-20 bg-transparent"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /main-header -->
				<!-- mobile-header -->
			<div class="responsive main-header collapse" id="navbarSupportedContent-4">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark d-sm-none ">
					<div class="navbar-collapse">
						<div class="d-flex order-lg-2 ml-auto">
							<form class="navbar-form nav-item my-auto d-lg-none" role="search">
								<div class="input-group nav-item my-auto">
									<input type="text" class="form-control" placeholder="Search">
									<span class="input-group-btn">
										<button type="reset" class="btn btn-default">
											<i class="ti-close"></i>
										</button>
										<button type="submit" class="btn btn-default nav-link">
											<i class="ti-search"></i>
										</button>
									</span>
								</div>
							</form>
							<div class="d-md-flex">
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="#"><i class="ti-fullscreen"></i></span></a>
								</div>
							</div>
							<div class="dropdown main-profile-menu nav nav-item nav-link">
								<a class="profile-user" href="#"><img alt="" src="{{asset('agentasset/assets/img/faces/5.jpg')}}"></a>
								<div class="dropdown-menu dropdown-menu-arrow animated fadeInUp">
									<div class="main-header-profile header-img">
										<div class="main-img-user"><img alt="" src="{{asset('agentasset/assets/img/faces/5.jpg')}}"></div>
										<h6>{{$data['name']}}</h6><span>{{$data['email']}}</span>
									</div>
									<a class="dropdown-item" href="{{url('both-account-home')}}"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="{{url('both-account-profile')}}"><i class="far fa-edit"></i> Edit Profile</a>
									<a class="dropdown-item" href="{{url('users-logout')}}"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
							</div>
							<div class="dropdown main-header-message right-toggle">
								<a class="nav-link " data-toggle="sidebar-right" data-target=".sidebar-right">
									<i class="ti-menu tx-20 bg-transparent"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-header -->
				<!-- container -->
				<div class="container-fluid">
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">Profile</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Fill your details</span>
						</div>
					</div>
					<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
						<a href="{{url('/')}}" class="btn btn-primary mt-2 mt-xl-0" style="margin-right:4px;"> Go To Main Website</a>
						<a href="#" class="btn btn-primary mt-2 mt-xl-0" style="margin-right:4px;">Preview Account</a>
						<a href="#" class="btn btn-primary mt-2 mt-xl-0">Upgrade Account</a>
					</div>
				</div>
				<!-- breadcrumb -->
				@php
				$id=$account->id ?? null;
				$dob=$account->dob ?? null;
				$gender=$account->gender ?? null;
				$company_name=$account->company_name ?? null;
				$logo=$account->logo ?? null;
				$description=$account->description ?? null;
				$services=$account->services ?? null;
				$address=$account->address ?? null;
				$city=$account->city ?? null;
				$country=$account->country ?? null;
				$country_code=$account->country_code ?? null;
				$mobile=$account->mobile ?? null;
				$whatsappno=$account->whatsappno ?? null;
				$telegram_link=$account->telegram_link ?? null;
				$facebook_id=$account->facebook_id ?? null;
				$instagram_id=$account->instagram_id ?? null;
				$linkedin_id=$account->linkedin_id ?? null;
				$website_url=$account->website_url ?? null;
				$video_gallery=$account->video_gallery ?? null;
				$image_gallery=$account->image_gallery ?? null;
				$price=$account->price ?? null;
	      $signal_frequency=$account->signal_frequency ?? null;
	      $signal_provider_via=$account->signal_provider_via ?? null;
	      $trading_stratergy=$account->trading_strategy ?? null;
				$minimum_equity=$account->minimum_equity ?? null;
				$profit_sharing=$account->profit_sharing ?? null;
				$currency_pair=$account->currency_pair ?? null;
				$trading_plateform=$account->trading_plateform ?? null;
				$tradable_assets=$account->tradable_assets ?? null;
				$minimum_deposit=$account->minimum_deposit ?? null;
				$forex_bokers=$account->forex_bokers ?? null;
				$investor_id=$account->investor_id ?? null;
				@endphp

				<div class="row">
					<form class="" action="{{url('signal-provider-account-user-details')}}" method="post" enctype="multipart/form-data" style="width: 100%">
					 @csrf
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<!--div-->
							<div class="card">
								<div class="card-body">
									@if(session('success'))
									<div class="alert alert-success alert-dismissible fade show" role="alert">
									{{session('success')}}
									<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" style="float: right"></button>
									</div>
								@endif
									<input type="hidden" name="idaccount" value="{{$id}}">
									<div class="main-content-label mg-b-5">
										Step 1
									</div>
										<div class="row row-sm">
										<div class="col-lg">
											<label for="">First Name</label>
											@php
											$nameass=$data['name'];
											$nam=explode(" ",$nameass);
											@endphp
											<input class="form-control" name="fname" placeholder="First Name" value="{{$nam[0]}}" type="text">
										</div>
										<div class="col-lg">
											<label for="">Last Name</label>
											<input class="form-control" name="lname" value="{{$nam[1]}}" placeholder="Last Name" type="text">
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Email Id</label>
											<input class="form-control" name="email" value="{{$data['email']}}" placeholder="Email" type="email">
										</div>
									</div>
								</div>
							</div>
						</div>
						<!--/div-->
						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<div class="main-content-label mg-b-5">
										Step 2
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Date Of Birth</label>
											<input class="form-control" name="dob" value="{{$dob}}" id="datepickerNoOfMonths" placeholder="MM/DD/YYYY" type="text">
										</div>
										<div class="col-lg">
												<label for="">Gender {{$gender}}</label>
											<div class="row row-sm mg-t-20">
												@php
												$gender11='';
												$gender1='';
												$gender2='';
												 if($gender==='male'){
														$gender11='checked';
												 }elseif($gender=='female'){
															$gender1='checked';
												 }elseif($gender=='other'){
													 $gender2='checked';
												 }
												@endphp
											<div class="col-lg">
												<label class="rdiobox">
													<input name="gender" value="male" {{$gender11}} type="radio"> <span>Male</span></label>
											</div>
											<div class="col-lg">
												<label class="rdiobox">
													<input name="gender" value="female" {{$gender1}} type="radio"> <span>Female</span></label>
											</div>
											<div class="col-lg">
												<label class="rdiobox">
													<input name="gender" value="other" {{$gender2}} type="radio"> <span>Other</span></label>
											</div>
										</div>
											</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Company Name</label>
											<input class="form-control" value="{{$company_name}}" name="companyname" placeholder="Company Name" type="text">
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Choose Logo</label>
										<div class="custom-file">
											<div class="col-sm-12 col-md-3 mg-t-10 mg-sm-t-0">
												<input type="file" name="logo" class="dropify" data-default-file="{{asset('uploads/account_and_signal/logo/'.$logo)}}" />
											</div>
											</div>
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Description</label>
											<textarea class="form-control" name="description" id="description" placeholder="Textarea" rows="3">{{$description}}</textarea>
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Services</label>
											<textarea class="form-control" name="services" id="services" placeholder="Textarea" rows="3">{{$services}}</textarea>
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">Address</label>
											<textarea class="form-control" name="address" id="fulladdress" placeholder="Textarea" rows="3">{{$address}}</textarea>
										</div>
									</div>
									<div class="row row-sm mg-t-20">
										<div class="col-lg">
											<label for="">City</label>
											<input class="form-control" value="{{$city}}" name="city" placeholder="City" type="text">
										</div>
										<div class="col-lg">
											<label for="">Country</label>
											<select class="form-control select2" name="country">
												<option value="{{$country}}" label="Choose one">
												{{$country}}
												</option>
													@foreach($country1 as $cnry)
													<option>{{$cnry['country_name']}}</option>
													@endforeach
											</select>
											</div>
									</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<label for="">Select Country Code</label>
												<select class="form-control select2" name="countrycode">
													<option value="{{$country_code}}" label="Choose one">
														{{$country_code}}
													</option>
													@foreach($mobilecode as $mobile1)
													<option>{{$mobile1['mobilecode']}}</option>
													@endforeach
													</option>
												</select>
											</div>
											<div class="col-lg">
												<label for="">Mobile Number</label>
												<input class="form-control" value="{{$mobile}}" name="mobileno" id="phoneMask" placeholder="(000) 000-0000" type="text">
											</div>
											<div class="col-lg">
												<label for="">Whatsapp Number</label>
												<input class="form-control" value="{{$whatsappno}}" name="whatsappno" id="phoneMask" placeholder="(000) 000-0000" type="tel" maxlength="10">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<label for="">Telegram Link</label>
												<input class="form-control" value="{{$telegram_link}}" name="telegramlink" placeholder="Telegram Link" type="text">
											</div>
											<div class="col-lg">
												<label for="">Facebook Id</label>
												<input class="form-control" value="{{$facebook_id}}" name="facebookid" placeholder="Telegram Link" type="text">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<label for="">Instagram Id</label>
												<input class="form-control" value="{{$instagram_id}}" name="instgramid" placeholder="Instagram Id" type="text">
											</div>
											<div class="col-lg">
												<label for="">Linkedin Id</label>
												<input class="form-control" value="{{$linkedin_id}}" name="linkedinid" placeholder="Telegram Link" type="text">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<label for="">Website Url</label>
												<input class="form-control" value="{{$website_url}}" name="websiteurl" placeholder="Website Url" type="url">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<label for="">Video Gallery</label>
												<input class="form-control" value="{{$video_gallery}}" name="videogallery" placeholder="Video link" type="url">
											</div>
										</div>
										<div class="row row-sm mg-t-20">
											<div class="col-lg">
												<label for="">Image Gallery</label>
												<div class="row mb-4">
												@php
												$imgarr=explode(",",$image_gallery);
												$cimg='4';
												for($i=0;$i<$cimg;$i++){
													if(!empty($imgarr[$i])){
														$imggal=$imgarr[$i];
													}	else{
														$imggal='';
													}
													@endphp
											<div class="col-sm-12 col-md-3">
												<input type="file" name="imagegallery[]" class="dropify" data-default-file="{{asset('uploads/account_and_signal/image_gallery/'.$imggal)}}" />
											</div>
													@php
												}
												@endphp
													</div>
												</div>
										</div>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
 					   <div class="card">
 					     <div class="card-body">
 					       <div class="main-content-label mg-b-5">
 					         Step 3
 					       </div>
 					         <div class="row row-sm mg-t-20">
 					         <div class="col-lg">
 					           <label for="">Price</label>
 					           <input class="form-control" name="price" value="{{$price}}" placeholder="Price" type="text">
 					         </div>
 					         <div class="col-lg">
 					           <label for="">Signal Frequency</label>
 					         <div class="custom-file">
 					           <input class="form-control" name="signalfrequency" value="{{$signal_frequency}}" placeholder="Signal Frequency" type="text">
 					         </div>
 					         </div>
 					       </div>
 					       <div class="row row-sm mg-t-20">
 					         <div class="col-lg">
 					           <label for="">Signal Provider via</label>
 					           <input class="form-control" name="signalprovider" value="{{$signal_provider_via}}" placeholder="Signal Provider via" type="text">
 					         </div>
 					       </div>
 					       <div class="row row-sm mg-t-20">
 					         <div class="col-lg">
 					           <label for="">Trading Stratergy</label>
 					           <textarea name="trading_stratergy" id="investerid2" class="form-control" rows="4">{{$trading_stratergy}}</textarea>
 					           </div>
 					       </div>
 					     </div>
 					   </div>
 					 </div>
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
						 <div class="card">
							 <div class="card-body">
								 <div class="main-content-label mg-b-5">
									 Step 4
								 </div>
									 <div class="row row-sm mg-t-20">
									 <div class="col-lg">
										 <label for="">Minimum Equity</label>
										 <input class="form-control" value="{{$minimum_equity}}" name="minimum_equity" placeholder="Minimum Equity" type="text">
									 </div>
									 <div class="col-lg">
										 <label for="">Profit Sharing</label>
									 <div class="custom-file">
										 <input class="form-control" value="{{$profit_sharing}}" name="profitsharing" id="" placeholder="Profit Sharing" type="text">
									 </div>
									 </div>
								 </div>
								 <div class="row row-sm mg-t-20">
									 <div class="col-lg">
										 <label for="">Currency Pairs</label>
										 <input class="form-control" value="{{$currency_pair}}" name="currencypairs" placeholder="Currency Pairs" type="text">
									 </div>
									 <div class="col-lg">
										 <label for="">Trading Plateform</label>
									 <div class="custom-file">
										 <input class="form-control" value="{{$trading_plateform}}" name="tradingplatform" id="" placeholder="Trading Plateform" type="text">
									 </div>
									 </div>
								 </div>
								 <div class="row row-sm mg-t-20">
									 <div class="col-lg">
										 <label for="">Tradable Assets</label>
										 <input class="form-control" value="{{$tradable_assets}}" name="tradableassets" placeholder="Tradable Assets" type="text">
									 </div>
									 <div class="col-lg">
										 <label for="">Minimum Deposit</label>
									 <div class="custom-file">
										 <input class="form-control" value="{{$minimum_deposit}}" name="minimum_deposit" id="" placeholder="Minimum Deposit" type="text">
									 </div>
									 </div>
								 </div>
								 <div class="row row-sm mg-t-20">
									 <div class="col-lg">
										 <label for="">Forex Brokers</label>
										 <input class="form-control" value="{{$forex_bokers}}" name="forex" placeholder="Forex Brokers" type="text">
									 </div>
								 </div>
								 <div class="row row-sm mg-t-20">
									 <div class="col-lg">
										 <label for="">Investor Id & Password Details</label>
										 <textarea name="investerid" id="investerid" class="form-control" rows="4">{{$investor_id}}</textarea>
										 </div>
								 </div>
							 </div>
						 </div>
					 </div>
						<!--div-->
						<div class="col-md-12 col-xl-12 col-xs-12 col-sm-12">
							<div class="card">
								<div class="card-body">
									<button type="submit" class="btn btn-primary" name="button">Update</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<!-- row closed -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->
			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2022 <a href="#">forexbroker</a>. Designed by <a href="#">Sk</a> All rights reserved.</span>
				</div>
			</div>
			<!-- Footer closed -->
		</div>
		<!--End Page -->
		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="la la-chevron-up"></i></a>
		<!-- Jquery js-->
		<script src="{{asset('agentasset/assets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap js-->
		<script src="{{asset('agentasset/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Ionicons js-->
		<script src="{{asset('agentasset/assets/plugins/ionicons/ionicons.js')}}"></script>
		<!-- Moment js -->
		<script src="{{asset('agentasset/assets/plugins/moment/moment.js')}}"></script>
		<!-- P-scroll js -->
		<script src="{{asset('agentasset/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
		<script src="{{asset('agentasset/assets/plugins/perfect-scrollbar/p-scroll.js')}}"></script>
		<!-- Rating js-->
		<script src="{{asset('agentasset/assets/plugins/rating/jquery.rating-stars.js')}}"></script>
		<script src="{{asset('agentasset/assets/plugins/rating/jquery.barrating.js')}}"></script>
		<!-- Custom Scroll bar Js-->
		<script src="{{asset('agentasset/assets/plugins/mscrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
		<!-- eva-icons js -->
		<script src="{{asset('agentasset/assets/js/eva-icons.min.js')}}"></script>
		<!-- Sidebar js -->
		<script src="{{asset('agentasset/assets/plugins/side-menu/sidemenu.js')}}"></script>
		<!-- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="{{asset('agentasset/assets/plugins/sidebar/sidebar-custom.js')}}"></script>
		<!-- Sticky js-->
		<script src="{{asset('agentasset/assets/js/sticky.js')}}"></script>
		<!-- Internal Fancy uploader js-->
		<script src="{{asset('agentasset/assets/plugins/fancyuploder/jquery.ui.widget.js')}}"></script>
        <script src="{{asset('agentasset/assets/plugins/fancyuploder/jquery.fileupload.js')}}"></script>
        <script src="{{asset('agentasset/assets/plugins/fancyuploder/jquery.iframe-transport.js')}}"></script>
        <script src="{{asset('agentasset/assets/plugins/fancyuploder/jquery.fancy-fileupload.js')}}"></script>
        <script src="{{asset('agentasset/assets/plugins/fancyuploder/fancy-uploader.js')}}"></script>
				<!-- Internal Fileuploads js-->
				<script src="{{asset('agentasset/assets/plugins/fileuploads/js/fileupload.js')}}"></script>
						<script src="{{asset('agentasset/assets/plugins/fileuploads/js/file-upload.js')}}"></script>

		<!-- Datepicker js -->
		<script src="{{asset('agentasset/assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
		<!-- Internal jquery.maskedinput js -->
		<script src="{{asset('agentasset/assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
		<!-- Internal spectrum-colorpicker js -->
		<script src="{{asset('agentasset/assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
		<!-- select2.min js -->
		<!-- Internal Form-elements js-->
		<script src="{{asset('agentasset/assets/js/advanced-form-elements.js')}}"></script>
		<script src="{{asset('agentasset/assets/js/select2.js')}}"></script>

		<script src="{{asset('agentasset/assets/plugins/select2/js/select2.min.js')}}"></script>
		<!-- Internal ion.rangeSlider.min js -->
		<script src="{{asset('agentasset/assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
		<!-- Internal jquery-simple-datetimepicker js -->
		<script src="{{asset('agentasset/assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
		<!-- Simple-dtpicker js -->
		<script src="{{asset('agentasset/assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
		<!-- Internal pickerjs js -->
		<script src="{{asset('agentasset/assets/plugins/pickerjs/picker.min.js')}}"></script>
		<!-- Internal form-elements js -->
		<script src="{{asset('agentasset/assets/js/form-elements.js')}}"></script>
		<!-- Custom js-->
		<script src="{{asset('agentasset/assets/js/custom.js')}}"></script>
        <!-- Switcher js -->
		<script src="{{asset('agentasset/assets/switcher/js/switcher.js')}}"></script>
		<script src="{{asset('cekeditor/ckeditor.js')}}"></script>
		<script src="{{asset('cekeditor/styles.js')}}"></script>

		<!-- <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script> -->
	 <script>
	 var editor=CKEDITOR.replace('fulladdress',{
	     filebrowserUploadUrl:"{{route('signalandaccountckeditorimage.upload',['_token'=>csrf_token()])}}",
	     filebrowserUploadMethod:"form"
	   });
	   //CKFinder.setupCKEditor(editor);
	 </script>
	 <script>
	 var editor=CKEDITOR.replace('description',{
	     filebrowserUploadUrl:"{{route('signalandaccountckeditorimage.upload',['_token'=>csrf_token()])}}",
	     filebrowserUploadMethod:"form"
	   });
	   //CKFinder.setupCKEditor(editor);
	 </script>
	 <script>
	 var editor=CKEDITOR.replace('services',{
	     filebrowserUploadUrl:"{{route('signalandaccountckeditorimage.upload',['_token'=>csrf_token()])}}",
	     filebrowserUploadMethod:"form"
	   });
	   //CKFinder.setupCKEditor(editor);
	 </script>
	 <script>
	 var editor=CKEDITOR.replace('investerid',{
	     filebrowserUploadUrl:"{{route('signalandaccountckeditorimage.upload',['_token'=>csrf_token()])}}",
	     filebrowserUploadMethod:"form"
	   });
	   //CKFinder.setupCKEditor(editor);
	 </script>
	 <script>
	 var editor=CKEDITOR.replace('investerid2',{
	     filebrowserUploadUrl:"{{route('signalandaccountckeditorimage.upload',['_token'=>csrf_token()])}}",
	     filebrowserUploadMethod:"form"
	   });
	   //CKFinder.setupCKEditor(editor);
	 </script>
		</body>
</html>
