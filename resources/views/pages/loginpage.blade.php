@include('admin.header')
{{ Html::style('css/page/loginpage.css') }}
<body>
    <div class="form">      
        <ul class="tab-group">
            <li class="tab active"><a href="#signup">{{ trans('admin.signup') }}</a></li>
            <li class="tab"><a href="#login">{{ trans('admin.sigin') }}</a></li>
        </ul>
      
        <div class="tab-content">
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
            <div id="signup">   
                <h1>{{ trans('admin.sigupfree') }}</h1>              
                {!! Form::open(['method' => 'post', 'action' => 'Pages\PagesController@postRegister']) !!}
                    <div class="top-row">
                        <div class="field-wrap">                           
                            {!! Form::label('name', trans('admin.name')) !!}
                            {!! Form::text('name', old('name')) !!}
                        </div>                 
                        <div class="field-wrap">
                            {!! Form::label('name', trans('admin.email')) !!}
                            {!! Form::text('email', old('email')) !!}
                        </div>
                    </div>              
                    <div class="field-wrap">
                        {!! Form::label('name', trans('admin.password')) !!}
                        {!! Form::password('password') !!}
                    </div>
                    {!! Form::submit(trans('admin.singup'), ['class' => 'button button-block']) !!}
                {!! Form::close() !!}
            </div>
            <div id="login">   
                <h1>{{ trans('admin.back') }}</h1>
                {!! Form::open(['method' => 'post', 'action' => 'Pages\PagesController@postLogin']) !!}   
                    <div class="field-wrap">
                        {!! Form::label('name', trans('admin.email')) !!}
                        {!! Form::text('email', old('email')) !!}
                    </div>
              
                    <div class="field-wrap">
                        {!! Form::label('name', trans('admin.password')) !!}
                        {!! Form::password('password') !!}
                    </div>                  
                    <p class="forgot"><a href="#">{{ trans('admin.forgot') }}</a></p>                 
                    {!! Form::submit(trans('admin.login'), ['class' => 'button button-block']) !!}
                {!! Form::close() !!}
            </div>
        </div>      
    </div> <!-- /form -->
    @include('admin.footer')
    {{ Html::script('js/page/loginpage.js') }}  
</body>
</html>
