
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
					<div class="text-center">
						<p>{{ $land->district_name.', '.$land->province_name }}</p>
					</div>
					
					<div class="content">
						<form class="form-horizontal" role="form" method="POST" action="{{ url('investor/land/payment/'.$land->id) }}">
	                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
							<table class="table m-b-none">
								<thead>
									<tr>
										<td><b>Luas</b></td>
										<td><b>Harga</b></td>
										<td>Jumlah (meter)</td>
										<td>Total</td>
										<td></td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>{{ $land->wide }} m2</td>
										<td>Rp. {{ $land->price }} / meter</td>
										<td>
											<div class="form-group">
									    		<input id="jumlah" name="jumlah" type="text" class="form-control" placeholder="10" style="height: 35px; width: 150px;" />
									  		</div>
									  	</td>
									  	<td id="total">Rp.0</td>
										<td><button type="submit" class="btn btn-success" style="width : 100%; max-width: 210px; display: block; border-radius: 0px;">Buy</button></td>
									</tr>
								</tbody>
							</table>
						</form>
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