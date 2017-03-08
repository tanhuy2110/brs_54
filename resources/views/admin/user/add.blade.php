@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{{ trans('admin.book') }}
            <small>{{ trans('admin.add') }}</small>
        </h1>
    </div>
    <div class="col-lg-7" style="padding-bottom:120px">
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
        {!! Form::open(['method' => 'post', 'action' => 'UserController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('name', trans('admin.name'), ['class' => 'control-label']) !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.email'), ['class' => 'control-label']) !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.password'), ['class' => 'control-label']) !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.status'),['class' => 'control-label']) !!}
                {{ Form::select('status', ['0' => trans('admin.active'), '1' => trans('admin.wait')], null, [ 'class' => 'form-control' ]) }}
            </div>   
            <div class="form-group">
                {!! Form::label('name', trans('admin.role'),['class' => 'control-label']) !!}
                {{ Form::select('role', ['0' => trans('admin.user'), '1' => trans('admin.admin')], null, [ 'class' => 'form-control' ]) }}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.image'),['class' => 'control-label']) !!}
                {{ Form::file('avatar', ['class' => 'field']) }}
            </div>
            {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
