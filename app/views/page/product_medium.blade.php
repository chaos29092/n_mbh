@extends('product_master')

@section('title')
nucleon - {{Lang::get('page.mbh')}} 200t ~ 500t
@stop

@section('description')
nucleon - {{Lang::get('page.mbh')}} 200t ~ 500t
@stop

@section('productImg')
{{asset('img/products/mbh_500t.jpg')}}
@stop

@section('product_dec')
    <div class="product-title">{{Lang::get('page.mbh')}} 200t ~ 500t</div> <br/>
    <div class="product-desc">
    </div>
    <div class="product-desc">{{Lang::get('page.pdec_1')}} 200t ~ 500t {{Lang::get('page.pdec_2')}}</div> <br/>
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
                <td>MBH200T</td>
                <td>MBH300T</td>
                <td>MBH400T</td>
                <td>MBH500T</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt1')}}</td>
                <td>200t</td>
                <td>300t</td>
                <td>400t</td>
                <td>500t</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt2')}}</td>
                <td>11m</td>
                <td>13.8m</td>
                <td>16m</td>
                <td>16.5m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt3')}}</td>
                <td>13m</td>
                <td>16.2m</td>
                <td>16.2m</td>
                <td>16.7m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt4')}}</td>
                <td>11m</td>
                <td>14.2m</td>
                <td>14.2m</td>
                <td>14.7m</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt5')}}</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
                <td>0-1m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt6')}}</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
                <td>0-3m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt7')}}</td>
                <td>4</td>
                <td>4</td>
                <td>4</td>
                <td>8</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt8')}}</td>
                <td>16</td>
                <td>32</td>
                <td>32</td>
                <td>32</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt9')}}</td>
                <td>0-30m/min</td>
                <td>0-20m/min</td>
                <td>0-20m/min</td>
                <td>0-20m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt10')}}</td>
                <td>0-40m/min</td>
                <td>0-35m/min</td>
                <td>0-35m/min</td>
                <td>0-35m/min</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt11')}}</td>
                <td>4</td>
                <td>8</td>
                <td>8</td>
                <td>8</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt12')}}</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
                <td>2</td>
            </tr>
            <tr>
                <td>{{Lang::get('page.pt13')}}</td>
                <td>8</td>
                <td>16</td>
                <td>16</td>
                <td>16</td>
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
                <td>150kw</td>
                <td>200kw</td>
                <td>250kw</td>
                <td>2*150kw</td>
            </tr>
        </table>
    </div>
@stop
