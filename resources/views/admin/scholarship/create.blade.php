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
            <form role="form" id="form-edit" method="POST" action="{{ route('admin.scholarship.create.post') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-8 col-md-offset-2">
                    <div class="box-body">

                        <div class="form-group row">
                            <label  class="col-md-3" for="name">Course slug</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="course_slug" id="course_slug" value="{{ old('course_slug') }}">
                            </div>
                        </div>

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
                            <label  class="col-md-3" for="quantity">Quantity</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="quantity" id="quantity" value="{{ old('quantity') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-3" for="quantity_en">Quantity En</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="quantity_en" id="quantity_en" value="{{ old('quantity_en') }}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label  class="col-md-3" for="description">Description</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="description" id="description" value="{{ old('description') }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label  class="col-md-3" for="description_en">Description En</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="description_en" id="description_en" value="{{ old('description_en') }}">
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
