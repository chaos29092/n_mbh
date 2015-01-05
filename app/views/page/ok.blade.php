@extends('sidebar_master')

@section('title')
nucleon - Thank you for your message
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

    <!-- Google Code for &#21457;&#36865;&#35810;&#30424; Conversion Page -->
    <script type="text/javascript">
        /* <![CDATA[ */
        var google_conversion_id = 957389509;
        var google_conversion_language = "en";
        var google_conversion_format = "3";
        var google_conversion_color = "ffffff";
        var google_conversion_label = "BIHUCMLqyFgQxbXCyAM";
        var google_remarketing_only = false;
        /* ]]> */
    </script>
    <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
    </script>
    <noscript>
        <div style="display:inline;">
            <img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/957389509/?label=BIHUCMLqyFgQxbXCyAM&amp;guid=ON&amp;script=0"/>
        </div>
    </noscript>
@stop



