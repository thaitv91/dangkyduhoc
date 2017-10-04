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
							@if($errors->has('name'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('name')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Lat</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="lat" id="lat" value="{{ old('lat') }}">
							@if($errors->has('lat'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('lat')}}</strong>
	                            </span>   
	                        @endif
						</div>
					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Long</label>
						<div class="col-md-9">
							<input type="text" class="form-control" name="lng" id="lng" value="{{ old('lng') }}">
						@if($errors->has('lng'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('lng')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					
					<div class="form-group row">
						<label class="col-md-3">Map</label>
						<div class="col-md-9">
							<select class="selectpicker " id="map_id" name="map_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                              <option disabled selected></option>
                              @if(count($map)!=0)
                                  @foreach($map as $db_map)
                                  <option value="{{$db_map->id}}" data-tokens="{{$db_map->title}}" >{{$db_map->title }} </option>
                                  @endforeach
                               @endif
                              @if(count($map)==0)
                              <option value=""><em>(Don't have)</em></option>
                             @endif
                           </select>
                           @if($errors->has('map_id'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('map_id')}}</strong>
	                            </span>   
	                        @endif
						</div>

					</div>
					<div class="form-group row">
						<label  class="col-md-3" for="name">Type</label>
						<div class="col-md-9">
							<select class="form-control" id="type" name="type">
								<option value=""></option>
							    <option value="home">Footer Home</option>
							    <option value="coffee">Coffee</option>
							    <option value="store">Grocery store</option>
							    <option value="bank">Bank</option>
							    <option value="restaurant">Restaurant</option>
							    <option value="shopping">Shopping</option>
							    <option value="park">Park</option>
							    <option value="bus_stop">Bus stop</option>
							    <option value="airport">Airport</option>
							  </select>
							@if($errors->has('type'))
	                            <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('type')}}</strong>
	                            </span>   
	                        @endif	
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Submit</button>
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
  @endsection