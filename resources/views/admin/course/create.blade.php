@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">
	<!-- general form elements -->
	<form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
		<div class="box box-primary">

			<div class="box-header with-border">
				<h3 class="box-title">Course</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" required="required" value="">
					</div> 

					<div class="form-group">
						<label for="university">University</label>
						<select type="text" class="form-control" name="university" id="university" required="required" value="" required>
							<option selected="true" disabled>-- Select University --</option>
							<?php foreach ($universities as $key => $value): ?>
								<option value="{{ $value->id }}">{{ $value->name }}</option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Cost</h3>
			</div>
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="year_tuition_fees">Year Tuition Fees</label>
						<input type="number" class="form-control" name="year_tuition_fees" id="year_tuition_fees" value="" required step=any>
					</div>
					<div class="form-group">
						<label for="day_drink_fees">Drink Fees</label>
						<input type="number" class="form-control" name="day_drink_fees" id="day_drink_fees" value="" required>
					</div>
					<div class="form-group">
						<label for="day_food_fees">Food Fees</label>
						<input type="number" class="form-control" name="day_food_fees" id="day_food_fees" value="" required>
					</div>
					<div class="form-group">
						<label for="day_accommodation_fees">Accommodation Fees</label>
						<input type="number" class="form-control" name="day_accommodation_fees" id="year_tuition_fees" value="" required step=any>
					</div>
					<div class="form-group">
						<label for="day_coffe_fees">Coffe Fees</label>
						<input type="number" class="form-control" name="day_coffe_fees" id="day_coffe_fees" value="" required>
					</div>
					<div class="form-group">
						<label for="day_coffe_fees">Cost per year</label>
						<input type="number" class="form-control" name="cost_per_year" id="cost_per_year" value="" required step=any>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Entry Requiredment</h3>
			</div>
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="diploma">Diploma</label>
						<input type="text" class="form-control" name="diploma" id="diploma" value="" required>
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<input type="text" class="form-control" name="level" id="level" value="" required>
					</div>
					<div class="form-group">
						<label for="international_baccalaureate">International Baccalaureate</label>
						<input type="text" class="form-control" name="international_baccalaureate" id="international_baccalaureate" value="" required>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->

				<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Information</h3>
			</div>
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="course_code">Course Code</label>
						<input type="text" class="form-control" name="course_code" id="course_code" value="" required>
					</div>
					<div class="form-group">
						<label for="university_code">University Code</label>
						<input type="text" class="form-control" name="university_code" id="university_code" value="">
					</div>
					<div class="form-group">
						<label for="upcoming_intakes">Upcoming Intakes</label>
						<input type="text" class="form-control" name="upcoming_intakes" id="upcoming_intakes" value="">
					</div>
					<div class="form-group">
						<label for="course_website">Course Website</label>
						<input type="text" class="form-control" name="course_website" id="course_website" value="">
					</div>
					<div class="form-group">
						<label for="duiration">Duiration</label>
						<input type="text" class="form-control" name="duiration" id="duiration" value="">
					</div>
					<div class="form-group">
						<label for="university_information">University Information</label>
						<input type="text" class="form-control" name="university_information" id="university_information" value="">
					</div>
					<div class="form-group">
						<label for="about">About</label>
						<textarea class="form-control" name="about" id="about"></textarea>
					</div>
					<div class="form-group">
						<label for="will_learn">Will Learn</label>
						<textarea class="form-control" name="will_learn" id="will_learn"></textarea>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Ranking</h3>
			</div>
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body ranking">
					<div class="form-group">
						<label for="ranking_title">Title</label>
						<input type="text" class="form-control" name="ranking_title[]" id="ranking_title" value="">
					</div>
					<div class="form-group">
						<label for="ranking_point">Ranking Point</label>
						<input type="number" class="form-control" name="ranking_point[]" id="ranking_point" value="">
					</div>
					<div class="form-group">
						<label for="ranking_subject">Ranking Subject</label>
						<input type="text" class="form-control" name="ranking_subject[]" id="ranking_subject" value="">
					</div>
					<div class="form-group">
						<label for="country">Country</label>
						<select class="form-control" name="country[]" required>
							<option selected = "true" disabled>-- Select Country --</option>
							<?php foreach ($countries as $key => $value): ?>
								<option value="{{ $value->slug }}">{{ $value->name }}</option>
							<?php endforeach ?>
						</select>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				<div class="form-group">
					<input class="btn btn-primary" type="button" name="" id="add-ranking" value="More Ranking" onclick="addRanking()">
				</div>
			</div>
		</div>
		<!-- /.box -->

		<div class="box box-default">
			<div class="box-header with-border">
				<h3 class="box-title">Subject</h3>
			</div>
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<select class="form-control" name="subject">
						<?php foreach ($subjects as $key => $subject): ?>
						<option value="{{ $subject->slug }}">{{ $subject->name }}</option>
						<?php endforeach ?>
					</select>
				</div>
				<!-- /.box-body -->
			</div>
			<hr>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->

		<div class="box box-default">
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group" align="center">
						<button class="btn btn-primary" type="submit">Create</button>
						<a href="{{ route('admin.course') }}" class="btn btn-default">Back</a>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->
	</form>
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$('#university').select2({
		placeholder : '-- Select University --'
	});
	$('#upcoming_intakes').datepicker({
		format : 'dd/mm/yyyy',
	});
</script>
<script type="text/javascript">
	function addRanking() {
		var html = 
				'<div>'+
					'<hr>' +
					'<div class="form-group">'+
						'<label for="ranking_title">Title</label>'+
						'<input type="text" class="form-control" name="ranking_title[]" id="ranking_title" value="" required>'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="ranking_point">Ranking Point</label>'+
						'<input type="number" class="form-control" name="ranking_point[]" id="ranking_point" value="" required>'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="ranking_subject">Ranking Subject</label>'+
						'<input type="text" class="form-control" name="ranking_subject[]" id="ranking_subject" value="" required>'+
					'</div>'+
					'<div class="form-group">'+
						'<label for="country">Country</label>'+
						'<select class="form-control" name="country[]" required>'+
							'<option disabled selected>-- Select Country --</option>'+
							<?php foreach ($countries as $key => $value): ?>
								'<option value="{{ $value->slug }}">{{ $value->name }}</option>'+
							<?php endforeach ?>
						'</select>'+
					'</div>'+
					'<button class="btn btn-danger" onclick="removeRanking(this)">Cancel</button>'+
				'</div>';

		$('.ranking').append(html);
	}

	function removeRanking(index) {
		$(index).parent().removeClass('box-body');
		$(index).parent().empty();
	}
</script>
@endsection