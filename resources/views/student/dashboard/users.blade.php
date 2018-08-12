@extends('layouts.master')

@section('body')
  <div class="row">
    <div class="col-md-12">
      <table class="table table-bordered">
          <thead>
              <tr>
                <th>Photo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact No</th>
                <th></th>
              </tr>
          </thead>

          @foreach ($teachers as $teacher)
          <tbody>
              <tr>
                  <td>{{$teacher->image}}</td>
                  <td>{{$teacher->teacher_name}}</td>
                  <td>{{$teacher->email}}</td>
                  <td>{{$teacher->contact}}</td>
                  <td><a href="#"><button type="button" class="btn btn-priamry">View Profile</button></a></td>
              </tr>
                @endforeach
          </tbody>
      </table>
    </div>
  </div>
@endsection
