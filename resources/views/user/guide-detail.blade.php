@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>UNIVERSITY GUIDE</h1></div>
</div>

<div class="container" id="guide-detail">
	<div class="row">
		<div class="col-md-4 hidden-sm hidden-xs" id="content-fixed">
			<div class="left-guide-detail">
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

				<div class="sidebar-nav-fixed">
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
				</div><!-- /.sidebar-nav-fixed -->
			</div><!-- /.left-guide-detail -->
		</div><!-- ./col-md-4 -->

		<div class="col-md-8">
			<div class="guide-detail-header">
				<span class="category">
                <a href="/guide">Guide</a> <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="/guide/category/using-therightu">About theRightU</a>
            </span>

            <div class="fblike hidden-sm hidden-xs">
            	<img src="/img/facebook.png" alt="">
            </div>
			</div><!-- /.guide-detail-header -->

			<div class="content-guide-detail">
				<h1>
					<i class="fa fa-check-circle" aria-hidden="true"></i>
					<span>What is theRightU?</span>
				</h1>

				<div class="faq-answer">
					<p>TheRightU is a university admissions consultancy headquartered in Singapore. We partner top universities and colleges from Australia, UK, US, Ireland, Switzerland, New Zealand and Europe, and provide comprehensive university admissions diagnostics and personalised education counselling to students through the innovative use of technology.</p>
					<h3>The Right Approach</h3>
					<p>Education is a serious investment of time and money. And it isn’t one-size-fits-all.&nbsp;</p>
					<p>Our experienced team is here to ensure your application process is hassle-free and you have the best chances of success for admission, maximum credit exemptions, and financial aid (if applicable).&nbsp;</p>
					<h3>The Right Process</h3>
					<p>We start by ensuring our team is equipped and stays updated on our knowledge of the education system, visas and life in Australia, UK, Ireland, Canada, USA and Switzerland.&nbsp;</p>
					<ol>
						<li>We start by understanding your needs and goals;</li>
						<li>We guide you to explore options efficiently: we use our proprietary tools to conduct research and suggest the best programs to help you reach your goals;</li>
						<li>We assist you to collect all the documents you will need for your application;</li>
						<li>We guide you through the application process (and visa process once you have been accepted by an institution).</li>
					</ol>
					<p>Our goal is to ensure every student has the best chances of success to access higher education, flourish, and achieve his/her dreams.</p>
					<h3>The Right Tools</h3>
					<ul>
						<li>Whenever, 24/7, get immediate access to extensive university and course information.</li>
						<li>Use our handy tools to search and compare courses, and get unbiased advice and a selection of suitable courses that are customised according to your profile and search requirements.</li>
						<li>Apply online and use our automated tracking tools to keep yourself and your family updated on the application status.</li>
						<li>Get ready for university by setting up automatic alerts and updates to stay abreast on university activities.</li>
					</ul>
					<p>Our platform also enables our counsellors to provide prompt and accurate information and ready online consultation for students.</p>
				</div><!-- /.faq-answer -->

				<div class="author" id="author">
					<div class="row">
						<div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 col-no-pad-right-lg text-center-xs">
							<img src="https://therightustorage.blob.core.windows.net/assets/img/web/team/KL.jpg" alt="Dr Chan Khai Leok">
						</div>

						<div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
							<div class="content">
								<div class="name">Dr Chan Khai Leok, <br class="visible-xs">Chief Consultant, <br class="visible-xs">theRightU</div>
								<div>Are you a student in Southeast asia thinking of pursuing an undergraduate or postgraduate course abroad? Free consultation is available!</div>
								<div class="martop10">
                          <button class="btn btn btn-blue openchat">
                              Ask me a question
                          </button>
                      </div>
							</div>
						</div>
					</div>
				</div><!-- /.author -->
			</div><!-- /.content-guide-detail -->

			<div class="guide-detail-header bottom visible-xs visible-sm">
				<span class="category">
                <a href="/guide">Guide</a> <i class="fa fa-caret-right" aria-hidden="true"></i> <a href="/guide/category/using-therightu">About theRightU</a>
            </span>

            <div class="fblike hidden-sm hidden-xs">
            	<img src="/img/facebook.png" alt="">
            </div>
			</div><!-- /.guide-detail-header -->
		</div><!-- /.col-md-8 -->
	</div>
	
</div>




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

@endsection
