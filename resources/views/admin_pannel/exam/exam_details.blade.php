@extends('layouts.master')

@section('body')
  <div class="row">
        <div class="col-md-8 col-md-offset-6">
            <div class="card">
                <div class="card-header text-center text-uppercase h4 font-weight-light">{{ __('Student Registration') }}</div>

                <div class="card-body py">
                    <form method="POST" action="{{route('register.form')}}">
                        @csrf

                      <div class="form-group">
                          <label for="" class="col-md-6 form-control-label">{{ __('Exam Manages') }}</label>
                          <div class="col-md-6">
                            <select name="exam_type_id" id="inputlevel_id" class="form-control" required="required">
                                @foreach ($term_name as $term)
                                  <option value="{{ $term->id }}">{{ $term->term_name }}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>
                      <div class="form-group">
                          <label for="" class="col-md-6 form-control-label">{{ __('Exam Manages') }}</label>
                          <div class="col-md-6">
                            <select name="id" id="inputlevel_id" class="form-control" required="required">
                                @foreach ($exams as $exam)
                                  <option value="{{ $exam->id }}">{{ $exam->exam_name }}</option>
                                @endforeach
                            </select>
                          </div>
                      </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
