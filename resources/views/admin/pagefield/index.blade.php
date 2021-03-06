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
	<div class="col-md-11"><h3 class="box-title">Page Fields</h3></div>
	<div class="col-md-1"><a href="{{ route('admin.pagefield.create') }}" class="btn btn-xs btn-primary">Create</a></div>	
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<table id="example2" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Content Vi</th>
					<th>Content En</th>
					<th>Fuction</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($pagefield as $key => $value): ?>
					<tr>
						<td>{{ $key+1 }}</td>
						<td>{{ $value->title }}</td>
						<td>{!! $value->content !!}</td>
						<td>{!! $value->content_en !!}</td>
						<td>
							<a href="{{ route('admin.pagefield.edit',['id'=>$value->id]) }}" class="btn btn-xs btn-warning">Edit</a>
	                        <a {{-- onclick="confirmDelete({{$value->id}})" --}} class="btn btn-xs btn-danger">Delete</a>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
{{-- 		{{$pagefield->links()}} --}}
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
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
{{-- <script type="text/javascript">
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
</script> --}}
@endsection