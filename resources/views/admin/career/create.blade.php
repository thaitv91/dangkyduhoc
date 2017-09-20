@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Create</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Name En</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="name_en" id="name_en" value="{{ old('name_en') }}">
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Description</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="description" name="description" value="">{{ old('description') }}</textarea>    
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Description En</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="description_en" name="description_en" value="">{{ old('description_en') }}</textarea>    
	                    </div>
					</div>
					<div class="form-group row">
							<label  class="col-md-3" for="name">Regular Hours</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="regular_hours" name="regular_hours" type="checkbox" value="0"/>
                            <label for="regular_hours" class="label-info"></label>
                        </div>
							</div>
					</div>

					<div class="form-group row">
							<label  class="col-md-3" for="name">Fixed Pay</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="fixed_pay" name="fixed_pay" type="checkbox" value="0" />
                            <label for="fixed_pay" class="label-info"></label>
                        </div>
							</div>
					</div>

					<div class="form-group row">
							<label  class="col-md-3" for="name">Variable Pay</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="variable_pay" name="variable_pay" type="checkbox" value="0"/>
                            <label for="variable_pay" class="label-info"></label>
                        </div>
							</div>
					</div>

					<div class="form-group row">
							<label  class="col-md-3" for="name">Desk Bound</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="desk_bound" name="desk_bound" type="checkbox" value="0" />
                            <label for="desk_bound" class="label-info"></label>
                        </div>
							</div>
					</div>

					<div class="form-group row">
							<label  class="col-md-3" for="name">Smart Casual</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="smart_casual" name="smart_casual" type="checkbox" value="0" />
                            <label for="smart_casual" class="label-info"></label>
                        </div>
							</div>
					</div>
					<div class="form-group row">
							<label  class="col-md-3" for="name">On The Move</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="on_the_move" name="on_the_move" type="checkbox" value="0" />
                            <label for="on_the_move" class="label-info"></label>
                        </div>
							</div>
					</div>

					<div class="form-group row">
							<label  class="col-md-3" for="name">Formal Wear</label>
							<div class="col-md-9 col-sm-9 col-xs-12">
							<div class="material-switch">
                            <input id="formal_wear" name="formal_wear" type="checkbox" value="0" />
                            <label for="formal_wear" class="label-info"></label>
                        </div>
							</div>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<div class="box-footer">
				
			</div>
		</form>
	</div>
	<!-- /.box -->
</div>

@endsection
{{-- @section('scripts')
	<script>
	$('#regular_hours').on('change', function(){
   		this.value = this.checked ? 1 : 0;
	}).change();
</script>
@endsection --}}
