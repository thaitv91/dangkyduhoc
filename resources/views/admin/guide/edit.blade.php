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
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" value="{{ $data['name'] }}">
						@if($errors->has('name'))
                            <span class="help-block">
                                <strong class="text-danger">{{$errors->first('name')}}</strong>
                            </span>   
                        @endif
					</div>
					<div class="form-group">
						<label for="name">Name English</label>
						<input type="text" class="form-control" name="name_en" id="name" value="{{ $data['name_en'] }}">
						@if($errors->has('name_en'))
							<span class="help-block">
                                <strong class="text-danger">{{$errors->first('name_en')}}</strong>
                            </span>
						@endif
					</div>
					<div class="form-group">
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