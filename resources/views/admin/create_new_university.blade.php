@extends("admin")

@section("scripts")
@endsection
@section("content")
<div class="container-fluid">
	<h3 class="text-center">University Edit</h3>
	
	<div class="row">
		<div class="col-sm-6">
			<h4><strong>University table</strong></h4>
			<div class="form-group row">
				<label class="col-md-3">Name</label>
				<div class="col-md-9">
					<input type="text" class="form-control"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Slug</label>
				<div class="col-md-9">
					<input type="text" class="form-control"/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Country</label>
				<div class="col-md-9">
					<select class="form-control">
						<option>United Kingdom</option>
						<option>Australia</option>
						<option>United States</option>
						<option>Canada</option>
						<option>Switzerland</option>
						<option>Ireland</option>
					</select>
				</div>
			</div>

			<h4><strong>University metas</strong></h4>
			<div class="form-group row">
				<label class="col-md-3">About</label>
				<div class="col-md-9">
					<textarea class="form-control"></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Campus</label>
				<div class="col-md-9">
					<textarea class="form-control"></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Facebook</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Twitter</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Youtube</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Flickr</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Website</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Phone</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>
		</div><!-- /col-sm-6 -->

		<div class="col-sm-6">
			<h4><strong>University ranking</strong></h4>
			<div class="form-group row">
				<label class="col-md-3">Business studies</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Logistics</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Linguitics</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">English Literature</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Compuer science </label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<h4><strong>University statistic</strong></h4>
			<div class="form-group row">
				<label class="col-md-3">Year Founded</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Student Population</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Staff Population</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Male Number</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">Female Number</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-md-3">International Students</label>
				<div class="col-md-9">
					<input type="text" class="form-control">
				</div>
			</div>
		</div><!-- /col-sm-6 -->
	</div>

	<div class="text-center">
		<button class="btn btn-default">Cancel</button>
		<button class="btn btn-primary">Submit</button>
	</div>
</div>
@endsection