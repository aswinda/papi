<!DOCTYPE html>
<html>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:09:45 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>PAPI | Cloud Farming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/compiled/theme.css">

	<!-- javascript -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap/bootstrap.min.js"></script>
	<script src="js/theme.js"></script>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="signup">
	<div class="container">
		<div class="row header">
			<div class="col-md-12">
				<h3 class="logo">
					<a href="index-2.html">PAPI</a>
				</h3>
				<i><h4>Seni Terindah adalah Alam Semesta</h4></i>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper clearfix">
					<div class="formy">
						<div class="row">
							<div class="col-md-12">
								<form class="form-horizontal" role="form" method="POST" action="{{ url('post-register') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<div class="form-group">
							    		<label for="name">Your name</label>
							    		<input type="text" class="form-control" id="name" name="name" />
							  		</div>
							  		<div class="form-group">
							    		<label for="email">Email address</label>
							    		<input type="email" class="form-control" id="email" name="email" />
							  		</div>
							  		<div class="form-group">
							    		<label for="password">Password</label>
							    		<input type="password" class="form-control" id="password" name="password" />
							  		</div>
							  		<div class="form-group">
							    		<label for="password">Password Confirmation</label>
							    		<input type="password" class="form-control" id="password" name="password_confirmation" />
							  		</div>
							  		<div class="form-group">
							    		<label for="groups">Group</label>
							    		<select name="group" class="form-control">
										  <option value="1">Investor</option>
										  <option value="2">Land Owner</option>
										</select>
							  		</div>
							  		
							  		<div class="checkbox">
							    		<label>
							      			<input type="checkbox"> You have read & agree to the 
							      			<a href="#">Terms of service</a>.
							    		</label>
							  		</div>
							  		<div class="submit">
							  			<button type="submit" class="button-clear" value="Create my account">
								  			<span>Create my account</span>
								  		</button>
							  		</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
				<div class="already-account">
					Already have an account?
					<a href="{{ URL::to('login') }}" data-toggle="popover" data-placement="top" data-content="Go to sign in!" data-trigger="manual">Sign in here</a>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function () {
			$(".already-account a").popover();
			$(".already-account a").popover('show');
		});
	</script>
</body>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:09:46 GMT -->
</html>