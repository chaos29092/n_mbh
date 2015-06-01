<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            @section('title')
                 This is the master sidebar.
            @show
        </title>
        <meta name="description" content="@section('description')
                                             This is the master sidebar.
                                          @show">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

        <link rel="stylesheet" href="{{asset('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
        <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400">
        <script src="{{asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div id="top">
            <div class="container">
                <a href="{{url('/')}}"><img id="logo" src="{{asset('img/logo.jpg')}}" alt="{{Lang::get('page.ff1')}}"/></a>
                <p class="pull-right"><a href="http://nucleon-mbh.com">English</a>  |  <a href="http://es.nucleon-mbh.com">Español</a>  | <a href="http://ru.nucleon-mbh.com">Pусский</a>  |  <a href="http://cn.nucleon-mbh.com">中文</a></p>
            </div>
        </div>

        <nav class="nav navbar-default" role="navigation" id="nav">
          <div class="container">
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                <a href="{{url('/')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.home')}}</button></a>
                <a href="{{url('products/all')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.products')}}</button></a>
                <a href="{{url('about')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.aboutUs')}}</button></a>
                <a href="{{url('factory_views')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.factoryViews')}}</button></a>
                <a href="{{url('production_equipment')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.productionEquipment')}}</button></a>
                <a href="{{url('rd')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.researchteam')}}</button></a>
                <a href="{{url('exchange')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.exchange')}}</button></a>
                <a href="{{url('culture')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.culture')}}</button></a>
                <a href="{{url('partner')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.overseas_partner')}}</button></a>
                <a href="{{url('contact')}}"><button type="button" class="btn btn-sky text-uppercase btn-lg">{{Lang::get('page.contact')}}</button></a>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>

        @yield('content')

        	<hr class="blueline" />

        	<div class="container">
        	    <ul class="list-inline text-center">
        	          <li><a href="{{url('/')}}">{{Lang::get('page.home')}}</a></li>
        	          <li>|</li>
        	          <li><a href="{{url('products/all')}}">{{Lang::get('page.products')}}</a></li>
                      <li>|</li>
                      <li><a href="{{url('about')}}">{{Lang::get('page.aboutUs')}}</a></li>
                      <li>|</li>
                      <li><a href="{{url('contact')}}">{{Lang::get('page.contact')}}</a></li>
                      <li>|</li>
                      <li><a href="{{url('partner')}}">{{Lang::get('page.overseas_partner')}}</a></li>
                </ul>
                <p class="text-center">Copyright © Henan Nucleon Mobile Boat Hoist Co., Ltd.</p>
        	</div>


        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="{{asset('assets/js/vendor/jquery.min.js')}}"><\/script>')</script>
        <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="{{asset('assets/js/plugins.js')}}"></script>
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script src="{{asset('assets/js/vendor/lightbox.min.js')}}"></script>
        {{--google analytics en--}}
        {{--<script>--}}
            {{--(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){--}}
                {{--(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),--}}
                    {{--m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)--}}
            {{--})(window,document,'script','//www.google-analytics.com/analytics.js','ga');--}}

            {{--ga('create', 'UA-58204783-1', 'auto');--}}
            {{--ga('send', 'pageview');--}}
        {{--</script>--}}
    </body>
</html>