@extends('sidebar_master')

@section('title')
    nucleon - All {{Lang::get('page.mbh')}}
@stop

@section('description')
    nucleon - All {{Lang::get('page.mbh')}}
@stop

@section('topimg')

@stop

@section('content_page')
    <div>
        {{--产品列表标题--}}
        @if($category == 'all')
            <h4>{{Lang::get('page.allProduct')}}</h4>
        @elseif($category == 'mbh')
            <h4>{{Lang::get('page.mbh')}}</h4>
        @elseif($category == 'rmg')
            <h4>{{Lang::get('page.rmg')}}</h4>
        @elseif($category == 'rtg')
            <h4>{{Lang::get('page.rtg')}}</h4>
        @endif
        <hr/>

        {{--产品列表--}}
        @if($category == 'all')

            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/small/150t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_150t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 50T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 32t ~ 150t</p>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/medium/500t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_500t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 300T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 200t ~ 500t</p>
                        </div>
                    </a>
                </div>
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
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/rmg')}}" class="thumbnail">
                        <img src="{{asset('img/products/rmg_thum.jpg')}}" alt="{{Lang::get('page.rmg')}}">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.rmg')}}</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/rtg')}}" class="thumbnail">
                        <img src="{{asset('img/products/rtg_thum.jpg')}}" alt="{{Lang::get('page.rtg')}}">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.rtg')}}</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>

        @elseif($category == 'mbh')
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/small/150t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_150t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 50T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 32t ~ 150t</p>
                        </div>
                    </a>
                </div>
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/medium/500t')}}" class="thumbnail">
                        <img src="{{asset('img/products/mbh_500t_thumb.jpg')}}" alt="{{Lang::get('page.mbh')}} 300T">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.mbh')}} 200t ~ 500t</p>
                        </div>
                    </a>
                </div>
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
        @elseif($category == 'rmg')
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/rmg')}}" class="thumbnail">
                        <img src="{{asset('img/products/rmg_thum.jpg')}}" alt="{{Lang::get('page.rmg')}}">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.rmg')}}</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>
        @elseif($category == 'rtg')
            <div class="row">
                <div class="col-xs-6 col-md-4">
                    <a href="{{url('product/rtg')}}" class="thumbnail">
                        <img src="{{asset('img/products/rtg_thum.jpg')}}" alt="{{Lang::get('page.rtg')}}">

                        <div class="caption">
                            <p class="text-center">{{Lang::get('page.rtg')}}</p>
                        </div>
                    </a>
                </div>
            </div>
            <hr/>
        @endif
    </div>
@stop



