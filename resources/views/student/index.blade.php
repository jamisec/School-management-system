@extends('layouts.master')

@section('body')
  <div class="row">
      <div class="col-md-8 col-md-offset-2">

      <a href="#"><button type="button" class="btn btn-lg btn-info">Add a new syudent</button></a>
      <hr><br>
          <table class="table table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Serial</th>
                      <th>Name</th>
                      <th>Department</th>
                      <th>Batch</th>
                      <th>Registration Number</th>
                      <th>Date Of Birth</th>
                      <th>Email</th>
                      <th>Image</th>
                      <th>Edit</th>
                      <th>Delete</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($students as $student)
                  <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->teacher_name }}</td>
                      <td>{{ $student->department }}</td>
                      <td>{{ $student->batch }}</td>
                      <td>{{ $student->reg_no }}</td>
                      <td>{{ $student->dob }}</td>
                      <td>{{ $student->email }}</td>
                      <td>{{ $student->image }}</td>
                      <td><a href="/student/edit/{{ $student->id }}"><button type="button" class="btn btn-priamry">Edit</button></a></td>
                      <td><a href="/student/delete/{{ $student->id }}"><button type="button" class="btn btn-danger">Delete</button></a></td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
    </div>

@endsection
