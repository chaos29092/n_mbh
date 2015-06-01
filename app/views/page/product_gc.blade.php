@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.gc')}}
@stop

@section('description')
nucleon - {{Lang::get('page.gc')}}
@stop

@section('productImg')
{{asset('img/products/gc.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.gc')}}</div> <br/>
    <div class="product-desc"></div>
    <div class="product-desc">{{Lang::get('page.gc_p1')}}</div> <br/>

@stop

@section('product_content_1')
    <h3>{{Lang::get('page.summary')}}</h3>
    <p>{{Lang::get('page.gc_p1')}}</p>
    <p>{{Lang::get('page.gc_sum_1')}}</p>
    <ul>
        <li><p>{{Lang::get('page.gc_sum_2')}}</p></li>
        <li><p>{{Lang::get('page.gc_sum_3')}}</p></li>
        <li><p>{{Lang::get('page.gc_sum_4')}}</p></li>
        <li><p>{{Lang::get('page.gc_sum_5')}}</p></li>
        <li><p>{{Lang::get('page.gc_sum_6')}}</p></li>
    </ul>
    <p>{{Lang::get('page.gc_sum_7')}}</p>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/gc_1.jpg')}}" alt=""/>
                <div class="caption">
                    <p>{{Lang::get('page.gc_img_1')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/gc_2.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.gc_img_2')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/gc_3.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.gc_img_3')}}</p>
                </div>
            </div>
        </div>
    </div>

@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
@stop
