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
			<h3 class="box-title">Current folder: <b>{{ $current_folder }}</b> <small></small></h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<div class="box-body">
			<div class="col-md-12">
				<table class="table table-hover">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Type</th>
						<th></th>
					</thead>
					<tbody>
						@php 
							$index = 1;
							$current_folder = str_replace('/', '-', $current_folder); 
						@endphp
						@foreach ($folders as $value)
						<tr>
							<td>{{ $index++ }}</td>
							@php 
								$temp = explode('\\', $value);
								$folder = $temp[count($temp)-1];
							@endphp
							<td>
								<a class="folder" href="{{ route('admin.lang', ['folder'=>$current_folder.'-'.$folder]) }}">
									{{ $folder }}
								</a>
							</td>
							<td><span class="label label-warning">Folder</span></td>
							<td>
								<button class="btn btn-warning btn-xs">Rename</button>
								<button class="btn btn-danger btn-xs">Remove</button>
							</td>
						</tr>
						@endforeach
						@foreach ($files as $value)
						<tr>
							<td>{{ $index++ }}</td>
							@php 
								$temp = explode('\\', $value);
								$file = $temp[count($temp)-1]; 
							@endphp
							<td>
								<a class="file" href="{{ route('admin.lang.openFile', ['folder'=>$current_folder, 'file'=>$file]) }}">
									{{ $file }}
								</a>
							</td>
							<td><span class="label label-default">File</span></td>
							<td>
								<button class="btn btn-warning btn-xs">Rename</button>
								<button class="btn btn-danger btn-xs">Remove</button>
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
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	function confirmDelete(url) {
		$('#modal-delete a').attr('href',url);
		$('#modal-delete').modal('show');
	}
</script>
<script type="text/javascript">
	$('.table').DataTable();
</script>
@endsection