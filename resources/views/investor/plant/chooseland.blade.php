@extends('investor.base.template')
@section('content')


	<div id="grid-first" style="margin-top : 0px;">
		<div class="container" style="margin-top : -50px;">
			<div class="row header">
				<h3>Plant</h3>
			</div>
			<?php
				if(empty($lands)) {
			?>
				<div class="row header">
					<h3>You Have no Land</h3>
					
				</div><br><br>
			<?php
				}
			?>
			<div class="row sections">

				@foreach($lands as $land)
				<form class="form" role="form" method="POST" action="{{ url('investor/plant/chooseseed/1') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
					<div class="col-md-3" style="margin-bottom : 75px;">
						<div class="section">
							<div style="margin-bottom : 20px;">
								<img src="{{ URL::to('images/lands/'.$land->path) }}" class="img-circle img-responsive center" style="height:195px" alt="{{ $land->name }}" />
							</div>
							
							<div>
								<center>
									<h4>{{ $land->name }}</h4>
									<p><?php echo substr($land->description, 0, 100); ?> ...</p>
									<input name="land_id" value="{{ $land->id }}" type="hidden">
									<button type="submit" class="btn btn-success" style="width : 100%; max-width: 210px;  ">Choose</button>
								</center>
							</div>
							
						</div>
					</div>
				</form>
				@endforeach
		
				
			</div>

			<div class="col-md-12 pagination pagination-centered" style="margin-top : -35px;">
				<ul>
				  	<li><a href="{{ URL::to('investor/landowned/'.($page-1) ) }}">&laquo;</a></li>
				  	<?php for($i = 1; $i <= $page_count; $i++) { ?>
				  		<li class="<?php if($i == $page) echo "active"; ?>"><a href="{{ URL::to('investor/plant/chooseland/'.$i ) }}"><?php echo $i; ?></a></li>
				  	<?php } ?>
				  	<li><a href="{{ URL::to('investor/landowned/'.($page+1) ) }}">&raquo;</a></li>
				</ul>
			</div>

		</div>
	</div>

	<style>

	body {
		  margin: 0;
		  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		  font-size: 13px;
		  line-height: 18px;
		  color: #333333;
		  background-color: #ffffff;
			
		  padding: 0 20px;
		}
		a {
		  color: #0088cc;
		  text-decoration: none;
		}
		a:hover {
		  color: #005580;
		  text-decoration: underline;
		}

		h2 { padding-top: 20px; }
		h2:first-of-type { padding-top: 0; }
		ul { padding: 0; }

		.pagination {
		  height: 36px;
		  margin: 18px 0;
		}
		.pagination ul {
		  display: inline-block;
		  *display: inline;
		  /* IE7 inline-block hack */

		  *zoom: 1;
		  margin-left: 0;
		  margin-bottom: 0;
		  -webkit-border-radius: 3px;
		  -moz-border-radius: 3px;
		  border-radius: 3px;
		  -webkit-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
		  -moz-box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
		  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
		}
		.pagination li {
		  display: inline;
		}
		.pagination a {
		  float: left;
		  padding: 0 14px;
		  line-height: 34px;
		  text-decoration: none;
		  border: 1px solid #ddd;
		  border-left-width: 0;
		}
		.pagination a:hover,
		.pagination .active a {
		  background-color: #f5f5f5;
		}
		.pagination .active a {
		  color: #999999;
		  cursor: default;
		}
		.pagination .disabled span,
		.pagination .disabled a,
		.pagination .disabled a:hover {
		  color: #999999;
		  background-color: transparent;
		  cursor: default;
		}
		.pagination li:first-child a {
		  border-left-width: 1px;
		  -webkit-border-radius: 3px 0 0 3px;
		  -moz-border-radius: 3px 0 0 3px;
		  border-radius: 3px 0 0 3px;
		}
		.pagination li:last-child a {
		  -webkit-border-radius: 0 3px 3px 0;
		  -moz-border-radius: 0 3px 3px 0;
		  border-radius: 0 3px 3px 0;
		}
		.pagination-centered {
		  text-align: center;
		}
		.pagination-right {
		  text-align: right;
		}
		.pager {
		  margin-left: 0;
		  margin-bottom: 18px;
		  list-style: none;
		  text-align: center;
		  *zoom: 1;
		}
		.pager:before,
		.pager:after {
		  display: table;
		  content: "";
		}
		.pager:after {
		  clear: both;
		}
		.pager li {
		  display: inline;
		}
		.pager a {
		  display: inline-block;
		  padding: 5px 14px;
		  background-color: #fff;
		  border: 1px solid #ddd;
		  -webkit-border-radius: 15px;
		  -moz-border-radius: 15px;
		  border-radius: 15px;
		}
		.pager a:hover {
		  text-decoration: none;
		  background-color: #f5f5f5;
		}
		.pager .next a {
		  float: right;
		}
		.pager .previous a {
		  float: left;
		}
		.pager .disabled a,
		.pager .disabled a:hover {
		  color: #999999;
		  background-color: #fff;
		  cursor: default;
		}
	</style>

@endsection