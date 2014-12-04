@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.aboutUs')}}
@stop

@section('description')
nucleon - {{Lang::get('page.aboutUs')}}
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
              <a class="media-left">
                <img src="{{asset('img/factory_1.jpg')}}" alt="factory">
              </a>
              <div class="media-body">
                <h4 class="media-heading">{{Lang::get('page.factoryTour')}}</h4>
                {{Lang::get('page.ff1')}}
              </div>
            </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f1.jpg')}}" alt="{{Lang::get('page.f1')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f1')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f2.jpg')}}" alt="{{Lang::get('page.f2')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f2')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f3.jpg')}}" alt="{{Lang::get('page.f3')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f3')}}</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f4.jpg')}}" alt="{{Lang::get('page.f4')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f4')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f5.jpg')}}" alt="{{Lang::get('page.f5')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f5')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f6.jpg')}}" alt="{{Lang::get('page.f6')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f6')}}</p>
                      </div>
                    </a>
                  </div>
        </div>
        <div class="row">
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f7.jpg')}}" alt="{{Lang::get('page.f7')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f7')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f8.jpg')}}" alt="{{Lang::get('page.f8')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f8')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-4">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/f9.jpg')}}" alt="{{Lang::get('page.f9')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.f9')}}</p>
                      </div>
                    </a>
                  </div>
        </div>
        <hr/>

        {{--研发团队--}}
        <div class="tujiazi">
            <div class="media">
              <a class="media-left">
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
              <a class="media-left">
                <img src="{{asset('img/research.jpg')}}" alt="research team">
              </a>
              <div class="media-body">
                <h4 class="media-heading">{{Lang::get('page.productionEquipment')}}</h4>
                {{Lang::get('page.y1')}}
              </div>
            </div>
        </div>
        <p>{{Lang::get('page.pe')}}</p>
        <div class="row">
                  <div class="col-xs-6 col-md-3">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/pe_1.jpg')}}" alt="{{Lang::get('page.pe_1')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.pe_1')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/pe_2.jpg')}}" alt="{{Lang::get('page.pe_2')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.pe_2')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/pe_3.jpg')}}" alt="{{Lang::get('page.pe_3')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.pe_3')}}</p>
                      </div>
                    </a>
                  </div>
                  <div class="col-xs-6 col-md-3">
                    <a class="thumbnail">
                      <img src="{{asset('img/about/pe_4.jpg')}}" alt="{{Lang::get('page.pe_4')}}">
                      <div class="caption">
                        <p class="text-center">{{Lang::get('page.pe_4')}}</p>
                      </div>
                    </a>
                  </div>
        </div>
    </div>
@stop



