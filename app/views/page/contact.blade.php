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
        <h4>CONTACT US</h4>
        <hr/>
        <p><strong>Henan Nucleon Mobile Boat Hoist Co., Ltd.</strong></p>
        <p><strong>Contact Person:</strong></p>
        <p>Mobile: 0086 18603710680</p>
        <p>Email: </p>
        <p><a href="mailto:info@nucleon-mbh.com"></a>info@nucleon-mbh.com</p>

        <hr/>
        <div id="contact">
                    <div class="row">
                        <h4>Please Fill Your Inquiry</h4>
                        {{ Form::open(array('url' => 'mailPost', 'class' => 'form-horizontal', 'role' => 'form' )) }}
                        <div class="form-group">
                            {{ Form::label('email', 'Email', array('class' => 'col-md-1 control-label')) }}
                            <div class="col-md-6">
                                <input required placeholder="youremail@example.com" class="form-control" name="email" type="email" id="email">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('subject', 'Name', array('class' => 'col-md-1 control-label')) }}
                            <div class="col-md-6">
                                <input required placeholder="your name" class="form-control" name="subject" type="text" id="subject">
                            </div>
                        </div>

                        <div class="form-group">
                            {{ Form::label('message', 'Message', array('class' => 'col-md-1 control-label')) }}
                            <div class="col-md-8">
                                <textarea required class="form-control" rows="8" name="mes" cols="50"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-1 col-sm-10">
                                {{ Form::submit('send a message', array('class' => 'btn btn-primary')) }}
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



