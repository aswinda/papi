
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
      				<li class="dropdown">
        				<a href="{{ URL::to('investor') }}" class="dropdown-toggle" data-toggle="dropdown">
	      					Home <b class="caret"></b>
	      				</a>
	      				
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      					Plant <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
		      				<li><a href="{{ URL::to('investor/landowned') }}">Lands</a></li>
		      				<li><a href="{{ URL::to('investor/seedowned') }}">Seeds</a></li>
							<li><a href="{{ URL::to('investor/plant') }}">Plants</a></li>
				        </ul>
        			</li>
        			<li class="dropdown">
        				<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	      					Land <b class="caret"></b>
	      				</a>
	      				<ul class="dropdown-menu">
							<li><a href="#">Buy Land</a></li>
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
					</div>

					
					
					<div class="content">
						<div class="wrapper m-t-xl m-b">
				          <div class="row m-b">
				            <div class="col-xs-6 text-right">
				              Wide          
				              	<div class="font-bold">
				              		<h4 style="color: #9ACD32;">{{ $land->wide }} m<sup>2</sup></h4>
				              	</div>              
				            </div>
				            <div class="col-xs-6">
				              Price
				              	<div class="font-bold">
				              		<h4 style="color: #9ACD32;">Rp.{{ $land->price }}</h4>
				              	</div>
				            </div>
				          </div>
				        </div>
				        <div class="wrapper m-t-xl m-b">
				          <div class="row m-b">
				            <div class="col-xs-6 text-right">
				              District       
				              	<div class="font-bold">
				              		<h4 style="color: #9ACD32;">{{ $land->district_name }}</h4>
				              	</div>              
				            </div>
				            <div class="col-xs-6">
				              Province
				              	<div class="font-bold">
				              		<h4 style="color: #9ACD32;">{{ $land->province_name }}</h4>
				              	</div>
				            </div>
				          </div>
				        </div>
				        <center>
				        	<p>Status</p>
				        	<h4 style="color: #9ACD32;">{{ $land->status }}</h4>
				        </center>
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
	var price =  {{ $land->price }};
	$('#jumlah').change(function () {
	    $('#total').text("Rp. " + (price * $('#jumlah').val()));
	});
</script>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/blogpost.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:10:17 GMT -->
</html>