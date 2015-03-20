@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.overseas_partner')}}
@stop

@section('description')
nucleon - {{Lang::get('page.overseas_partner')}}
@stop

@section('topimg')

@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.overseas_partner')}}</h4>
        <hr/>


        {{--http://www.imperial-yachting.com/--}}
        <div class="tujiazi">
            <div class="media">
              <a class="media-left">
                <img src="{{asset('img/imperial-yachting.jpg')}}" alt="imperial yachting">
                <img src="{{asset('img/partner_1.jpg')}}" alt="imperial yachting">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Imperial Yachting LLC Dubai</h4>
                {{Lang::get('page.op_1')}}
              </div>
            </div>
        </div>
        <p>{{Lang::get('page.op_2')}}</p>
        <p>{{Lang::get('page.op_3')}}</p>
        <p>{{Lang::get('page.op_4')}}</p>
        <p>Peter N Divers;
            Partner - Director Sales & Marketing  </p>
        <p>Imperial Yachting LLC,
            2 Al Murad Towers,
            Al Barsha 1   </p>
        <p>
            PO Box 454392,
            Dubai, UAE.
        </p>
        <p>
            Email:    imperialyachting@gmail.com <br/>
            Cell:      +971 556234522   <br/>
            Office:   +971 4277 6525    <br/>
            Web:    www.imperial-yachting.com
        </p>
        <hr/>

    </div>
@stop



