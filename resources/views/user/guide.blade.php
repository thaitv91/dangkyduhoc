@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>{!! $data_field['guide-title'] !!}</h1></div>
</div>

<div class="container">
	<div class="search-general">
		<div class="form">
			<form action="" method="GET">
			<input type="text" class="form-control" name="search_en" id="search_en" placeholder="Search Guide">
			<button><i class="sprite-search-2"></i></button>
			</form>
		</div>
	</div><!-- /.search-general -->

	<div class="list-guides">
		<div class="row">
			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-1"></i></div>
						<p>{!! $data_field['about-therightu'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-brown" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-2"></i></div>
						<p>{!! $data_field['choosing-university'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-3"></i></div>
						<p>{!! $data_field['apply-to-university'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-brown" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-4"></i></div>
						<p>{!! $data_field['accept-offer'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-5"></i></div>
						<p>{!! $data_field['finances-scholarships'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-violet" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-6"></i></div>
						<p>{!! $data_field['flight-accomodation'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-orange" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-7"></i></div>
						<p>{!! $data_field['student-visa'] !!}</p>
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-orange" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-8"></i></div>
						<p>{!! $data_field['online-consultation'] !!}</p>
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
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}
<script type="text/javascript">
$(document).ready(function(){
    $("#search_en").autocomplete({
        source: "search/autocomplete",
            focus: function( event, ui ) {
            return false;
        },
        select: function( event, ui ) {
            window.location.href = ui.item.slug;
        }
    }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
        var inner_html = '<a href="guide/' + item.slug + '" ><h6>' + item.value + '</h6>';
        return $( "<li></li>" )
                .data( "item.autocomplete", item )
                .append(inner_html)
                .appendTo( ul );
    };
});
</script>  
@endsection
