@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.mbh')}} {{$model}}
@stop

@section('description')
nucleon - {{Lang::get('page.mbh')}} {{$model}}
@stop

@section('productImg')
@if($model == '300t'){{asset('img/products/mbh_300t.jpg')}}
@elseif($model == '400t'){{asset('img/products/mbh_400t.jpg')}}
@elseif($model == '500t'){{asset('img/products/mbh_500t.jpg')}}
@elseif($model == '700t'){{asset('img/products/mbh_700t.jpg')}}
@endif
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.mbh')}} {{$model}}</div>
    <div class="product-desc">
                        @if($model == '50t'){{Lang::get('page.pdec_300t')}}
                        @elseif($model == '100t'){{Lang::get('page.pdec_400t')}}
                        @elseif($model == '150t'){{Lang::get('page.pdec_500t')}}
                        @elseif($model == '200t'){{Lang::get('page.pdec_700t')}}
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
                    @if($model == '300t')300
                    @elseif($model == '400t')400
                    @elseif($model == '500t')500
                    @elseif($model == '700t')700
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
                    <td>0~25</td>
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
                    @if($model == '300t')200
                    @elseif($model == '400t')300
                    @elseif($model == '500t')2*130
                    @elseif($model == '700t')2*200
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt6')}}</td>
                    <td></td>
                    <td>
                    @if($model == '300t')4/32
                    @elseif($model == '400t')4/32
                    @elseif($model == '500t')8/32
                    @elseif($model == '700t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt7')}}</td>
                    <td>m/t</td>
                    <td>
                    @if($model == '300t')28/10
                    @elseif($model == '400t')28/16
                    @elseif($model == '500t')40/20
                    @elseif($model == '700t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt8')}}</td>
                    <td colspan="2">
                    @if($model == '300t')16/24.00-35
                    @elseif($model == '400t')16/24.00-35
                    @elseif($model == '500t')16/24.00-49
                    @elseif($model == '700t')
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt9')}}</td>
                    <td>bar</td>
                    <td>
                    @if($model == '300t')6.5
                    @elseif($model == '400t')8
                    @elseif($model == '500t')7.5
                    @elseif($model == '700t')8
                    @endif
                    </td>
                </tr>
                <tr>
                    <td>{{Lang::get('page.pt10')}}</td>
                    <td>m</td>
                    <td>
                    @if($model == '300t')10
                    @elseif($model == '400t')10
                    @elseif($model == '500t')13
                    @elseif($model == '700t')
                    @endif
                    </td>
                </tr><tr>
                    <td>{{Lang::get('page.pt11')}}</td>
                    <td>m</td>
                    <td>
                    @if($model == '300t')20
                    @elseif($model == '400t')20
                    @elseif($model == '500t')25
                    @elseif($model == '700t')
                    @endif
                    </td>
                </tr>
            </table>
        </div>
    </div>
@stop
