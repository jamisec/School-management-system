@extends('layouts.master')

@section('body')
  <div class="col-md-6">
            <form action="{{route('storeSubject')}}" method="post" role="form">
            {{ csrf_field() }}
            	<legend>Create a new subject</legend>

            	<div class="form-group">
            		<input name="subject_name" type="text" class="form-control" id="" placeholder="Enter subject name">
            	</div>

            	<div class="form-group">
            		<input name="subject_code" type="number" class="form-control" id="" placeholder="Enter subject code">
            	</div>

                <div class="form-group">
                <label for="">Teacher</label>
                <select name="teacher_id" id="inputteacher_id" class="form-control" required="required">
                @foreach ($teachers as $teacher)
                    <option value="{{ $teacher->id }}">{{ $teacher->teacher_name }}</option>
                @endforeach
                </select>
                </div>

            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

@endsection
