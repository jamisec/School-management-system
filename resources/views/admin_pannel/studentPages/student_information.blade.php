@extends('layouts.master')

@section('body')
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
          <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Registration No</th>
                <th>Batch</th>
                <th></th>
              </tr>
          </thead>

          @foreach ($students as $student)
          <tbody>
            <tr>
                <td>{{$student->id}}</td>
                <td>{{$student->image}}</td>
                <td>{{$student->student_name}}</td>
                <td>{{$student->email}}</td>
                <td>{{$student->reg_no}}</td>
                <td>{{$student->batch}}</td>
                <td><a href="#"><button type="button" class="btn btn-priamry">View Profile</button></a></td>
            </tr>
                @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection
