@extends('master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('content')
    <div id="content-page">

        <div class="container-fluid" id="product">
            <div class="content-wrapper">

                {{--产品图部分--}}
        		<div class="item-container">
        			<div class="container">
        				<div class="col-md-12">
        				        <ol class="breadcrumb">
                                  <li><a href="/">{{Lang::get('page.home')}}</a></li>
                                  <li><a href="{{url('products/all')}}">{{Lang::get('page.allProduct')}}</a></li>
                                  <li class="active">{{Lang::get('page.mbh')}} {{$model}}</li>
                                </ol>
                                <hr id="breadcrumb"/>
        					<div class="product col-md-5 service-image-left">

        						<center>
        							<img id="item-display" src="@yield('productImg')" class="img-responsive img-rounded" alt=""/>
        						</center>
        					</div>

        					{{--<div class="container service1-items col-sm-2 col-md-2 pull-left">--}}
        						{{--<center>--}}
        							{{--<a id="item-1" class="service1-item">--}}
        								{{--<img src="@yield('productImg_1')" alt=""/>--}}
        							{{--</a>--}}
        							{{--<a id="item-2" class="service1-item">--}}
        								{{--<img src="@yield('productImg_2')" alt=""/>--}}
        							{{--</a>--}}
        							{{--<a id="item-3" class="service1-item">--}}
        								{{--<img src="@yield('productImg_3')" alt=""/>--}}
        							{{--</a>--}}
        						{{--</center>--}}
        					{{--</div>--}}
                            <div class="col-md-7">
                                @yield('product_dec')

            					<hr>
            					<a href="mailto:nylyzj.com"><span class="glyphicon glyphicon-envelope"></span>  {{Lang::get('page.sendMailToUs')}}</a> <br/>
            					<div class="btn-group cart">
            						<button type="button" class="btn btn-primary btn-lg">
            							<span class="glyphicon glyphicon-comment"></span>{{Lang::get('page.getPrice')}}
            						</button>
            					</div>

            				</div>
        				</div>
        			</div>
        		</div>

        		{{--产品详情部分--}}
        		<div class="container" id="content">
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
                            <p> {{Lang::get('page.orMail')}}</p>
                            <a href="mailto:admin@hanvymbh.com"><span class="glyphicon glyphicon-envelope"></span> admin@hanvymbh.com</a>
                            <br/><br/>
                            <a href="{{url('contact')}}" target="_blank"><img src="{{asset('img/contact.jpg')}}" class="img-responsive img-rounded center-block" alt=""/></a>
                        </div>
                        <div>
                            <a href="{{url('about')}}"><img src="{{asset('img/whyus.jpg')}}" class="img-responsive img-rounded" alt=""/></a>
                        </div>
                    </div>


        			<div class="col-md-9 product-info">
        					<ul id="myTab" class="nav nav-tabs nav_tabs">

        						<li class="active"><a href="#service-one" data-toggle="tab">{{Lang::get('page.dec')}}</a></li>
        						<li><a href="#service-two" data-toggle="tab">{{Lang::get('page.parameters')}}</a></li>

        					</ul>
        				<div id="myTabContent" class="tab-content">
        						<div class="tab-pane fade in active" id="service-one">

        							<section class="product-info">
        								@yield('product_content_1')
        							</section>

        						</div>
        					<div class="tab-pane fade" id="service-two">

        						<section class="product-info">
                                    @yield('product_content_2')
        						</section>

        					</div>

        				</div>
                        <hr/>
                               <div id="contact">

                                        <h4>{{Lang::get('page.fillInquiry')}}</h4>
                                        {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
                                        <div class="form-group">
                                            {{ Form::label('email', Lang::get('page.email'), array('class' => 'col-md-1 control-label')) }}
                                            <div class="col-md-6">
                                                <input required placeholder="youremail@example.com" class="form-control" name="email" type="email" id="email">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('subject', Lang::get('page.name'), array('class' => 'col-md-1 control-label')) }}
                                            <div class="col-md-6">
                                                <input required placeholder="your name" class="form-control" name="subject" type="text" id="subject">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            {{ Form::label('message', Lang::get('page.message'), array('class' => 'col-md-1 control-label')) }}
                                            <div class="col-md-8">
                                                <textarea required class="form-control" rows="8" name="mes" cols="50"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-md-offset-1 col-sm-10">
                                                {{ Form::submit(Lang::get('page.send'), array('class' => 'btn btn-primary')) }}
                                            </div>
                                        </div>
                                        {{ Form::close() }}

                               </div>
                                <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
                                <script>
                                $("form").validate();
                                </script>

        			</div>
        		</div>
        	</div>
        </div>


    </div>
@stop



