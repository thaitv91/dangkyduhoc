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
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
@endsection

@section('scripts')

<!-- DataTables -->
<script src="{{ url('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>
@endsection