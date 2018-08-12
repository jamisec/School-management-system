@extends('layouts.master')

@section('body')
  <div class="col-md-6">
<<<<<<< HEAD
            <form action="/exam" method="post" role="form">
=======
            <form action="exam" method="POST" role="form">
>>>>>>> 6ebba68048a04fe16d582267d8f6765eebcc4a4a
            {{ csrf_field() }}
            	<legend>Create Exam Details</legend>

              <div class="form-group">
                  <label for="term_name" class="col-md-6 form-control-label ">{{ __('Term Name') }}</label>

                  <div class="col-md-6">
                      <input id="term_name" type="text" class="form-control{{ $errors->has('term_name') ? ' is-invalid' : '' }}" name="term_name" value="{{ old('term_name') }}" required autofocus>

                      @if ($errors->has('term_name'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('term_name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

            	<button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

@endsection
