@extends("layouts/app")

@section("content")
<div class="title-page">
	<div class="container"><h1>UNIVERSITY GUIDE</h1></div>
</div>

<div class="container apply-page">
	<div class="apply-header-page text-center">
		<img src="/img/img_title_application.svg" alt="Your online university application">
		<h2>One simple online form, multiple universities worldwide. Application fees waived!<br>Track your application progress here upon submission.</h2>
	</div><!-- /.apply-header-page -->

	<div class="some-courses">
		<h3 class="text-center">Ready to apply? Start by searching for some courses.</h3>
		<div class="row list">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>

			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
				<a href="#">Accounting &amp; Finance</a>
				<a href="#">Aeronautical Engineering</a>
			</div>
		</div>
	</div><!-- /.some-courses -->

	<div class="courses-apply">
		<div class="list-apply">
			<table class="courses">
				<thead class="hidden-xs hidden-sm">
					<tr>
						<td class="priority">
						</td>
						<td class="header"></td>
						<td class="hidden-xs">
							<div class="course-status">
								<div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates that your course application has been received by theRightU">
									Received
								</div>
								<div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates that your course application has been reviewed">
									Reviewed
								</div>
								<div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates that your course has been submitted to your selected universities">
									Submitted
								</div>
								<div class="status tip" title="" data-toggle="tooltip" data-placement="top" data-original-title="This indicates the outcome of your course application">
									Outcome
								</div>
							</div>
						</td>
						<td class="hidden-xs"></td>
						<td></td>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($courses as $key => $course): ?>
					<tr class="course-row">
						<td class="priority hidden-xs tip"><span data-toggle="tooltip" data-placement="top" title="" data-original-title="Drag to prioritise">{{ $key+1 }}</span></td>
						<td class="header">
							<a href="#" class="course_name">{{ $course->name }}</a>
							<a href="javascript:;" onclick="removeCourse(this)" data-course-id="{{ $course->id }}" class="remove-button"><i class="fa fa-times tip" title="" data-original-title="Remove course?"></i></a>
							<span class="classification">BA (Hons)</span>
							<div class="item tip" data-original-title="" title="">
								<a class="university_name" href="/university/the-university-of-liverpool">{{ $course->university->name }} , {{ $course->country() }},  {{ $course->information->duration}} years</a>
							</div>
						</td>
						<td class="submitted hidden-xs">
							<div class="course-status">
								<div class="status">
									<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="This course has been shortlisted but not yet submitted to us. Chat with us online if you require some guidance."></span>
								</div>
								<div class="status">
									<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
								</div>
								<div class="status">
									<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
								</div>
								<div class="status">
									<span class="ir app yet tip" title="" data-toggle="tooltip" data-original-title="No updates has been provided at this stage yet."></span>
								</div>
							</div>
						</td>
					</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</div><!-- /.list-apply -->

		<div id="add_course_dialog">
			<h3>ADD COURSE</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<select class="form-control" name="country" id="country">
							<option selected disabled>Choose a country</option>
							<?php foreach ($countries as $key => $country): ?>
								<option value="{{ $country->slug }}">{{ $country->name }}</option>
							<?php endforeach ?>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" name="university" id="universities">
							<option selected disabled>Choose a university</option>
						</select>
					</div>

					<div class="form-group">
						<select class="form-control" name="course" id="course">
							<option selected disabled>Choose a course</option>
						</select>
					</div>
					<a class="" href="#" onclick="return false;" data-toggle="tooltip" data-html="true" title="" data-original-title="We are constantly expanding our university network, and more universities will be included shortly. &lt;br&gt;&lt;br&gt;If your choice of university or course is not available, simply leave a note under the comments section of the application form and we will assist.">I can’t find the university or course. Why?</a>
					<div class="text-right">
						<button class="btn btn-blue" onclick="addCourse()">Add Course</button>
					</div>
				</div>
			</div>
		</div><!-- /#add_course_dialog -->

		<div id="current_app_status">
			<button id="add-course-btn" class="btn btn-blue">Add more courses?</button><br/>
			<button id="apply-btn" class="btn btn-blue">Continue to apply</button>
		</div><!-- /#current_app_status -->
	</div><!-- /.courses-apply -->

	<div class="fine-print">
		<h2>Points to note</h2>
		<ol>
			<li>You can apply up to EIGHT courses.</li>
			<li>Maximum FIVE courses from the UK.</li>
			<li>Maximum THREE courses per university.</li>
			<li>Credit exemptions and scholarships will be considered on a per course basis.</li>
			<li>Our admissions team will contact you if there are any discrepancies with the information you provided.</li>
			<li>Application fees are waived (Except for some canadian universities)</li>
			<li>Have a chat with our education consultants if you are unsure which courses are right for you.</li>
			<li>Your online data is secure and confidential.</li>
		</ol>
	</div><!-- /.fine-print -->
	
