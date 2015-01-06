@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.service')}}
@stop

@section('description')
nucleon - {{Lang::get('page.service')}}
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/service.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4 class="text-uppercase">{{Lang::get('page.service')}}</h4>
        <hr/>
        <p class="text-primary"><strong>{{Lang::get('page.preSale')}}:</strong></p>
        <p>{{Lang::get('page.servicep_1')}}</p>

        <p class="text-primary"><strong>{{Lang::get('page.saleService')}}:</strong></p>
        <dl>
          <dt>{{Lang::get('page.service_dt_1')}}:</dt>
          <dd>{{Lang::get('page.service_dd_1')}}</dd>
          <dt>{{Lang::get('page.service_dt_2')}}:</dt>
          <dd>{{Lang::get('page.service_dd_2')}}</dd>
          <dt>{{Lang::get('page.service_dt_3')}}:</dt>
          <dd>{{Lang::get('page.service_dd_3')}}</dd>
        </dl>

        <p class="text-primary"><strong>{{Lang::get('page.afterSale')}}: </strong></p>
        <dl>
            <dt>{{Lang::get('page.service_dt_4')}}: </dt>
            <dd>{{Lang::get('page.service_dd_4')}}</dd>
            <dt>{{Lang::get('page.service_dt_5')}}:</dt>
            <dd>{{Lang::get('page.service_dd_5')}}</dd>
            <dt>{{Lang::get('page.service_dt_6')}}: </dt>
            <dd>{{Lang::get('page.service_dd_6')}}</dd>
        </dl>

        <hr/>
        <div id="contact">
                    <div class="row">
                        <h4>{{Lang::get('page.fillInquiry')}}</h4>
                        {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}

                        <div class="form-group">
                            {{ Form::label('country', Lang::get('page.country'), array('class' => 'col-md-2 control-label')) }}
                            <div class="col-md-6">
                                <input placeholder="your country" class="form-control" name="country" type="text">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('subject', Lang::get('page.name'), array('class' => 'col-md-2 control-label')) }}
                            <div class="col-md-6">
                                <input required placeholder="your name" class="form-control" name="subject"
                                       type="text" id="subject">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('email', Lang::get('page.email'), array('class' => 'col-md-2 control-label')) }}
                            <div class="col-md-6">
                                <input required placeholder="youremail@example.com" class="form-control"
                                       name="email" type="email" id="email">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('phone', 'Phone', array('class' => 'col-md-2 control-label')) }}
                            <div class="col-md-6">
                                <input placeholder="your phone number" class="form-control" name="phone"
                                       type="text">
                            </div>
                        </div>


                        <div class="form-group">
                            {{ Form::label('message', Lang::get('page.message'), array('class' => 'col-md-2 control-label')) }}
                            <div class="col-md-8">
                                <textarea required class="form-control" rows="8" name="mes" cols="50"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-1 col-sm-10">
                                {{ Form::submit(Lang::get('page.send'), array('class' => 'btn btn-primary')) }}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                <script src="{{asset('assets/js/jquery.validate.min.js')}}"></script>
                <script>
                $("form").validate();
                </script>
        </div>
        <hr/>
    </div>
@stop



