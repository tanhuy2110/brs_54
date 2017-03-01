@extends('admin.master')
@section('content')
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>#</th>
                <th>{{ trans('admin.name') }}</th>
                <th>{{ trans('admin.category') }}</th>
                <th>{{ trans('admin.title') }}</th>
                <th>{{ trans('admin.author') }}</th>
                <th>{{ trans('admin.pagenum') }}</th>
                <th>{{ trans('admin.date') }}</th>
                <th>{{ trans('admin.edit') }}</th>
                <th>{{ trans('admin.delete') }}</th>
            </tr>
        </thead>
        <tbody>
            <tr class="odd gradeX" align="center">
                <td>1</td>
                <td>Áo Thun Nana</td>
                <td>200.000 VNĐ</td>
                <td>3 Minutes Age</td>
                <td>Hiện</td>
                <td>Hiện</td>
                <td>Hiện</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('admin.delete') }}</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('admin.edit') }}</a></td>
            </tr>
            <tr class="even gradeC" align="center">
                <td>2</td>
                <td>Áo Thun Polo</td>
                <td>250.000 VNĐ</td>
                <td>1 Hours Age</td>
                <td>Ẩn</td>
                <td>Hiện</td>
                <td>Hiện</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> {{ trans('admin.delete') }}</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">{{ trans('admin.edit') }}</a></td>
            </tr>
        </tbody>
    </table>
@endsection
