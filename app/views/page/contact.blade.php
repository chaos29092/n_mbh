@extends('sidebar_master')

@section('title')
nucleon - {{Lang::get('page.contact')}}
@stop

@section('description')
nucleon - {{Lang::get('page.contact')}}
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/contact.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h4>{{Lang::get('page.contact')}}</h4>
        <hr/>
        <p><strong>{{Lang::get('page.nucleonCompany')}}</strong></p>
        <p>{{Lang::get('page.mobile')}}: 0086 186 0386 0660</p>
        <p>{{Lang::get('page.emailaddress')}}: <a href="mailto:info@nucleon-mbh.com">info@nucleon-mbh.com</a></p>
        <p>{{Lang::get('page.address')}}: {{Lang::get('page.ourAddress')}}</p>


        <hr/>
        <div id="contact">
                    <div class="row">
                        <h4>Please Fill Your Inquiry</h4>
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
                                <input placeholder="your name" class="form-control" name="subject"
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
                            <div class="col-md-offset-2 col-sm-10">
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



