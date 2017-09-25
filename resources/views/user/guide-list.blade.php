@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>UNIVERSITY GUIDE</h1></div>
</div>

<div class="container guide-list-page">
	<div class="search-general">
		<div class="form">
			<form action="" method="GET">
			<input type="text" class="form-control ui-autocomplete-input" name="search_en" id="search_en" placeholder="Search Guide" autocomplete="off"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
			<button><i class="sprite-search-2"></i></button>
			</form>
		</div>
	</div><!-- /.search-general -->

	<div class="choose-list-guide">
		<select class="form-control">
			<option>GIỚI THIỆU THERIGHTU</option>
			<option>CHỌN TRƯỜNG ĐẠI HỌC</option>
			<option>ÁP DỤNG CHO TRƯỜNG ĐẠI HỌC</option>
			<option>CHẤP NHẬN YÊU CẦU CỦA BẠN</option>
			<option>HỌC PHÍ &amp; HỌC BỔNG</option>
			<option>CHUYẾN BAY &amp; CHỖ Ở</option>
			<option>Visa của học sinh</option>
			<option>Tư vẫn trực tuyến</option>
		</select>
	</div><!-- /.choose-list-guide -->

	<div class="box-category-guide">
		<h3>General</h3>
		<ul>
			<li><a href="#">What is theRightU?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">How do I Search and Compare courses?</a></li>
			<li><a href="#">What is MULTI-APPLY?</a></li>
		</ul>
	</div><!-- /.box-category-guide -->

	<div class="box-category-guide">
		<h3>Account</h3>
		<ul>
			<li><a href="#">What is theRightU?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">How do I Search and Compare courses?</a></li>
			<li><a href="#">What is MULTI-APPLY?</a></li>
		</ul>
	</div><!-- /.box-category-guide -->

	<div class="box-category-guide">
		<h3>Support</h3>
		<ul>
			<li><a href="#">What is theRightU?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">How do I Search and Compare courses?</a></li>
			<li><a href="#">What is MULTI-APPLY?</a></li>
		</ul>
	</div><!-- /.box-category-guide -->

	<div class="box-category-guide">
		<h3>Stories from our students</h3>
		<ul>
			<li><a href="#">What is theRightU?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">What services do theRightU provide?</a></li>
			<li><a href="#">How do I Search and Compare courses?</a></li>
			<li><a href="#">What is MULTI-APPLY?</a></li>
		</ul>
	</div><!-- /.box-category-guide -->
</div>




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

@endsection
