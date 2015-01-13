@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.aboutUs')}}
@stop

@section('description')
nucleon - {{Lang::get('page.aboutUs')}}
@stop

@section('topimg')

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
                <h4 class="media-heading"><a href="{{url('factory_views')}}">{{Lang::get('page.factoryTour')}}</a></h4>
                {{Lang::get('page.nucleonCompany')}}
              </div>
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
                <h4 class="media-heading"><a href="{{url('rd')}}">{{Lang::get('page.researchteam')}}</a></h4>
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
                <h4 class="media-heading"><a href="{{url('production_equipment')}}">{{Lang::get('page.productionEquipment')}}</a></h4>
                {{Lang::get('page.y1')}}
              </div>
            </div>
        </div>
        <p>{{Lang::get('page.pe')}}</p>
    </div>
@stop



