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
						
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name_en" id="name_en" value="{{ old('name_en') }}">
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Country</label>
						<div class="col-md-9">
							<select class="selectpicker " id="country_id" name="country_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
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
                           @if($errors->has('country_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('country_id')}}</strong>
	                            </span>   
	                        @endif
						</div>

					</div>

					<div class="form-group row">
                        <label class="col-md-3">Logo</label>
						<div class="col-md-9">
	                        <input type="file" name="logo" value="" id="logo" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">                
	                          <img id="previewHolder" alt="" width="170px" height="100px"/>
	                        <div class="col-md-9">
	                        	@if($errors->has('logo'))
		                            <span class="help-block">
		                                <strong class="text-danger">{{$errors->first('logo')}}</strong>
		                            </span>   
		                        @endif
	                    	</div>
                    	</div>
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