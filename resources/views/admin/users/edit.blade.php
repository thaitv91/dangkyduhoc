@extends('layouts.admin')

@section('title')

@endsection


@section('content')
<div class="col-md-12">	
	<!-- general form elements -->
	<div class="box box-primary">

		<div class="box-header with-border">
			<h3 class="box-title">Edit User</h3>
		</div>
		<!-- /.box-header -->
		<!-- form start -->
		<form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
			{{ csrf_field() }}
			<div class="col-md-8 col-md-offset-2">
				<div class="box-body">
					<div class="form-group">
						<label for="name">User name</label>
						<input type="text" class="form-control" name="name" id="name" required="required" value="{{ $user->name }}">
					</div>

					<div class="form-group">
						<label for="email">Email address</label>
						<input type="email" class="form-control" name="email" id="email" required="required" value="{{ $user->email }}">
						@if ($errors->has('email'))
						<span class="help-block">
							<strong>{{ $errors->first('email') }}</strong>
						</span>
						@endif
					</div>

					<div class="form-group">
						<label for="avatar">Avatar</label>
						<input type="file" name="avatar" id="avatar">
						<!-- <p class="help-block">Example block-level help text here.</p> -->
						<p class="help-block">Choose an image from your computer</p>
						<img src="{{ Storage::disk('local')->url($user->getUserInfo->avatar) }}" id="preview_avatar" style="max-width: 676px">
					</div>

					<div class="form-group">
						<label for="password">Date of birth</label>
						<input type="text" class="form-control" name="dob" id="dob" value="{{ isset($user->getUserInfo->dob)?Carbon\Carbon::createFromFormat('Y-m-d',$user->getUserInfo->dob)->format('d/m/Y'):'' }}">
					</div>

					<div class="form-group">
						<label for="gender">Gender</label>
						<div class="form-group">
							<label>
								<input type="radio" name="gender" id="male" value="male" class="minimal" {{ (isset($user->getUserInfo->gender)&&$user->getUserInfo->gender=='male')?"checked":"" }}> 
								Male &nbsp
							</label>
							<label>
								<input type="radio" name="gender" id="female" value="female" class="minimal" {{ (isset($user->getUserInfo->gender)&&$user->getUserInfo->gender=='female')?"checked":"" }}> 
								&nbsp Female &nbsp
							</label>
							<label>
								<input type="radio" name="gender" id="other" value="other" class="minimal" {{ (isset($user->getUserInfo->gender)&&$user->getUserInfo->gender=='other')?"checked":"" }}> 
								&nbsp Other
							</label>
						</div>
					</div>

					<div class="form-group">
						<label for="password">Address</label>
						<input type="text" class="form-control" name="address" id="address" value="{{ $user->getUserInfo->address }}">
					</div>

					<div class="form-group">
						<label for="phone">Phone</label>
						<input type="text" class="form-control" name="phone" id="phone" value="{{ $user->getUserInfo->phone }}">
					</div>

					<div class="form-group">
						<label for="phone">Job</label>
						<input type="text" class="form-control" name="job" id="job" value="{{ $user->getUserInfo->job }}">
					</div>

					<div class="form-group">
						<label for="password"><span style="color: red;">*</span> Input Password if you want to change</label>
					</div>
					<div class="form-group">
						<label for="password">Old-Password</label>
						<input type="password" class="form-control" name="old_password" id="old_password">
					</div>
					@if ($errors->has('old_password'))
					<span class="help-block">
						<strong>{{ $errors->first('old_password') }}</strong>
					</span>
					@endif
					<div class="form-group">
						<label for="password">New-Password</label>
						<input type="password" class="form-control" name="password" id="password">
					</div>
					@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
					@endif

					<div class="form-group">
						<label for="password">Re-New-Password</label>
						<input type="password" class="form-control" name="password_confirmation" id="password-confirm">
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

@push('scripts')
<script type="text/javascript">
	$('#dob').datepicker({
		autoclose : true,
		format : 'dd/mm/yyyy',
	});
	$('#country').select2();
</script>
<script type="text/javascript">
	function readURL(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#preview_avatar').attr('src', e.target.result);
				$('#preview_avatar').css('display', 'block');
				console.log(e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}
	$("#avatar").change(function() {
		readURL(this);
	});
</script>
@endpush