@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Create</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name" id="name" value="{{ $data['name'] }}">
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name_en" id="name_en" value="{{ $data['name_en'] }}">
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Description</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="description" name="description" value="">{{ $data['description'] }}</textarea>    
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Description En</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="description_en" name="description_en" value="">{{ $data['description_en'] }}</textarea>    
	                    </div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
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
{{-- @section('scripts')
	<script>
	$('#regular_hours').on('change', function(){
   		this.value = this.checked ? 1 : 0;
	}).change();
</script>
@endsection --}}
