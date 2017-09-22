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
						<label  class="col-md-3" for="name">Year Founded</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="year_founded" id="year_founded" value="{{ old('year_founded') }}" placeholder="Choose one year....">
						@if($errors->has('year_founded'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('year_founded')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Student Population</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="student_population" id="student_population" value="{{ old('student_population') }}">
						@if($errors->has('student_population'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('student_population')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-md-3" for="name">Staff Population</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="staff_population" id="staff_population" value="{{ old('staff_population') }}">
						@if($errors->has('staff_population'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('staff_population')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Male Number</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="male_number" id="male_number" value="{{ old('male_number') }}">
						@if($errors->has('male_number'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('male_number')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Female Number</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="female_number" id="female_number" value="{{ old('female_number') }}">	
						@if($errors->has('female_number'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('female_number')}}</strong>
	                            </span>   
	                        @endif						
						</div>
					</div>

					<div class="form-group row">
						<label  class="col-md-3" for="name">International Students</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="international_students" id="international_students" value="{{ old('international_students') }}">
						@if($errors->has('international_students'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('international_students')}}</strong>
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
            // When the document is ready
            $(document).ready(function () {
                
                $('#year_founded').datepicker({
                    minViewMode: 'years',
                    autoclose: true,
                     format: 'yyyy'
                });  
            
            });
        </script>

	
@endsection