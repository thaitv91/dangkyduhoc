@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Menu <small>Create</small></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="form-create" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group" id="select-type">
						<label for="type">Type</label>
						<select id="type" name="type" class="form-control" required>
							<option disabled selected>-- Select Type --</option>
							<option value="country">Country</option>
							<option value="university">University</option>
						</select>
					</div>

					<div class="form-group">
						<label for="title">Title</label>
						<!-- <input type="text" class="form-control" name="title" id="title" required> -->
						<select id="title" name="title" class="form-control" data-live-search="true">
							<option>-- Please choose a type --</option>
						</select>
					</div>

					<div class="form-group" style="display: none" id="form-link">
						<label for="link">Link</label>
						<input type="text" id="link" name="link" class="form-control" readonly />
					</div>

					<div class="form-group">
						<label for="column">Column</label>
						<select name="column" class="form-control" required>
							<option selected disabled>-- Select Column --</option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Create</button>
						<a href="{{ route('admin.menu') }}" class="btn btn-default">Back</a>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				
			</div>
		</form>
	</div>
	<!-- /.box -->
</div>

@endsection

@section('scripts')
<script type="text/javascript">
	$.ajaxSetup({
		headers : {
			'X-CSRF-Token': $('input[name="_token"]').val(),
		}
	});

	$('#type').on('change', function() {
		var type = $(this).val();
		$('#title').empty();
		$('#title').append('<option>Loading data...</option>');
		if (type == 'country') {
			$('#link').attr('disabled', true);
			$('#form-link').css('display', 'none');
			getCountry();
		} else {
			$('#link').attr('disabled', false);
			$('#form-link').css('display', 'block');
			getUniversity();
		}
	});

	$('#title').on('change', function() {
		$('#link').val($(this).find(':selected').data('slug'));
	});

	function getCountry() {	
		$.ajax({
			url : "{{ route('admin.menu.getCountry') }}",
			type : 'POST',
		}).done(function (data) {
			var html = '<option disabled selected>-- Select Country --</option>';
			$.each(data, function (index, value) {
				html += '<option value="'+value.name+'">'+value.name+'</option>';
			});
			$('#title').empty();
			$('#title').append(html);
		});
	}

	function getUniversity() {
		$.ajax({
			url : "{{ route('admin.menu.getUniversity') }}",
			type : 'POST',
		}).done(function (data) {
			var html = '<option disabled selected>-- Select University --</option>';
			$.each(data, function (index, value) {
				html += '<option value="'+value.name+'" data-slug="'+value.slug+'">'+value.name+'</option>';
			});
			$('#title').empty();
			$('#title').append(html);
			$('#title').selectpicker();
		});
	}
</script>
@endsection