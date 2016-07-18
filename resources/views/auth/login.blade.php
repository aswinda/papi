<!DOCTYPE html>
<html>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:12:25 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>PAPI | Cloud Farming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/compiled/theme.css') }}">

	<!-- javascript -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="{{ URL::to('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('js/theme.js') }}"></script>

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
				<h4>Sign in to your account.</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="wrapper clearfix">
					<div class="formy">
						<div class="row">
							<div class="col-md-12">
								
								@if (!empty($massage))
									<div class="alert alert-success">
										<?php echo $message ?>	
									</div>
								@endif
								<form class="form-horizontal" role="form" method="POST" action="{{ url('post-login') }}">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
							  		<div class="form-group">
							    		<label for="email">Email address</label>
							    		<input name="email" type="email" class="form-control" id="email" />
							  		</div>
							  		<div class="form-group">
							    		<label for="password">Password</label>
							    		<input name="password" type="password" class="form-control" id="password" />
							  		</div>
							  		<div class="form-group">
							    		<label>
							      			<input type="checkbox">
							    		</label>  Remember me
							  		</div>
							  		<div class="submit">
							  			<button type="submit" class="button-clear">
								  			<span>Sign in</span>
								  		</button>
							  		</div>
								</form>
							</div>
						</div>						
					</div>
				</div>
				<div class="already-account">
					Don't have an account?
					<a href="{{ URL::to('register') }}">Create one here</a>
				</div>
			</div>
		</div>
	</div>
</body>

</html>