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
			<div class="item filter-country">
				<span class="tag"><input _token="{{ csrf_token() }}" type="checkbox" value="AU" id="checkbox-1" checked _token="{{ csrf_token() }}"><label for="checkbox-1">Australia</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" type="checkbox" value="CA" id="checkbox-2" checked><label for="checkbox-2">Canada</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" type="checkbox" value="IL" id="checkbox-3" checked><label for="checkbox-3">Ireland</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" type="checkbox" value="CH" id="checkbox-4" checked><label for="checkbox-4">Switzerland</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" type="checkbox" value="UK" id="checkbox-5" checked><label for="checkbox-5">United kingdom</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" type="checkbox" value="US" id="checkbox-6" checked><label for="checkbox-6">United States</label></span>
			</div>
			<div class="item filter-year">
				<span class="tag"><input _token="{{ csrf_token() }}" checked value="2" type="checkbox" id="checkbox-7"><label for="checkbox-7">2 year or less</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" checked value="3" type="checkbox" id="checkbox-8"><label for="checkbox-8">3 years</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" checked value="4" type="checkbox" id="checkbox-9"><label for="checkbox-9">4 years</label></span>
				<span class="tag"><input _token="{{ csrf_token() }}" checked value="5" type="checkbox" id="checkbox-10"><label for="checkbox-10">5 years or more</label></span>
			</div>
			{{--<div class="item">--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-11"><label for="checkbox-11">A level</label></span>--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-12"><label for="checkbox-12">Diploma</label></span>--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-13"><label for="checkbox-13">International Baccalaureate</label></span>--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-14"><label for="checkbox-14">O Level</label></span>--}}
			{{--</div>--}}
			{{--<div class="item">--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-15"><label for="checkbox-15">Relevant courses</label></span>--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-16"><label for="checkbox-16">Top ranking courses</label></span>--}}
				{{--<span class="tag"><input type="checkbox" id="checkbox-17"><label for="checkbox-17">Popular courses</label></span>--}}
			{{--</div>--}}
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
            <?php
            $university = \App\Models\University::where('id', '=', $course->university_id)->first();
            ?>
            <div id="{{ $university->slug }}" class="uni">
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
                                <?php
                                    $explode = explode(', ', $course->name);
                                    $similar = $course->cost;
                                    $course_info = \App\Models\CourseInformation::where('course_id', '=', $course->id)->first();
                                    $course_requi = \App\Models\CourseRequirement::where('course_id', '=', $course->id)->first();
                                ?>
								<a class="course_name" href="/course/{{ $course->slug }}">{{ $explode[0] }}</a>
								<div class="classification">{{ $explode[1] }}</div>
								<div class="uni-name-sec">
									<a class="university_name" href="/university/{{ $course->university->slug }}">{{ $course->university->name }}</a>
								</div>
								<div class="visible-sm visible-xs">
			                     <span class="inline-block-sm margin-right10-sm">S${{ ($similar->day_drink_fees + $similar->day_food_fees + $similar->day_accommodation_fees + $similar->day_coffe_fees) * 600/1000 + $similar->year_tuition_fees }}K / year</span>
			                     <span class="inline-block-sm margin-right10-sm">{!! $course_info->duration !!} years</span>
			                     <span class="inline-block-sm">{{ $course_requi->level }}</span>
			               </div>
			               <div class="see-similar" data="{{ $course->slug }}" _token="{{ csrf_token() }}">
							   <?php
							   		$similar_count = App\Models\Course::where('university_id', '=', $course->university_id)
										->where('subject_slug', '=', $subject->slug)
										->where('id', '<>', $course->id)
										->count();
							   ?>
                                See {{ $similar_count }} similar <i class="fa fa-chevron-down"></i>
                            </div>
                            <div class="hide-see-similar" style="display:none; color: #2db04a; cursor: pointer;">
                                Hide {{ $similar_count }} similar <i class="fa fa-chevron-down"></i>
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
		                     <span class="tip display-block" data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Chat with us for a free advance standing assessment.">{!! $course_info->duration !!}</span>
		                     <span class="sub-tip display-block">years</span>
		                  </div>

		                  <div class="cell hidden-sm hidden-xs">
		                     <span rel="a_levels" class="tip display-block" title=""  data-toggle="tooltip" title="" data-html="true" data-placement="top" data-original-title="Click to toggle between entry requirements for different qualifications">	
		                     	{{ $course_requi->level }}
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
                </div>
			</div><!-- /.item -->
			<?php endforeach ?>
		</div><!-- /.list-courses -->

		<div class="pagging text-center">

		</div><!-- /.pagging -->
	</div><!-- /.filter-result -->
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	//Selected compare course
	<?php echo "var course_ids = ".$course_id.";" ?>
	var compare_number = course_ids.length;

	$.each(course_ids, function(index, value) {
		$('#compare_'+value).prop('checked', true);
	});
	function compare(id) {
		$.ajax({
			url : '{{ route("user.subject.setCookie") }}',
			data : {id : id},
		}).done(function (data) {
            getCourseCount();
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

	$('.see-similar').click(function(){
	    console.log('similar clicked');
		var slug = $(this).attr('data')
		var _token = $(this).attr('_token')
        $(this).css('display', 'none');
        $(this).parent().find('.hide-see-similar').css('display', 'block');
        var element  = $(this).parents(".uni");
		$.ajax({
            dataType: 'html',
            type: 'POST',
            url:'/course/similar/',
            data: {slug: slug, _token: _token},

            success: function (data) {
                element.append(data);
            }
        });
	});

    $('.hide-see-similar').click(function () {
        $(this).css('display', 'none');
        $(this).parent().find('.see-similar').css('display', 'block');
        $(this).parents(".uni").find('.similar-item').css('display', 'none');
    });

    country_arr = new Array();
    year_arr = new Array();
    $('.filter-country input').each(function () {
        if(this.checked) {
            country_arr.push($(this).val())
        }
    });

    $('.filter-year input').each(function () {
        if(this.checked) {
            year_arr.push($(this).val())
        }
    });
    console.log(year_arr);

	$('.filter-country input').change(function () {
        if(this.checked) {
            country_arr.push($(this).val())
        } else {
            country_arr.splice($.inArray($(this).val(), country_arr),1);
        }
        var slug = '{{ $subject->slug }}';
        var _token = $(this).attr('_token')
        $.ajax({
            dataType: 'html',
            type: 'POST',
            url:'/course/filter/',
            data: {slug: slug, country_slugs: country_arr, _token: _token, year_arr: year_arr},

            success: function (data) {
                $('.list-courses').html(data);
            }
        });
    });

    $('.filter-year input').change(function () {
        if(this.checked) {
            year_arr.push($(this).val())
        } else {
            year_arr.splice($.inArray($(this).val(), year_arr),1);
        }
        var slug = '{{ $subject->slug }}';
        var _token = $(this).attr('_token')
        $.ajax({
            dataType: 'html',
            type: 'POST',
            url:'/course/filter/',
            data: {slug: slug, country_slugs: country_arr, _token: _token, year_arr: year_arr},

            success: function (data) {
                $('.list-courses').html(data);
            }
        });
    });

</script>
@endsection