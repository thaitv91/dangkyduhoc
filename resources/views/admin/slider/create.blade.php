@extends('layouts.admin')

@section('title')

@endsection

@section('css')
<link href="{{ asset('css/dropzone.min.css') }}" rel="stylesheet">
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
		<form role="form" id="form-create" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="name">Name</label>
						<input type="text" class="form-control" name="name" id="name" value="{{ old('name') }}">
						@if($errors->has('name'))
                            <span class="help-block">
                                <strong style="color: red;">{{$errors->first('name')}}</strong>
                            </span>   
                        @endif
					</div>
					<div class="form-group">
						<label for="name">Image</label>
						<div class="dropzone" id="dz">
							<div class="fallback">
								<input name="file" type="file" multiple />
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

@section('scripts')
<script type="text/javascript" src="{{ asset('js/dropzone.min.js') }}"></script>
<script type="text/javascript">
	$.ajaxSetup({
		headers : {
			'X-CSRF-TOKEN': "{{ csrf_token() }}",
		}
	});
</script>
<script type="text/javascript">
	Dropzone.options.dz = {
        url : '{{ route("admin.slider.uploadImage") }}',
        maxFilesize: 2, // MB
        addRemoveLinks: true,
        minFiles : 1,
        acceptedFiles : 'image/jpeg, images/jpg, image/png',
        init : function(){
            var fileList = new Array;
            var fileList_count = 0;
            var thisDropzone = this;

            this.on("removedfile", function(file) {
                $.ajax({
                    type: 'POST',
                    url: '{{ route("admin.slider.removeImage") }}',
                    data : {
                        _token: $('input[name = "_token"]').val(), 
                        name: file.serverFileName,
                    }
                }).done(function(data){
                    if(data == -1){//New Image
                        var index = fileList.indexOf(file);
                        delete fileList[index];
                        var img_info_id = "img_info"+index;
                        $("#"+img_info_id).remove();
                    }else{ //Old image
                        var img_info_id = "img_info"+fileList_count;
                        var hidden_data = '<input name = "img_info[]" type="hidden" value="1,' + file.serverFileName+'" id="'+img_info_id+'" />';
                        $('#form-create').append(hidden_data);
                    }
                });
            } );
            this.on("success", function(file, serverFileName) {
                // Change the name of image
                var name = file.previewElement.querySelector("[data-dz-name]");
                name.dataset.dzName = serverFileName;
                name.innerHTML = serverFileName;
                file.serverFileName = serverFileName;
                // Add a image into list of images
                // fileList[fileList_count++] = file;
                fileList[++fileList_count] = file;
                // Append a div to save information for saving
                var img_info_id = "img_info"+fileList_count;
                var hidden_data = '<input name = "img_info[]" type="hidden" value="' + 0 +","+file.serverFileName+'" id="'+img_info_id+'" />';
                $('#form-create').append(hidden_data);
            } );

            this.on("sending", function(file, xhr, formData){
                formData.append("_token", "{{ csrf_token() }}");
            });

        }//Init function
};//Dropzoen
</script>
@endsection