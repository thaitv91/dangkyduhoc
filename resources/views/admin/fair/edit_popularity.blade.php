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
		<form role="form" id="form-create" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group row">
						<label  class="col-md-3" for="name">Category</label>
						<div class="col-md-9">
							<select class="selectpicker" name="category" id="category" data-live-search="true">
								<option value="UK TOP 10">UK TOP 10</option>
								<option value="US TOP 100">US TOP 100</option>
								<option value="ARTS">ARTS</option>
								<option value="ARCHITECTURE">ARCHITECTURE</option>
								<option value="ALLIED HEALTH">ALLIED HEALTH</option>
								<option value="BUSINESS">BUSINESS</option>
								<option value="COMPUTER SCIENCE">COMPUTER SCIENCE</option>
								<option value="DENTISTRY">DENTISTRY</option>
								<option value="ENGINEERING">ENGINEERING</option>
								<option value="HOSPITALITY">HOSPITALITY</option>
								<option value="MEDICINE">MEDICINE</option>
								<option value="LAW">LAW</option>
								<option value="VETERINARY SCIENCE">VETERINARY SCIENCE</option>
								<option value="RUSSELL GROUP">RUSSELL GROUP</option>
								<option value="SPORTS SCIENCE">SPORTS SCIENCE</option>
								<option value="IVY LEAGUE TRANSFER">IVY LEAGUE TRANSFER</option>
							</select>
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">University</label>
						<div class="col-md-9">
							<select name="university_id" id="university" class="form-control selectpicker" data-live-search="true">
								@foreach ($universities as $key => $value)
									<option value="{{ $value->id }}">{{ $value->name }}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Update</button>
						<a href="{{ route('admin.fair.popularity') }}" class="btn btn-default">Back</a>
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
	$('#category').val("{{ $data->category }}");
	$('#university').val("{{ $data->university->id }}");
</script>
@endsection
