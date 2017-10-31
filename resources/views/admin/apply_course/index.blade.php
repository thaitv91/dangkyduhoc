@extends('layouts.admin')

@section('title')

@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">
@endpush

@section('content')
<div class="box">
	<div class="box-header">
		<div class="col-md-11"><h3 class="box-title">Apply course</h3></div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Created at</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $key => $value)
				@php $date = DB::table('apply_courses')->where('user_id', $value->user_id)->orderBy('received', 'desc')->first(); @endphp
				<tr>
					<td>{{ $key+1 }}</td>
					<td>{{ $value->given_name }}</td>
					<td>{{ $value->email }}</td>
					<td>{{ Carbon\Carbon::parse($date->created_at)->format('d/m/Y H:i') }}</td>
					<td><a href="{{ route('admin.applyCourse.review',['user_id'=>$value->user_id]) }}" class="btn btn-info btn-xs">Review</a></td>
					<td><a href="#" class="btn btn-success btn-xs" onclick="showCommit('{{$value->user_id}}')">Submit</a></td>
					<td><a href="{{ route('admin.applyCourse.outcome',['user_id'=>$value->user_id]) }}" class="btn btn-warning btn-xs">Outcome</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

<!-- Modal delete -->
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

<!-- Modal Commit -->
<div class="modal fade" id="modal-submit" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm Submit</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure to Submit?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-success" id="comfirm-submit">Submit</a>
				<a href="#" class="btn btn-warning" id="deny-submit">Deny</a>
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
	$('#example2').DataTable({
		"paging": true,
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


	function showCommit(user_id) {
		$('#modal-submit').modal('show');
		$('#comfirm-submit').attr('href', "{{ route('admin.applyCourse.submit') }}"+'/'+user_id+'/'+1)
		$('#deny-submit').attr('href', "{{ route('admin.applyCourse.submit') }}"+'/'+user_id+'/'+2)
	}
</script>
@endsection