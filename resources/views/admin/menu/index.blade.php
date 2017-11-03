@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Menu <small>list</small></h3>
			<a href="{{ route('admin.menu.create') }}" class="pull-right btn btn-success btn-xs">Create</a>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="list-column-1" action="{{ route('admin.menu.update1') }}" method="GET" enctype="multipart/form-data">
			<div class="col-md-10">
				<div class="box-body">
					<table class="table">
						<caption>Column 1</caption>
						<thead>
							<th>Order</th>
							<th>Type</th>
							<th>Title</th>
							<th>Weight</th>
							<th>Link</th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($column_1 as $key => $value)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>
									<select name="type[]" class="form-control" id="type_{{ $value->id }}" data-index="{{ $value->id }}" required>
										<option value="country" @if($value->type == 'country') selected @endif>Country</option>
										<option value="university" @if($value->type == 'university') selected @endif>University</option>
									</select>
								</td>
								<td>
									<select name="title[]" class="form-control selectpicker" id="title_{{ $value->id }}" data-index="{{ $value->id }}" data-live-search="true" required>
										@if ($value->type == 'country')
										@foreach ($countries as $country)
										<option value="{{ $country->name }}" @if($value->title == $country->name) selected @endif>{{ $country->name }}</option>
										@endforeach
										@else
										@foreach ($universities as $university)
										<option value="{{ $university->name }}" data-slug="{{ $university->slug }}" @if($university->id) @endif @if($value->link == $university->slug) selected @endif>{{ $university->name }}</option>
										@endforeach
										@endif
									</select>
								</td>
								<td><input type="text" name="weight[]" value="{{ $value->weight }}" id="weight_{{ $value->id }}" class="form-control" required></td>
								<td><input type="text" name="link[]" id="link_{{ $value->id }}" value="{{ $value->link }}" class="form-control"></td>
								<td><a onclick="confirmDelete({{$value->id}}); return false;" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				<div class="form-group">
					<div>
						<button type="submit" class="btn btn-primary">Update column 1</button>
					</div>
				</div>
			</div>
		</form>
		<form role="form" id="list-column-2" action="{{ route('admin.menu.update2') }}" method="GET" enctype="multipart/form-data">
			<div class="col-md-10">
				<div class="box-body">
					<table class="table">
						<caption>Column 2</caption>
						<thead>
							<th>Order</th>
							<th>Type</th>
							<th>Title</th>
							<th>Weight</th>
							<th>Link</th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($column_2 as $key => $value)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>
									<select name="type[]" class="form-control" id="type_{{ $value->id }}" data-index="{{ $value->id }}" required>
										<option value="country" @if($value->type == 'country') selected @endif>Country</option>
										<option value="university" @if($value->type == 'university') selected @endif>University</option>
									</select>
								</td>
								<td>
									<select name="title[]" class="form-control selectpicker" id="title_{{ $value->id }}" data-index="{{ $value->id }}" data-live-search="true" required>
										@if ($value->type == 'country')
										@foreach ($countries as $country)
										<option value="{{ $country->name }}" @if($value->title == $country->name) selected @endif>{{ $country->name }}</option>
										@endforeach
										@else
										@foreach ($universities as $university)
										<option value="{{ $university->name }}" data-slug="{{ $university->slug }}" @if($university->id) @endif @if($value->link == $university->slug) selected @endif>{{ $university->name }}</option>
										@endforeach
										@endif
									</select>
								</td>
								<td><input type="text" name="weight[]" value="{{ $value->weight }}" id="weight_{{ $value->id }}" class="form-control" required></td>
								<td><input type="text" name="link[]" id="link_{{ $value->id }}" value="{{ $value->link }}" class="form-control"></td>
								<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				<div class="form-group">
					<div>
						<button type="submit" class="btn btn-primary">Update column 2</button>
					</div>
				</div>
			</div>
		</form>
		<form role="form" id="list-column-3" action="{{ route('admin.menu.update3') }}" method="GET" enctype="multipart/form-data">
			<div class="col-md-10">
				<div class="box-body">
					<table class="table">
						<caption>Column 3</caption>
						<thead>
							<th>Order</th>
							<th>Type</th>
							<th>Title</th>
							<th>Weight</th>
							<th>Link</th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($column_3 as $key => $value)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>
									<select name="type[]" class="form-control" id="type_{{ $value->id }}" data-index="{{ $value->id }}" required>
										<option value="country" @if($value->type == 'country') selected @endif>Country</option>
										<option value="university" @if($value->type == 'university') selected @endif>University</option>
									</select>
								</td>
								<td>
									<select name="title[]" class="form-control selectpicker" id="title_{{ $value->id }}" data-index="{{ $value->id }}" data-live-search="true" required>
										@if ($value->type == 'country')
										@foreach ($countries as $country)
										<option value="{{ $country->name }}" @if($value->title == $country->name) selected @endif>{{ $country->name }}</option>
										@endforeach
										@else
										@foreach ($universities as $university)
										<option value="{{ $university->name }}" data-slug="{{ $university->slug }}" @if($university->id) @endif @if($value->link == $university->slug) selected @endif>{{ $university->name }}</option>
										@endforeach
										@endif
									</select>
								</td>
								<td><input type="text" name="weight[]" value="{{ $value->weight }}" id="weight_{{ $value->id }}" class="form-control" required></td>
								<td><input type="text" name="link[]" id="link_{{ $value->id }}" value="{{ $value->link }}" class="form-control"></td>
								<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				<div class="form-group">
					<div>
						<button type="submit" class="btn btn-primary">Update column 3</button>
					</div>
				</div>
			</div>
		</form>
		<form role="form" id="list-column-4" action="{{ route('admin.menu.update4') }}" method="GET" enctype="multipart/form-data">
			<div class="col-md-10">
				<div class="box-body">
					<table class="table">
						<caption>Column 4</caption>
						<thead>
							<th>Order</th>
							<th>Type</th>
							<th>Title</th>
							<th>Weight</th>
							<th>Link</th>
							<th></th>
						</thead>
						<tbody>
							@foreach ($column_4 as $key => $value)
							<tr>
								<td>{{ $key+1 }}</td>
								<td>
									<select name="type[]" class="form-control" id="type_{{ $value->id }}" data-index="{{ $value->id }}" required>
										<option value="country" @if($value->type == 'country') selected @endif>Country</option>
										<option value="university" @if($value->type == 'university') selected @endif>University</option>
									</select>
								</td>
								<td>
									<select name="title[]" class="form-control selectpicker" id="title_{{ $value->id }}" data-index="{{ $value->id }}" data-live-search="true" required>
										@if ($value->type == 'country')
										@foreach ($countries as $country)
										<option value="{{ $country->name }}" @if($value->title == $country->name) selected @endif>{{ $country->name }}</option>
										@endforeach
										@else
										@foreach ($universities as $university)
										<option value="{{ $university->name }}" data-slug="{{ $university->slug }}" @if($university->id) @endif @if($value->link == $university->slug) selected @endif>{{ $university->name }}</option>
										@endforeach
										@endif
									</select>
								</td>
								<td><input type="text" name="weight[]" value="{{ $value->weight }}" id="weight_{{ $value->id }}" class="form-control" required></td>
								<td><input type="text" name="link[]" id="link_{{ $value->id }}" value="{{ $value->link }}" class="form-control"></td>
								<td><a href="" class="btn btn-danger btn-xs">Delete</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				<div class="form-group">
					<div>
						<button type="submit" class="btn btn-primary">Update column 4</button>
					</div>
				</div>
			</div>
		</form>
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
	$('[name="type[]"]').on('change', function(){
		var type = $(this).val();
		var index = $(this).data('index');
		$('#title_'+index).selectpicker("destroy");
		$('#title_'+index).append('<option>Loading data...</option>');
		if (type == 'country') {
			var html = '<option disabled selected>-- Select Country --</option>';
			@foreach($countries as $country)
			html += '<option value="{{ $country->name }}">{{ $country->name }}</option>';
			@endforeach
			$('#link_'+index).val('');
			$('#title_'+index).empty();
			$('#title_'+index).append(html);
			$("#title_"+index).selectpicker("refresh");
		} else {
			$('#title_'+index).empty();
			var html = '<option disabled selected>-- Select University --</option>';
			@foreach($universities as $university)
			html += '<option value="{{ $university->id }}" data-slug="{{ $university->slug }}">{{ $university->name }}</option>';
			@endforeach
			$('#title_'+index).empty();
			$('#title_'+index).append(html);
			$('#title_'+index).selectpicker();
		}
	});

	$('[name="title[]"]').on('change', function() {
		var index = $(this).data('index');
		var slug = $(this).find(':selected').data('slug');
		$('#link_'+index).val(slug);
	});

	function confirmDelete(id) {
		$.ajax({
			url : '{{ route("admin.menu.getUrlDelete") }}',
			data : {id:id},
		}).done(function(data) {
			if (data == -1) {
				alert('Opp! Please try again. Error!');
			} else {
				$('#modal-delete a').attr('href',data);
				$('#modal-delete').modal('show');
			}
		});

		return false;
	}
</script>
@endsection