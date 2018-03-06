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
        <table id="users" class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">Name</th>
                    <th class="text-center">Slug</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
                @foreach ($countries as $country)
                    <tr>
                        <td class="text-center">{{ $country->name }}</td>
                        <td class="text-center">{{ $country->slug }}</td>
                        <td class="text-center"><a class="btn btn-warning btn-xs" href="/admin/countries/{{ $country->id }}/edit">Edit</a></td>
                        <td class="text-center"><a class="btn btn-danger btn-xs" href="/admin/user/countries/{{ $country->id }}/destroy" onclick="return confirm('Are you sure you want to Delete {{ $country->name }}?')">Delete</a></td>
                    </tr>
                @endforeach
            <tbody>
            </tbody>
        </table>
    </div>
</div>
@endsection