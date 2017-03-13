@extends('pages.top_left_menu')
{{ Html::style('css/page/page.css') }}
@section('bodypage')
    <div class="col-md-9">
        @if (session('notification'))
            <div class="alert alert-success">
                {{ session('notification') }}
            </div>
        @endif
        <h3 >{{ $viewBook->title }}</h3>
        <!-- Author -->
        <p class="lead">
            {{ trans('label.by')}} <a class="author" href="#">{{ $viewBook->author }}</a>
        </p>

        <!-- Preview Image -->
        <img class="img-responsive" src="{!! Storage::url($viewBook['image']) !!}" alt="">
        <!-- Date/Time -->
        <h4><span class="glyphicon glyphicon-time"></span> {{ trans('label.publish') }} <strong>{{ $viewBook->public_date }}</strong> </h4>
        <div id="stars" data-rating="3"></div>
        <hr>

        <!-- Post Content -->
        <div class="bs-callout bs-callout-info">
            <h2 >{{ trans('label.description') }}</h2>
            <p>{{ $viewBook->description }}</p>
        </div>
        
        <hr>
        <div class="well">
            <h4>{{ trans('label.writereview') }} .....<span class="glyphicon glyphicon-pencil"></span></h4>
            {!! Form::open(['method' => 'post']) !!}
                <div class="form-group">
                    {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '3']) !!}
                </div>
                {!! Form::submit(trans('label.comment'), ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>

        <hr>
    
        <!-- Posted Comments -->

        <!-- Comment -->
        <div class="media">
            <h2>{{ trans('label.review') }}</h2>
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">{{ trans('label.titlereview') }}
                    <small>{{ trans('label.date') }}</small>
                </h4>
                <p>{{ trans('label.lorems') }}</p>
                {!! Form::open(['method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
                    </div>
                    {!! Form::submit(trans('label.comment'), ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>

        <div class="media">
            <h2>{{ trans('label.review') }}</h2>
            <a class="pull-left" href="#">
                <img class="media-object" src="http://placehold.it/64x64" alt="">
            </a>
            <div class="media-body">
                <h4 class="media-heading">{{ trans('label.titlereview') }}
                    <small>{{ trans('label.date') }}</small>
                </h4>
                <p>{{ trans('label.lorems') }}</p>
                {!! Form::open(['method' => 'post']) !!}
                    <div class="form-group">
                        {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
                    </div>
                    {!! Form::submit(trans('label.comment'), ['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading"><b>{{ trans('label.booksame') }}</b></div>
                <div class="panel-body">
                    @foreach ( $viewBookSame as $rb)
                    <!-- item -->
                        @php
                            $desc = $rb->description;
                            $descSub = substr($desc, 0, 30);
                        @endphp
                        <div class="row booksame">
                            <div class="col-md-5">
                                <a href="{{ action('Pages\PagesController@viewBooks', $rb->id) }}">
                                    <img class="img-responsive" src="{!! Storage::url($rb['image']) !!}" alt="">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <a href="{{ action('Pages\PagesController@viewBooks', $rb->id) }}"><b>{{ $rb->title }}</b></a>
                            </div>
                            <p>{{ $descSub }}</p>
                            <div class="break"></div>
                        </div>
                    <!-- end item -->
                    @endforeach
                    <!-- item -->
                </div>
            </div>
    </div>
@endsection
</body>
</html>
