@extends('pages.top_left_menu')
@section('bodypage')
    <div class="col-md-9">
        <div class="panel panel-default">            
            <div class="panel-heading">
                <h2>{{ trans('label.book') }}</h2>
            </div>
            <div class="panel-body">
                <!-- item -->
                <div class="row-item row">
                    <h3>
                        <a href="category.html">{{ trans('label.namebook') }}</a> |  
                        <small><a href="category.html"><i>{{ trans('label.subtitle') }}</i></a>/</small>
                        <small><a href="category.html"><i>{{ trans('label.subtitle') }}</i></a>/</small>
                        <small><a href="category.html"><i>{{ trans('label.subtitle') }}</i></a>/</small>
                    </h3>
                    <div class="col-md-8 border-right">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="http://lorempixel.com/100/100/people/9/" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <h3>{{ trans('label.project') }}</h3>
                            <p>{{ trans('label.lorems') }}</p>
                            <a class="btn btn-primary" href="detail.html">{{ trans('label.viewbook') }}<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="detail.html">
                            <h4>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                {{ trans('label.lorem') }}
                            </h4>
                        </a>
                        <a href="detail.html">
                            <h4>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                {{ trans('label.lorem') }}
                            </h4>
                        </a>
                        <a href="detail.html">
                            <h4>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                {{ trans('label.lorem') }}
                            </h4>
                        </a>
                    </div>        
                    <div class="break"></div>
                </div>
                <!-- end item -->
                <!-- item -->
                <div class="row-item row">
                    <h3>
                        <a href="category.html">{{ trans('label.namebook')}}</a> |  
                        <small><a href="category.html"><i>{{ trans('label.subtitle') }}</i></a>/</small>
                        <small><a href="category.html"><i>{{ trans('label.subtitle') }}</i></a>/</small>
                        <small><a href="category.html"><i>{{ trans('label.subtitle') }}</i></a>/</small>
                    </h3>
                    <div class="col-md-8 border-right">
                        <div class="col-md-5">
                            <a href="detail.html">
                                <img class="img-responsive" src="http://lorempixel.com/100/100/people/9/" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <h3>{{ trans('label.project') }}</h3>
                            <p>{{ trans('label.lorems') }}</p>
                            <a class="btn btn-primary" href="detail.html">{{ trans('label.viewbook') }}<span class="glyphicon glyphicon-chevron-right"></span></a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="detail.html">
                            <h4>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                {{ trans('label.lorem') }}
                            </h4>
                        </a>
                        <a href="detail.html">
                            <h4>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                {{ trans('label.lorem') }}
                            </h4>
                        </a>
                        <a href="detail.html">
                            <h4>
                                <span class="glyphicon glyphicon-list-alt"></span>
                                {{ trans('label.lorem') }}
                            </h4>
                        </a>
                    </div>
                    
                    <div class="break"></div>
                </div>
                <!-- end item -->
            </div>
        </div>
    </div>
@endsection
</body>
</html>
