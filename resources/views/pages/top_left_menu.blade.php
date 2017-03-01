@extends('admin.header')
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
                        <a href="#">{{ trans('label.register') }}</a>
                    </li>
                    <li>
                        <a href="#">{{ trans('label.login') }}</a>
                    </li>
                    <li>
                        <a>
                            <span class ="glyphicon glyphicon-user"></span>
                            NTH
                        </a>
                    </li>

                    <li>
                        <a href="#">{{ trans('label.logout') }}</a>
                    </li>
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
                    <li href="#" class="list-group-item menu1 active">
                        {{ trans('label.menu') }}
                    </li>

                    <li href="#" class="list-group-item menu1">
                        <a href="#">{{ trans('label.category') }}</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">{{ trans('label.heathy') }}</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">{{ trans('label.animal') }}</a>
                        </li>
                    </ul>

                    <li href="#" class="list-group-item menu1">
                        <a href="#">{{ trans('label.user') }}</a>
                    </li>
                    <ul>
                        <li class="list-group-item">
                            <a href="#">Neymar</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Messi</a>
                        </li>
                        <li class="list-group-item">
                            <a href="#">Ibra</a>
                        </li>
                    </ul>
                </ul>
            </div>
            <div class="col-md-9">
            	@yield('bodypage')
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- end Page Content -->
    @extends('admin.footer')
</body>
</html>
