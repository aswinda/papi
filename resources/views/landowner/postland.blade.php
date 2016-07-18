
<!DOCTYPE html>
<html>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/blogpost.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:10:15 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>PAPI - Cloud Farming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/compiled/theme.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/vendor/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/vendor/icomoon.css') }}">

	<!-- javascript -->
	<script src="{{ URL::to('js/jquery.min.js') }}"></script>
	<script src="{{ URL::to('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('js/theme.js') }}"></script>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="blogpost">
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
        				<a href="{{ URL::to('landowner') }}" class="dropdown-toggle" data-toggle="dropdown">
	      					Home
	      				</a>
	      				
        			</li>
        			
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      					Land <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
							<li><a href="{{ URL::to('landowner/land') }}">Land</a></li>
							<li><a href="{{ URL::to('landowner/postland') }}">Post Land</a></li>
				        </ul>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>

	<div id="blogpost-wrapper">
		<div class="container">

			<div class="row">
				<div class="col-md-10 post">
					<div class="title text-center">
						Post Land
					</div>
					
					<div class="content">
						<form class="form" role="form" method="POST" action="{{ url('landowner/land/store') }}" enctype="multipart/form-data">
                		<input type="hidden" name="_token" value="{{ csrf_token() }}">
							  <div class="form-group">
							    <label for="pwd">Name Land:</label>
							    <input type="name" class="form-control" name="name">
							  </div>
							  <div class="form-group">
							    <label for="pwd">Wide Land:</label>
							    <input type="wide" class="form-control" name="wide">
							  </div>
							  <div class="form-group">
								  <label for="description">Description:</label>
								  <textarea class="form-control" rows="5" name="description"></textarea>
							  </div>
							  <div class="form-group">
							    <label for="email">Price:</label>
							    <input type="price" class="form-control" name="price">
							  </div>
							  <div class="form-group">
						    		<label for="groups">Province</label>
						    		<select name="province_id" class="form-control">
						    			@foreach($provinces as $province)
									  		<option value="{{ $province->id }}">{{ $province->name }}</option>
									  	@endforeach
									</select>
						  		</div>
							  <div class="form-group">
						    		<label for="groups">District</label>
						    		<select name="district_id" class="form-control">
						    			@foreach($districts as $district)
									  		<option value="{{ $district->id }}">{{ $district->name }}</option>
									  	@endforeach
									</select>
						  		</div>

							  <div class="form-group">
			                      <label for="exampleInputFile">Image</label>
			                      <input name="file" type="file" id="exampleInputFile">
		                      </div>
							  <button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
								
				</div>
			</div>
		</div>
	</div>
	

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


<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/blogpost.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:10:17 GMT -->
</html>