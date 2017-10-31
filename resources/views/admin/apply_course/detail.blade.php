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
		<div class="col-lg-12">
			<div class="section header">
				<br />
				<h3 class="header-text">COURSES APPLIED</h3>
			</div>
			<div class="section block">

			</div>
			<table id="example2" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>ID</th>
						<th>Course</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach ($courses as $key => $value) 
					<tr>
						<td>{{ $key+1 }}</td>
						<td>
							<div class="row">
								<div class="col-lg-9 clearfix">
									<span class="name">{{ $key + 1 }}. {{ $value->name }}</span> <span class="code">({{ $value->classification }})</span> -
									<span class="university">{{ $value->university->name }} ({{ $value->country() }})</span>
								</div>
							</div>
						</td>
						@if ($value->receive_status == 1 && $value->review_status == 0)
						<td><a href="#" class="btn btn-info btn-xs" onclick="showReview('{{ route('admin.applyCourse.confirmReview', ['user_id'=>$user->id, 'course_id'=>$value->id]) }}')">Review</a></td>
						@endif
						@if ($value->review_status == 2)
						<td><button disabled class="btn btn-danger btn-xs">Review</button></td>
						@endif
						@if ($value->review_status == 1 && $value->submit_status == 0)
						<td><a href="#" class="btn btn-success btn-xs" onclick="showCommit('{{ route('admin.applyCourse.submit', ['user_id'=>$user->id, 'course_id'=>$value->id]) }}')">Submit</a></td>
						@endif
						@if ($value->submit_status == 2)
						<td><button disabled class="btn btn-danger btn-xs">Submit</button></td>
						@endif
						@if ($value->submit_status == 1)
						<td><a href="{{ route('admin.applyCourse.outcome',['user_id'=>$user->id, 'course_id'=>$value->id]) }}" class="btn btn-warning btn-xs">Outcome</a></td>
						@endif
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<!-- /.box-body -->
	</div>
	<!-- /.box -->
</div>

<!-- Modal review -->
<div class="modal fade" id="modal-review" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Confirm review</h4>
			</div>
			<div class="modal-body">
				<p>Are you sure?</p>
			</div>
			<div class="modal-footer">
				<a href="#" class="btn btn-success" id="accept-review">Accept</a>
				<a href="#" class="btn btn-warning" id="deny-review">Deny</a>
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
				<a href="#" class="btn btn-success" id="accept-submit">Submit</a>
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
	function showReview(url) {
		$('#modal-review').modal('show');
		$('#accept-review').attr('href', url+'/'+1);
		$('#deny-review').attr('href', url+'/'+2);
	}

	function showCommit(url) {
		$('#modal-submit').modal('show');
		$('#accept-submit').attr('href', url+'/'+1);
		$('#deny-submit').attr('href', url+'/'+2);
	}
</script>
@endsection