@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{{ trans('admin.user') }}
            <small>{{ $user->name }}</small>
        </h1>
    </div>
    <div class="col-lg-7">
        @if (count($errors))
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif
        {!! Form::open([ 'method' => 'put', 'action' => ['UserController@update', $user->id ] ]) !!}
            <div class="form-group">
                {!! Form::label('name', trans('admin.name'), ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => $user->name]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.email'), ['class' => 'control-label']) !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control', 'placeholder' => $user->email]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.role'),['class' => 'control-label']) !!}
                {{ Form::select('role', ['0' => trans('admin.user'), '1' => trans('admin.admin')], null, [ 'class' => 'form-control' ]) }}
            </div>
            {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
