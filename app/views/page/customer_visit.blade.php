@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.customerVisit')}}
@stop

@section('description')
nucleon - {{Lang::get('page.customerVisit')}}
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/customer.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.customerVisit')}}</h4>
        <hr/>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_1.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_2.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_3.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_4.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_5.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_6.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_7.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_8.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/cv/cv_9.jpg')}}" alt="Customer Visit">
                    </a>
                  </div>
        </div>
        <hr/>
    </div>
@stop



