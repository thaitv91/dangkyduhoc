@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>{{ $subject['name']}}</h1></div>
</div>

<div class="container">
	<div class="subject-detail">
		<img src="/img/subject-img.jpg" alt="">
		<div class="breadcrumb-page">
			<ul class="list">
				@foreach($subject_career as $key => $db_subject_career)
                    <?php $subject_slug = App\Models\Career::where('id', '=', $db_subject_career->career_id)->first()['slug'] ?>
					<li><a href="{{ route('user.career.detail', $subject_slug) }}">
						@if($locale == 'en')
							{{ $db_subject_career->career['name_en']}}
						@else
							{{  $db_subject_career->career['name'] }}
						@endif
						</a>
					</li>
				@endforeach            
			</ul>
		</div><!-- /.breadcrumb-page -->

		<div class="description">
			{!! $subject['description'] !!}
		</div><!-- /.description -->
	</div><!-- /.subject-detail -->

	<div class="box-filter">
		<h4 class="title-box">Filters</h4>
		<div class="tags">
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

	<div class="filter-result subjects">
		<h4 class="title-box"><span>Accounting &amp; Finance</span></h4>
		<div class="list-courses">
			<?php foreach ($courses as $key => $course): ?>
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
								<a class="course_name" href="">{{ $course->name }}</a>
								<div class="classification">BSc (Hons)</div>
								<div class="uni-name-sec">
	                        <a class="university_name" href="#">{{ $course->university->name }}</a>
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
		                             <input id="compare_{{ $course->id }}" data-courseid="{{ $course->id }}" type="checkbox" class="compare-btn compareCheckbox" onclick="compare({{ $course->id }})">
		                             <label id="label_compare_{{ $course->id }}" for="compare_{{ $course->id }}" class="compare-label btn btn-green">Compare <i class="fa fa-check"></i></label>
		                         </div>
		                     </div>
		                 </div>

		                    <div class="cell_1">
		                           <div id="apply_{{ $course->id }}" class="btn btn-green apply-btn" onclick="apply({{ $course->id }}, 'add')">
		                                APPLY
		                           </div>
		                           <div id="selected_{{ $course->id }}" class="btn btn-green apply-add-btn hide" onclick="apply({{ $course->id }}, 'remove')" title="Remove from university application?">
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
			<?php endforeach ?>
		</div><!-- /.list-courses -->

		<div class="pagging text-center">
			{{ $courses->links() }}
		</div><!-- /.pagging -->
	</div><!-- /.filter-result -->
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
<script type="text/javascript">
	//Selected compare course
	<?php echo "var course_ids = ".$course_id.";" ?>
	var compare_number = course_ids.length; // Number of comparison course

	$.each(course_ids, function(index, value) {
		$('#compare_'+value).prop('checked', true);
	});
	function compare(id) {
		$.ajax({
			url : '{{ route("user.subject.setCookie") }}',
			data : {id : id},
		}).done(function (data) {
			if (data == 1) {
				toastr.success('Added to comparison');
				compare_number++;
			} else {
				toastr.warning('Removed to comparison');
				$('#compare_'+value+' i').prop('checked', false);
				compare_number--;
			}
			return false;
		});
	}

	// APPLY
	<?php echo "var apply_course_id = ".$apply_course_id.";" ?>
	var apply_course_number = apply_course_id.length; // Number of apply course

	$.each(apply_course_id, function(index, value) {
		$('#apply_'+value).addClass('hide');
		$('#selected_'+value).removeClass('hide');
	});

	function apply(id, type) {
		if (type == 'add') {
			$('#apply_'+id).addClass('hide');
			$('#selected_'+id).removeClass('hide');
		} else {
			$('#apply_'+id).removeClass('hide');
			$('#selected_'+id).addClass('hide');
		}

		$.ajax({
			url : "{{ route('user.subject.setCookieApplyCourse') }}",
			data : {id : id},
		}).done(function(data) {
			if (data == 1) {
				toastr.success('Course Added.');
				apply_course_number++;
			} else {
				toastr.warning('Course Unselected');
				apply_course_number--;
			}
			return false;
		})
	}
</script>
@endsection