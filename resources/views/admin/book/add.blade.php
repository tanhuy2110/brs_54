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
        {!! Form::open(['method' => 'post', 'action' => 'BookController@store', 'files' => true]) !!}
            <div class="form-group">
                {!! Form::label('name', trans('admin.category'), ['class' => 'control-label']) !!}
                {!! Form::select('category_id', $categories, null, [
                    'class' => 'form-control',
                    'placeholder' => trans('admin.choose_category'),
                ]); !!} 
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.title'), ['class' => 'control-label']) !!}
                {!! Form::text('title', old('title'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.author'), ['class' => 'control-label']) !!}
                {!! Form::text('author', old('author'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.pagenum'), ['class' => 'control-label']) !!}
                {!! Form::text('number_page', old('number_page'), ['class' => 'form-control']) !!}
            </div>    
            <div class="form-group">
                {!! Form::label('name', trans('admin.ratingnum'), ['class' => 'control-label']) !!}
                {!! Form::text('avg_rating', old('avg_rating'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.date'), ['class' => 'control-label']) !!}
                {!! Form::date('public_date', \Carbon\Carbon::now()) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.image'),['class' => 'control-label']) !!}
                {{ Form::file('image', ['class' => 'field']) }}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.description'), ['class' => 'control-label']) !!}
                {!! Form::textarea('description', old('description'), ['class' => 'form-control','rows' => '4']) !!}
            </div>
            {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
