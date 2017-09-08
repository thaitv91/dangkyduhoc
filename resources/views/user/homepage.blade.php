@extends("layouts/app")

@section("scripts")
@endsection
@section("content")
<div class="banner-home" style="background-image: url(/img/banner.jpg);">
	<div class="container">
		<div class="text">
			<h1>{{ $data_field['header-slogan1']}}</h1>
			<div class="description">
				{{$data_field['header-slogan2']}}
			</div>
		</div>
		<div class="free-assessment">
			<h2>FREE ASSESSMENT</h2>
			<div class="description">
				<p>What is your current qualification?</p>
			</div>
			<ul>
				<li>
					<input type="checkbox" id="checkbox-1">
					<label for="checkbox-1">Diploma</label>
				</li>
				<li>
					<input type="checkbox" id="checkbox-2">
					<label for="checkbox-2">‘A’ Level</label>
				</li>
				<li>
					<input type="checkbox" id="checkbox-3">
					<label for="checkbox-3">IB</label>
				</li>
				<li>
					<input type="checkbox" id="checkbox-4">
					<label for="checkbox-4">‘O’ Level</label>
				</li>
				<li>
					<input type="checkbox" id="checkbox-5">
					<label for="checkbox-5">Bachelor</label>
				</li>
			</ul>
			<div class="bottom">
				<button class="btn btn-green btn-block">Next</button>
			</div>
		</div><!-- /.free-assessment -->
	</div>
</div><!-- /.banner-home -->

<div class="steps-guide">
	<div class="container">
		<div class="step step-1">
			<div class="step-icon">
				<div class="icon-box">
					<div class="icon"><span><i class="sprite-search-white"></i></span></div>
				</div>
			</div>
			<div class="step-number">
				step
				<span>01</span>
			</div>
			<div class="step-text">
				<div class="text-box">
					{!!$data_field['content-discover']!!}
				</div>
			</div>
		</div><!-- /.step -->

		<div class="step step-2">
			<div class="step-icon">
				<div class="icon-box">
					<div class="icon"><span><i class="sprite-chart"></i></span></div>
				</div>
			</div>
			<div class="step-number">
				step
				<span>02</span>
			</div>
			<div class="step-text">
				<div class="text-box">
					{!!$data_field['content-compare']!!}
				</div>
			</div>
		</div><!-- /.step -->

		<div class="step step-3">
			<div class="step-icon">
				<div class="icon-box">
					<div class="icon"><span><i class="sprite-comment"></i></span></div>
				</div>
			</div>
			<div class="step-number">
				step
				<span>03</span>
			</div>
			<div class="step-text">
				<div class="text-box">
					{!!$data_field['content-consult']!!}
				</div>
			</div>
		</div><!-- /.step -->

		<div class="step step-4">
			<div class="step-icon">
				<div class="icon-box">
					<div class="icon"><span><i class="sprite-letter"></i></span></div>
				</div>
			</div>
			<div class="step-number">
				step
				<span>04</span>
			</div>
			<div class="step-text">
				<div class="text-box">
					{!!$data_field['content-apply']!!}
				</div>
			</div>
		</div><!-- /.step -->
		<div class="step step-3">
			<div class="step-icon">
				<div class="icon-box">
					<div class="icon"><span><i class="sprite-letter"></i></span></div>
				</div>
			</div>
			<div class="step-number">
				step
				<span>05</span>
			</div>
			<div class="step-text">
				<div class="text-box">
					{!!$data_field['content-chill']!!}
				</div>
			</div>
		</div>
	</div>
</div><!-- /.steps-guide -->


<div class="blog-home">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="blog-item">
					<div class="header-blog">
						<h2 class="title">{{$data_field['blog-percent']}}</h2>
						<p class="title">{{$data_field['blog-percent-off']}}</p>
					</div>
					<div class="description">
						<p>{{$data_field['blog-percent-content']}}</p>
					</div>
					<div class="bottom">
						<a href="#" class="btn btn-blue btn-block">Let’s get started</a>
					</div>
				</div><!-- /.blog-item -->
			</div>

			<div class="col-md-4">
				<div class="blog-item">
					<div class="header-blog">
						<h2 class="title">{{$data_field['blog-scholarships']}}</h2>
						<p class="title">{{$data_field['blog-scholarships-title']}}</p>
					</div>
					<div class="description">
						<p>{{$data_field['blog-scholarships-content']}}</p>
					</div>
					<div class="bottom">
						<a href="#" class="btn btn-blue btn-block">chat with us</a>
					</div>
				</div><!-- /.blog-item -->
			</div>

			<div class="col-md-4">
				<div class="blog-item">
					<div class="header-blog">
						<h2 class="title">{{$data_field['blog-satisfaction']}}</h2>
						<p class="title">{{$data_field['blog-satisfaction-title']}}</p>
					</div>
					<div class="description">
						<p>{{$data_field['blog-satisfaction-content']}}</p>
					</div>
					<div class="bottom">
						<a href="#" class="btn btn-blue btn-block">read facebook reviews</a>
					</div>
				</div><!-- /.blog-item -->
			</div>
		</div>
	</div>
</div><!-- /.blog-home -->

<div class="reviews">
	<div class="container">
		<div class="slider">
			<div class="review-item right">
				<div class="avatar-rating">
					<div class="avatar">
						<img src="/img/avatar.png" alt="">
					</div>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="text">
					Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!
				</div>
			</div><!-- /.review-item -->

			<div class="review-item">
				<div class="avatar-rating">
					<div class="avatar">
						<img src="/img/avatar.png" alt="">
					</div>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="text">
					Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!
				</div>
			</div><!-- /.review-item -->

			<div class="review-item right">
				<div class="avatar-rating">
					<div class="avatar">
						<img src="/img/avatar.png" alt="">
					</div>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="text">
					Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!
				</div>
			</div><!-- /.review-item -->

			<div class="review-item">
				<div class="avatar-rating">
					<div class="avatar">
						<img src="/img/avatar.png" alt="">
					</div>
					<div class="rating">
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
						<i class="fa fa-star-o"></i>
					</div>
				</div>
				<div class="text">
					Great experience, top quality service, humble people. Everything needed of an educational consultancy and even more. theRightU is ever willing to help, and they even going the extra mile visit the different universities before recommending it to you. Highly recommended! Special thanks to Wei Siang for everything; ensuring that my application was handled promptly and following up even after I entered university!
				</div>
			</div><!-- /.review-item -->
		</div>
	</div>
</div><!-- /.reviews -->


<div class="let-started text-center">
	<div class="container">
		<div class="wrap">
			<img src="/img/tools.jpg" alt="">
			<h2 class="title">{{$data_field['let-started-title']}}</h2>
			<div class="description">
				<p>{{$data_field['let-started-content']}}</p>
			</div>
			<a href="#" class="btn btn-green">Let’s get started</a>
		</div>
	</div>
</div><!-- /.let-started -->


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