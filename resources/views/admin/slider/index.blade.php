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
	<div class="col-md-11"><h3 class="box-title">Page</h3></div>
	<div class="col-md-1"><a href="{{ route('admin.slider.create') }}" class="btn btn-xs btn-primary">Create</a></div>	
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Created at</th>
					<th>Updated at</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($data as $key => $value): ?>
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $value->name }}</td>
						<td>{{ Carbon\Carbon::parse($value->created_at)->format('d/m/Y H:i') }}</td>
						<td>{{ Carbon\Carbon::parse($value->updated_at)->format('d/m/Y H:i') }}</td>
						<td>
							<a href="{{ route('admin.slider.edit',['id'=>$value->id]) }}" class="btn btn-xs btn-warning">Edit</a>
	                        <a onclick="confirmDelete('{{ route('admin.slider.delete',['id'=>$value->id]) }}')" class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->

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