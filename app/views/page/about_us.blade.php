@extends('sidebar_master')

@section('title')
    Hanvy - about us.
@stop

@section('description')
    This is description.
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/about.jpg')}}" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.aboutUs')}}</h4>
        <hr/>
        <p><strong>{{Lang::get('page.nucleonCompany')}}</strong>,
        {{Lang::get('page.about_p1')}}</p>
        <p>{{Lang::get('page.about_p2')}}</p>
        <p>{{Lang::get('page.about_p3')}}</p>
        <p>{{Lang::get('page.about_p4')}}</p>
        <p>{{Lang::get('page.about_p5')}}</p>
        <hr/>
        {{--厂容厂貌--}}
        <div class="tujiazi">
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{asset('img/factory_1.jpg')}}" alt="factory">
              </a>
              <div class="media-body">
                <h4 class="media-heading">{{Lang::get('page.factoryTour')}}</h4>
                {{Lang::get('page.f1')}}
              </div>
            </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a href="#" class="thumbnail">
                      <img src="{{asset('img/index/1.jpg')}}" alt="...">
                      <div class="caption">
                        <p class="text-center">Customers from Tajikistan</p>
                      </div>
                    </a>
                  </div>
        </div>
        <hr/>

        {{--研发团队--}}
        <div class="tujiazi">
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{asset('img/research.jpg')}}" alt="research team">
              </a>
              <div class="media-body">
                <h4 class="media-heading">{{Lang::get('page.researchteam')}}</h4>
                {{Lang::get('page.y1')}}
              </div>
            </div>
        </div>
        <p>{{Lang::get('page.r1')}}</p>
        <p>{{Lang::get('page.r2')}}</p>
        <p>{{Lang::get('page.r3')}}</p>
        <hr/>

        {{--生产设备--}}
        <div class="tujiazi">
            <div class="media">
              <a class="media-left" href="#">
                <img src="{{asset('img/research.jpg')}}" alt="research team">
              </a>
              <div class="media-body">
                <h4 class="media-heading">{{Lang::get('page.productionEquipment')}}</h4>
                {{Lang::get('page.y1')}}
              </div>
            </div>
        </div>
        <p>{{Lang::get('page.pe_1')}}</p>
    </div>
@stop



