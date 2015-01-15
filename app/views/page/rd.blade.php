@extends('sidebar_master')

@section('title')
    nucleon - {{Lang::get('page.researchteam')}}
@stop

@section('description')
    nucleon - {{Lang::get('page.researchteam')}}
@stop

@section('topimg')

@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.researchteam')}}</h4>
        <hr/>

        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_1.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_1')}}">
                    <img src="{{asset('img/rd/rd_1_thum.jpg')}}" alt="{{Lang::get('page.rd_1')}}">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_2.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_2')}}">
                    <img src="{{asset('img/rd/rd_2_thum.jpg')}}" alt="{{Lang::get('page.rd_2')}}">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_3.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_3')}}">
                    <img src="{{asset('img/rd/rd_3_thum.jpg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_4.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_4')}}">
                    <img src="{{asset('img/rd/rd_4_thum.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_5.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_5')}}">
                    <img src="{{asset('img/rd/rd_5_thum.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_6.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_6')}}">
                    <img src="{{asset('img/rd/rd_6_thum.jpg')}}" alt="">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-md-4">
                <a href="{{asset('img/rd/rd_4.jpg')}}" class="thumbnail" data-lightbox="image-1"
                   data-title="{{Lang::get('page.rd_4')}}">
                    <img src="{{asset('img/rd/rd_4_thum.jpg')}}" alt="">
                </a>
            </div>
        </div>
        <hr/>
    </div>
@stop





