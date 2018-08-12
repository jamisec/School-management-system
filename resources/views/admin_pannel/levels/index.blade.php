@extends('layouts.master')

@section('body')

<div class="col-md-8">

<a href="#"><button type="button" class="btn btn-lg btn-info">Add a new level</button></a>
<hr><br>
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($levels as $level)
            <tr>
                <td>{{ $level->id }}</td>
                <td>{{ $level->name }}</td>
                <td><a href=""><button type="button" class="btn btn-priamry">Edit</button></a></td>
                <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection
