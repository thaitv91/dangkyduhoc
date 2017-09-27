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
						{!! $data_field['about-therightu'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-brown" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-2"></i></div>
						{!! $data_field['choosing-university'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-3"></i></div>
						{!! $data_field['apply-to-university'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-brown" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-4"></i></div>
						{!! $data_field['accept-offer'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-blue" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-5"></i></div>
						{!! $data_field['finances-scholarships'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-violet" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-6"></i></div>
						{!! $data_field['flight-accomodation'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-dark-orange" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-7"></i></div>
						{!! $data_field['student-visa'] !!}
					</div>
				</a><!-- /.tile -->
			</div>

			<div class="col-md-3 col-sm-6">
				<a class="tile-guide bg-light-orange" href="#">
					<div class="content">
						<div class="icon"><i class="sprite-guide-8"></i></div>
						{!! $data_field['online-consultation'] !!}
					</div>
				</a><!-- /.tile -->
			</div>
		</div>
	</div><!-- /.list-guides -->
</div>
@endsection
@section('scripts')
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
