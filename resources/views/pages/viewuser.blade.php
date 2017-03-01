@extends('pages.top_left_menu')
{{ Html::style('css/page/userview.css') }}
@section('bodypage')
    <h1 class="title-top">{{ trans('label.user') }}</h1>
    <div class="col-lg-4">
        <div class="card hovercard">
            <div class="cardheader">
            </div>
            <div class="avatar">
                <img alt="" src="http://lorempixel.com/100/100/people/9/">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/">Messi</a>
                </div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
            </div>
            <div class="bottom">
                <a class="btn btn-primary" href="https://twitter.com/webmaniac">
                    <i class="fa fa-plus-square"> {{ trans('label.follow') }}</i>
                </a>
            </div>
        </div>      
    </div>
    <div class="col-lg-4">
        <div class="card hovercard">
            <div class="cardheader">
            </div>
            <div class="avatar">
                <img alt="" src="http://lorempixel.com/100/100/people/10/">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/">Ibra</a>
                </div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
            </div>
            <div class="bottom">
                <a class="btn btn-primary" href="https://twitter.com/webmaniac">
                    <i class="fa fa-plus-square"> {{ trans('label.follow') }}</i>
                </a>
            </div>
        </div>      
    </div>
    <div class="col-lg-4">
        <div class="card hovercard">
            <div class="cardheader">
            </div>
            <div class="avatar">
                <img alt="" src="http://lorempixel.com/100/100/people/5/">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/">Neymar</a>
                </div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
            </div>
            <div class="bottom">
                <a class="btn btn-primary" href="https://twitter.com/webmaniac">
                    <i class="fa fa-plus-square"> {{ trans('label.follow') }}</i>
                </a>
            </div>
        </div>      
    </div>
    <div class="col-lg-4">
        <div class="card hovercard">
            <div class="cardheader">
            </div>
            <div class="avatar">
                <img alt="" src="http://lorempixel.com/100/100/people/5/">
            </div>
            <div class="info">
                <div class="title">
                    <a target="_blank" href="http://scripteden.com/">Neymar</a>
                </div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
                <div class="desc">{{ trans('label.about') }}</div>
            </div>
            <div class="bottom">
                <a class="btn btn-primary" href="https://twitter.com/webmaniac">
                    <i class="fa fa-plus-square"> {{ trans('label.follow') }}</i>
                </a>
            </div>
        </div>      
    </div>
    
@endsection
</body>
</html>


