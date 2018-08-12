@extends('layouts.master')

@section('body')
<div class="col-md-12">
  <form class="" action="#" method="get">
    {{ csrf_field() }}

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>#</th>
                <th>Student Name</th>
                <th>Registration Number</th>
                <th>Marks Obtained</th>
                <th>Comment</th>
            </tr>
        </thead>
        <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                  <input type="number" name="score" value="">
                </td>
                <td>
                  <input type="text" name="comment" value="">
                </td>
                </tr>
        </tbody>
    </table>
    <button type="submit" class="btn btn-primary">Save Changes</button>
</div>
</form>


@endsection
