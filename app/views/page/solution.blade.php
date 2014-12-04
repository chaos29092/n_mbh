@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.merchants')}}
@stop

@section('description')
nucleon - {{Lang::get('page.merchants')}}
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/quality.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.merchants')}}</h4>
        <hr/>
        <div>
            <div class="media">
              <a class="media-left" href="">
                <img src="{{asset('img/page/solution_1.jpg')}}" class="img-rounded" alt="Sell on credit">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Sell on credit</h4>
                If customers order large quantity of product from China, but lack of money, we can supply the goods in advance and accepted up to six (6) months payment term for the customers.
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="">
                <img src="{{asset('img/page/solution_2.jpg')}}" class="img-rounded" alt="Product sourcing solution">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Product sourcing solution</h4>
                We can help customer to source products in China for quality purposed. Our company has professional team of quality control, especially, our company can compensate for loss of customer in advance, due to quality problem.
              </div>
            </div>
            <div class="media">
              <a class="media-left" href="">
                <img src="{{asset('img/page/solution_3.jpg')}}" class="img-rounded" alt="Our Services">
              </a>
              <div class="media-body">
                <h4 class="media-heading">Our Services</h4>
                Service Foremost, Customer First. <br/>
                Kind and Warm, Polite and Active. <br/>
                Focus on Constantly, Satisfied to Service. <br/>
              </div>
            </div>
        </div>
        <hr/>
    </div>
@stop



