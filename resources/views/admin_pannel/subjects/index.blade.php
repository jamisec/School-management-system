@extends('layouts.master')

@section('body')

  <div class="col-md-12">

  <a href=""><button type="button" class="btn btn-lg btn-info">Add a new subject</button></a>
  <hr><br>
      <table class="table table-bordered table-hover">
          <thead>
              <tr>
                  <th>#</th>
                  <th>Subject Name</th>
                  <th>Subject Code</th>
                  <th>Teacher</th>
                  <th>Edit</th>
                  <th>Delete</th>
              </tr>
          </thead>
          <tbody>
          @foreach ($subjects as $subject)
              <tr>
                  <td>{{ $subject->id }}</td>
                  <td>{{ $subject->subject_name }}</td>
                  <td>{{ $subject->subject_code }}</td>
                  <td>{{ $subject->teacher->teacher_name }}</td>
                  <td><a href=""><button type="button" class="btn btn-priamry">Edit</button></a></td>
                  <td><a href=""><button type="button" class="btn btn-danger">Delete</button></a></td>
              </tr>
          @endforeach
          </tbody>
      </table>
  </div>

@endsection
