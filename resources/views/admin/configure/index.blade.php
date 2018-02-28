@extends('layouts.admin')

@section('title')

@endsection

@section('content')
<form role="form" id="form" method="POST" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="col-md-12">	
		<!-- general form elements -->
		<div class="box box-primary">
			<!-- box-header -->
			<div class="box-header with-border">
				<h3 class="box-title">Configuge Page</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			<div class="box-body">
				<div class="col-md-8 col-md-offset-1">
					<div class="form-group">
						<label for="name" class="col-md-3">Currency rate: </label>
						<div class="col-md-7">
							<input type="text" name="currency_rate" id="currency-rate" class="form-control" value="{{ $configure->currency_rate }}" required>
						</div>
						<label for="name" class="col-md-2">(x 1.000 VNĐ)</label>
					</div>
				</div>
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
				<div class="col-md-8 col-md-offset-1">
					<div class="form-group" align="center">
						<button class="btn btn-primary" type="submit">Update</button>
						<a href="{{ route('admin') }}" class="btn btn-default">Back</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>

@endsection

@section('scripts')
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#map_image_preview').attr('src', e.target.result);
			}

			reader.readAsDataURL(input.files[0]);
		}
	}	
	$("#map_image").change(function() {
		readURL(this);
	});

	@if (count($errors) > 0)
	toastr.error('{{ $errors->first() }}');
	@endif
</script>

<script type="text/javascript">
	$('#name').on('blur',function(e) {
		$.ajax({
			url : "{{ route('admin.customField.getSlug') }}",
			data : {name : $('#name').val(), slug:$('#slug').val()} 
		}).done(function (data){
			$('#slug').val(data);
		});
	});
</script>
@endsection