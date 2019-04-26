@extends('layouts.admin')

@section('title')

@endsection

@section('styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Registered <small>list</small></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<div class="box-body">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Order</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>University Intake</th>
						<th>Current qualification</th>
						<th>Expected grade</th>
						<th>Restered at</th>
						<th></th>
					</thead>
					<tbody>
						@foreach ($data as $key => $value)
						<tr>
							<td>{{ $key+1 }}</td>
							<td>{{ $value->name }}</td>
							<td>{{ $value->email }}</td>
							<td>{{ $value->mobile }}</td>
							<td>{{ $value->university_intake }}</td>
							<td>{{ $value->current_qualification }}</td>
							<td>{{ $value->expected_grade }}</td>
							<td>{{ $value->created_at->format('d/m/Y H:i') }}</td>
							<td>
								<a href="{{ route('admin.fair.showRegister', ['id'=>$value->id]) }}" class="btn btn-info btn-xs">Show</a>
								<a onclick="confirmDelete('{{ route('admin.fair.deleteRegister', ['id'=>$value->id]) }}'); return false;" class="btn btn-danger btn-xs">Delete</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
			<!-- /.box-body -->
		</div>
	</div>
	<!-- /.box -->
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
				<p>Are you sure to delete this item?</p>
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
<script type="text/javascript">
	function confirmDelete(url) {
		$('#modal-delete a').attr('href',url);
		$('#modal-delete').modal('show');
	}
</script>
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$('.table').DataTable();
</script>
@endsection