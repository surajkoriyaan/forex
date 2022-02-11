@if(session('error'))
    <script>
        alert("{{session('error')}}");
    </script>
@endif
<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<!-- Title -->
        <title>Forex Register</title>
        <!-- Favicon -->
        <link rel="icon" href="{{asset('agentasset/assets/img/brand/favicon.png')}}" type="image/x-icon"/>
		<!-- Icons css -->
		<link href="{{asset('agentasset/assets/css/icons.html')}}" rel="stylesheet">
		<!---Fontawesome css-->
		<link href="{{asset('agentasset/assets/plugins/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
		<!---Ionicons css-->
		<link href="{{asset('agentasset/assets/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
		<!---Typicons css-->
		<link href="{{asset('agentasset/assets/plugins/typicons.font/typicons.css')}}" rel="stylesheet">
		<!---Feather css-->
		<link href="{{asset('agentasset/assets/plugins/feather/feather.css')}}" rel="stylesheet">
		<!---Falg-icons css-->
        <link href="{{asset('agentasset/assets/plugins/flag-icon-css/css/flag-icon.min.css')}}" rel="stylesheet">
		<!---Style css-->
		<link href="{{asset('agentasset/assets/css/style.css')}}" rel="stylesheet">
		<link href="{{asset('agentasset/assets/css/animate.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
	<body class="main-body">
		<!-- Loader -->
		<div id="global-loader" class="light-loader">
			<img src="{{asset('agentasset/assets/img/loaders/loader.svg')}}" class="loader-img" alt="Loader">
		</div>
        <!-- /Loader -->
		<!-- main-signin-wrapper -->
		<div class="my-auto page page-h">
			<div class="main-signin-wrapper">
				<div class="main-card-signin d-md-flex wd-100p">
				<div class="wd-md-50p login d-none d-md-block page-signin-style p-5 text-white" style="background-color: red" >
					<div class="my-auto authentication-pages">
						<div>
							<img src="{{asset('agentasset/assets/img/brand/logo-white.png')}}" class="m-0 mb-4" alt="logo">
							<h5 class="mb-4">Responsive Modern Dashboard &amp; Admin Template</h5>
							<p class="mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting</p>
						</div>
					</div>
				</div>
				<div class="sign-up-body wd-md-50p">
					<div class="main-signin-header">
						<h2>Welcome back!</h2>
						<a href="{{url('/')}}">Back To Home!</a>
						<h4>Please Register with Forex</h4>
            <form class="form" action="{{url('sendmail')}}" method="post">
                @csrf
							<div class="form-group">
								<label>Full Name</label>
                <input class="form-control" name="fullname" placeholder="Enter your fullname" type="text" required>
                @error('fullname')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
								<label>User Type</label>
                <select class="form-control" name="usertype" required>
                  <option value="">Select User Type</option>
                  <option value="2">Account Manager</option>
                  <option value="3">Signal Provider</option>
                  <option value="4">Both</option>
                </select>
                @error('usertype')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
                	</div>
							<div class="form-group">
								<label>Email / Username</label>
                <input class="form-control" name="usernameemail" placeholder="Enter your email" type="text" required>
                @error('usernameemail')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
							<div class="form-group">
								<label>Password</label>
                <input class="form-control" name="password" placeholder="Enter your password" type="password" required>
                @error('password')
                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
								<label>Confirm Password</label>
                <input class="form-control" name="password_confirmation" placeholder="Confirm password" type="password" required>
							</div>
              <button type="submit" class="btn btn-main-primary btn-block">Create Account</button>
              <center><span style="text-align: center; margin-top: 4px;">Or</span><br>
           <span style="text-align: center;">Registered With</span></center>
            <center>
              <a href="{{url('login/facebook')}}" class="btn btn-secondary" style="font-size: 20px;"><i class="fab fa-facebook-square"></i></a>
            <a href="#" class="btn btn-danger" style="font-size: 20px;"><i class="fab fa-google-plus-g"></i></a>
            </center>
						</form>
					</div>
					<div class="main-signup-footer mg-t-10">
						<p style="text-align: center;">Already have an account? <a href="{{url('agent-login')}}">Sign In</a></p>
					</div>
					</div>
				</div>
			</div>
		</div>
		<!-- /main-signin-wrapper -->
		<!-- JQuery min js -->
		<script src="{{asset('agentasset/assets/plugins/jquery/jquery.min.js')}}"></script>
		<!-- Bootstrap Bundle js -->
		<script src="{{asset('agentasset/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
		<!-- Ionicons js -->
		<script src="{{asset('agentasset/assets/plugins/ionicons/ionicons.js')}}"></script>
		<!-- Moment js -->
		<script src="{{asset('agentasset/assets/plugins/moment/moment.js')}}"></script>
		<!-- eva-icons js -->
		<script src="{{asset('agentasset/assets/js/eva-icons.min.js')}}"></script>
		<script src="{{asset('agentasset/assets/js/custom.js')}}"></script>
	</body>
</html>
