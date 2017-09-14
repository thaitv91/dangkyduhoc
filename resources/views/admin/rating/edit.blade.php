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
						<input type="text" name="name" class="form-control" value="{{ $data['name'] }}">
						</div>
					</div>
					<div class="form-group row">
                          
                         <label  class="col-md-3" for="name">Avatar</label>
                         <div class="col-md-9">
                         <input type="file" name="avatar" value="" id="avatar" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">
                                   
                          <img id="previewHolder" src="{{ Storage::disk('local')->url($data['avatar']) }}" alt="" width="170px" height="100px"/>
                         </div> 
                    </div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Rating</label>
						<div class="col-md-9">
							<select class="form-control" id="rating" name="rating">
							    <option @if($data->rating == '1') selected @endif value="1">1</option>
							    <option  @if($data->rating == '2') selected @endif value="2">2</option>
							    <option  @if($data->rating == '3') selected @endif value="3">3</option>
							    <option  @if($data->rating == '4') selected @endif value="4">4</option>
							    <option  @if($data->rating == '5') selected @endif value="5">5</option>
							  </select>
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Content</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="7" id="content" name="content" ">{!! $data['content'] !!}</textarea>    
							@if($errors->has('content'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('content')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>	
					<div class="form-group row">
						<label  class="col-md-3" for="name">Content English</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="7" id="content_en" name="content_en"\>{!! $data['content_en'] !!}</textarea>    
							@if($errors->has('content_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('content_en')}}</strong>
	                            </span>   
	                        @endif
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
   	function readURL(input) {
  		if (input.files && input.files[0]) {
		    var reader = new FileReader();
		    reader.onload = function(e) {
		      $('#previewHolder').attr('src', e.target.result);
		    }

		    reader.readAsDataURL(input.files[0]);
		    console.log(reader);
  		}
	}

 	$("#avatar").change(function() {
  	readURL(this);
	});
  </script>
  @endsection