@extends('pages.top_left_menu')
@section('bodypage')
        <div class="panel panel-default">
            <div class="panel-heading my-panel">
                <h4>
                    <b>{{ trans('admin.key_word') }} : {{ $keyword }}</b>
                </h4>
            </div>
            @if (session('notification'))
                <div class="alert alert-danger">
                    {{ session('notification') }}
                </div>         
            @else
                @foreach ($books as $book)
                    <div class="row-item row">
                        <div class="col-md-3">
                            <a href="detail.html">
                                <br>
                                <img class="img-responsive my-img"  src="{!! Storage::url($book['image']) !!}" alt="">
                            </a>
                        </div>
                        <div class="col-md-9">
                            <h3>{{ $book->title }}</h3>
                            <h4>{{ trans('admin.author') }}: <strong>{{ $book->author }}</strong></h4>
                            <div id="stars" data-rating="{{ $book->avg_rating }}"></div>
                            <p>{{ $book->description }}</p>
                            <a class="btn btn-primary" href="{{ action('Pages\PagesController@viewBooks', $book->id) }}">{{ trans('label.view_book') }}<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                        <div class="break"></div>
                    </div>
                @endforeach
            @endif
            <!-- Pagination -->
            @if (!count(session('notification')))
                {{ $books->appends(['search' => $keyword])->links() }}
            @endif
            <!-- /.row -->

        </div>
@endsection
{{ Html::script('js/page/page.js') }}
</body>
</html>
