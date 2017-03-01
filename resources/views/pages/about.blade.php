@extends('pages.top_left_menu')
@section('bodypage')
    <div class="col-md-9">
        <div class="panel panel-default">            
            <div class="panel-heading">
                <h2>{{ trans('label.about') }}</h2>
            </div>
            <div class="panel-body">
                <p>
                    {{ trans('label.lorems') }}
                </p>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
