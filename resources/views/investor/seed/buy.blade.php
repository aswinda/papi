
<!DOCTYPE html>
<html>

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:02:54 GMT -->
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />	
	<title>PAPI - Cloud Farming</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- stylesheets -->
	<link rel="stylesheet" type="text/css" href="{{ URL::to('css/compiled/theme.css') }}">

	<!-- javascript -->
	<script src="{{ URL::to('js/jquery.min.js') }}"></script>
	<script src="{{ URL::to('js/bootstrap/bootstrap.min.js') }}"></script>
	<script src="{{ URL::to('js/theme.js') }}"></script>

	<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body id="features">
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
		      				<li><a href="#">Lands</a></li>
		      				<li><a href="#">Seeds</a></li>
							<li><a href="#">Plants</a></li>
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


	<div id="first-option" style="margin-top : -10px;">
		<div class="container">
			<div class="row header">
				<div class="col-md-12">
					<h2>{{ $seed->name }}</h2>
				</div>
			</div>
			
			<div class="row feature backwards" style="margin-bottom : -50px;">
				<div class="col-md-6 info">
					<table class="table m-b-none">
						<tbody>
							<tr>
								<td><b>Bibit</b></td>
							</tr>
							<tr>
								<td style="color: #9ACD32;"><h3 style="margin-top : 9px;">{{ $seed->name }}</h3></td>
							</tr>

							<tr>
								<td><b>Harga Per Bibit</b></td>
							</tr>
							<tr>
							<td style="color: #9ACD32;"><h3 style="margin-top : 9px;">Rp.{{ $seed->price }}</h3></td>
							</tr>

							<tr>
								<td><b>Tersedia</b></td>
							</tr>
							<tr>
								<td style="color: #9ACD32;"><h3 style="margin-top : 9px;">{{ $seed->stock }}</h3></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6 image">
					<img src="{{ URL::to('images/seeds/'.$seed->path) }}" class="img-responsive" alt="{{ $seed->name }}" />
				</div>
			</div>

			<div class="row feature backwards">
				<div class="col-md-6 info">
					<h4>Apa itu Wakaf ?</h4>
					<p>
						Wakaf adalah pemberian dana maupun pembagian keuntungan kepada perseorangan atau badan hukum 
						lain dari seorang dermawan (benefactor). Penerima (beneficiary) dalam hal ini telah dipilih 
						secara selektif oleh tim PAPI agar mengelola keuntungan tersebut sesuai dengan visi dan tujuan 
						kebaikan yang sejalan dengan visi PAPI itu sendiri. Anda dapat mengalokasikan profit sharing 
						anda minimal 5% hingga maksimal 100% atau keseluruhan profit sharing dari investasi Anda sebagai 
						sponsor di PAPI.
					</p>
				</div>
				<div class="col-md-6 info">
					<form role="form" style="margin-top : 50px;">
										<div class="form-group">
								    		<label >Jumlah</label>
								    		<input type="text" class="form-control" placeholder="10" />
								  		</div>
								  		<div class="form-group">
								    		<label >Alokasi Sponsor (Diri Sendiri)</label>
								    		<select class="form-control">
								    			<?php for($i = 0; $i <= 100; $i+=5) { ?>
								    			<option value="<?php echo $i; ?>"><?php echo $i; ?> %</option>
								    			<?php } ?>
								    		</select>
								  		</div>
								  		<div class="form-group">
								    		<label >Alokasi Wakaf</label>
								    		<select class="form-control">
								    			<?php for($i = 0; $i <= 100; $i+=5) { ?>
								    			<option value="<?php echo $i; ?>"><?php echo $i; ?> %</option>
								    			<?php } ?>
								    		</select>
								  		</div>
								  		
								  		<div class="submit pull-right">
								  			<a href="index-2.html" class="btn btn-success" style="width: 100px; display: block; border-radius: 0px;">
									  			Beli
									  		</a>
								  		</div>
									</form>

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

<!-- Mirrored from lit-coast-9918.herokuapp.com/v1.3/features.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 24 May 2015 10:03:03 GMT -->
</html>