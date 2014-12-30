@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.mbh')}} 32t ~ 150t
@stop

@section('description')
nucleon - {{Lang::get('page.mbh')}} 32t ~ 150t
@stop

@section('productImg')
{{asset('img/products/mbh_150t.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.mbh')}} 32t ~ 150t</div>
    <div class="product-desc"></div>
    <div class="product-desc">{{Lang::get('page.pdec_1')}} 32t ~ 150t {{Lang::get('page.pdec_2')}}</div> <br/>
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
        <table class="table table-bordered table-striped">
            <tr>
                <td></td>
                <td>MBH32T</td>
                <td>MBH50T</td>
                <td>MBH100T</td>
                <td>MBH150T</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt1')}}</td>
                <td>32t</td>
                <td>50t</td>
                <td>100t</td>
                <td>150t</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt2')}}</td>
                <td>8m</td>
                <td>9.3m</td>
                <td>10m</td>
                <td>11m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt3')}}</td>
                <td>7.1m</td>
                <td>7.7m</td>
                <td>12m</td>
                <td>12.8m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt4')}}</td>
                <td>6.5m</td>
                <td>7m</td>
                <td>9m</td>
                <td>11m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt5')}}</td>
                <td>0-3m/min</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt6')}}</td>
                <td>0-4m/min</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt7')}}</td>
                <td>4个</td>
                <td>4个</td>
                <td>4个</td>
                <td>4个</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt8')}}</td>
                <td>4个</td>
                <td>4个</td>
                <td>4个</td>
                <td>4个</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt9')}}</td>
                <td>0-30m/min</td>
                <td>0-30m/min</td>
                <td>0-30m/min</td>
                <td>0-30m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt10')}}</td>
                <td>0-40m/min</td>
                <td>0-40m/min</td>
                <td>0-40m/min</td>
                <td>0-40m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt11')}}</td>
                <td>4个</td>
                <td>4个</td>
                <td>4个</td>
                <td>4个</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt12')}}</td>
                <td>1个</td>
                <td>1个</td>
                <td>2个</td>
                <td>2个</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt13')}}</td>
                <td>4个</td>
                <td>4个</td>
                <td>8个</td>
                <td>8个</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt14')}}</td>
                <td>4%</td>
                <td>4%</td>
                <td>4%</td>
                <td>4%</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt15')}}</td>
                <td>90kw</td>
                <td>110kw</td>
                <td>120kw</td>
                <td>120kw</td>
            </tr>
        </table>
    </div>
@stop
