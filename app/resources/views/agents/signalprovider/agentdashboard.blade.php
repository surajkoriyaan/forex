@include('agents/signalprovider/header')
@php
$imgss=null;
$cd=null;
$name=$data->name ?? null;
$email=$data->email ?? null;
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
$mobile=$account->mobileno ?? null;
$whatsappno=$account->whatsappno ?? null;
$telegram_link=$account->telegramlink ?? null;
$facebook_id=$account->facebookid ?? null;
$instagram_id=$account->instagramid ?? null;
$linkedin_id=$account->linkedin ?? null;
$website_url=$account->website_url ?? null;
$video_gallery=$account->video_gallery ?? null;
$image_gallery=$account->image_gallery ?? null;
$price=$account->price ?? null;
$signal_frequency=$account->signal_frequency ?? null;
$signal_provider_via=$account->signal_provider_via ?? null;
$trading_stratergy=$account->trading_stratergy ?? null;
@endphp
<!-- container -->
<div class="container-fluid">
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
	<div class="my-auto">
		<div class="d-flex">
			<h4 class="content-title mb-0 my-auto">Signal Provider</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0">/ Profile</span>
		</div>
	</div>
	<div class="d-flex align-items-end flex-wrap my-auto right-content breadcrumb-right">
		<a href="{{url('/')}}" class="btn btn-primary mt-2 mt-xl-0" style="margin-right:4px;"> Go To Main Website</a>
		<a href="#" class="btn btn-primary mt-2 mt-xl-0" style="margin-right:4px;">Preview Account</a>
		<a href="#" class="btn btn-primary mt-2 mt-xl-0">Upgrade Account</a>
	</div>
