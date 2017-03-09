@include('admin.header')
{{ Html::style('css/admin/admin.css') }}
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">{{ trans('admin.sigin') }}</h3>
                    </div>
                    <div class="panel-body">
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
                            <div class="alert alert-danger">
                                {{ session('notification') }}
                            </div>
                        @endif
                        {!! Form::open(['method' => 'post', 'action' => 'UserController@postLoginAdmin']) !!}
                            <fieldset>
                                <div class="form-group">
                                    {!! Form::label('name', trans('admin.email'), ['class' => 'control-label']) !!}
                                    {!! Form::text('email', old('email'), ['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('name', trans('admin.password'), ['class' => 'control-label']) !!}
                                    {!! Form::password('password', ['class' => 'form-control']) !!}
                                </div>
                                {!! Form::submit(trans('admin.login'), ['class' => 'btn btn-primary btn-block']) !!}
                            </fieldset>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@include('admin.footer')
{{ Html::script('js/admin/admin.js') }}
</body>
</html>
