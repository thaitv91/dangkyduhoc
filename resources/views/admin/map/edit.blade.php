
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
						<label  class="col-md-3" for="name">Title</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="title" id="title" value="{{ $data['title'] }}">
							@if($errors->has('title'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('title')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Lat</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="lat" id="lat" value="{{ $data['lat'] }}">
							@if($errors->has('lat'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('lat')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Long</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="lng" id="lng" value="{{ $data['lng'] }}">
						@if($errors->has('lng'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('lng')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
			
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				<!-- /.box-body -->
		
		</form>
	</div>
	<!-- /.box -->
</div>
@endsection
@section('scripts')

  @endsection