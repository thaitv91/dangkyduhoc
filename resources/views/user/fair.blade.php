@extends("layouts/app")

@section('styles')
<style type="text/css">
	.btn, .btn:hover, .btn:focus{
		border:1px solid #e4e4e4;
		border-radius: 0;
		color:#555;
		text-transform: capitalize;
		background-color: transparent;
		font-family: "Open Sans", Arial, Helvetica, sans-serif;
		font-size: 14px;
		height: 50px;
		margin-bottom: 10px;
	}

	.btn-style {
		color: white;
		background: #2db04a;
		font-size: 24px;
		font-family: UTMBebas, Arial, Helvetica;
	}

	.btn-style:hover, .btn-style:focus {
		color: white;
		background-color: #23a43f;
		border-radius: 8px;
		font-size: 24px;
		font-family: UTMBebas, Arial, Helvetica;
	}
</style>
@endsection
@section("content")
<div class="title-page">
	<div class="container"><h1>Fair</h1></div>
</div>

<div class="container">
	<div class="uni-info fair">
		<div class="img">
			<div class="slider" id="slider-img-fair">
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
				<div class="item-img"><img src="/img/uni-img.jpg" alt=""></div>
			</div>
		</div>
		<div class="info">
			<?php echo $fair_introduce_field ?>
			<!-- <h2>DREAM BIG</h2>
			<h3>OVERSEAS UNIVERSITY FAIR 2017</h3>
			<div class="description">
				<p>Looking to study overseas? Meet with over 60 globally recognised universities across Australia, UK, USA, Canada, Ireland & Switzerland at the largest education fair in town. Discover your study options and all the benefits of studying abroad! Proudly organised by theRightU.</p>
			</div>
			<div class="time">
				<strong>24 DAYS TO GO!</strong><br/>
				29 September 2017, 4 - 9pm<br/>
				Suntec Singapore Convention, Halls 324-326<br/>
				<a href="#">Sign up online!</a>
			</div> -->
		</div><!-- /.info -->
	</div><!-- /.uni-info -->

	<div class="breadcrumb-page">
		<div class="row">
			<div class="col-sm-4">
				<div class="tile-fair-br">
					<div class="number">60</div>
					<div class="text">
						globally recognised <br/>universities
					</div>
				</div><!-- /.tile-fair-br -->
			</div>

			<div class="col-sm-4">
				<div class="tile-fair-br">
					<div class="number">30</div>
					<div class="text">
						oundation colleges to fast <br/>track your education
					</div>
				</div><!-- /.tile-fair-br -->
			</div>

			<div class="col-sm-4">
				<div class="tile-fair-br">
					<div class="number">$0</div>
					<div class="text">
						application fee <br/>worth over $100
					</div>
				</div><!-- /.tile-fair-br -->
			</div>
		</div>
	</div><!-- /.breadcrumb-page -->

	<div class="fair-tab">
		<ul class="navtab" role="tablist">
		   <li role="presentation" class="active"><a href="#by-popularity" aria-controls="by-popularity" role="tab" data-toggle="tab">BY POPULARITY</a></li>
		   <li role="presentation"><a href="#by-country" aria-controls="profile" role="tab" data-toggle="tab">BY COUNTRY</a></li>
		</ul>

		<!-- Tab panes -->
		<div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="by-popularity">
		    	<div class="row">
		    		<div class="col">
		    			<div class="tile-tab">
		    				<h4 class="title">UK TOP 10</h4>
		    				@foreach (App\Models\FairPopularity::where('category', 'UK TOP 10')->get() as $value)
		    				<a href="{{ route('user.university.detail', ['slug'=>$value->university->slug]) }}">{{ $value->university->name }}</a>
		    				@endforeach
		    			</div><!-- /.tile-tab -->
		    		</div>

		    		<div class="col">
		    			<div class="tile-tab">
		    				<h4 class="title">ALLIED HEALTH</h4>
		    				@foreach (App\Models\FairPopularity::where('category', 'ALLIED HEALTH')->get() as $value)
		    				<a href="{{ route('user.university.detail', ['slug'=>$value->university->slug]) }}">{{ $value->university->name }}</a>
		    				@endforeach
		    			</div><!-- /.tile-tab -->

		    		</div>

		    		<div class="col">
		    			<div class="tile-tab">
		    				<h4 class="title">DENTISTRY</h4>
		    				@foreach (App\Models\FairPopularity::where('category', 'DENTISTRY')->get() as $value)
		    				<a href="{{ route('user.university.detail', ['slug'=>$value->university->slug]) }}">{{ $value->university->name }}</a>
		    				@endforeach
		    			</div><!-- /.tile-tab -->

		    		</div>

		    		<div class="col">
		    			<div class="tile-tab">
		    				<h4 class="title">LAW</h4>
		    				@foreach (App\Models\FairPopularity::where('category', 'LAW')->get() as $value)
		    				<a href="{{ route('user.university.detail', ['slug'=>$value->university->slug]) }}">{{ $value->university->name }}</a>
		    				@endforeach
		    			</div><!-- /.tile-tab -->
		    		</div>

		    		<div class="col">
		    			<div class="tile-tab">
		    				<h4 class="title">UK TOP 10</h4>
		    				@foreach (App\Models\FairPopularity::where('category', 'UK TOP 10')->get() as $value)
		    				<a href="{{ route('user.university.detail', ['slug'=>$value->university->slug]) }}">{{ $value->university->name }}</a>
		    				@endforeach
		    			</div><!-- /.tile-tab -->
		    			
		    		</div>
		    	</div>
		    </div><!-- /.by-popularity -->

		    <div role="tabpanel" class="tab-pane" id="by-country">
		    	@if (count($universities) > 0)
		    	<div class="row">
		    	@php $country = ''; @endphp
		    	@for ($i=1; $i <=5; $i++)
		    	<div class="col">
		    		<div class="tile-tab">
		    			<?php foreach ($universities as $key => $value): ?>
		    			@if ($key >= (count($universities) * ($i - 1)) / 5 && $key < (count($universities) * $i) / 5)
		    			@if ($value->country_slug != $country)
		    			<h4 class="title">{{ $value->country->name }}</h4>
		    			@php $country = $value->country_slug @endphp
		    			@endif
		    			<a href="{{ route('user.university.detail', ['slug'=>$value->slug]) }}">{{ $value->name }}</a>
		    			@endif
		    			<?php endforeach ?>
		    		</div><!-- /.tile-tab -->
		    	</div>
		    	@endfor
		    	@endif
		    </div>
		    </div><!-- /.by-country -->
		</div>
	</div><!-- /.fair-tab -->

	<div class="row">
		<div class="col-md-6">
			<div class="row signup-to-enjoy">
				<div class="col-sm-6 hidden-xs img">
					<img src="/img/enjoy.png" alt="">
				</div>
				<div class="col-sm-6">
					<!-- <?php echo $sign_up_perks_field ?> -->
					<div class="text">
						<h2 class="title">Sign up to enjoy these perks</h2>
						<ul>
							<?php echo $sign_up_perks_field ?>
							<!-- <li><span>Free admission</span></li>
							<li><span>Free goodie bag</span></li>
							<li>
								<span>Application fee waiver</span>
								<ul>
									<li>Foundation</li>
									<li>Undergraduate</li>
									<li>Postgraduate</li>
								</ul>
							</li>
							<li>
								<span>Free post-fair support</span>
								<ul>
									<li>Choosing a university
									<li>Personal statement</li>
									<li>Application</li>
									<li>Acceptance</li>
									<li>Student visa</li>
									<li>Accommodation</li>
									<li>Flight &amp; airport pickup</li>
									<li>Pre-departure briefing</li>
								</ul>
							</li>
							<li><span>No hidden fees</span></li>
							<li><span>No termination charges</span></li> -->
						</ul>
					</div><!-- /.signup-to-enjoy -->
				</div>
			</div>
		</div><!-- /.col-md-6 -->

		<form action="{{ route('user.fair.register') }}" method="GET">
			<div class="col-md-6">
				<div class="form-enjoy">
					<div class="form-group">
						<select class="form-control selectpicker" name="subject[]" multiple="" data-live-search="true" required title="Subject...">
							@foreach (App\Models\Subject::all() as $key => $value)
							<option value="{{ $value->id }}">{{ $value->name }}</option>
							@endforeach
						</select>
					</div>

					<div class="form-group">
						<input type="text" name="name" placeholder="Your name" class="form-control" required>
					</div>

					<div class="form-group">
						<input type="text" name="email" placeholder="Email" class="form-control" required>
					</div>

					<div class="form-group">
						<input type="text" name="mobile" placeholder="Mobile number" class="form-control" required>
					</div>				

					<div class="form-group">
						<select class="form-control" name="university_intake" required>
							<option selected disabled>University Intake</option>
							<?php echo $university_intake_field ?>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" name="studying" required>
							<option disabled selected>Are you currently studying?</option>
							<?php echo $studying_field ?>
							<!-- <option value="1">I am still studying</option>
							<option value="0">I am still studying</option> -->
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" name="current_qualification" required>
							<option value="default" selected="" disabled="disabled" title="Obtained or to obtain">-- Current qualification --</option>
							<?php echo $current_qualification_field ?>
						</select>
					</div>

					<div class="form-group">
						<input type="text" name="expected_grade" placeholder="Expected grades" class="form-control" required>
					</div>

					<a href="#"> I want a free preliminary university assessment before the fair</a>
					<button type="submit" class="btn btn-green btn-block btn-style" >Count me in</button>
				</div><!-- /.form-enjoy -->
			</div><!-- /.col-md-6 -->
		</form>
	</div>
</div>

@endsection
