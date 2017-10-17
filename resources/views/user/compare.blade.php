@extends("layouts/app")

@section("content")


<div class="compare-page compare-div page" id="page_compare">
	@if (count($courses))
	<div class="compare-div sortablediv ui-sortable">
		<div class="compare-col compare-col-borderless ui-sortable-handle">
            <div class="col-lg-12 feature-row .feature-row-top first-col">
                <div class="feature feature1" data-rowno="1" style="height: 276px;">
                    <button class="btn copybtn">Copy URL</button>
                    <button class="btn clearbtn">Clear all</button>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature9 pad" data-rowno="9" style="height: 134px;">
                    <span>Minimum Grade</span>
                </div>
            </div>

            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature11 pad" data-rowno="11" style="height: 51px;">
                    <span>Duration</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col martop30 marbot10px">
                <div class="feature feature21" data-rowno="21" style="height: 120px;">
                    <span>Yearly Expenses</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature3" data-rowno="3" style="height: 21px;">
                    <span>Living Expenses</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature2" data-rowno="2" style="height: 21px;">
                    <span>Tuition Fee</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature13 feature-normalheight pad" data-rowno="13" style="height: 204px;">
                    <span>Rankings</span>
                </div>
            </div>

            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature14" data-rowno="14" style="height: 21px;">
                    <span>Founded</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature16" data-rowno="16" style="height: 21px;">
                    <span>Students</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature16" data-rowno="20" style="height: 21px;">
                    <span>Staff</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature17" data-rowno="17" style="height: 21px;">
                    <span>Male : Female</span>
                </div>
            </div>
            <div class="col-lg-12 feature-row first-col">
                <div class="feature feature18" data-rowno="18" style="height: 21px;">
                    <span>Intl Students</span>
                </div>
            </div>
            <div class="clearBoth"></div>
      </div><!-- /.compare-col -->
      @endif
      <?php foreach ($courses as $key => $course): ?>
      <div class="compare-col content-col ui-sortable-handle" data-courseid="{{ $course->id }}" data-priority="1" id="compareDiv_{{ $course->id }}">
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row feature-row-top relative">
				<div class="feature feature1" data-rowno="1" style="height: 276px;">
					<div class="row marbot10px">
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
							<a href="{{ route('user.subject.setCookie',['id'=>$course->id]) }}" class="compare-remove text-center" data-courseid="{{ $course->id }}" data-parentid="1517" title="Remove from compare" onclick="removeCourse(this); return false;"><i class="fa fa-times"></i></a>
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 text-center">
							<!-- Logo -->
							<a href="/university/bangor-university">
								@if ($course->university->logo)
								<img class="tip" data-original-title="View more information on Bangor University" src="{{ asset($course->university->logo) }}" title=""></a>
								@else
								<img class="tip" data-original-title="View more information on Bangor University" src="https://therightustorage.blob.core.windows.net/assets/University/B078_bangor_logo.jpg" title=""></a>
								@endif
							<!-- End Logo -->
						</div>
						<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 text-center">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12">
									<!-- Course Name -->
									<a class="tip" data-original-title="The Management with Accounting degree allows you to develop the vital skills needed to manage finance, people and information, while gaining a specialised body of knowledge in accounting. This programme is accredited by the ACCA (the Association of Chartered Certified Accountants), the global body for professional accountants." data-placement="bottom" href="/course/bangor-university-management-with-accounting-bsc-hons-n2nk" title="">
									<h2>{{ $course->name }}</h2></a> <span class="course-code">{{ $course->classification }}<!-- BSc (Hons) --></span>
									<!-- Course Name -->
								</div>
								<!-- University -->
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 uniname text-center">
									<a href="/university/bangor-university">{{ $course->university->name }}</a>
								</div>
								<!-- End university -->

								<!-- Country -->
								<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 uniname text-center">
									{{ $course->country() }}
								</div>
								<!-- End country -->
							</div>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- Minimum Grade -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative">
				<div class="feature feature9 pad" data-rowno="9" style="height: 134px;">
					<div title="Click to toggle between qualifications" data-bordersize="5" data-animationstep="0" data-dimension="100" data-text="{{ $course->requirement->level }}" data-info="A Level" data-fontsize="20" data-percent="50" data-fgcolor="#1785BB" data-bgcolor="#eee" class="circliful gradetype"></div>				
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Minimum Grade -->

			<!-- Duiration -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature11 pad" data-rowno="11" style="height: 51px;">
					<span class="right">{{ $course->information->duration }} years</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Duiration -->

			<!-- Tuition Fee -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row text-center relative" style="background-color: rgb(255, 255, 255);">
				<div class=" feature feature21 padtop20 padbot20px" data-rowno="21" style="height: 160px;">
					<div class="chart">
						<div class="fee" data-value="{{ $course->cost->year_tuition_fees }}" data-title="Tuition fee" data-prefix="S$" data-postfix="K"></div>
						<div class="living-expenses" data-value="{{ $course->costLiving() }}" data-title="Living expenses" data-prefix="S$" data-postfix="K"></div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature3 text-center" data-rowno="3" id="livingexpenses" style="height: 21px;">
					<span class="chart-item living margin-left5">S${{ $course->costLiving() }}K</span>
					<div class="clearBoth"></div>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature2 text-center" data-rowno="2" id="tutionfees" style="height: 21px;">
					<span class="chart-item tuition margin-left5">S${{ $course->cost->year_tuition_fees }}K</span>
				</div>
			</div>
			<!-- End Tuition Fee -->

			<!-- Ranking -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative" style="background-color: rgb(255, 255, 255);">
				<div class="feature feature13 feature-normalheight pad" data-rowno="13" style="height: 204px;">
					<div class="details compare-section">
						<div class="info_box clearfix">
							<?php foreach ($course->ranking as $key => $rank): ?>
							<div class="info_box_item clearfix">
								<span class="left rank-name">{{ $rank->title }}<br>
								<span class="display-inline smaller" id="country">{{ $rank->country_slug}}</span> <span class="display-inline smaller" title="Academic Ranking of World Universities 2017 ">/ {{ $rank->ranking_subject}}</span></span> <span class="right course-rank" id="course-rank">{{ $rank->ranking_point }}<sup>@if($rank->ranking_point==1) TH @elseif($rank->ranking_point==2) ND @elseif($rank->ranking_point==3) RD @else TH @endif</sup></span>
							</div>
							<?php endforeach ?>
						</div>
					</div>
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Ranking -->

			@php $university = $course->university @endphp
			<!-- Founded -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature14 text-center" data-rowno="14" style="height: 21px;">
					@if ($university && $university->universityStatistic->first())
					<span>{{ $university->universityStatistic->first()->year_founded }}</span>
					@else 
					<span>Data was not found</span>
					@endif
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Founded -->

			<!-- Student -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature16 text-center" data-rowno="16" style="height: 21px;">
					@if ($university && $university->universityStatistic->first())
					<span>{{ $course->university()->first()->universityStatistic()->first()->student_population }}</span>
					@else
					<span>Data was not found</span>
					@endif
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Student -->

			<!-- Staff -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature16 text-center" data-rowno="20" style="height: 21px;">
					@if ($university && $university->universityStatistic->first())
					<span>{{ $course->university()->first()->universityStatistic()->first()->staff_population }}</span>
					@else
					<span>Data was not found</span>
					@endif
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Staff -->

			<!-- Male:Female -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature17 text-center" data-rowno="17" style="height: 21px;">
					@if ($university && $university->universityStatistic->first())
					<span>{{ $course->university()->first()->universityStatistic()->first()->male_number }} : {{ $course->university()->first()->universityStatistic()->first()->female_number }}</span>
					@else
					<span>Data was not found</span>
					@endif
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Male:Female -->

			<!-- Intl Student -->
			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row relative">
				<div class="feature feature18 text-center" data-rowno="18" style="height: 21px;">
					@if ($university && $university->universityStatistic->first())
					<span>{{ $course->university()->first()->universityStatistic()->first()->international_students }}%</span>
					@else
					<span>Data was not found</span>
					@endif
					<div class="clearBoth"></div>
				</div>
			</div>
			<!-- End Intl Student -->

			<div class="col-lg-12 col-md-12 col-xs-12 col-xs-12 feature-row feature-row-apply relative">
				<div class="feature feature15 feature-apply" style="height: 41px;">
					<div class="course-apply-button btn btn-blue btn-block" id="apply_1517" onclick="javascript:apply('1517');" title="Add to my university application">
						APPLY
					</div>
					<div class="course-selected-button btn btn-blue btn-block hide" id="selected_1517" onclick="javascript:unselect('1517');" title="Remove from application?">
						ADDED
					</div>
				</div>
			</div>
		</div><!-- /.compare-col -->

      <?php endforeach ?>
	</div><!-- /.compare-div -->
</div><!-- /#page_compare -->




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>   
<script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}
<script type="text/javascript">
	var compare_number = {{ count($courses) }}; // Number of comparison course
	console.log(compare_number);
	function removeCourse(input) {
		compare_number--;
		var id = $(input).data('courseid');
		$('#compareDiv_'+id).remove();
		$.ajax({
			url : $(input).attr('href'),
		});
	}
</script>
@endsection
