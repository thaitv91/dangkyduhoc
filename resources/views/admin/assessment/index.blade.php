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
		<div class="col-md-11"><h3 class="box-title">Assessments</h3></div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Phone</th>
					<th>Course Completed</th>
					<th>Avarage Score</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($assessments as $key => $assessment)
				<tr>
					@if ($assessment->status == 0)
					<td><b>{{ $key+1 }}</b></td>
					<td><b>{{ $assessment->name }}</b></td>
					<td><b>{{ $assessment->email }}</b></td>
					<td><b>{{ $assessment->phone }}</b></td>
					<td><b>{{ $assessment->course_completed }}</b></td>
					<td><b>{{ $assessment->avg_score }}</b></td>
					@else
					<td>{{ $key+1 }}</td>
					<td>{{ $assessment->name }}</td>
					<td>{{ $assessment->email }}</td>
					<td>{{ $assessment->phone }}</td>
					<td>{{ $assessment->course_completed }}</td>
					<td>{{ $assessment->avg_score }}</td>
					@endif
					<td><a href="{{ route('admin.assessment.show', ['assessment_id' => $assessment->id]) }}" class="btn btn-success btn-xs">Detail</a></td>
					<td><a href="#" class="btn btn-danger btn-xs" onclick="confirmDelete('{{ route('admin.assessment.remove', ['assessment_id' => $assessment->id]) }}')">Remove</a></td>
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
</script>
@endsection