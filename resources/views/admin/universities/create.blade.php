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
						<label  class="col-md-3" for="name">Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name" id="name" value="{{ old('title') }}">
							@if($errors->has('name'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('name')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name_en" id="name_en" value="{{ old('name_en') }}">
							@if($errors->has('name_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('name_en')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Country</label>
						<div class="col-md-9">
							<select class="selectpicker " id="guide_id" name="guide_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($country)!=0)
                                  @foreach($country as $db_country)
                                  <option value="{{$db_country->id}}" data-tokens="{{$db_country->name}}" >{{$db_country->name }} </option>
                                  @endforeach
                               @endif
                              @if(count($country)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
						</div>
					</div>
					<div class="form-group row">
                        <label class="col-md-3">Logo</label>
						<div class="col-md-9">
                        <input type="file" name="logo" value="" id="logo" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">                
                          <img id="previewHolder" alt="" width="170px" height="100px"/>
                        <div class="col-md-9">
                    </div>  
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				<!-- /.box-body -->
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
	
 	$("#logo").change(function() {
  	readURL(this);
	});
  </script>
  @endsection