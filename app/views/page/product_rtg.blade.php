@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.rtg')}}
@stop

@section('description')
nucleon - {{Lang::get('page.rtg')}}
@stop

@section('productImg')
{{asset('img/products/rtg.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.rtg')}}</div> <br/>
    <div class="product-desc"></div>
    <div class="product-desc">{{Lang::get('page.rtg_p1')}}</div> <br/>

@stop

@section('product_content_1')
    <h3>{{Lang::get('page.summary')}}</h3>
    <p>{{Lang::get('page.rtg_sum_1')}}</p>
    <p>{{Lang::get('page.rtg_sum_2')}}</p>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_1.jpg')}}" alt=""/>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_2.jpg')}}"  alt="...">
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_3.jpg')}}"  alt="...">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_4.jpg')}}" alt=""/>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_5.jpg')}}"  alt="...">
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_6.jpg')}}"  alt="...">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_7.jpg')}}" alt=""/>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rtg_8.jpg')}}"  alt="...">
            </div>
        </div>
    </div>


@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
    <div class="row">
        <table class="text-center table table-bordered table-striped">
            <tr class="success">
                <td colspan="2" width="300">{{Lang::get('page.rtg_t_1')}}</td>
                <td>30.5</td>
                <td>35</td>
                <td>40.5</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_2')}}</td>
                <td colspan="3">A6，A7，A8</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_3')}}</td>
                <td colspan="5">15.5~18.5</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_4')}}</td>
                <td colspan="5">{{Lang::get('page.rtg_t_5')}}</td>
            </tr>
            <tr>
                <td colspan="2" rowspan="3">{{Lang::get('page.rtg_t_6')}}</td>
                <td colspan="2">17m{{Lang::get('page.rtg_t_7')}}</td>
                <td>20m{{Lang::get('page.rtg_t_8')}}</td>
            </tr>
            <tr>
                <td colspan="2">20m{{Lang::get('page.rtg_t_8')}}</td>
                <td>23.47m{{Lang::get('page.rtg_t_9')}}</td>
            </tr>
            <tr>
                <td colspan="2">23.47m{{Lang::get('page.rtg_t_9')}}</td>
                <td>31m{{Lang::get('page.rtg_t_10')}}</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_11')}}</td>
                <td colspan="3">(6.4~7.4)*2.5</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_12')}}</td>
                <td colspan="3">8</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_13')}}</td>
                <td colspan="2">20,40</td>
                <td>20,40,50</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_14')}}</td>
                <td colspan="3">±5</td>
            </tr>
            <tr>
                <td rowspan="2">{{Lang::get('page.rtg_t_15')}}</td>
                <td>{{Lang::get('page.rtg_t_16')}}</td>
                <td>12</td>
                <td>12</td>
                <td>23</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.rtg_t_17')}}</td>
                <td>24</td>
                <td>24</td>
                <td>46</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_18')}}</td>
                <td colspan="3">70</td>
            </tr>
            <tr>
                <td rowspan="2">{{Lang::get('page.rtg_t_19')}}</td>
                <td>{{Lang::get('page.rtg_t_16')}}</td>
                <td colspan="3">45</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.rtg_t_17')}}</td>
                <td colspan="3">90</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_20')}}</td>
                <td colspan="2">~305</td>
                <td>~400</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_21')}}</td>
                <td>~518</td>
                <td>~595</td>
                <td>~720</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rtg_t_22')}}</td>
                <td>~270</td>
                <td>~287</td>
                <td>~（320~360）</td>
            </tr>
        </table>
    </div>
@stop
