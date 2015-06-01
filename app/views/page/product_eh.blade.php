@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.eh')}}
@stop

@section('description')
nucleon - {{Lang::get('page.eh')}}
@stop

@section('productImg')
{{asset('img/products/eh.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.eh')}}</div> <br/>
    <div class="product-desc"></div>
    <div class="product-desc">{{Lang::get('page.eh_p1')}}</div> <br/>

@stop

@section('product_content_1')
    <h3>{{Lang::get('page.summary')}}</h3>
    <p>{{Lang::get('page.eh_p1')}}</p>
    <p>{{Lang::get('page.eh_p2')}}</p>
    <p>{{Lang::get('page.eh_p3')}}</p>
    <p>{{Lang::get('page.eh_p4')}}</p>
    <p>{{Lang::get('page.eh_p5')}}</p>
@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
@stop
