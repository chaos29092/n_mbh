@extends('sidebar_master')

@section('title')
    nucleon - {{Lang::get('page.exchange')}}
@stop

@section('description')
    nucleon - {{Lang::get('page.exchange')}}
@stop

@section('topimg')

@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.exchange')}}</h4>
        <hr/>

        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/ex/ex_1.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.ex_1')}}">
                    <img src="{{asset('img/ex/ex_1_thum.jpg')}}" alt="{{Lang::get('page.ex_1')}}">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/ex/ex_2.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.ex_2')}}">
                    <img src="{{asset('img/ex/ex_2_thum.jpg')}}" alt="{{Lang::get('page.ex_2')}}">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/ex/ex_3.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.ex_3')}}">
                    <img src="{{asset('img/ex/ex_3_thum.jpg')}}" alt="{{Lang::get('page.ex_3')}}">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/ex/ex_4.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.ex_4')}}">
                    <img src="{{asset('img/ex/ex_4_thum.jpg')}}" alt="{{Lang::get('page.ex_4')}}">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/ex/ex_5.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.ex_5')}}">
                    <img src="{{asset('img/ex/ex_5_thum.jpg')}}" alt="{{Lang::get('page.ex_5')}}">
                </a>
            </div>
        </div>
        <hr/>
    </div>
@stop





