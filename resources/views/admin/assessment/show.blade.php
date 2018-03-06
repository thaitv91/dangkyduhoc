@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Show</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		<div class="col-md-8 col-md-offset-1">
			<div class="box-body">
				<div class="row form-group">
					<div class="col-md-4">
						<label class="label-control">Name: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->name }}</p></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label class="label-control">Email: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->email }}</p></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label class="label-control">Phone: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->phone }}</p></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label for="name" class="label-control">Course completed: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->course_completed }}</p></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label for="name" class="label-control">Countries name: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->countries }}</p></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label class="label-control">Subjects: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->course_interest }}</p></div>
				</div>
				<div class="row form-group">
					<div class="col-md-4">
						<label class="label-control">Send at: </label>
					</div>
					<div class="col-md-8"><p>{{ $assessment->created_at->format('d/m/Y H:i') }}</p></div>
				</div>
			</div>
			<!-- /.box-body -->
		</div>
		<div class="clearfix"></div>
		<div class="box-footer">
			<div class="row">
				<div class="col-md-8 col-md-offset-1">
					<a href="{{ route('admin.assessment.list') }}" class="btn btn-default">Back</a>
				</div>
			</div>
		</div>
	</div>
	<!-- /.box -->
</div>
@endsection

@section('scripts')
<script type="text/javascript">
</script>
@endsection