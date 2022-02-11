<!doctype html>
<html lang="en">
<head>

        <meta charset="utf-8" />
        <title>Dashboard | ForexBroker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />

        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
        <!-- DataTables -->
      <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />

      <!-- Responsive datatable examples -->
      <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-topbar="dark" data-layout="horizontal">

        <!-- Begin page -->
        <div id="layout-wrapper">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="{{url('admin')}}" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo.svg')}}" alt="" height="62">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="67">
                                </span>
                            </a>

                            <a href="{{url('admin')}}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-light.svg')}}" alt="" height="62">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="69">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <!-- App Search-->
                        <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="bx bx-search-alt"></span>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex">
                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">

                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Search input">
                                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>s
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="dropdown d-none d-lg-inline-block ms-1">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="bx bx-fullscreen"></i>
                            </button>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/user.png')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">Admin</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{url('logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="bx bx-cog bx-spin"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="{{url('admin')}}" id="topnav-dashboard" role="button"
                                    >
                                        <i class="bx bx-home-circle me-2"></i><span key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                                    </a>
                                    <!-- <div class="dropdown-menu" aria-labelledby="topnav-dashboard">

                                        <a href="index.html" class="dropdown-item" key="t-default">Default</a>
                                        <a href="dashboard-saas.html" class="dropdown-item" key="t-saas">Saas</a>
                                        <a href="dashboard-crypto.html" class="dropdown-item" key="t-crypto">Crypto</a>
                                        <a href="dashboard-blog.html" class="dropdown-item" key="t-blog">Blog</a>
                                    </div> -->
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                    >
                                        <i class="bx bx-user-circle"></i> <span key="t-apps">Master</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <a href="{{url('regulatory-body-master')}}" class="dropdown-item" key="t-calendar">Regulatory Body</a>
                                        <a href="{{url('country-master')}}" class="dropdown-item" key="t-chat">Country Name</a>
                                        <a href="{{url('city-master')}}" class="dropdown-item" key="t-chat">City Name</a>
                                        <a href="{{url('country-code-master')}}" class="dropdown-item" key="t-chat">Mobile No Code</a>
                                        <a href="{{url('deposit-Withdrawal-master')}}" class="dropdown-item" key="t-chat">Deposit / Withdrawal</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                    >
                                        <i class="bx bx-tone me-2"></i><span key="t-apps">Broker</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <a href="{{url('broker')}}" class="dropdown-item" key="t-calendar">Add</a>
                                        <a href="{{url('broker-review')}}" class="dropdown-item" key="t-chat">Review</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                                    >
                                        <i class="bx bx-customize me-2"></i><span key="t-apps">Account Manager</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                        <a href="{{url('account-manager-registration')}}" class="dropdown-item" key="t-calendar">Add</a>
                                        <a href="{{url('account-details')}}" class="dropdown-item" key="t-chat">Review</a>
                                    </div>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                    >
                                        <i class="bx bx-collection me-2"></i><span key="t-components">Signal Provider</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-components">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="{{url('signal-provider')}}" id="topnav-form"
                                                role="button">
                                                <span key="t-forms">Add</span>
                                            </a>
                                            </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="{{url('signal-provider-details')}}" id="topnav-table"
                                                role="button">
                                                <span key="t-tables">Review</span>
                                            </a>
                                          </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                                    >
                                        <i class="bx bx-layout me-2"></i><span key="t-components">Both</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-components">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="{{url('add-account-and-signal')}}" id="topnav-form"
                                                role="button">
                                                <span key="t-forms">Add</span>
                                            </a>
                                            </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="{{url('add-account-and-signal-view')}}" id="topnav-table"
                                                role="button">
                                                <span key="t-tables">Review</span>
                                            </a>
                                          </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                        <i class="bx bx-file me-2"></i><span key="t-extra-pages">Extra pages</span> <div class="arrow-down"></div>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="topnav-more">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="{{url('review-rating')}}" id="topnav-invoice"
                                                role="button">
                                                <span key="t-invoices">Reviews</span> <div class="arrow-down"></div>
                                            </a>
                                            <!--<div class="dropdown-menu" aria-labelledby="topnav-invoice">-->
                                            <!--    <a href="invoices-list.html" class="dropdown-item" key="t-invoice-list">Invoice List</a>-->
                                            <!--    <a href="invoices-detail.html" class="dropdown-item" key="t-invoice-detail">Invoice Detail</a>-->
                                            <!--</div>-->
                                        </div>
                                        </div>
                                         <!--<div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                                role="button">
                                                <span key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                                <a href="auth-login.html" class="dropdown-item" key="t-login">Login</a>
                                                <a href="auth-login-2.html" class="dropdown-item" key="t-login-2">Login 2</a>
                                                <a href="auth-register.html" class="dropdown-item" key="t-register">Register</a>
                                                <a href="auth-register-2.html" class="dropdown-item" key="t-register-2">Register 2</a>
                                                <a href="auth-recoverpw.html" class="dropdown-item" key="t-recover-password">Recover Password</a>
                                                <a href="auth-recoverpw-2.html" class="dropdown-item" key="t-recover-password-2">Recover Password 2</a>
                                                <a href="auth-lock-screen.html" class="dropdown-item" key="t-lock-screen">Lock Screen</a>
                                                <a href="auth-lock-screen-2.html" class="dropdown-item" key="t-lock-screen-2">Lock Screen 2</a>
                                                <a href="auth-confirm-mail.html" class="dropdown-item" key="t-confirm-mail">Confirm Mail</a>
                                                <a href="auth-confirm-mail-2.html" class="dropdown-item" key="t-confirm-mail-2">Confirm Mail 2</a>
                                                <a href="auth-email-verification.html" class="dropdown-item" key="t-email-verification">Email verification</a>
                                                <a href="auth-email-verification-2.html" class="dropdown-item" key="t-email-verification-2">Email verification 2</a>
                                                <a href="auth-two-step-verification.html" class="dropdown-item" key="t-two-step-verification">Two step verification</a>
                                                <a href="auth-two-step-verification-2.html" class="dropdown-item" key="t-two-step-verification-2">Two step verification 2</a>
                                            </div>
                                        </div>
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                role="button">
                                                <span key="t-utility">Utility</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                <a href="pages-starter.html" class="dropdown-item" key="t-starter-page">Starter Page</a>
                                                <a href="pages-maintenance.html" class="dropdown-item" key="t-maintenance">Maintenance</a>
                                                <a href="pages-comingsoon.html" class="dropdown-item" key="t-coming-soon">Coming Soon</a>
                                                <a href="pages-timeline.html" class="dropdown-item" key="t-timeline">Timeline</a>
                                                <a href="pages-faqs.html" class="dropdown-item" key="t-faqs">FAQs</a>
                                                <a href="pages-pricing.html" class="dropdown-item" key="t-pricing">Pricing</a>
                                                <a href="pages-404.html" class="dropdown-item" key="t-error-404">Error 404</a>
                                                <a href="pages-500.html" class="dropdown-item" key="t-error-500">Error 500</a>
                                            </div>
                                        </div>
                                    </div> -->
                                </li>

                                <!--<li class="nav-item dropdown">-->
                                <!--    <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"-->
                                <!--    >-->
                                <!--        <i class="bx bx-layout me-2"></i><span key="t-layouts">Layouts</span> <div class="arrow-down"></div>-->
                                <!--    </a>-->
                                    <!-- <div class="dropdown-menu" aria-labelledby="topnav-layout">
                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-verti"
                                                role="button">
                                                <span key="t-vertical">Vertical</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-layout-verti">
                                                <a href="layouts-light-sidebar.html" class="dropdown-item" key="t-light-sidebar">Light Sidebar</a>
                                                <a href="layouts-compact-sidebar.html" class="dropdown-item" key="t-compact-sidebar">Compact Sidebar</a>
                                                <a href="layouts-icon-sidebar.html" class="dropdown-item" key="t-icon-sidebar">Icon Sidebar</a>
                                                <a href="layouts-boxed.html" class="dropdown-item" key="t-boxed-width">Boxed Width</a>
                                                <a href="layouts-preloader.html" class="dropdown-item" key="t-preloader">Preloader</a>
                                                <a href="layouts-colored-sidebar.html" class="dropdown-item" key="t-colored-sidebar">Colored Sidebar</a>
                                                <a href="layouts-scrollable.html" class="dropdown-item" key="t-scrollable">Scrollable</a>
                                            </div>
                                        </div>

                                        <div class="dropdown">
                                            <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-layout-hori"
                                                role="button">
                                                <span key="t-horizontal">Horizontal</span> <div class="arrow-down"></div>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="topnav-layout-hori">
                                                <a href="layouts-horizontal.html" class="dropdown-item" key="t-horizontal">Horizontal</a>
                                                <a href="layouts-hori-topbar-light.html" class="dropdown-item" key="t-topbar-light">Topbar light</a>
                                                <a href="layouts-hori-boxed-width.html" class="dropdown-item" key="t-boxed-width">Boxed width</a>
                                                <a href="layouts-hori-preloader.html" class="dropdown-item" key="t-preloader">Preloader</a>
                                                <a href="layouts-hori-colored-header.html" class="dropdown-item" key="t-colored-topbar">Colored Header</a>
                                                <a href="layouts-hori-scrollable.html" class="dropdown-item" key="t-scrollable">Scrollable</a>
                                            </div>
                                        </div>
                                    </div> -->
                                <!--</li>-->

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
