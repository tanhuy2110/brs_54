@extends('admin.master')
@section('content')
    <div class="col-lg-7">
        {!! Form::open(['method' => 'post']) !!}
            <div class="form-group">
                {!! Form::label('name', trans('admin.category'), ['class' => 'control-label']) !!}
                {!! Form::select('size', ['L' => 'Large', 'S' => 'Small'], null , ['class' => 'form-control'] )!!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.name'), ['class' => 'control-label']) !!}
                {!! Form::text('txtNameCate', old('txtNameCate'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.title'), ['class' => 'control-label']) !!}
                {!! Form::text('txtTitle', old('txtTitle'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.author'), ['class' => 'control-label']) !!}
                {!! Form::text('txtAuthor', old('txtAuthor'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.pagenum'), ['class' => 'control-label']) !!}
                {!! Form::text('txtPageNum', old('txtPageNum'), ['class' => 'form-control']) !!}
            </div>    
            <div class="form-group">
                {!! Form::label('name', trans('admin.ratingnum'), ['class' => 'control-label']) !!}
                {!! Form::text('txtRatingNum', old('txtRatingNum'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.date'), ['class' => 'control-label']) !!}
                {!! Form::text('txtPublicDate', old('txtPublicDate'), ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('name', trans('admin.description'), ['class' => 'control-label']) !!}
                {!! Form::textarea('txtDescription', old('txtDescription'), ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit(trans('admin.add'), ['class' => 'btn btn-primary btn_save']) !!}
            {!! Form::reset(trans('admin.reset'), ['class' => 'btn btn-primary btn-danger']) !!}
        {!! Form::close() !!}
    </div>
@endsection
