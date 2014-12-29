@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.mbh')}} {{$model}}
@stop

@section('description')
nucleon - {{Lang::get('page.mbh')}} {{$model}}
@stop

@section('productImg')
@if($model == '800t'){{asset('img/products/mbh_800t.jpg')}}
@elseif($model == '1000t'){{asset('img/products/mbh_1000t.jpg')}}
@endif
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.mbh')}} {{$model}}</div>
    <div class="product-desc">
                        @if($model == '800t'){{Lang::get('page.pdec_800t')}}
                        @elseif($model == '1000t'){{Lang::get('page.pdec_1000t')}}
                        @endif
    </div>
    <div class="product-desc">{{Lang::get('page.pdec_1')}}{{$model}}{{Lang::get('page.pdec_2')}}</div> <br/>
    <div class="product-desc">{{Lang::get('page.pdec_3')}}</div> <br/>
    <div class="product-desc">{{Lang::get('page.pdec_4')}}</div>

@stop

@section('product_content_1')
    <h3>{{Lang::get('page.summary')}}</h3>
    <p>{{Lang::get('page.summary_1')}}</p>
    <p>{{Lang::get('page.summary_2')}}</p>

    <h3>{{Lang::get('page.mainTechnicalFeatures')}}</h3>
    <ul>
        <li>{{Lang::get('page.mtf_1')}}</li>
        <li>{{Lang::get('page.mtf_2')}}</li>
        <li>{{Lang::get('page.mtf_3')}}</li>
        <li>{{Lang::get('page.mtf_4')}}</li>
        <li>{{Lang::get('page.mtf_5')}}</li>
    </ul>

    <h3>{{Lang::get('page.technicalCondition')}}</h3>
    <p>{{Lang::get('page.tc_1')}}</p>

    <h3>{{Lang::get('page.environmentalConditions')}}</h3>


@stop

@section('product_content_2')
    <h3>{{Lang::get('page.parameters')}}</h3>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-bordered table-striped">
                <tr>
                    <td>{{Lang::get('page.pt1')}}</td>
                    <td>ton</td>
                    <td>
                    @if($model == '800t')800
                    @elseif($model == '1000t')1000
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt2')}}</td>
                    <td>m/min</td>
                    <td>0~1/0~3</td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt3')}}</td>
                    <td>m/min</td>
                    <td>0~30</td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt4')}}</td>
                    <td></td>
                    <td>3%</td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt5')}}</td>
                    <td>kw</td>
                    <td>
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt6')}}</td>
                    <td></td>
                    <td>
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt7')}}</td>
                    <td>m/t</td>
                    <td>
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt8')}}</td>
                    <td colspan="2">
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt9')}}</td>
                    <td>bar</td>
                    <td>
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt10')}}</td>
                    <td>m</td>
                    <td>
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr><tr>
                    <td>{{Lang::get('page.pt11')}}</td>
                    <td>m</td>
                    <td>
                    @if($model == '800t')
                    @elseif($model == '1000t')
                    @endif
                    </td>
                </tr>
            </table>
        </div>
        <table class="table table-bordered table-striped">
            <tr>
                <td></td>
                <td>MBH700T</td>
                <td>MBH800T</td>
                <td>MBH1000T</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt1')}}</td>
                <td>700t</td>
                <td>800t</td>
                <td>1000t</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt2')}}</td>
                <td>22m</td>
                <td>24m</td>
                <td>27m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt3')}}</td>
                <td>20m</td>
                <td>20m</td>
                <td>21m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt4')}}</td>
                <td>17m</td>
                <td>17m</td>
                <td>18m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt5')}}</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt6')}}</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt7')}}</td>
                <td>8</td>
                <td>8</td>
                <td>10</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt8')}}</td>
                <td>32</td>
                <td>32</td>
                <td>40</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt9')}}</td>
                <td>0-10m/min</td>
                <td>0-10m/min</td>
                <td>0-10m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt10')}}</td>
                <td>0-20m/min</td>
                <td>0-20m/min</td>
                <td>0-20m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt11')}}</td>
                <td>16</td>
                <td>16</td>
                <td>16</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt12')}}</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt13')}}</td>
                <td>32</td>
                <td>32</td>
                <td>32</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt14')}}</td>
                <td>4%</td>
                <td>4%</td>
                <td>4%</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt15')}}</td>
                <td>2*200kw</td>
                <td>2*230kw</td>
                <td>2*250kw</td>
            </tr>
        </table>
    </div>
@stop
