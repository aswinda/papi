@extends('investor.base.template')
@section('content')


	<div id="grid-first">
		<div class="container">
			<div class="row header">
				<h3>Hello, Addinul Masri</h3>
				<p>
					This is your update!
				</p>
			</div>
			<div class="row sections">

				<div class="col-md-4">
					<div class="section">
						<div class="pic">
							<img src="images/plant-logo.png" class="img-responsive" alt="services2" />
						</div>
						
							<div>
								<center>
									<h1>{{ $seed }}</h1>
									<h4>
										Bibit Tertanam
									</h4>
								</center>
							</div>
						
					</div>
				</div>
				<div class="col-md-4 center" >
					<div class="section">
						<div class="pic">
							<img src="images/co-logo.png" class="img-responsive" alt="services2" />
						</div>
						
							<div>
								<center>
									<h1>{{ $co }}</h1>
									<h4>
										CO2 Terserap
									</h4>
								</center>
							</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="section">
						<div class="pic">
							<img src="images/day-logo.png" class="img-responsive" alt="services2" />
						</div>
						
							<div>
								<center>
									<h1>{{ $days }}</h1>
									<h4>
										Hari Tertanam
									</h4>
								</center>
							</div>
						
					</div>
				</div>
		
				
			</div>
		</div>
	</div>



@endsection