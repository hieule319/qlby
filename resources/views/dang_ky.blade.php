
<!DOCTYPE html>
<head>
<title>Trang đăng ký</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="{{asset('public/frontend/css/bootstrap.min.css')}}" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="{{asset('public/frontend/css/style.css')}}" rel='stylesheet' type='text/css' />
<link href="{{asset('public/frontend/css/style-responsive.css')}}" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="{{asset('public/frontend/css/font.css')}}" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="{{asset('public/frontend/js/jquery2.0.3.min.js')}}"></script>
</head>
<body>
<div class="reg-w3">
<div class="w3layouts-main">
	<h2>Register Now</h2>
		<form action="#" method="post">
			<input type="text" class="ggg" name="Name" placeholder="NAME" required="">
			<input type="email" class="ggg" name="Email" placeholder="E-MAIL" required="">
			<input type="text" class="ggg" name="Phone" placeholder="PHONE" required="">
			<input type="password" class="ggg" name="Password" placeholder="PASSWORD" required="">
			<h4><input type="checkbox" />I agree to the Terms of Service and Privacy Policy</h4>
			
				<div class="clearfix"></div>
				<input type="submit" value="submit" name="register">
		</form>
		<p>Already Registered.<a href="login.html">Login</a></p>
</div>
</div>
<script src="{{asset('public/fronted/js/bootstrap.js')}}"></script>
<script src="{{asset('public/fronted/js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('public/fronted/js/scripts.js')}}"></script>
<script src="{{asset('public/fronted/js/jquery.slimscroll.js')}}"></script>
<script src="{{asset('public/fronted/js/jquery.nicescroll.js')}}"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{asset('public/fronted/js/jquery.scrollTo.js')}}"></script>
</body>
</html>
