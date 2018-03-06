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
			<div class="box-body">
				<div class="col-md-8 col-md-offset-2">
					<div class="form-group row">
						<label class="col-md-3">University</label>
						<div class="col-md-9">
							<select class="selectpicker " id="university_id" name="university_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($university)!=0)
                                  @foreach($university as $db_university)
                                  <option @if($db_university->id == $data['university_id']) selected @endif value="{{$db_university->id}}" data-tokens="{{$db_university->name}}" >{{$db_university->name }} </option>
                                  @endforeach
                               @endif
                              @if(count($university)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
                           @if($errors->has('university_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('university_id')}}</strong>
	                            </span>   
	                        @endif
						</div>

					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">About</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="about" name="about" value="">{!! $data['about']!!}</textarea>    
							@if($errors->has('about'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('about')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">About En</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="about_en" name="about_en" value="">{!! $data['about_en']!!}</textarea>    
							@if($errors->has('about_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('about_en')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Campus</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="campus" name="campus" value="">{!! $data['campus']!!}</textarea>    
							@if($errors->has('campus'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('campus')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Campus En</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="campus_en" name="campus_en" value="">{!! $data['campus_en']!!}</textarea>    
							@if($errors->has('campus_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('campus_en')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Facebook</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="facebook" id="facebook" value="{{ $data['facebook'] }}">
							@if($errors->has('facebook'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('facebook')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Twitter</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="twitter" id="twitter" value="{{ $data['twitter'] }}">
						@if($errors->has('twitter'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('twitter')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Youtube</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="youtube" id="youtube" value="{{ $data['youtube'] }}">
						@if($errors->has('youtube'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('youtube')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-md-3" for="name">Flickr</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="flickr" id="flickr" value="{{ $data['flickr'] }}">
						@if($errors->has('flickr'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('flickr')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Website</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="website" id="website" value="{{ $data['website'] }}">
						@if($errors->has('website'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('website')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Phone</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="phone" id="phone" value="{{ $data['phone'] }}">
							@if($errors->has('phone'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('phone')}}</strong>
	                            </span>   
	                        @endif						
						</div>
						
					</div>
			
					<div class="form-group">
						<a href="{{ route('admin.universityMeta.index') }}" class="btn btn-default">Back</a>
						<button type="submit" class="btn btn-primary">Update</button>
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

  @endsection