@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{{ trans('admin.category') }}
            <small>{{ trans('admin.list') }}</small>
        </h1>
    </div>
    @if (session('notification'))
        <div class="alert alert-success">
            {{ session('notification') }}
        </div>
    @endif
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>#</th>
                <th>{{ trans('admin.category') }}</th>
                <th>{{ trans('admin.title') }}</th>
                <th>{{ trans('admin.author') }}</th>
                <th>{{ trans('admin.pagenum') }}</th>
                <th>{{ trans('admin.description') }}</th>
                <th>{{ trans('admin.rating') }}</th>
                <th>{{ trans('admin.image') }}</th>
                <th>{{ trans('admin.date') }}</th>
                <th>{{ trans('admin.edit') }}</th>
                <th>{{ trans('admin.delete') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $value)
                <tr class="odd gradeX" align="center">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->category->name }}</td>
                    <td>{{ $value->title }}</td>
                    <td>{{ $value->author }}</td>
                    <td>{{ $value->number_page }}</td>
                    <td>{{ $value->description }}</td>
                    <td>{{ $value->avg_rating }}</td>
                    <td><img class="image_book" src="{!! Storage::url($value->image) !!}"></td>
                    <td>{{ $value->public_date }}</td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ action('BookController@edit', $value->id) }}">{{ trans('admin.edit') }}</a></td>
                    <td class="center">
                        {{ Form::open(['action' => ['BookController@destroy', $value->id], 'method' =>'delete', 'class' => 'form-delete', 'onsubmit' => 'return ConfirmDelete()' ]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>                
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
