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
                  <a href="{{url('products/small')}}" class="list-group-item">{{Lang::get('page.smbh')}}</a>
                  <a href="{{url('products/medium')}}" class="list-group-item">{{Lang::get('page.mmbh')}}</a>
                  <a href="{{url('products/big')}}" class="list-group-item">{{Lang::get('page.bmbh')}}</a>
                </div>

                <div class="well">
                    <h4>{{Lang::get('page.needHelp')}}</h4>
                    <button type="button" class="btn btn-primary">
                        <span class="glyphicon glyphicon-comment"></span> {{Lang::get('page.chatNow')}}
                    </button>
                    <span>({{Lang::get('page.chatOnline')}})</span>
                    <br/><br/>
                    <p>{{Lang::get('page.orMail')}}</p>
                    <a href="mailto:admin@hanvymbh.com"><span class="glyphicon glyphicon-envelope"></span> admin@hanvymbh.com</a>
                    <br/><br/>
                    <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.jpg')}}" class="img-responsive img-rounded center-block" alt=""/></a>
                </div>
                <div>
                    <a href=""><img src="{{asset('img/whyus.jpg')}}" class="img-responsive img-rounded" alt=""/></a>
                </div>
            </div>

            <div class="col-md-9" id="content-page">
                @yield('content_page')
            </div>
        </div>
    </div>
@stop




