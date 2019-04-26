@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<form role="form" id="form-create" method="POST" enctype="multipart/form-data">
	<div class="col-md-12">	
		<!-- general form elements -->
		<div class="box box-primary">

			<div class="box-header with-border">
				<h3 class="box-title">Create</h3>
			</div>
			<!-- /.box-header -->
			<!-- form start -->
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" name="name" id="name" class="form-control" value="{{ $custom_field->name }}" required>
					</div>
					<div class="form-group">
						<label for="slug">Slug</label>
						<input type="text" name="slug" id="slug" class="form-control" value="{{ $custom_field->slug }}" required>
					</div>
					<div class="form-group">
						<label for="name">Content</label>
						<textarea class="form-control my-editor" rows="5" id="content" name="content">{{ $custom_field->content }}</textarea>
					</div>
					<div class="form-group">
						<label for="name">Content (English)</label>
						<textarea class="form-control my-editor" rows="5" id="content_en" name="content_en">{{ $custom_field->content_en }}</textarea>
					</div>
					<div class="form-group">
						<label for="type">Type</label>
						<div class="">
							<select class="form-control" id="type" name="type">
							    <option value="text" 	@if ($custom_field->type=='text') 	selected @endif>Text</option>
							    <option value="textarea" @if ($custom_field->type=='textarea') selected @endif>Textarea</option>
							    <option value="checkbox" @if ($custom_field->type=='checkbox') selected @endif>Checkbox</option>
							    <option value="submit" 	@if ($custom_field->type=='submit') 	selected @endif>Submit</option>
							    <option value="radio" 	@if ($custom_field->type=='radio') 	selected @endif>Radio</option>
							    <option value="file" 	@if ($custom_field->type=='file') 	selected @endif>File</option>
							  </select>
	                    </div>
					</div>
 				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				
			</div>
		</div>
		<!-- /.box -->
		<div class="box box-default">
			<!-- /.box-header -->
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group" align="center">
						<button class="btn btn-primary" type="submit">Update</button>
						<a href="{{ route('admin.customField') }}" class="btn btn-default">Back</a>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
			</div>
		</div>
		<!-- /.box -->
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
			data : {name : $('#name').val()} 
		}).done(function (data){
			$('#slug').val(data);
		});
	});
</script>
@endsection