@if(session('error'))
    <script>
        alert("{{session('error')}}");
    </script>
@endif
<!DOCTYPE HTML>
<html lang="en">
<head>
        <!-- basic   -->
        <meta charset="UTF-8">
        <title>Forex World</title>

        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content=""/>
        <meta name="description" content=""/>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- css   -->
        <link type="text/css" rel="stylesheet" href="{{asset('homeassets/css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('homeassets/css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('homeassets/css/color.css')}}">
        <!--  favicons  -->
        <link rel="shortcut icon" href="{{asset('homeassets/images/favicon.ico')}}">
    </head>
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <svg>
                    <defs>
                        <filter id="goo">
                            <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                            <fecolormatrix in="blur"   values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                            <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!--loader end-->
        <!-- main -->
        <div id="main">
            <!-- header -->
            <header class="main-header">
                <!--  logo  -->
                <div class="logo-holder" style="margin-top: 0px;top:0px;"><a href="index.html"><img src="{{asset('homeassets/logo1 (1).png')}}" style="height:70px;" alt=""></a></div>
                <!-- logo end  -->
                <!-- nav-button-wrap-->
                <div class="nav-button-wrap color-bg nvminit">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->
                <!--  login btn -->
                <div class="show-reg-form"><i class="fas fa-user"></i><span> <a href="{{url('agent-login')}}">Sign In</a></span></div>
                <!--  login btn  end -->
                <!--  navigation -->
                <div class="nav-holder main-menu">
                    <nav>
                        <ul class="no-list-style">
                            <li>
                                <a href="{{url('/')}}" class="act-link">Home </a>
                                <!--second level -->
                            </li>
                            <li>
                                <a href="#">About Us <i class="fa fa-caret-down"></i></a>
                                <!--second level -->
                                <ul>
                                    <li><a href="#">Forex</a></li>
                                    <li><a href="#">Markets</a></li>
                                </ul>
                                <!--second level end-->
                            </li>
                            <li>
                                <a href="#">Forex Brokers</a>
                            </li>
                            <li>
                                <a href="#">Account Managers</a>
                            </li>
                            <li>
                                <a href="#">Signal Providers</a>
                            </li>
                            <li>
                                <a href="#">Education</a>
                            </li>
                            <li>
                                <a href="#">Blog</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- navigation  end -->
                <!--header-opt-modal end -->
            </header>
            <!-- header end  -->
            <!-- wrapper  -->
            <div id="wrapper">
                <!-- content -->
