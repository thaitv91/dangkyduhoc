@extends('layouts.admin')

@section('title')

@endsection

@push('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{ url('plugins/datatables/dataTables.bootstrap.css') }}">
@endpush

@section('content')
<form method="POST">
	{{ csrf_field() }}
<div class="box">
	<div class="box-header">
		<div class="col-md-11"><h3 class="box-title">Apply course</h3></div>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<div class="form-group">
			<div class="row">
				<div class="col-md-9 col-md-3-offset">
					<label class="col-md-3">Course: </label>
					<div class="col-md-9">
						<span>{{ $course->name }}</span>
						<span class="classification">BA (Hons)</span>
					</div>
				</div>
				<div class="col-md-9 col-md-3-offset">
					<label class="col-md-3">University: </label>
					<div class="col-md-9">
						<span>{{ $course->university->name }} , {{ $course->country() }},  {{ $course->information->duration}} years</span>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-9 col-md-3-offset">
					<label class="col-md-3" for="note">Note</label>
					<div class="col-md-9">
						<textarea id="note" name="note" class="label-control col-md-8 form-control"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<button type="submit" class="btn btn-primary">Accept</button>
					<a href="{{ route('admin.applyCourse') }}" class="btn btn-default">Cancel</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
</form>
@endsection

@section('scripts')

@endsection