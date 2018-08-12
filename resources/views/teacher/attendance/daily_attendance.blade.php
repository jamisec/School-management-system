@extends('layouts.master')

@section('body')
  <div class="col-md-6">
            <form action="{{route('store.levels')}}" method="POST" role="form">
            {{ csrf_field() }}
            	<legend>Daily Attendance</legend>

              <div class="form-group">
                  <label for="name" class="col-md-6 form-control-label ">{{ __('Date') }}</label>

                  <div class="col-md-6">
                      <input id="name" type="datetime" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                      @if ($errors->has('name'))
                          <span class="invalid-feedback">
                              <strong>{{ $errors->first('name') }}</strong>
                          </span>
                      @endif
                  </div>
              </div>

              <div class="form-group">
                  <label for="" class="col-md-6 form-control-label">{{ __('Batch') }}</label>
                  <div class="col-md-6">
                    <select name="levels_id" id="inputlevel_id" class="form-control" required="required">
                        @foreach ($levels as $level)
                          <option value="{{ $level->id }}">{{ $level->name }}</option>
                        @endforeach
                    </select>
                  </div>
              </div>

            	<button type="submit" class="btn btn-primary">Manage Attendance</button>
            </form>
        </div>

@endsection
