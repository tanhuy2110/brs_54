@extends('admin.master')
@section('content')
    <div class="col-lg-7" style="padding-bottom:120px">
        <form action="" method="POST">
            <div class="form-group">
                {!! Form::label('name', trans('admin.name'), ['class' => 'control-label']) !!}
                {!! Form::text('txtUser', old('txtUser'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.email'), ['class' => 'control-label']) !!}
                {!! Form::text('txtEmail', old('txtEmail'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.userlevel'), ['class' => 'control-label']) !!}
                <label class="radio-inline">
                    {!! Form::radio('name', '0'); !!}
                </label>
                <label class="radio-inline">
                    {!! Form::radio('name', '1'); !!}
                </label>
            </div>
            {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        <form>
    </div>
@endsection
