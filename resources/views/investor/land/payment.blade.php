
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


	<div id="first-option" style="margin-top : 20px;">
		<div class="container">
			<div class="row header">
				<div class="col-md-12">
					<h2>Terima Kasih Sudah Berkontribusi!</h2>
					<p>Bibit yang Anda pesan akan kami proses setelah Anda melakukan pembayaran. 
					Berikut terlampir review pemesanan dan cara pembayaran
					</p>
				</div>
			</div>


			
			<div class="row feature backwards" style="margin-bottom : -50px;">
				<div class="col-md-6 info">
					<table class="table m-b-none">
						<tbody>
							<tr>
								<td>Lahan</td>
							</tr>
							<tr>
								<td style="color: #9ACD32;">{{ $land->name }}</td>
							</tr>

							<tr>
								<td>Harga Per Meter</td>
							</tr>
							<tr>
							<td style="color: #9ACD32;">Rp.{{ $land->price }}</td>
							</tr>

							<tr>
								<td>Luas</td>
							</tr>
							<tr>
								<td style="color: #9ACD32;">{{ $jumlah }}</td>
							</tr>

							<tr>
								<td>Total Harga</td>
							</tr>
							<tr>
								<td style="color: #9ACD32; font-size : 200%;">Rp. {{ $jumlah * $land->price }}</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="col-md-6 image">
					<img src="{{ URL::to('images/lands/'.$land->path) }}" class="img-responsive" alt="{{ $land->name }}" />
				</div>
			</div>

			<div class="row feature text-center">
				<div class="col-md-6">
					<h3>Pembayaran</h3><br>
					<p>Kode Pembayaran : <b>{{ $transaction_id }} </b></p>
					<p>Pembayaran dapat dilakukan melalui rekening berikut</p>
					<b><p>Bank Syariah Mandiri Cabang Gandaria, Jakarta
					<p>a/n Sumber Daya Informasi PT</p></b>
					<h3>No. rek: 7088009888</h3>
					
				</div>
				<div class="col-md-6">
					<h3>Konfirmasi</h3><br>
					<p>Setelah Anda melakukan pembayaran harap konfirmasi:</p><br>
					<p style="color: #9ACD32;"><b>Format : [nama]_[nama_lahan]_[jumlah biaya]_[waktu transfer]</b></p><br>
					<p><b>SMS</b>: +628985276363 (Aswin) atau</p>
					<p><b>Email</b> : aswin@gmail.com</p><br>
					
				</div>
				<div class="col-md-12">
					<br><br><p>*Maksimal konfirmasi adalah H+3, jika lewat dari itu maka transaksi akan dihapus (dianggap membatalkan pembelian)</p>
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