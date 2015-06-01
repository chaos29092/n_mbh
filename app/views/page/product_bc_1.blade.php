@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.bc_1')}}
@stop

@section('description')
nucleon - {{Lang::get('page.bc_1')}}
@stop

@section('productImg')
{{asset('img/products/bc_1.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.bc_1')}}</div> <br/>
    <div class="product-desc"></div>
    <div class="product-desc">{{Lang::get('page.bc_1_p1')}}</div> <br/>

@stop

@section('product_content_1')
    <h3>{{Lang::get('page.summary')}}</h3>
    <p>{{Lang::get('page.bc_1_p1')}}</p>
    <p>{{Lang::get('page.bc_1_sum_1')}}</p>
    <p>{{Lang::get('page.bc_1_sum_2')}}</p>


@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
@stop
