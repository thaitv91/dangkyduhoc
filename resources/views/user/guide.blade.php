@extends("layouts/app")

@section("scripts")
@endsection
@section("content")
<div class="title-page">
	<div class="container"><h1>Guide</h1></div>
</div>

<div class="container">
	<div class="search-general">
		<div class="form">
			<input type="text" class="form-control" placeholder="Search Guide">
			<button><i class="sprite-search-2"></i></button>
		</div>
	</div><!-- /.search-general -->

	<div class="list-guides">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-1"></i></div>
						<p>ABOUT THERIGHTU </p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-brown" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-2"></i></div>
						<p>CHOOSING A UNIVERSITY</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-3"></i></div>
						<p>APPLYING TO UNIVERSITY</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-brown" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-4"></i></div>
						<p>ACCEPTING YOUR OFFER</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-5"></i></div>
						<p>FINANCES &amp; SCHOLARSHIPS</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-violet" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-6"></i></div>
						<p>FLIGHT &amp; ACCOMODATION</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-orange" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-7"></i></div>
						<p>Student visa</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-orange" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-8"></i></div>
						<p>Online consultation</p>
					</div>
				</a><!-- /.tile -->
			</div>
		</div>
	</div><!-- /.list-guides -->
</div>


<div class="container">
	<div class="contact-home">
		<div class="row">
			<div class="col-md-3 col-sm-6 col">
				<div class="university-guide">
					<h3 class="title">UNIVERSITY GUIDE</h3>
					<ul>
						<li>Choosing a university
						<li>Applying to university</li>
						<li>Accepting your offer</li>
						<li>Finances & Scholarships</li>
						<li>Flight & Accomodation</li>
						<li>Student visa</li>
					</ul>
				</div><!-- /.university-guide -->
			</div>

			<div class="col-md-4 col-sm-6 col">
				<div class="form-contact">
					<h3 class="title">HAVE US CONTACT YOU</h3>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Name">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Email">
					</div>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="WhatsApp">
					</div>
					<div class="form-group">
						<textarea class="form-control">Your questions for our education consultans</textarea>
					</div>
					<div class="bottom"><button class="btn btn-green btn-block">Contact me</button></div>
				</div><!-- /.form-contact -->
			</div>

			<div class="col-md-5 col-sm-12 col">
				<div class="maps">
					<h3 class="title">MEET US</h3>
					<div class="img">
						<img src="/img/map.jpg" alt="">
					</div>
					<div class="info">
						<p>Monday to Friday: <strong>10am - 8pm</strong></p>
						<p>Saturday: <strong>10am - 1pm</strong></p>
					</div>
				</div><!-- /.maps -->
			</div>
		</div>
	</div><!-- /.contact-home -->
</div>
@endsection