@extends('admin.master')
@section('content')
    <div class="col-lg-12">
        <h1 class="page-header">{{ trans('admin.user') }}
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
                <th>{{ trans('admin.name') }}</th>
                <th>{{ trans('admin.email') }}</th>
                <th>{{ trans('admin.role') }}</th>
                <th>{{ trans('admin.image') }}</th>
                <th>{{ trans('admin.delete') }}</th>
                <th>{{ trans('admin.edit') }}</th>
            </tr>
        </thead>
        <tbody>
            <div id="hide" data-mesage=">{{ trans('admin.notification.deleteConfirm') }}"></div>
            @foreach ($users as $user)
                <tr class="odd gradeX" align="center">
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role }}</td>
                    <td><img class="image_book" src="{!! Storage::url($user->image) !!}"></td>
                    <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{ action('UserController@edit', $user->id) }}">{{ trans('admin.edit') }}</a></td>
                    <td class="center">
                        {{ Form::open(['action' => ['UserController@destroy', $user->id], 'method' =>'delete', 'class' => 'form-delete', 'onsubmit' => 'return ConfirmDelete()' ]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                        {{ Form::close() }}
                    </td> 
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
