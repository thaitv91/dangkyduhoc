@extends("layouts/app")

@section("content")


<div class="container">
	<div class="course-detail-header rowsec">
		<div class="row">
			<div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 details col-xs-bottom-margin">
				<div class="float-left hidden-xs">
               <img src="https://therightustorage.blob.core.windows.net/assets/University/B070_winchester_logo.jpg" class="page-course-uni-logo" alt="University of Winchester" title="University of Winchester">
            </div>
            <div class="text">
               <h1>{{ $course->name }}</h1>
               <h4><a href="/university/{{ $university->slug }}">{{ $university->name }}</a> </h4>&nbsp;
               <div class="martop5px">
                   <h4 class="text-normal country-name">{{ $country->name }}</h4>
               </div>
           </div>
			</div>

			<div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 right-lg right-md form-group">
				<div class="compare-btn">
              <input id="compare_1" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
              <label for="compare_1" class="compare-label  btn btn-blue">Compare <i class="fa fa-check"></i></label>
            </div>

            <div class="btn btn-blue apply-btn" onclick="javascript:apply('1');">
                 APPLY
            </div>
			</div>
		</div>
	</div><!-- /.course-detail-header -->

	<div class="row course_details">
		@if($ranking)
		<div class="col-lg-4 col-md-4 col-sm-6 col">
			<div class="box-ranking left">
				<h4 class="title-box">COURSE RANKINGS</h4>

				@foreach($ranking as $rank)
					<div class="info_box_item clearfix">
						<span class="left rank-name">
							{{ $rank->ranking_title }}<br>
							<span id="country" class="display-inline smaller">{{ $rank->country_slug }}</span>
							<span class="display-inline smaller tip" title="" data-original-title="Complete University Guide 2018"> / {{ $rank->ranking_subject }}</span>
						</span>
						<span id="course-rank" class="right course-rank">{{ $rank->ranking_point }}<sup>th</sup></span>
					</div>
				@endforeach

			</div><!-- /.box-ranking -->
		</div>
		@endif

		<div class="col-lg-4 col-md-4 col-sm-6 col">
			<div class="box-ranking left">
				<h4 class="title-box">Costs</h4>
				<div class="info_box_item">
               <span>Tuition fees</span>
               <span class="right">S${{ $cost->year_tuition_fees }}K</span>
            </div>
            <div class="info_box_item living marbot0">
               <span class="living-header">Food &amp; accommodation</span>
               <span class="right">S${{ $fa = ($cost->day_food_fees + $cost->day_drink_fees + $cost->day_accommodation_fees + $cost->day_coffe_fees) * 600 /1000 }}K</span>
            </div>
            <div class="info_box_item basic_city_cost">
               <div class="row">
                   <div class="costs col-lg-3 col-md-3 col-sm-3 col-xs-3">
                       <span><i class="fa fa-beer" aria-hidden="true"></i></span>
                       S${{ $cost->day_drink_fees }}
                   </div>
                   <div class="costs col-lg-3 col-md-3 col-sm-3 col-xs-3">
                       <span><i class="fa fa-cutlery" aria-hidden="true"></i></span>
                       S${{ $cost->day_food_fees }}
                   </div>
                   <div class="costs col-lg-3 col-md-3 col-sm-3 col-xs-3">
                       <span><i class="fa fa-film" aria-hidden="true"></i></span>
                       S${{ $cost->day_accommodation_fees }}
                   </div>
                   <div class="costs col-lg-3 col-md-3 col-sm-3 col-xs-3">
                       <span><i class="fa fa-coffee" aria-hidden="true"></i></span>
                       S${{ $cost->day_coffe_fees }}
                   </div>
               </div>
            </div>
            <div class="info_box_item total_cost clearfix">
               <span>COST PER YEAR</span><span class="totalcost right">S${{ $fa + $cost->year_tuition_fees }}K</span>
            </div>
			</div><!-- /.box-ranking -->
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col">
			<div class="box-ranking left">
				<h4 class="title-box">Entry requirements</h4>
				<div class="info_box_item undergraduate">
                <span class="type rank-name smaller grade-type">A Level</span>
                <span class="right">{{ $requirement->level }}</span>
            </div>
            <div class="info_box_item undergraduate">
                <span class="type rank-name smaller grade-type">Diploma</span>
                <span class="right">{{ $requirement->diploma }}</span>
            </div>
            <div class="info_box_item undergraduate">
                <span class="type rank-name smaller grade-type">International Baccalaureate</span>
                <span class="right">{{ $requirement->international_baccalaureate }}</span>
            </div>
			</div><!-- /.box-ranking -->
		</div>
	</div><!-- /.course_details -->

	<div class="row course_details">
		<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 col">
			<div class="box-ranking left">
				<h4 class="title-box">Scholarships</h4>
				<div class="info_box_item scholarship-item clearfix">
                <div class="header scholarship tip" data-html="true" title="" data-original-title="Available for all subjects &lt;/br&gt;Available for levels: &lt;/br&gt; Undergraduate (Bachelor)&lt;/br&gt;Postgraduate (Honours)&lt;/br&gt;Postgraduate (Masters by coursework)&lt;/br&gt;Postgraduate (Masters by research)&lt;/br&gt;Postgraduate (MBA)&lt;/br&gt;PhD &lt;/br&gt;">British Council IELTS Prize 2017</div>
                <div class="right scholarship">Up to $12000 for tuition <br>6 available</div>
            </div>

            <div class="info_box_item scholarship-item clearfix">
                <div class="header scholarship tip" data-html="true" title="" data-original-title="Available for all subjects &lt;/br&gt;Available for levels: &lt;/br&gt; Undergraduate (Bachelor)&lt;/br&gt;Postgraduate (Honours)&lt;/br&gt;Postgraduate (Masters by coursework)&lt;/br&gt;Postgraduate (Masters by research)&lt;/br&gt;Postgraduate (MBA)&lt;/br&gt;PhD &lt;/br&gt;">UNESCO Fellowship Programmes</div>
                <div class="right scholarship">Up to 100% for tuition and living expenses <br>Limited quantity</div>
            </div>
			</div><!-- /.box-ranking -->
		</div>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col">
			<div class="box-ranking left">
				<h4 class="title-box">INFORMATION</h4>
				<div class="info_box_item clearfix">
               <div class="header">Course<br>Code</div>
               <div class="right">{{ $information->course_code }}</div>
            </div>
            <div class="info_box_item clearfix">
               <div class="header">Upcoming<br>Intakes</div>
               <div class="right">{{ \Carbon\Carbon::parse($information->upcoming_intakes)->format('F Y') }}<br></div>
            </div>
            <div class="info_box_item clearfix">
               <div class="header">Course<br>WEBSITE (EXTERNAL)</div>
               <div class="right">
                   <a class="external_link" href="{{ $information->course_website }}" target="_blank">
                       <i class="fa fa-link"></i>
                   </a>
               </div>
            </div>
            <div class="info_box_item clearfix cursor-pointer">
               <div class="header">
                   <span class="type">Pathway<br>programmes</span>
               </div>
               <span class="right">
                   <i class="fa fa-arrow-up tip" title="Can't meet the minimum grades? Click to see available pathways to progress into University of Winchester."></i>
               </span>
            </div>
            <div class="info_box_item clearfix">
                 <div class="header">University<br>INFORMATION</div>
                 <div class="right">
                     <a href="/university/{{ $university->slug }}">
                         <i class="fa fa-link"></i>
                     </a>
                 </div>
             </div>
             <div class="info_box_item clearfix">
                 <div class="header">Local<br>Hotline</div>
                 <div class="right">
                     {{ $university->universityMeta()->first()->phone }}
                 </div>
             </div>
			</div><!-- /.box-ranking -->
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 col">
			<div class="box-ranking left">
				<h4 class="title-box">Duration</h4>
				<div class="info_box_item duration">
               <span class="number">{{ $information->duration }}</span>
               <span id="years">
                   years
               </span>
           </div>
           <div class="info_box_item graduate-in">
               <span><i class="fa fa-graduation-cap"></i></span>
               <span class="display-table-row">
                   Graduate
                   <br>
				   {{ \Carbon\Carbon::parse($information->upcoming_intakes)->format('Y') + $information->duration }}
               </span>
           </div>
			</div><!-- /.box-ranking -->
		</div>
	</div><!-- /.course_details -->

	<div class="about-course rowsec">
		<h2>About the course</h2>
		<div class="description">
			{!! $information->about !!}
		</div>

		@if($information->will_learn)
		<h2>Will Learn</h2>
		<div class="description">
			{!! $information->will_learn !!}
		</div>
		@endif

		<div id="askus">
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
              <h2>GOT QUESTIONS?</h2>
              <p>
                  An official representative of University of Winchester in Singapore is available online to assist you.
              </p>
          </div>

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right col-valign-middle martop15-sm">
              <button class="btn btn-blue open-chat" style="display: inline-block;">
                  Ask us a question
              </button>
          </div>
      </div><!-- /#askus -->
	</div><!-- /.about-course -->

	<div class="filter-result">
		<h4 class="title-box"><span>Similar courses</span></h4>
		<div class="list-courses">
			@foreach($similar_course as $similar)
				<div class="row item">
					<div class="uni-logo-col col-lg-1 col-md-1 col-sm-2 col-xs-3 col-no-pad-right">
						<div class="uni-logo">
							@if($similar->logo)
								<img src="{{ $similar->logo }}" alt=""/>
							@else
								<img src="/img/B085_bathspa_logo.jpg" alt=""/>
							@endif
						</div>
					</div>
					<div class="col-lg-11 col-md-11 col-sm-10 col-xs-9">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
								<div class="uni-name">
									<?php
										$explode = explode(', ', $similar->course_name);
									?>
									<a class="course_name" href="/course/{{ $similar->course_slug }}">{{  $explode[0] }}</a>
									<div class="classification">{{  $explode[0] }}</div>
									<div class="uni-name-sec">
										<a class="university_name" href="/university/{{ $similar->slug }}">{{ $similar->name }}, {{ $similar->country_slug }}</a>
									</div>
									<div class="visible-sm visible-xs">
										<span class="inline-block-sm margin-right10-sm">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}K / year</span>
										<span class="inline-block-sm margin-right10-sm">{{ $similar->duration }} years</span>
										<span class="inline-block-sm">BBB</span>
									</div>
								</div><!-- /.uni-name -->
							</div>

							<div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12">
								<div class="pull-right">
									<div class="cell hidden-sm hidden-xs">
										<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}K</span>
										<span class="sub-tip display-block">per year</span>
									</div>

									<div class="cell hidden-sm hidden-xs">
								 <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">{{ $similar->duration }}</span>
								 <span class="sub-tip display-block">years</span>
							  </div>

							  <div class="cell hidden-sm hidden-xs">
								 <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">
									{{ $similar->level }}
								 </span>
								 <span class="sub-tip display-block">grade</span>
							  </div>

							  <div class="cell hidden-sm hidden-xs course-progression">
										<div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
											<i class="fa fa-arrow-up"></i>
											<span class="sub-tip display-block">5 pathways</span>
										</div>
								</div>

								<div class="cell_1">
								 <div class="compare" title="Add to compare">
									 <div class="compare-btn">
										 <input id="compare_1" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
										 <label for="compare_1" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
									 </div>
								 </div>
							 </div>

								<div class="cell_1">
									   <div id="apply_1425" class="btn btn-green apply-btn" onclick="javascript:apply('1');">
											APPLY
									   </div>
									   <div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('1');" title="Remove from university application?">
											ADDED  <i class="fa fa-check"></i>
									   </div>
								</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div id="" class="arrow-box">
									<div class="tree">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
									 <div class="info">
										 <h1>Pathway programmes available</h1>
									 </div>
								 </div>
								 <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
									 <div class="info">
										 <a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a>
										 <div id="faq-list" class="martop10">
											 <ul>
												 <li>
													 <a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a>
												 </li>
												 <li>
													 <a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a>
												 </li>
												 <li>
													 <a class="openchat gtt-chat">Ask an education consultant</a>
												 </li>
											 </ul>
										 </div>
									 </div>
								 </div>

								 <div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
									svg
								 </div>
									</div>
								</div><!-- /.arrow_box -->
							</div>
						</div>
					</div>
				</div><!-- /.item -->
			@endforeach
		</div><!-- /.list-courses -->
	</div><!-- /.filter-result -->

	<div class="filter-result">
		<h4 class="title-box"><span>Students also applied to</span></h4>
		<div class="list-courses">
			@foreach($also_apply as $similar)
				<div class="row item">
					<div class="uni-logo-col col-lg-1 col-md-1 col-sm-2 col-xs-3 col-no-pad-right">
						<div class="uni-logo">
							@if($similar->logo)
								<img src="{{ $similar->logo }}" alt=""/>
							@else
								<img src="/img/B085_bathspa_logo.jpg" alt=""/>
							@endif
						</div>
					</div>
					<div class="col-lg-11 col-md-11 col-sm-10 col-xs-9">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
								<div class="uni-name">
									<?php
									$explode = explode(', ', $similar->course_name);
									?>
									<a class="course_name" href="/course/{{ $similar->course_slug }}">{{  $explode[0] }}</a>
									<div class="classification">{{  $explode[0] }}</div>
									<div class="uni-name-sec">
										<a class="university_name" href="/university/{{ $similar->slug }}">{{ $similar->name }}, {{ $similar->country_slug }}</a>
									</div>
									<div class="visible-sm visible-xs">
										<span class="inline-block-sm margin-right10-sm">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}K / year</span>
										<span class="inline-block-sm margin-right10-sm">{{ $similar->duration }} years</span>
										<span class="inline-block-sm">BBB</span>
									</div>
								</div><!-- /.uni-name -->
							</div>

							<div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12">
								<div class="pull-right">
									<div class="cell hidden-sm hidden-xs">
										<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}K</span>
										<span class="sub-tip display-block">per year</span>
									</div>

									<div class="cell hidden-sm hidden-xs">
										<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">{{ $similar->duration }}</span>
										<span class="sub-tip display-block">years</span>
									</div>

									<div class="cell hidden-sm hidden-xs">
								 <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">
									{{ $similar->level }}
								 </span>
										<span class="sub-tip display-block">grade</span>
									</div>

									<div class="cell hidden-sm hidden-xs course-progression">
										<div class="see-pathways tip" title="" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Can't meet the minimum grades? Click to see available pathways to progress into Bangor University.">
											<i class="fa fa-arrow-up"></i>
											<span class="sub-tip display-block">5 pathways</span>
										</div>
									</div>

									<div class="cell_1">
										<div class="compare" title="Add to compare">
											<div class="compare-btn">
												<input id="compare_1" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
												<label for="compare_1" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
											</div>
										</div>
									</div>

									<div class="cell_1">
										<div id="apply_1425" class="btn btn-green apply-btn" onclick="javascript:apply('1');">
											APPLY
										</div>
										<div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('1');" title="Remove from university application?">
											ADDED  <i class="fa fa-check"></i>
										</div>
									</div>
								</div>
							</div>

							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
								<div id="" class="arrow-box">
									<div class="tree">
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
											<div class="info">
												<h1>Pathway programmes available</h1>
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-right">
											<div class="info">
												<a class="whichroute"><i class="fa fa-question-circle" aria-hidden="true"></i> Which pathway should I choose?</a>
												<div id="faq-list" class="martop10">
													<ul>
														<li>
															<a href="/guide/pathways-to-university-what-is-foundation-program" target="_blank">What is Foundation Program?</a>
														</li>
														<li>
															<a href="/guide/pathways-to-university-what-is-diploma" target="_blank">What is Diploma?</a>
														</li>
														<li>
															<a class="openchat gtt-chat">Ask an education consultant</a>
														</li>
													</ul>
												</div>
											</div>
										</div>

										<div id="diagram" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
											svg
										</div>
									</div>
								</div><!-- /.arrow_box -->
							</div>
						</div>
					</div>
				</div><!-- /.item -->
			@endforeach
		</div><!-- /.list-courses -->
	</div><!-- /.filter-result -->
</div>



@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

@endsection
