@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Show</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<div class="col-md-8 col-md-offset-2">
			<div class="box-body">
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Name: </label>
					<div class="col-md-8"><p>{{ $data->name }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Email: </label>
					<div class="col-md-8"><p>{{ $data->email }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Mobile number: </label>
					<div class="col-md-8"><p>{{ $data->mobile }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">University Intake: </label>
					<div class="col-md-8"><p>{{ $data->university_intake }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Studying: </label>
					<div class="col-md-8"><p>{{ $data->studying == 1?'Studying':'Not Studying' }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Current qualification: </label>
					<div class="col-md-8"><p>{{ $data->current_qualification }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Expected grade: </label>
					<div class="col-md-8"><p>{{ $data->expected_grade }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Registed at: </label>
					<div class="col-md-8"><p>{{ $data->created_at->format('d/m/Y H:i') }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-4">Subjects: </label>
					<div class="col-md-8">
						<ul>
							<?php foreach ($subjects as $key => $value): ?>
							<li>{{ $value->name }}</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
				<div class="form-group">
					<a href="{{ route('admin.fair.register') }}" class="btn btn-warning">Back</a>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<div class="box-footer">

		</div>
	</div>
	<!-- /.box -->
</div>
{{-- Modal reply --}}

<div class="modal fade" id="modal-reply" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Reply to : </h4>
			</div>
			<div class="modal-body">
				<textarea class="form-control" id="reply-content"></textarea>
			</div>
			<div class="modal-footer">
				<a href="" class="btn btn-danger">Send</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">

	function showReplyModal(url) {
		console.log(url);
		$.ajax({
			url : url,
		}).done(function (data) {
			if (data == -1) {
				toastr.error('error', 'Data was not found.');
				return false;
			}

			$('#modal-reply .modal-title').empty();
			$('#modal-reply .modal-title').append("<p>Reply to: <b>"+data.name +"</b></p>");
			$('#modal-reply .modal-title').append("<p>"+"Email: <b>"+data.email+"</b></p>");
			$('#modal-reply .modal-title').append("<p>"+"Question: <i>"+data.question+"</i></p>");
			// $('#modal-reply .modal-body').empty();
			// $('#modal-reply .modal-body').append('<textarea id="reply-content" class="form-control"></textarea>');

			$('#reply-content').val('');
			$('#modal-reply a').attr('href',data.url);
			$('#modal-reply').modal('show');
		});
	}

	$('#modal-reply a').on('click', function(e) {
		e.preventDefault();
		$('#modal-reply').modal('hide');
		var answer = $('#reply-content').val();
		toastr.warning('Sending email...');
		$.ajax({
			url : $(this).attr('href'),
			data : {answer : answer}
		}).done(function (data){
			if (data == 0) {
				toastr.error('Send email error');
			} else if(data == 1) {
				toastr.success('Email was sent.');
				location.reload();
			} else {
				toastr.error('Please input your answer');
			}
		});	
	});
</script>
@endsection