
<!DOCTYPE html>
<html>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:03:03 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>PAPI - Cloud Farming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/compiled/theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/vendor/brankic.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/vendor/animate.css') }}">

	<!-- javascript -->
	<script src="{{ URL::to('js/jquery.min.js') }}"></script>
	<script src="{{ URL::to('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('js/theme.js') }}"></script>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body id="services">
	<header class="navbar navbar-inverse normal" role="banner">
  		<div class="container">
    		<div class="navbar-header">
		      	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
      			<a href="{{ URL::to('investor') }}" class="navbar-brand">PAPI</a>
    		</div>
    		<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      			<ul class="nav navbar-nav">
      				<li>
        				<a href="{{ URL::to('investor') }}">
	      					Home</b>
	      				</a>
	      				
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      					Plant <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
		      				<li><a href="{{ URL::to('investor/landowned') }}">Lands Owned</a></li>
		      				<li><a href="{{ URL::to('investor/seedowned') }}">Seeds Owned</a></li>
							<li><a href="{{ URL::to('investor/plant') }}">Plants</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      					Land <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
							<li><a href="{{ URL::to('investor/land') }}">Buy Land</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      					Seeds <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
							<li><a href="{{ URL::to('investor/seed') }}">Buy Seeds</a></li>
				        </ul>
        			</li>
      			</ul>
      			<ul class="nav navbar-nav navbar-right visible-md visible-lg">
      				<li>
          				<a href="{{ URL::to('logout') }}" class="button"></a>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>

	 @yield('content') 
	<div id="footer-white">
		<div class="container">
			
			
			<div class="row credits">
				<div class="col-md-12">
					Copyright © 2014. PAPI
				</div>
			</div>
		</div>
	</div>
</body>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/services.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:03:09 GMT -->
</html>