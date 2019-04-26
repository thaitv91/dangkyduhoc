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
			<div class="box-body">
				<div class="col-md-8 col-md-offset-2">
					<div class="form-group row">
						<label class="col-md-3">University</label>
						<div class="col-md-9">
							<select class="selectpicker " id="university_id" name="university_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($university)!=0)
                                  @foreach($university as $db_university)
                                  <option value="{{$db_university->id}}" data-tokens="{{$db_university->name}}" >{{$db_university->name }} </option>
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
						<label  class="col-md-3" for="name">Ranking Title</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="ranking_title" id="ranking_title" value="{{ old('ranking_title') }}">
						
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Ranking Title En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="ranking_title_en" id="ranking_title_en" value="{{ old('ranking_title_en') }}">
							
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-md-3" for="name">Ranking Point</label>
						<div class="col-md-9">
							<input type="number" class="form-control" name="ranking_point" id="ranking_point" value="{{ old('ranking_point') }}">
							
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Ranking Subject</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="ranking_subject" id="ranking_subject" value="{{ old('ranking_subject') }}">
							
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Ranking Subject En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="ranking_subject_en" id="ranking_subject_en" value="{{ old('ranking_subject_en') }}">							
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-md-3">Country</label>
						<div class="col-md-9">
							<select class="selectpicker " id="country_slug" name="country_slug" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($country)!=0)
                                  @foreach($country as $db_country)
                                  <option value="{{$db_country->slug}}" data-tokens="{{$db_country->slug}}" >{{$db_country->slug }} </option>
                                  @endforeach
                               @endif
                              @if(count($country)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
                           @if($errors->has('country_slug'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('country_slug')}}</strong>
	                            </span>   
	                        @endif
						</div>

					</div>	
					<div class="form-group">
						<a href="{{ route('admin.universityRank.index') }}" class="btn btn-default">Back</a>
						<button type="submit" class="btn btn-primary">Create</button>
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