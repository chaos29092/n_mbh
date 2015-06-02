@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.bc_2')}}
@stop

@section('description')
nucleon - {{Lang::get('page.bc_2')}}
@stop

@section('productImg')
{{asset('img/products/bc_2.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.bc_2')}}</div> <br/>
    <div class="product-desc"></div>
    <div class="product-desc">{{Lang::get('page.bc_2_p1')}}</div> <br/>

@stop

@section('product_content_1')
    <h3>{{Lang::get('page.summary')}}</h3>
    <p>{{Lang::get('page.bc_2_p1')}}</p>
    <ul>
        <li><p>{{Lang::get('page.bc_2_sum_1')}}</p></li>
        <li><p>{{Lang::get('page.bc_2_sum_2')}}</p></li>
        <li><p>{{Lang::get('page.bc_2_sum_3')}}</p></li>
        <li><p>{{Lang::get('page.bc_2_sum_4')}}</p></li>
    </ul>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/bc_2_1.jpg')}}" alt=""/>
                <div class="caption">
                    <p>{{Lang::get('page.bc_2')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/bc_2_2.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.bc_2')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/bc_2_3.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.bc_2')}}</p>
                </div>
            </div>
        </div>
    </div>

@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
    <img src="{{asset('img/products/bc_table_3.jpg')}}" alt="{{Lang::get('page.bc_2')}} {{Lang::get('page.parameters')}}"/>
    <br/><br/>
    <img src="{{asset('img/products/bc_table_4.jpg')}}" alt="{{Lang::get('page.bc_2')}} {{Lang::get('page.parameters')}}"/>
@stop
