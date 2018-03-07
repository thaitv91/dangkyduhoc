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
						<label  class="col-md-3" for="name">Question Vi</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="question" id="question" value="{{ $data['question'] }}">   
							@if($errors->has('question'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('question')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Question En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="question_en" id="question_en" value="{{  $data['question_en'] }}">  
							@if($errors->has('question_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('question_en')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Answer Vi</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="15" id="answer" name="answer" value="{{ old('answer') }}">{!! $data['answer'] !!}</textarea>    
							@if($errors->has('answer'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('answer')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Answer En</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="15" id="answer_en" name="answer_en" value="{{ old('answer_en') }}">{!! $data['answer_en'] !!}</textarea>    
							@if($errors->has('answer_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('answer_en')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Guide</label>
						<div class="col-md-9">
							<select class="selectpicker " id="guide_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($guide)!=0)
                                  @foreach($guide as $db_guide)
                                  <option @if ($db_guide->id == $guide_select['guide_id']) selected @endif value="{{$db_guide->id}}" data-tokens="{{$db_guide->name}}" >{{$db_guide->name }} </option>
                                  @endforeach
                               @endif
                              @if(count($guide)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
						</div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Topic</label>
						<div class="col-md-9">
	                     	<select class="form-control" id="topic_id" name="topic_id">	   
	                     	@foreach($topic as $db_topic)                  
	                       		<option @if ($db_topic->id == $data['topic_id']) selected @endif value="{{$db_topic->id}}" >{{$db_topic->title }}</option> 
	                       	@endforeach        
	                     	</select>
	                     	@if($errors->has('topic_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('topic_id')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
	                </div>
					<div class="form-group">
						<a href="{{ route('admin.guideQuestion.index') }}" class="btn btn-default">Back</a>
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
@section('scripts')
	<script type="text/javascript">

    $(document).ready(function(){
      $('#guide_id').change(function(){
        var id = $('#guide_id').val();
        $.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': '{{ csrf_token() }}',
		}
		});
          $.ajax({
            url:'{{URL::asset('')}}admin/guide-question/guide-topic/'+id,
            type:'post',
            data:{'id':id},
            success:function(data){
              console.log(data);
                $('#topic_id').html(data);
            }

          });
    	});
    });
</script> 
@endsection