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
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif

            @if (Session::has('error'))
                <div class="alert alert-error">{{ Session::get('error') }}</div>
            @endif
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" id="form-edit" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="col-md-8 col-md-offset-2">
                    <div class="box-body">

                        <div class="form-group row">
                            <label  class="col-md-3" for="main_course_slug">Main Course slug</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="main_course_slug" id="main_course_slug" value="{{ old('main_course_slug') }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3">Main University</label>
                            <div class="col-md-9">
                                <select class="selectpicker " id="main_uni_id" name="main_uni_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                                    <option disabled selected></option>
                                    @if( $main_university->count() > 0)
                                        @foreach($main_university as $university)
                                            <option value="{{$university->id}}" data-tokens="{{$university->name}}" >{{$university->name }} </option>
                                        @endforeach
                                    @else
                                        <option value=""><em>(Don't have)</em></option>
                                    @endif
                                </select>
                                @if($errors->has('main_uni_id'))
                                    <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('main_uni_id')}}</strong>
	                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-3">Pathway University</label>
                            <div class="col-md-9">
                                <select class="selectpicker " id="pathway_uni_id" name="pathway_uni_id" title="Choose one of the following..." data-live-search="true" tabindex="-98">
                                    <option disabled selected></option>
                                    @if( $pathway_university->count() > 0)
                                        @foreach($pathway_university as $university)
                                            <option value="{{$university->id}}" data-tokens="{{$university->name}}" >{{$university->name }} </option>
                                        @endforeach
                                    @else
                                        <option value=""><em>(Don't have)</em></option>
                                    @endif
                                </select>
                                @if($errors->has('pathway_uni_id'))
                                    <span class="help-block">
	                                <strong class="text-danger">{{$errors->first('pathway_uni_id')}}</strong>
	                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label  class="col-md-3" for="course_slug">Pathway Course slug</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="course_slug" id="course_slug" value="{{ old('course_slug') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <a href="{{ route('admin.pathway') }}" class="btn btn-default">Back</a>
                            <button type="submit" class="btn btn-primary">Create</button>
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