@extends('sidebar_master')

@section('title')
    nucleon - All {{Lang::get('page.mbh')}}
@stop

@section('description')
    nucleon - All {{Lang::get('page.mbh')}}
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/product.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        {{--产品列表标题--}}
        @if($category == 'all')
            <h4>{{Lang::get('page.allProduct')}}</h4>
        @elseif($category == 'small')
            <h4>{{Lang::get('page.smbh')}}</h4>
        @elseif($category == 'medium')
            <h4>{{Lang::get('page.mmbh')}}</h4>
        @elseif($category == 'big')
            <h4>{{Lang::get('page.bmbh')}}</h4>
        @endif
        <hr/>

        {{--产品列表--}}
        @if($category == 'all')
            <h4>{{Lang::get('page.smbh')}}</h4>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/small/150t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_150t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 50T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 32t ~ 150t</p>
                        </div>
                    </a>
                </div>
            </div>

            <hr/>
            <h4>{{Lang::get('page.mmbh')}}</h4>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/medium/500t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_500t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 300T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 200t ~ 500t</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>

            <h4>{{Lang::get('page.bmbh')}}</h4>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/big/1000t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_1000t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 800T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 700t ~ 1000t</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>

        @elseif($category == 'small')
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/small/150t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_150t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 50T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 32t ~ 150t</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>
        @elseif($category == 'medium')
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/medium/500t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_500t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 300T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 200t ~ 500t</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>
        @elseif($category == 'big')
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/big/1000t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_1000t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 800T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 700t ~ 1000t</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>
        @endif
    </div>
@stop



