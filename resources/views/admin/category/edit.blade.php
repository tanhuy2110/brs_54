@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{{ trans('admin.category') }}
            <small>{{ $category->name }}</small>
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
        {!! Form::open([ 'method' => 'put', 'action' => ['CategoryController@update', $category->id] ]) !!}
        	<div class="form-group">
                {!! Form::label('name', trans('admin.category'), ['class' => 'control-label']) !!}
                {!! Form::text('txtCateName', old('txtCateName'), ['class' => 'form-control', 'placeholder' => $category->name ]) !!}
            </div>
            {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
