@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.factoryViews')}}
@stop

@section('description')
nucleon - {{Lang::get('page.factoryViews')}}
@stop

@section('topimg')

@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.factoryViews')}}</h4>
        <hr/>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="{{asset('img/cv/cv_1.jpg')}}" class="thumbnail" data-lightbox="image-1" data-title="My caption">
                      <img src="{{asset('img/cv/cv_1.jpg')}}" alt="{{Lang::get('page.factoryViews')}}">
                    </a>
                  </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/cv/cv_1.jpg')}}" class="thumbnail" data-lightbox="image-1" data-title="My caption">
                    <img src="{{asset('img/cv/cv_1.jpg')}}" alt="{{Lang::get('page.factoryViews')}}">
                </a>
            </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_3.jpg')}}" alt="{{Lang::get('page.factoryViews')}}">
                    </a>
                  </div>
        </div>
        <hr/>
    </div>
@stop





