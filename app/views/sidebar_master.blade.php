@extends('master')

@section('title')
    This is title.
@stop

@section('description')
    This is description.
@stop

@section('content')
    @yield('topimg')

    <div class="container" id="content">
        <div class="row">
            {{--sidebar--}}
            <div class="col-md-3">
                <div id="sidetitle">
                    <h4>{{Lang::get('page.sideTitle')}}</h4>
                </div>
                <div class="list-group">
                  <a href="{{url('products/all')}}" class="list-group-item">{{Lang::get('page.allProduct')}}</a>
                  <a href="{{url('products/mbh')}}" class="list-group-item">{{Lang::get('page.mbh')}}</a>
                  <a href="{{url('products/rmg')}}" class="list-group-item">{{Lang::get('page.rmg')}}</a>
                  <a href="{{url('products/rtg')}}" class="list-group-item">{{Lang::get('page.rtg')}}</a>
                  <a href="{{url('products/gc')}}" class="list-group-item">{{Lang::get('page.gc')}}</a>
                  <a href="{{url('products/bc')}}" class="list-group-item">{{Lang::get('page.bc')}}</a>
                  <a href="{{url('products/eh')}}" class="list-group-item">{{Lang::get('page.eh')}}</a>
                </div>

                <div class="well">
                    <h4>{{Lang::get('page.needHelp')}}</h4>
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-comment"></span> {{Lang::get('page.chatNow')}}
                    </button>
                    <span>({{Lang::get('page.chatOnline')}})</span>
                    <br/><br/>
                    <p>{{Lang::get('page.orMail')}}</p>
                    <a href="mailto:info@nucleon-mbh.com"><span class="glyphicon glyphicon-envelope"></span> info@nucleon-mbh.com</a>
                    <br/><br/>
                    <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.jpg')}}" class="img-responsive img-rounded center-block" alt=""/></a>
                </div>
                <div>
                    <a href="{{url('about')}}"><img src="{{asset('img/whyus.jpg')}}" class="img-responsive img-rounded" alt=""/></a>
                </div>
            </div>

            <div class="col-md-9" id="content-page">
                @yield('content_page')
            </div>
        </div>
    </div>
@stop




