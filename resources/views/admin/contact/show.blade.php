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
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="col-md-8 col-md-offset-2">
			<div class="box-body">
				<div class="form-group">
					<label for="name" class="label-control col-md-2">Name: </label>
					<div class="col-md-10"><p>{{ $contact->name }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-2">Email: </label>
					<div class="col-md-10"><p>{{ $contact->email }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-2">What's app: </label>
					<div class="col-md-10"><p>{{ $contact->whatsapp }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-2">Question: </label>
					<div class="col-md-10"><p>{{ $contact->question }}</p></div>
				</div>
				<div class="form-group">
					<label for="name" class="label-control col-md-2">Send at: </label>
					<div class="col-md-10"><p>{{ Carbon\Carbon::parse($contact->created_at)->format('d/m/Y H:i') }}</p></div>
				</div>
				<div class="form-group">
					<div class="col-md-2"><a onclick="showReplyModal({{$contact->id}})" type="submit" class="btn btn-primary">Reply</a></div>
					<div class="col-md-2"><a href="{{ route('admin.contact') }}" class="btn btn-danger">Back</a></div>
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
				<textarea class="form-control"></textarea>
			</div>
			<div class="modal-footer">
				<a href="" class="btn btn-danger">Send</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
@endsection

@section('scrtipts')
<script type="text/javascript">
	function showReplyModal(id) {
		$.ajax({
			url : '{{ route("admin.course.getUrlDelete") }}',
			data : {id:id},
		}).done(function(data) {
			if (data == -1) {
				alert('Opp! Please try again. Error!');
			} else {
				$('#modal-reply a').attr('href',data);
				$('#modal-reply').modal('show');
			}
		})
	}
</script>
@endsection