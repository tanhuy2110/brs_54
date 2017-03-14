@include('admin.header')
{{ Html::style('css/page/page.css') }}
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">{{ trans('label.toogle') }}</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">{{ trans('label.brand') }}</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">{{ trans('label.about') }}</a>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
	                    {!! Form::text('search', old('txtTitle'), ['class' => 'form-control', 'placeholder' => 'Search']) !!}
                    </div>
                    {!! Form::submit(trans('label.search'), ['class' => 'btn btn-default']) !!}
                </form>
                	
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="{{ action('Pages\PagesController@getLogin') }}">{{ trans('label.loginorregister') }}</a>
                    </li>
                    @if ( Auth::user() )
                        <li>
                            <a>
                                <span class ="glyphicon glyphicon-user"></span>
                                {{ Auth::user()->name }}
                            </a>
                        </li>
                        <li>
                            <a href="{{ action('Pages\PagesController@getLogout') }}">{{ trans('label.logout') }}</a>
                        </li>
                    @endif
                </ul>
            </div> 
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <!-- Page Content -->
    <div class="container">
        <div class="space20"></div>
        <div class="row main-left">
            <div class="col-md-3 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu-left-page active">
                        {{ trans('label.category') }}
                    </li>
                    @foreach ($categories as $category)
                        @if (count ($category -> books ) > 0)
                            <li href="#" class="list-group-item menu-left-page">
                                <a href="#">{{ $category->name }}</a>
                            </li>

                            <ul>
                                @foreach ($category->books as $book)
                                    <li class="list-group-item">
                                        <a href="{{ action('Pages\PagesController@viewBooks', $book->id) }}">{{ $book->title  }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">
            	@yield('bodypage')
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
    @include('admin.footer')
    {{ Html::script('js/page/page.js') }}
    
</body>
</html>
