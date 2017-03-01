@extends('pages.top_left_menu')
@section('bodypage')
    <div class="col-lg-9">
        <h3 class="title-top">{{ trans('label.user') }}</h3>
        <!-- Author -->
        <p class="lead">
            {{ trans('label.by')}} <a href="#">John Henry</a>
        </p>

        <!-- Preview Image -->
        <img class="img-responsive" src="http://placehold.it/900x300" alt="">

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> {{ trans('label.date') }}</p>
        <a><span class="glyphicon glyphicon-star"></span></a>
        <a><span class="glyphicon glyphicon-star"></span></a>
        <a><span class="glyphicon glyphicon-star"></span></a>
        <a><span class="glyphicon glyphicon-star"></span></a>
        <a><span class="glyphicon glyphicon-star-empty"></span></a>
        <hr>

        <!-- Post Content -->
        <p class="lead">{{ trans('label.lorem') }}</p>
        <p>{{ trans('label.loremss') }}</p>
        <hr>
        <div class="well">
            <h4>{{ trans('label.writecomment') }} .....<span class="glyphicon glyphicon-pencil"></span></h4>
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
@endsection
</body>
</html>

