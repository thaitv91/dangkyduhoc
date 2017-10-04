@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>a</h1></div>
</div>

<div class="container">
	<div class="box-filter">
		<h4 class="title-box">Filters</h4>
		<div class="tags">
			<div class="item">
				<span class="tag"><input type="checkbox" id="checkbox-1"><label for="checkbox-1">Undergraduate</label></span>                   
				<span class="tag"><input type="checkbox" id="checkbox-2"><label for="checkbox-2">Postgraduate</label></span>                     
			</div>
			<div class="item">
				<span class="tag"><input type="checkbox" id="checkbox-1"><label for="checkbox-1">Australia</label></span>                   
				<span class="tag"><input type="checkbox" id="checkbox-2"><label for="checkbox-2">Canada</label></span>                     
				<span class="tag"><input type="checkbox" id="checkbox-3"><label for="checkbox-3">Ireland</label></span>                 
				<span class="tag"><input type="checkbox" id="checkbox-4"><label for="checkbox-4">Switzerland</label></span>               
				<span class="tag"><input type="checkbox" id="checkbox-5"><label for="checkbox-5">United kingdom</label></span>                 
				<span class="tag"><input type="checkbox" id="checkbox-6"><label for="checkbox-6">United Dtates</label></span>
			</div>
			<div class="item">
				<span class="tag"><input type="checkbox" id="checkbox-7"><label for="checkbox-7">2 year or less</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-8"><label for="checkbox-8">3 years</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-9"><label for="checkbox-9">4 years</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-10"><label for="checkbox-10">5 years or more</label></span>
			</div>
			<div class="item">
				<span class="tag"><input type="checkbox" id="checkbox-11"><label for="checkbox-11">A level</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-12"><label for="checkbox-12">Diploma</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-13"><label for="checkbox-13">International Baccalaureate</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-14"><label for="checkbox-14">O Level</label></span>
			</div>
			<div class="item">
				<span class="tag"><input type="checkbox" id="checkbox-15"><label for="checkbox-15">Relevant courses</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-16"><label for="checkbox-16">Top ranking courses</label></span>
				<span class="tag"><input type="checkbox" id="checkbox-17"><label for="checkbox-17">Popular courses</label></span>
			</div>
		</div>
	</div><!-- /.box-filter -->

	<div class="box-filter progress-filter">
		<h4 class="title-box">Filters</h4>
		<div id="fillter-subject"></div>
	</div><!-- /.box-filter -->

	<div class="filter-result search">
		<div class="clearfix header-sort">
			<div class="pull-left">
				<h4 class="title-box">
					<span>Accounting &amp; Finance</span>
				</h4>
			</div>

			<div class="pull-right">
				<div id="course-sort-select" class="dropdown display-inline otherfilter">
                <button class="btn btn-default dropdown-toggle gtt-sortby" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="Sort courses by">
                    <span>Sort courses by</span>&nbsp;
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                    <li class="filter-cost"><a data-sortby="Fees" data-hightolow="False" onclick="javascript: toggleFilter('filter-cost');"><span>Tuition fee - Low to high</span></a></li>
                    <li class="filter-years"><a data-sortby="Duration" data-hightolow="False" onclick="javascript: toggleFilter('filter-years');"><span>Duration - Short to long</span></a></li>
                     <li class="filter-grades"><a data-sortby="Grades" data-hightolow="False" onclick="javascript: toggleFilter('filter-grades');"><span>Entry grade - Low to high</span></a></li>
                </ul>
            </div>
			</div>
		</div>
		<div class="list-courses">
			<div class="row item">
				<div class="uni-logo-col col-lg-1 col-md-1 col-sm-2 col-xs-3 col-no-pad-right">
					<div class="uni-logo">
						<img src="/img/B085_bathspa_logo.jpg" alt=""/>
					</div>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-10 col-xs-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
							<div class="uni-name">
								<a class="course_name" href="#">Accounting and Finance</a>
								<div class="classification">BSc (Hons)</div>
								<div class="uni-name-sec">
	                        <a class="university_name" href="#">Bath Spa University, UK</a>
	                    </div>
								<div class="visible-sm visible-xs">
			                     <span class="inline-block-sm margin-right10-sm">S$22.7K / year</span>
			                     <span class="inline-block-sm margin-right10-sm">3 years</span>
			                     <span class="inline-block-sm">BBB</span>
			               </div>
			               <div class="see-similar">
                            See 46 similar <i class="fa fa-chevron-down"></i>
                        </div>
							</div><!-- /.uni-name -->
						</div>

						<div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12">
							<div class="pull-right">
								<div class="cell hidden-sm hidden-xs">
									<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$22.7K</span>
									<span class="sub-tip display-block">per year</span>
								</div>

								<div class="cell hidden-sm hidden-xs">
		                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">3</span>
		                     <span class="sub-tip display-block">years</span>
		                  </div>

		                  <div class="cell hidden-sm hidden-xs">
		                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
		                     	BBB
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

			<div class="row item">
				<div class="uni-logo-col col-lg-1 col-md-1 col-sm-2 col-xs-3 col-no-pad-right">
					<div class="uni-logo">
						<img src="/img/B085_bathspa_logo.jpg" alt=""/>
					</div>
				</div>
				<div class="col-lg-11 col-md-11 col-sm-10 col-xs-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
							<div class="uni-name">
								<a class="course_name" href="#">Accounting and Finance</a>
								<div class="classification">BSc (Hons)</div>
								<div class="uni-name-sec">
	                        <a class="university_name" href="#">Bath Spa University, UK</a>
	                    </div>
								<div class="visible-sm visible-xs">
			                     <span class="inline-block-sm margin-right10-sm">S$22.7K / year</span>
			                     <span class="inline-block-sm margin-right10-sm">3 years</span>
			                     <span class="inline-block-sm">BBB</span>
			               </div>
			               <div class="see-similar">
                            See 46 similar <i class="fa fa-chevron-down"></i>
                        </div>
							</div><!-- /.uni-name -->
						</div>

						<div class="course-stats col-lg-8 col-md-8 col-sm-5 col-xs-12">
							<div class="pull-right">
								<div class="cell hidden-sm hidden-xs">
									<span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Tuition fees excluding living expenses">S$22.7K</span>
									<span class="sub-tip display-block">per year</span>
								</div>

								<div class="cell hidden-sm hidden-xs">
		                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">3</span>
		                     <span class="sub-tip display-block">years</span>
		                  </div>

		                  <div class="cell hidden-sm hidden-xs">
		                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
		                     	BBB
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
		                             <input id="compare_2" data-courseid="1" type="checkbox" class="compare-btn compareCheckbox">
		                             <label for="compare_2" class="compare-label  btn btn-green">Compare <i class="fa fa-check"></i></label>
		                         </div>
		                     </div>
		                 </div>

		                    <div class="cell_1">
		                           <div id="apply_2" class="btn btn-green apply-btn" onclick="javascript:apply('2');">
		                                APPLY
		                           </div>
		                           <div id="selected_1425" class="btn btn-green apply-add-btn hide" onclick="javascript:unselect('2');" title="Remove from university application?">
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
		</div><!-- /.list-courses -->
	</div><!-- /.filter-result -->
</div>




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

@endsection
