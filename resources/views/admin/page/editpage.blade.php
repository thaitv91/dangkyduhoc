@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Edit</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="col-md-12">
				<div class="box-body">
						@foreach ($fields as $key => $field)
							<?php 
							 	if($field->type == 'file')
								$name = $field->slug;
								$id = $field->id;
							 ?>
							{!! $field->render() !!}
						@endforeach					
					<div class="form-group">
						<a href="{{ route('admin.page.index') }}" class="btn btn-default">Back</a>
						<button type="submit" class="btn btn-primary">Update</button>
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
   	function readURL(input) {
  		if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    reader.onload = function(e) {
		      $('#previewHolder-<?php echo $id; ?>').attr('src', e.target.result);
		    }

		    reader.readAsDataURL(input.files[0]);
		    console.log(reader);
  		}
	}
	
 	$("#<?php if($field->type == 'file'){ echo $name;} ?>").change(function() {
  	readURL(this);
	});
  </script>
  @endsection