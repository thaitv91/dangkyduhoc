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
						<label class="col-md-3">Subject</label>
						<div class="col-md-9">
							<select class="selectpicker " id="subject_id" name="subject_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($subject)!=0)
                                  @foreach($subject as $db_subject)
                                  <option value="{{$db_subject->id}}" data-tokens="{{$db_subject->name}}" >{{$db_subject->name }} </option>
                                  @endforeach
                               @endif
                              @if(count($subject)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
                           @if($errors->has('subject_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('subject_id')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>

					<div class="form-group row">
						<label class="col-md-3">Career</label>
						<div class="col-md-9">
							<select class="selectpicker " id="career_id" name="career_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($career)!=0)
                                  @foreach($career as $db_career)
                                  <option value="{{$db_career->id}}" data-tokens="{{$db_career->name}}" >{{$db_career->name }} </option>
                                  @endforeach
                               @endif
                              @if(count($career)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
                           @if($errors->has('career_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('career_id')}}</strong>
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