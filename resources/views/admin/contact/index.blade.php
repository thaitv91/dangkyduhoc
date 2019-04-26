@extends('layouts.admin')

@section('title')

@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">
<link rel="stylesheet" href="{{ url('plugins/datatables/jquery.dataTables.css') }}">
@endpush

@section('content')
<div class="box">
	<div class="box-header">
		<div class="col-md-10">
			<h3 class="box-title">Contact</h3>
		</div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="table-course" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Status</th>
					<th>What's App</th>
					<th>Question</th>
					<th>Send at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($contacts as $key => $contact): ?>
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $contact->name }}</td>
						<td>{{ $contact->email }}</td>
						<td>
							@if ($contact->status == 0)
							<span class="label label-success">New</span>
							@elseif ($contact->status == 1)
							<span class="label label-default">Seen</span>
							@else 
							<span class="label label-primary">Replied</span>
							@endif
						</td>
						<td>{{ $contact->whatsapp }}</td>
						<td>{{ $contact->question }}</td>
						<td>{{ Carbon\Carbon::parse($contact->created_at)->format('d/m/Y H:i') }}</td>
						<td>
							<a href="{{ route('admin.contact.show',['id'=>$contact->id]) }}" class="btn btn-xs btn-primary">Show</a>
							@if ($contact->status != 2)
							<a onclick="showReplyModal('{{ route('admin.contact.detail',['id'=>$contact->id]) }}')" class="btn btn-xs btn-info">Reply</a>
							@else
							<button disabled class="btn btn-xs btn-info">Replied</button>
							@endif
							<a onclick="confirmDelete('{{ route('admin.contact.destroy',['id'=>$contact->id]) }}')" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

{{-- Modal reply --}}
<div class="modal fade" id="modal-reply" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title"></h4>
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
{{-- Modal delete --}}

<div class="modal fade" id="modal-delete" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm delete</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to do this action?</p>
			</div>
			<div class="modal-footer">
				<a href="" class="btn btn-danger">Delete</a>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
@endsection

@section('scripts')
<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$('#table-course').DataTable({
		"paging": false,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
</script>
<script type="text/javascript">
	function confirmDelete(url) {
		$('#modal-delete a').attr('href',url);
		$('#modal-delete').modal('show');
	}

	function showReplyModal(url) {
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