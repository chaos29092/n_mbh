@extends('sidebar_master')

@section('title')
Cotek - Thank you for your message
@stop

@section('description')
Thank you for your message
@stop

@section('topimg')
    <div id="topimg">
        <img src="{{asset('img/page/contact.jpg')}}" class="img-responsive" alt=""/>
    </div>
@stop

@section('content_page')
    <div>
        <h2 class="text-center">We have received your information!</h2>

        <blockquote>Thank you for your message, we will reply you as soon as possible! <br/><br/>
        If your request is urgent, please call tel: +86 139 3821 6025.
        </blockquote>


        <hr/>
    </div>

    <!-- Google Code for cotek_n &#30041;&#35328;&#25552;&#20132; Conversion Page -->
    <script type="text/javascript">
    /* <![CDATA[ */
    var google_conversion_id = 964747526;
    var google_conversion_language = "en";
    var google_conversion_format = "3";
    var google_conversion_color = "ffffff";
    var google_conversion_label = "ttj_CMiDy1cQhsKDzAM";
    var google_remarketing_only = false;
    /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
    <div style="display:inline;">
    <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/964747526/?label=ttj_CMiDy1cQhsKDzAM&amp;guid=ON&amp;script=0"/>
    </div>
    </noscript>
@stop



