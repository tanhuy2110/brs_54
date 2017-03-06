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
                <th>{{ trans('label.category') }}</th>
                <th>{{ trans('admin.edit') }}</th>
                <th>{{ trans('admin.delete') }}</th>
            </tr>
        </thead>
        <tbody>
            <div id="hide" data-mesage=">{{ trans('admin.notification.deleteConfirm') }}"></div>
            @foreach ($categories as $value)
                <tr class="odd gradeX" align="center">
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->name }}</td>              
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ action('CategoryController@edit', $value->id) }}"> {{ trans('admin.edit') }}</a></td>
                    <td class="center">
                        {{ Form::open(['action' => ['CategoryController@destroy', $value->id], 'method' =>'delete', 'class' => 'form-delete', 'onsubmit' => 'return ConfirmDelete()' ]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
