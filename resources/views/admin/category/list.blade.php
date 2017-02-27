@extends('admin.master')
@section('content')
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
            <tr class="odd gradeX" align="center">
                <td>1</td>
                <td>Áo Thun Nana</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('admin.delete') }}</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('admin.edit') }}</a></td>
            </tr>
            <tr class="even gradeC" align="center">
                <td>2</td>
                <td>Áo Thun Polo</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('admin.delete') }}</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('admin.edit') }}</a></td>
        </tbody>
    </table>
@endsection
