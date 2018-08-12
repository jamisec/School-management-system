@extends('layouts.master')

@section('body')
  <div class="col-md-6">
<<<<<<< HEAD
            <form action="/result" method="post" role="form">
=======
            <form action="/result" method="get" role="form">
>>>>>>> 6ebba68048a04fe16d582267d8f6765eebcc4a4a
            {{ csrf_field() }}
            	<legend>Create Exam Details</legend>

              <div class="form-group">
                  <label for="" class="col-md-6 form-control-label">{{ __('Term Name') }}</label>
                  <div class="col-md-6">
                    <select name="exam_type_id" id="" class="form-control" required="required">
                        @foreach ($exams as $exam)
                          <option value="{{ $exam->exam_type_id }}">{{ $exam->term_name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

              <div class="form-group">
                  <label for="exam_name" class="col-md-6 form-control-label ">{{ __('Exam Name') }}</label>

                  <div class="col-md-6">
                      <input id="exam_name" type="text" class="form-control{{ $errors->has('exam_name') ? ' is-invalid' : '' }}" name="exam_name" value="{{ old('exam_name') }}" required autofocus>

                      @if ($errors->has('exam_name'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('exam_name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

            	<button type="submit" class="btn btn-primary" name="manage_marks" value="manage_marks">Manage Marks</button>
            </form>
        </div>

@endsection
