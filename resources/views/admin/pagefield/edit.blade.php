@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Edit</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			{{ method_field('PUT') }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group row">
						<label  class="col-md-3" for="name">Title</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="title" id="title" value="{{ $data['title'] }}">
							@if($errors->has('title'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('title')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Content</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="content" name="content" >{{ $data['content'] }}</textarea>    
							@if($errors->has('content'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('content')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Content English</label>
						<div class="col-md-9">
							<textarea class="form-control my-editor" rows="5" id="content_en" name="content_en" >{{ $data['content_en'] }}</textarea>    
							@if($errors->has('content_en'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('content_en')}}</strong>
	                            </span>   
	                        @endif
	                    </div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Type</label>
						<div class="col-md-9">
							<select class="form-control" id="type" name="type">
							    <option @if($data->type == 'text') selected @endif value="text">Text</option>
							    <option  @if($data->type == 'textarea') selected @endif value="textarea">Textarea</option>
							    <option  @if($data->type == 'checkbox') selected @endif value="checkbox">Checkbox</option>
							    <option @if($data->type == 'select') selected @endif value="select">Select</option>
							    <option  @if($data->type == 'submit') selected @endif value="submit">Submit</option>
							    <option  @if($data->type == 'radio') selected @endif value="radio">Radio</option>
							    <option  @if($data->type == 'file') selected @endif value="file">File</option>
							  </select>
	                    </div>
					</div>
					<div class="form-group row">
						<label class="col-md-3">Page</label>
						<div class="col-md-9">
							<select class="selectpicker " id="page_id" name="page_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($page)!=0)
                                  @foreach($page as $db_page)
                                  <option @if ($db_page->id == $data['page_id']) selected @endif value="{{$db_page->id}}" >{{$db_page->title }} </option>
                                  @endforeach
                               @endif
                              @if(count($page)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
						</div>
					</div>
					<div class="form-group">
						<a href="{{ route('admin.pagefield.index') }}" class="btn btn-default">Back</a>
						<button type="submit" class="btn btn-primary">Update</button>
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
<script type="text/javascript">
	@if ($data['type'] == 'select')
	tinymce.remove();
	@endif
	$('#type').on('change', function() {
		var type = $(this).val();
		if (type != 'select') {
			$('#content').addClass('my-editor');
			$('#content_en').addClass('my-editor');
			tinymce.PluginManager.add('placeholder', function (editor) {
				editor.on('init', function () {
					var label = new Label;
					onBlur();
					tinymce.DOM.bind(label.el, 'click', onFocus);
					editor.on('focus', onFocus);
					editor.on('blur', onBlur);
					editor.on('change', onBlur);
					editor.on('setContent', onBlur);
					function onFocus() { if (!editor.settings.readonly === true) { label.hide(); } editor.execCommand('mceFocus', false); }
					function onBlur() { if (editor.getContent() == '') { label.show(); } else { label.hide(); } }
				});
				var Label = function () {
					var placeholder_text = editor.getElement().getAttribute("placeholder") || editor.settings.placeholder;
					var placeholder_attrs = editor.settings.placeholder_attrs || { style: { position: 'absolute', top: '2px', left: 0, color: '#aaaaaa', padding: '.25%', margin: '5px', width: '80%', 'font-size': '17px !important;', overflow: 'hidden', 'white-space': 'pre-wrap' } };
					var contentAreaContainer = editor.getContentAreaContainer();
					tinymce.DOM.setStyle(contentAreaContainer, 'position', 'relative');
					this.el = tinymce.DOM.add(contentAreaContainer, "label", placeholder_attrs, placeholder_text);
				}
				Label.prototype.hide = function () { tinymce.DOM.setStyle(this.el, 'display', 'none'); }
				Label.prototype.show = function () { tinymce.DOM.setStyle(this.el, 'display', ''); }
			});
			tinymce.init({
				selector: 'textarea.my-editor',
				menubar: false,
				plugins: [
				'advlist autolink lists link image charmap print preview anchor',
				'searchreplace visualblocks code fullscreen',
				'insertdatetime media table contextmenu paste code'
				],
				toolbar: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
				content_css: [
				'//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
				'//www.tinymce.com/css/codepen.min.css'
				],
			});
		} else {
			tinymce.remove();
			$('#content').attr('placeholder','Please input following format `value:Name`');
			$('#content_en').attr('placeholder','Please input following format `value:Name`');
		}
	});
</script>
@endsection