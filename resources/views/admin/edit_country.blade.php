@extends('layouts.admin')

@section("scripts")
@endsection
@section("content")
<div class="container-fluid">
	<div class="col-md-12">
        @if (Session::has('message'))
           <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        @if (Session::has('error'))
           <div class="alert alert-error">{{ Session::get('error') }}</div>
        @endif
        
        <form class="form-horizontal" role="form" method="POST" action="{{ route('countries.update', $country) }}">
            {{ csrf_field() }}
            <div class="col-md-12 form-group">
                <label for="name" class="col-md-4 control-label">Country Name: </label>
                <div class="col-md-6">

                    <input id="name" type="text" class="form-control" name="name" value="{{ $country->name }}" required autofocus>
                </div>
            </div>

            <div class="col-md-12 form-group">
                <label for="slug" class="col-md-4 control-label">Country Slug: </label>
                <div class="col-md-6">

                    <input id="slug" type="text" class="form-control" name="slug" value="{{ $country->slug }}" required autofocus>
                </div>
            </div>

            <div class="col-md-12 form-group">
                <label for="" class="col-md-4 control-label"></label>
                <div class="col-md-6">
                    <a href="{{ route('admin.countries') }}" class="btn btn-default">Back</a>
                    <input type="submit" name="submit" value="Update" class="btn btn-primary" />
                </div>
            </div>
        </form>
    </div>
</div>
@endsection