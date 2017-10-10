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
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group row">
						<label  class="col-md-3" for="name">Title</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
							@if($errors->has('name'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('name')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Content</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="content" name="content" value="{{ old('content') }}"></textarea>    
							@if($errors->has('slug'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('slug')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Content English</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="content_en" name="content_en" value="{{ old('content_en') }}"></textarea>    
							@if($errors->has('content_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('content_en')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Type</label>
						<div class="col-md-9">
							<select class="form-control" id="type" name="type">
							    <option value="text">Text</option>
							    <option value="textarea">Textarea</option>
							    <option value="checkbox">Checkbox</option>
							    <option value="submit">Submit</option>
							    <option value="radio">Radio</option>
							    <option value="file">File</option>
							  </select>
	                    </div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Page</label>
						<div class="col-md-9">
							<select class="selectpicker " id="page_id" name="page_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($page)!=0)
                                  @foreach($page as $db_page)
                                  <option value="{{$db_page->id}}" data-tokens="{{$db_page->title}}" >{{$db_page->title }} </option>
                                  @endforeach
                               @endif
                              @if(count($page)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
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

@section('scripts')
<script type="text/javascript">
	@if (count($errors) > 0)
	toastr.error('{{ $errors->first() }}');
	@endif
</script>
@endsection