@extends('pages.top_left_menu')
@section('bodypage')
    <div class="panel panel-default">            
        <div class="panel-heading">
            <h2>{{ trans('label.book') }}</h2>
        </div>
        <div class="panel-body">
            <!-- item -->
            @foreach ($categories as $category)
                <div class="row-item row">
                    <h3>
                        <a href="#">{{ $category->name }}</a> |  
                        @foreach ( $category->books as $book)
                            <small><a href="category.html"><i>{{ $book->title }}</i></a>/</small>
                        @endforeach
                    </h3>
                    @php
                        $data = $category->getTopBooks();
                        $bookFirst = $data->shift();
                    @endphp
                    <div class="col-md-8 border-right">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="{!! Storage::url($bookFirst['image']) !!} " alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <h3>{{ $bookFirst['title'] }}</h3>
                            <p>{{ $bookFirst['description'] }}</p>
                            <a class="btn btn-primary" href="{{ action('Pages\PagesController@viewBooks', $bookFirst->id) }}">{{ trans('label.viewbook') }}<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        @foreach ($data->all() as $data)
                            <a href="{{ action('Pages\PagesController@viewBooks', $data->id) }}">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    {{ $data['title'] }}
                                </h4>
                            </a>
                        @endforeach
                    </div>        
                    <div class="break"></div>
                </div>
            @endforeach
            <!-- end item -->
        </div>
    </div>
@endsection
</body>
</html>
