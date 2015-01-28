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
    <p>{{Lang::get('page.rmg_sum_1')}}</p>
    <p>{{Lang::get('page.rmg_sum_2')}}</p>

    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rmg_1.jpg')}}" alt=""/>
                <div class="caption">
                    <p>{{Lang::get('page.rmg_img_1')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rmg_2.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.rmg_img_2')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rmg_3.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.rmg_img_3')}}</p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rmg_4.jpg')}}" alt=""/>
                <div class="caption">
                    <p>{{Lang::get('page.rmg_img_4')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rmg_5.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.rmg_img_5')}}</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{asset('img/products/rmg_6.jpg')}}"  alt="...">
                <div class="caption">
                    <p>{{Lang::get('page.rmg_img_6')}}</p>
                </div>
            </div>
        </div>
    </div>


@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
    <div class="row">
        <table class="text-center table table-bordered table-striped">
            <tr class="success">
                <td colspan="2" width="300">{{Lang::get('page.rmg_t_1')}}</td>
                <td>RMG10t</td>
                <td>RMG30.5t</td>
                <td>RMG35.5t</td>
                <td>RMG40.5t</td>
                <td>RMG50t</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_2')}}</td>
                <td>10</td>
                <td>30.5</td>
                <td>35.5</td>
                <td>40.5</td>
                <td>50</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_3')}}</td>
                <td colspan="5">A6,A7</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_4')}}</td>
                <td>12.2,13.5,15，16.2,18,18.8,21.5</td>
                <td>12.2,13.5,15，16.2,18,18.8,21.5</td>
                <td>12.2,13.5,15，16.2,18,18.8,21.5</td>
                <td>12.2,13.5,15，16.2,18,18.8,21.5</td>
                <td>12.2,13.5,15，16.2,18,18.8,21.5</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.rmg_t_5')}}</td>
                <td>{{Lang::get('page.rmg_t_6')}}</td>
                <td colspan="5">{{Lang::get('page.rmg_t_7')}}</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.rmg_t_8')}}</td>
                <td>{{Lang::get('page.rmg_t_9')}}</td>
                <td>2～20</td>
                <td>12</td>
                <td>12</td>
                <td>18</td>
                <td>18</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.rmg_t_8')}}</td>
                <td>{{Lang::get('page.rmg_t_10')}}</td>
                <td>4～40</td>
                <td>24</td>
                <td>24</td>
                <td>36</td>
                <td>36</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_11')}}</td>
                <td>38.4</td>
                <td>60</td>
                <td>60</td>
                <td>70</td>
                <td>70</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_12')}}</td>
                <td colspan="5">20′、40′、45′</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_13')}}</td>
                <td colspan="5">±5°</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_14')}}</td>
                <td>47</td>
                <td>45</td>
                <td>45</td>
                <td>45</td>
                <td>45</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_15')}}</td>
                <td colspan="5">24-50</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_16')}}</td>
                <td colspan="5">10-18</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_17')}}</td>
                <td>4-16</td>
                <td>8-32</td>
                <td>8-32</td>
                <td>8-32</td>
                <td>8-32</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_18')}}</td>
                <td>p38</td>
                <td>p50</td>
                <td>p50</td>
                <td>QU70</td>
                <td>QU80</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_19')}}</td>
                <td>≤250</td>
                <td>≤260</td>
                <td>≤260</td>
                <td>≤280</td>
                <td>≤320</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_20')}}</td>
                <td>-100</td>
                <td>-200</td>
                <td>-230</td>
                <td>-255</td>
                <td>-300</td>
            </tr>
            <tr>
                <td colspan="2">{{Lang::get('page.rmg_t_21')}}</td>
                <td colspan="5">{{Lang::get('page.rmg_t_22')}}</td>
            </tr>

        </table>
    </div>
@stop