</div>
<!-- breadcrumb -->
<!-- row -->
<div class="row row-sm">
	<div class="col-lg-4">
		<div class="card mg-b-20">
			<div class="card-body">
				<div class="pl-0">
					<div class="main-profile-overview">
						<div class="main-img-user profile-user">
							<img alt="" src="{{asset('uploads/signal_provider/logo/'.$logo)}}" alt="logo"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
						</div>
						<div class="d-flex justify-content-between mg-b-20">
							<div>
									<h5 class="main-profile-name">{{$company_name}}</h5>
								<h6 class="main-profile-name">{{$name}}</h6>
								<p class="main-profile-name-text">{{$email}}</p>
								<p class="main-profile-name-text">DOB : {{$dob}}</p>
								<p class="main-profile-name-text">Gender : {{$gender}}</p>
							</div>
						</div>
						<h6>Address</h6>
						<div class="main-profile-bio">
							{!! $address !!}
						</div><!-- main-profile-bio -->
						<div class="main-profile-work-list">
							<div class="media">
							 <div class="media-logo bg-success-transparent text-success">
									<i class="icon ion-md-locate"></i>
							 </div>
							 <div class="media-body">
								 <h6>City : {{$city}}  </h6><span>{{$country}}</span>
							 </div>
						 </div>
							<div class="media">
								<div class="media-logo bg-success-transparent text-success">
									<i class="icon ion-logo-whatsapp"></i>
								</div>
								<div class="media-body">
									<h6>Whatsapp No. </h6><span>{{$whatsappno}}</span>
								</div>
							</div>
							<div class="media">
								<div class="media-logo bg-primary-transparent text-primary">
										<i class="icon ion-md-phone-portrait"></i>
								</div>
								<div class="media-body">
									<h6>Mobile Number  </h6><span>{{$country_code}} {{$mobile}}</span>
								</div>
							</div>
						</div><!-- main-profile-work-list -->
						<hr class="mg-y-30">
						<label class="main-content-label tx-13 mg-b-20">Social</label>
						<div class="main-profile-social-list">
							<div class="media">
								<div class="media-icon bg-primary-transparent text-primary">
									<i class="icon ion-logo-facebook"></i>
								</div>
								<div class="media-body">
									<span>Facebook</span> <a href="{{$facebook_id}}">{{$facebook_id}}</a>
								</div>
							</div>
							<div class="media">
								<div class="media-icon bg-success-transparent text-success">
									<i class="icon ion-logo-instagram"></i>
								</div>
								<div class="media-body">
									<span>Instagram</span> <a href="{{$instagram_id}}">{{$instagram_id}}</a>
								</div>
							</div>
							<div class="media">
								<div class="media-icon bg-success-transparent text-success">
									<i class="fab fa-telegram-plane"></i>
								</div>
								<div class="media-body">
									<span>Telegram</span> <a href="{{$telegram_link}}">{{$telegram_link}}</a>
								</div>
							</div>
							<div class="media">
								<div class="media-icon bg-info-transparent text-info">
									<i class="icon ion-logo-linkedin"></i>
								</div>
								<div class="media-body">
									<span>Linkedin</span> <a href="{{$linkedin_id}}">{{$linkedin_id}}</a>
								</div>
							</div>
							<div class="media">
								<div class="media-icon bg-danger-transparent text-danger">
									<i class="icon ion-md-link"></i>
								</div>
								<div class="media-body">
									<span>My Portfolio</span> <a href="{{$website_url}}">{{$website_url}}</a>
								</div>
							</div>
						</div><!-- main-profile-social-list -->
					</div><!-- main-profile-overview -->
				</div>
			</div>
		</div>

	</div>
	<div class="col-lg-8">
		<div class="main-content-body main-content-body-profile">
			<nav class="nav main-nav-line card mb-4">
				<a class="nav-link active" data-toggle="tab" href="#">
					Details</a>
			</nav><!-- main-profile-body -->
			<div class="main-profile-body p-0">
				<div class="row row-sm">
					<div class="col-12">
						<div class="card mg-b-20">
							<div class="card-body h-100">
								<div class="card-header">
									<div class="media">
										<div class="media-user mr-2">
										</div>
										<div class="media-body">
											<h6 class="mb-0 mg-t-9">Description</h6>
										</div>

									</div>
								</div>
								<p class="mg-t-10">
									{!! $description !!}
							</p>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body h-100">
								<div class="card-header">
									<div class="media">
										<div class="media-body">
											<h6 class="mb-0 mg-t-9">Services</h6>
										</div>
									</div>
								</div>
								<p class="mg-t-10">
									{!! $services !!}
								</p>
							</div>
						</div>
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="card-header">
									<h6 class="mb-0 mg-t-9">Gallery</h6>
									<hr>
									<div class="media">
										<iframe width="100%" height="400px" src="{{$video_gallery}}">
										</iframe>
									</div>
								</div>
								<p class="mg-t-10"></p>
								<div class="media mg-t-15 profile-footer">
									<div class="media-user mr-2">
									 <div class="row">
										 @php
										 $imgss=explode(",",$image_gallery);
										 $cd=count($imgss);
										 for($i=0;$i<$cd;$i++){
											 @endphp
											 <div class="col-md-6" style="height:auto">
												<img src="{{asset('uploads/signal_provider/image_gallery/'.$imgss[$i])}}" style="height:100%;width:100%" alt="">
											</div>
											 @php
										 }
										 @endphp
									 </div>
									</div>
								</div>
							</div>
						</div>
						<div class="card">
							<div class="card-body h-100">
								<div class="card-header">
									<div class="media">
										<div class="media-body">
											<h6 class="mb-0 mg-t-9">price</h6>
											<span class="text-dark">{{$price}}</span>
										</div>
									</div>
									<div class="media" style="margin-top: 5px">
										<div class="media-body">
											<h6 class="mb-0 mg-t-9">Signal Frequency</h6>
											<span class="text-dark">{{$signal_frequency}}</span>
										</div>
									</div>
									<div class="media" style="margin-top: 5px">
										<div class="media-body">
											<h6 class="mb-0 mg-t-9">Signal Provider Via</h6>
											<span class="text-dark">{{$signal_provider_via}}</span>
										</div>
									</div>

								</div>
								<p class="mg-t-10">
									 <h6>Trading Stratergy</h6>
									{!! $trading_stratergy !!}
								</p>
							</div>
						</div>
					</div>
				</div>
			</div><!-- main-profile-body -->
		</div>
	</div>
</div>
<!-- row closed -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@include('agents/signalprovider/footer')
