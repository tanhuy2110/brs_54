@extends('admin.master')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        {!! Form::open(['method' => 'post']) !!}
        	<div class="form-group">
                {!! Form::label('name', trans('admin.category'), ['class' => 'control-label']) !!}
                {!! Form::text('txtCateName', old('txtCateName'), ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
