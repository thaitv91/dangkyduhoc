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
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name" id="name" value="{{ $university['name'] }}">
						
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name_en" id="name_en" value="{{ $university['name_en'] }}">
							
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Country</label>
						<div class="col-md-9">
							<select class="selectpicker " id="country_id" name="country_slug" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($country)!=0)
                                  @foreach($country as $db_country)
                                  <option @if ($db_country->slug == $university['country_slug']) selected @endif value="{{$db_country->slug}}" data-tokens="{{$db_country->name}}" >{{$db_country->name }} </option>
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
						<label class="col-md-3">Image</label>
						<div class="col-md-9">
							<select class="selectpicker" id="image" name="image" title="Choose one of the following..." data-live-search="true" tabindex="-98">
								@if(count($images)==0)
									<option value=""><em>(Empty)</em></option>
								@endif
								<?php foreach ($images as $key => $value): ?>
									<option @if ($value->id == $university['slider_id']) selected @endif  value="{{ $value->id }}">{{ $value->name }}</option>
								<?php endforeach ?>
							</select>
						</div>
					</div>

					<div class="form-group row">
                        <label class="col-md-3">Logo</label>
						<div class="col-md-9">
	                        <input type="file" name="logo" value="" id="logo" class="required borrowerImageFile" data-errormsg="PhotoUploadErrorMsg">                
	                          <img id="previewHolder" src="{{ asset($university->logo) }}" alt="" width="170px" height="100px"/>
	                        <div class="col-md-9">
	                        	@if($errors->has('logo'))
		                            <span class="help-block">
		                                <strong class="text-danger">{{$errors->first('logo')}}</strong>
		                            </span>   
		                        @endif
	                    	</div>
	                	 </div>
               		</div>
               		<div class="form-group row">
						<label class="col-md-3">Map</label>
						<div class="col-md-9">
							<select class="selectpicker " id="map_id" name="map_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($map)!=0)
                                  @foreach($map as $db_map)
                                  <option @if($db_map->id == $university['map_id']) selected @endif value="{{$db_map->id}}" data-tokens="{{$db_map->title}}" >{{$db_map->title }} </option>
                                  @endforeach
                               @endif
                              @if(count($map)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
                           @if($errors->has('map_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('map_id')}}</strong>
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