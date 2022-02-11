<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<!-- Title -->
        <title>Forex | Account Manager</title>
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
		<!-- style css-->
		<link href="{{asset('agentasset/assets/css/style.css')}}" rel="stylesheet">
    <!-- dark-theme css-->
		<link href="{{asset('agentasset/assets/css/style-dark.css')}}" rel="stylesheet">
        <!-- Switcher css -->
		<link href="{{asset('agentasset/assets/switcher/css/switcher.css')}}" rel="stylesheet">
		<link rel="{{asset('agentasset/stylesheet" href="assets/switcher/demo.css')}}">
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
				<a class=" desktop-logo logo-light" href="{{url('agent-home')}}"><img src="{{asset('agentasset/assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class=" desktop-logo logo-dark" href="{{url('agent-home')}}"><img src="{{asset('agentasset/assets/img/brand/logo-white.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light" href="{{url('agent-home')}}"><img src="{{asset('agentasset/assets/img/brand/favicon.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark" href="{{url('agent-home')}}"><img src="{{asset('agentasset/assets/img/brand/favicon-white.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			<div class="main-sidebar-body circle-animation ">

				<ul class="side-menu circle">
					<li><h3 class="">Dashboard</h3></li>
					<li class="slide">
						<a class="side-menu__item" href="{{url('agent-home')}}"><i class="side-menu__icon ti-desktop"></i><span class="side-menu__label">Dashboard</span></a>
					</li>
                    <li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{url('agent-profile')}}"><i class="side-menu__icon ti-layout menu-icon"></i><span class="side-menu__label">Profile</span></a>
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
							<a href="{{url('agent-home')}}">
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
									<a class="dropdown-item" href="{{url('agent-home')}}"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="{{url('agent-profile')}}"><i class="far fa-edit"></i> Edit Profile</a>
									<a class="dropdown-item" href="{{url('users-logout')}}"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
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
									<a class="dropdown-item" href="{{url('agent-home')}}"><i class="far fa-user"></i> My Profile</a>
									<a class="dropdown-item" href="{{url('agent-profile')}}"><i class="far fa-edit"></i> Edit Profile</a>
									<a class="dropdown-item" href="{{url('users-logout')}}"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- mobile-header -->
