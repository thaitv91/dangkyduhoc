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
		<h3 class="box-title">Page</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Slug</th>
					<th>Fuction</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pages as $key => $value): ?>
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $value->title }}</td>
						<td>{{ $value->slug }}</td>
						<td>
							<a href="{{ route('admin.page.edit',['id'=>$value->id]) }}" class="btn btn-xs btn-warning">Edit</a>
							<a href="{{ route('admin.page.editpage',['id'=>$value->id]) }}" class="btn btn-xs btn-warning">Edit Page</a>
	                        <a onclick="confirmDelete({{$value->id}})" class="btn btn-xs btn-danger">Delete</a>
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
		$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.ajax({
              type: "DELETE",
              url: '{{URL::asset('')}}admin/page/" + id',
              success: function(res)
              {
                if(!res.error) {
                    alert('ok');                  
                }
              },
              error: function (xhr, ajaxOptions, thrownError) {
                alert('no'); 
              }
        });

	}
</script>
@endpush