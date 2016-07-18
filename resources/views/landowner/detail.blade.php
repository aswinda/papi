
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
      			<a href="{{ URL::to('landowner') }}" class="navbar-brand">PAPI</a>
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
      			<ul class="nav navbar-nav navbar-right visible-md visible-lg">
      				<li>
          				<a href="{{ URL::to('logout') }}" class="button"></a>
        			</li>
      			</ul>
    		</nav>
  		</div>
	</header>


	<div id="blogpost-wrapper">
		<div class="container">
			<div class="row">

				<div class="col-md-12">
					<div class="main-pic">
						<img src="{{ URL::to('images/lands/'.$land->path) }}" class="img-responsive" alt="blogpost" />
					</div>					
				</div>
			</div>

			
			<div class="row">
				<div class="col-md-10 post">
					<div class="title text-center">
						{{ $land->name }}
						{{ $land->district_name }}
						{{ $land->provinces_name }}

					</div>					
					<div class="content">
						<div class="wrapper m-t-xl m-b">
				          <div class="row m-b">
				            <div class="col-xs-6 text-right">
				              Wide          
				              	<div class="font-bold">
				              		<h4 style="color: #9ACD32;">{{ $land->wide_land }} m<sup>2</sup></h4>
				              	</div>              
				            </div>
				            <div class="col-xs-6">
				              Price
				              	<div class="font-bold">
				              		<h4 style="color: #9ACD32;">Rp.{{ $land->price_land }}</h4>
				              	</div>
				            </div>
				          </div>
				        </div>
				        <div class="wrapper m-t-xl m-b">
				          <div class="row m-b">
				          </div>
				        </div>
						
					</div>

				<div class="content">
				<div class="col-md-10 post">
					<div class="title text-center">
						Lands Transactions
					</div>
					<div class="content">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('landowner/detail/'.$land->id) }}">
	                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<table class="table m-b-none">
								<thead>
									<tr>
										<td><b>Investor Name</b></td>
										<td><b>Wide</b></td>
										<td><b>Harga</b></td>
									</tr>
								</thead>
								<tbody>
									@foreach($updates as $update)
									<tr>
										<td>{{ $update->user_name }}</td>
										<td>{{ $update->wide }}</td>
										<td>Rp. {{ $update->price }}</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</form>
					</div>
								
				</div>
			</div>
			<p>
				{!!html_entity_decode($land->description)!!}
			</p>
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

<script type="text/javascript">
	var price =  {{ $land->price_land }};
	$('#jumlah').change(function () {
	    $('#total').text("Rp. " + (price * $('#jumlah').val()));
	});
</script>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/blogpost.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:10:17 GMT -->
</html>