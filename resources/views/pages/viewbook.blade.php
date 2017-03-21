@extends('pages.top_left_menu')
{{ Html::style('css/page/page.css') }}
<meta name="csrf-token" content="{{ csrf_token() }}">
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
        <div class="viewBook-st-fv">
            <li id="stars" data-rating="{{ $viewBook->avg_rating }}"></li>
            <li>
                {!! Form::submit(trans('admin.favorite'), ['class' => 'btn btn-primary btn_save', 'id' => 'favoriteBook']) !!}
            </li>
        </div>
        <hr>
        <!-- Post Content -->
        <div class="bs-callout bs-callout-info">
            <h2 >{{ trans('label.description') }}</h2>
            <p>{{ $viewBook->description }}</p>
        </div>
        <hr>
            @if ( Auth::user() )
                <div class="well">
                    <h4>{{ trans('label.writereview') }} .....<span class="glyphicon glyphicon-pencil"></span></h4>
                    {!! Form::open(['method' => 'post', 'action' => ['Pages\ReviewController@postReview', $viewBook->id] ]) !!}
                        <div class="form-group">
                            {!! Form::textarea('review', old('review'), ['class' => 'form-control', 'rows' => '3']) !!}
                        </div>
                        {!! Form::submit(trans('label.review'), ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            @endif
        <hr>
    
        <!-- Posted Comments -->

        <!-- Comment -->
        <div class="media">
            <h2>{{ trans('label.review') }}</h2>
            @foreach ($viewBook->reviews as $review)
                <a class="pull-left" href="#">
                    <img class="media-object avatar-review" src="{!! Storage::url($review->user['avatar']) !!}" alt="">
                </a>
                <div class="media-body">                   
                    <h4 class="media-heading">{{ $review->user->name }}
                        <small>{{ $review->created_at }}</small>
                    </h4>
                    <p>{{ $review->review_text }}</p>
                    @if (Auth::user())
                        @if (Auth::user()->id == $review->user_id)
                            {{ Form::open(['action' => ['Pages\ReviewController@deleteReview', $review->id], 'method' =>'delete', 'class' => 'form-delete', 'onsubmit' => 'return ConfirmDelete()' ]) }}
                                {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        @endif                       
                        {!! Form::open(['method' => 'post']) !!}
                            <div class="form-group">
                                {!! Form::textarea('comment', old('comment'), ['class' => 'form-control', 'rows' => '2']) !!}
                            </div>
                            {!! Form::submit(trans('label.comment'), ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    @endif                    
                </div>
            @endforeach
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
    @if (isset(Auth::user()->id))
        <script>
            var data = {
                'routeStore': '{{ route('rating.store') }}',
                'bookId': {{ $viewBook->id }},
                'userId': {{ Auth::user()->id }},
                'message': '{{ trans('admin.notification.rateComplete') }}',
                'messageFv': '{{ trans('admin.notification.favorite') }}',
                'messageUnFv': '{{ trans('admin.notification.unFavorite')}}',
                'favBookUrl': '{{ route('favorite.store') }}',
                'error': '{{ trans('admin.notification.error')}}',
            }
        </script>
    @endif
@endsection

</body>

</html>
