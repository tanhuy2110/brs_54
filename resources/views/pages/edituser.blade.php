@extends('pages.top_left_menu')
@section('bodypage')
	<h1 class="title-top">{{ trans('label.edituser') }}</h1>
    <div class="panel panel-default">
    <div class="panel-heading">{{ trans('label.inforacc') }}</div>
        <div class="panel-body">
            {!! Form::open(['method' => 'post']) !!}
                {!! Form::label('name', trans('admin.name'), ['class' => 'control-label']) !!}
                {!! Form::text('txtUser', old('txtUser'), ['class' => 'form-control']) !!}

                <br>
                {!! Form::label('name', trans('label.img'), ['class' => 'control-label']) !!}
                {!! Form::file('fImages') !!}
                <br>
                {!! Form::label('name', trans('label.passold'), ['class' => 'control-label']) !!}
                {!! Form::password('password',['class' => 'form-control']) !!}

                <br>
                {!! Form::label('name', trans('label.passnew'), ['class' => 'control-label']) !!}
                {!! Form::password('password',['class' => 'form-control']) !!}
                <br>

                {!! Form::label('name', trans('label.passcorm'), ['class' => 'control-label']) !!}
                {!! Form::password('password',['class' => 'form-control']) !!}

                <br>
                {!! Form::submit(trans('admin.edit'), ['class' => 'btn btn-default']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
</body>
</html>