</div>




@endsection
@section('scripts')
{{-- <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> --}}   
{{-- <script type="text/javascript" src="//codeorigin.jquery.com/ui/1.10.2/jquery-ui.min.js"></script> --}}

<script type="text/javascript">
	$('#country').on('change', function(e) {
		var country_slug = $(this).val();
		$('#universities').empty();
		$('#universities').append("<option selected disabled>Searching university...</option>");
		$.ajax({
			url : "{{ route('user.apply.getUniversity') }}",
			data : {country_slug : country_slug}
		}).done(function (data){
			var html = '<option selected disabled>Choose a university</option>';
			$.each(data, function(index, value) {
				html += '<option value="'+value.id+'">'+value.name+'</option>';
			});
			$('#universities').empty();
			$('#course').empty();
			$('#course').append('<option selected disabled>Choose a course</option>')
			$('#universities').append(html);
		});
	});

	$('#universities').on('change', function(e) {
		var university_id = $(this).val();
		$('#course').empty();
		$('#course').append("<option selected disabled>Searching course...</option>");
		$.ajax({
			url : "{{ route('user.apply.getCourse') }}",
			data : {university_id : university_id}
		}).done(function (data){
			var html = '<option selected disabled>Choose a course</option>';
			$.each(data, function(index, value) {
				html += '<option value="'+value.id+'" data-classification="'+value.classification+'" data-duration="'+value.duration+'">'+value.name+'</option>';
			});
			$('#course').empty();
			$('#course').append(html);
		});
	});

	function addCourse() {
		var course_name = $('#course').find(':selected').text();
		var university_name = $('#universities').find(':selected').text();
		var country_name = $('#country').find(':selected').text();
		var duration = $('#course').find(':selected').data('duration');
		var classification = $('#course').find(':selected').data('classification');
		if ($('#course').val() != null && $('#universities').val() != null && $('#country').val() != null) {
			$.ajax({
				url : "{{ route('user.apply.addCourse') }}",
				data : {
					id : $('#course').val(),
					course_name : course_name,
					university_name : university_name,
					country_name : country_name,
					duration : duration,
					classification : classification,
					order : $('table tr').length,
				}
			}).done(function(data) {
				$('tbody').append(data);
				$('#universities').empty();
				$('#course').empty();
				$('#country').find(':disabled').prop('selected', true);
				$('#universities').append("<option selected disabled>Choose a university</option>");
				$('#course').append("<option selected disabled>Choose a course</option>");
				$('#add_course_dialog').slideToggle();
				toastr.success('Added course successfully.');
			});
			apply($('#course').val());
		} else {
			toastr.error('Please fill all the fields.');
		}
	}

	function apply(id) {
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

	function removeCourse(index) {
		if (!confirm('This course will be removed from your application. Are you sure?')) 
			return false; 
		else { 
			$(index).parent().parent().remove();
			apply($(index).data('course-id'));
		}
	}
</script>
@endsection
