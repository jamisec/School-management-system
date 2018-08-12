@extends('layouts.master')

@section('body')
  <div class="col-md-12">
            <form action="#" method="get" role="form">
            {{ csrf_field() }}
            	<legend>Manage Exam Marks</legend>

            	<div class="form-group">
                <label for="">Exam Term</label>
                <select name="term_name" id="" class="form-control" required="required">
                    <option value="">1<span>st</span> Term</option>
                    <option value="">2<span>nd</span> Term</option>
                    <option value="">3<span>rd</span> Term</option>
                </select>
            	</div>

            	<div class="form-group">
                <label for="batch">Batch</label>
                <select name="batch" id="inputteacher_id" class="form-control" required="required">
                    <option value="">7th</option>
                    <option value="">8th</option>
                    <option value="">9th</option>
                    <option value="">10th</option>
                </select>
            	</div>

            	<div class="form-group">
                <label for="subject">Subject</label>
                <select name="subject" id="" class="form-control" required="required">
                    <option value="">Math</option>
                    <option value="">Physics</option>
                    <option value="">Chemistry</option>
                    <option value="">Economics</option>
                </select>
            	</div>

            	<a href="#"><button type="submit" class="btn btn-primary">Manage Marks</button></a>
            </form>
        </div>

@endsection
