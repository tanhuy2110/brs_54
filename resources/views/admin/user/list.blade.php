@extends('admin.master')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>#</th>
                <th>{{ trans('admin.name') }}</th>
                <th>{{ trans('admin.level') }}</th>
                <th>{{ trans('admin.delete') }}</th>
                <th>{{ trans('admin.edit') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd gradeX" align="center">
                <td>1</td>
                <td>quoctuan</td>
                <td>Superadmin</td>
                <td>Hiện</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('admin.delete') }}</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('admin.edit') }}</a></td>
            </tr>
        </tbody>
    </table>
@endsection
