@extends('layouts.admin')

@section('title')

@endsection

@section('content')
<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">

        <div class="box-header with-border">
            <h3 class="box-title">Update</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="col-md-12">
                <div class="box-body">

                   <div class="form-group row">
                        <label  class="col-md-3" for="name">Search course</label>
                        <div class="col-md-9">
                            <input type="" id="course-search" class="form-control" placeholder="Input to search courses">
                        </div>
                    </div>

                    <div class="form-group row" id="searh-result">
                        <label  class="col-md-3" for="name">Course</label>
                        <div class="col-md-9">
                            <select name="course" id="course" class="form-control selectpicker" data-live-search="true" title="Select a course..." required>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-3" for="title">Title</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title" id="title">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-md-3" for="title_en">Title En</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="title_en" id="name_en">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-3" for="quantity">Quantity</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="quantity" id="quantity">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label  class="col-md-3" for="quantity_en">Quantity En</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="quantity_en" id="quantity_en" >
                        </div>
                    </div>


                    <div class="form-group row">
                        <label  class="col-md-3" for="description">Description</label>
                        <div class="col-md-9">
                            <textarea class="my-editor" name="description"></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label  class="col-md-3" for="description_en">Description En</label>
                        <div class="col-md-9">
                            <textarea class="my-editor" name="description_en"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('admin.scholarship') }}" class="btn btn-default">Back</a>
                    </div>
                </div>
                <!-- /.box-body -->
            </div>
        </form>
    </div>
    <!-- /.box -->
</div>

@endsection
@section('scripts')
<script>
    $('#form-edit').on('keyup keypress', function(e) {
        var keyCode = e.keyCode || e.which;
        if (keyCode === 13) {
            e.preventDefault();
            return false;
        }
    });

    $('#course-search').on('keyup ', function(e) {
        var keyword = $(this).val();
        e.preventDefault();
        if (keyword != '' && e.keyCode == 13){
            toastr.warning('Searching course...');
            $.ajax({
                headers: {'X-CSRF-Token': "{{csrf_token()}}" },
                url : "{{ route('admin.scholarship.searchCourse') }}",
                data : {keyword:keyword},
                type : 'POST',
            }).done(function (data){
                var html = '';
                $.each(data, function (index, value) {
                    html += '<option value="'+value.slug+'">'+value.name+'</option>';
                });
                $("#course").html(html).selectpicker('refresh');
                $("#course").attr('Select a course');
                toastr.success('Search successful');
            });
        }

        if(keyword == '') alert('Please input keyword to search course');
    });
</script>
@endsection
