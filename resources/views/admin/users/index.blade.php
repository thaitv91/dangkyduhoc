@extends('layouts.admin')

@section('title')

@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">
@endpush

@section('content')
<div class="box">
	<div class="box-header">
		<h3 class="box-title">Hover Data Table</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Type</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($users as $key => $value): ?>
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ $value->email }}</td>
						<td>
							@if ($value->isadmin)
							<span class="label label-success">Admin</span>
							@else
							<span class="label label-warning">Member</span>
							@endif
						</td>
						<td>
							<a href="{{ route('admin.user.edit',['id'=>$value->id]) }}" class="btn btn-xs btn-warning">Edit</a>
							@if (Auth::user()->id != $value->id)
							<a onclick="confirmDelete({{$value->id}})" class="btn btn-xs btn-danger">Delete</a>
							@endif
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@push('scripts')
<!-- DataTables -->
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
<script type="text/javascript">
	$('#example2').DataTable({
		"paging": true,
		"ordering": true,
		"info": true,
		"autoWidth": false
	});
</script>
<script type="text/javascript">
	function confirmDelete(id) {
		$.ajax({
			url : '{{ route("admin.user.getUrlDelete") }}',
			data : {id:id},
		}).done(function(data) {
			if (data == -1) {
				alert('Opp! Please try again. Error!');
			} else {
				$('#modal-delete a').attr('href',data);
				$('#modal-delete').modal('show');
			}
		})
	}
</script>
@endpush