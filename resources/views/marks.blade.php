@extends('layouts.master')

@section('body')
  <div class="row">
      <div class="col-md-6">

      <a href="#"><button type="button" class="btn btn-lg btn-info">Add a new student</button></a>
      <hr><br>
          <table class="table table-bordered table-hover">
              <thead>
                  <tr>
                      <th>Serial</th>
                      <th>Name</th>
                      <th>Batch</th>
                      <th>Registration Number</th>
                      <th>Score</th>
                      <th>Comment</th>
                  </tr>
              </thead>
              <tbody>
              @foreach ($students as $student)
                  <tr>
                      <td>{{ $student->id }}</td>
                      <td>{{ $student->student_name }}</td>
                      <td>{{ $student->levels_id}}</td>
                      <td>{{ $student->reg_no }}</td>
                      <td><div class="form-group">
                        <input type="text" class="form-control" id="score">
                      </div></td>
                      <td><input type="text" class="form-control" id="score"></td>
                  </tr>
              @endforeach
              </tbody>
          </table>
      </div>
    </div>

@endsection
