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
						<label  class="col-md-3" for="name">Title English</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="title_en" id="title_en" value="{{ $data['title_en'] }}">
							@if($errors->has('title_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('title_en')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Guide</label>
						<div class="col-md-9">
							<select class="selectpicker " id="guide_id" name="guide_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($guide)!=0)
                                  @foreach($guide as $db_guide)
                                  <option  @if ($db_guide->id == $data['guide_id']) selected @endif value="{{$db_guide->id}}" data-tokens="{{$db_guide->name}}" >{{$db_guide->name }} </option>
                                  @endforeach
                               @endif
                              @if(count($guide)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
						</div>
					</div>
					<div class="form-group">
						<a href="{{ route('admin.guide.index') }}" class="btn btn-default">Back</a>
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