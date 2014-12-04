@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.mbh')}} {{$model}}
@stop

@section('description')
nucleon - {{Lang::get('page.mbh')}} {{$model}}
@stop

@section('productImg')
@if($model == '50t'){{asset('img/products/mbh_50t.jpg')}}
@elseif($model == '100t'){{asset('img/products/mbh_100t.jpg')}}
@elseif($model == '150t'){{asset('img/products/mbh_150t.jpg')}}
@elseif($model == '200t'){{asset('img/products/mbh_200t.jpg')}}
@endif
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.mbh')}} {{$model}}</div>
    <div class="product-desc">
                        @if($model == '50t'){{Lang::get('page.pdec_50t')}}
                        @elseif($model == '100t'){{Lang::get('page.pdec_100t')}}
                        @elseif($model == '150t'){{Lang::get('page.pdec_150t')}}
                        @elseif($model == '200t'){{Lang::get('page.pdec_200t')}}
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
                    @if($model == '50t')50
                    @elseif($model == '100t')100
                    @elseif($model == '150t')150
                    @elseif($model == '200t')200
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
                    <td>4%</td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt5')}}</td>
                    <td>kw</td>
                    <td>
                    @if($model == '50t')110
                    @elseif($model == '100t')120
                    @elseif($model == '150t')120
                    @elseif($model == '200t')150
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt6')}}</td>
                    <td></td>
                    <td>
                    @if($model == '50t')4/8
                    @else 4/16
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt7')}}</td>
                    <td>m/t</td>
                    <td>
                    @if($model == '50t')12/8
                    @elseif($model == '100t')15/8
                    @elseif($model == '150t')18/10
                    @elseif($model == '200t')20/15
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt8')}}</td>
                    <td colspan="2">
                    @if($model == '50t')4/21.00-35
                    @elseif($model == '100t')8/21.00-35
                    @elseif($model == '150t')8/21.00-35
                    @elseif($model == '200t')8/21.00-35
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt9')}}</td>
                    <td>bar</td>
                    <td>
                    @if($model == '50t')7.5
                    @elseif($model == '100t')8
                    @elseif($model == '150t')8
                    @elseif($model == '200t')8
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt10')}}</td>
                    <td>m</td>
                    <td>
                    @if($model == '50t')5.5
                    @elseif($model == '100t')7
                    @elseif($model == '150t')7.5
                    @elseif($model == '200t')8
                    @endif
                    </td>
                </tr><tr>
                    <td>{{Lang::get('page.pt11')}}</td>
                    <td>m</td>
                    <td>
                    @if($model == '50t')11
                    @elseif($model == '100t')14
                    @elseif($model == '150t')15
                    @elseif($model == '200t')16
                    @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop
