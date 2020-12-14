@extends('frontEnd.master')
@section('title')
Message of 
 @if($data['position'] == 'md')
            Managing Director
        @else
            Chairman
        
        @endif
@endsection

@section('content')
<div class="sticky-container">
    <ul class="sticky">
        @if(App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first() != null)
        <li class="pht">
            <span class="ef-email1">{{App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first()}}, {{App\Models\Admin\ContactInformation::all()->pluck('phone_2')->first()}}
            </span>
            <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/call.png" width="32" height="32"></a>
            <!--<p><a href="#">+8801708149971
</a></p>-->
        </li>
        @endif
        @if(App\Models\Admin\ContactInformation::all()->pluck('email')->first() != null)
        <li>
            <span class="ef-email"> {{App\Models\Admin\ContactInformation::all()->pluck('email')->first()}} </span>
            <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/email.png" width="32" height="32"></a>
            <!--<p><a href="#">info@modhucity.com</a></p>-->
        </li>
        @endif
    </ul>
</div>
<div id="feedback">
    <div id="feedback-form" style='display:none;' class="col-xs-4 col-md-4 panel panel-default">
        <form method="post" action="{{ route('contact-message-send') }}" role="form" id="fs">
            <input type="hidden" id="ct" value="{{ csrf_token() }}" name="_token">
            <div class="ft-main">
                <input name="name" class="name-ft" autofocus placeholder="Name" type="text" id="nm" />
            </div>
            <div class="ft-main">
                <input name="email" class="name-ft" placeholder="Email" type="email" required id="em" />
            </div>
            <div class="ft-main">
                <input name="phone" class="name-ft" placeholder="Phone" type="text" onkeypress="validate(event)"
                    maxlength="12" required id="pn" />
            </div>
            <input name="subject" type="hidden" value="Inquiry information about requirement" id="sb" />
            <div>
                <textarea name="messages" required placeholder="Requirement" row="3" id="ms"></textarea>
            </div>

            <div align="center">
                <button class="slide-form" type="submit" name="submit">Send</button>
            </div>
        </form>
    </div>
    <div id="feedback-tab"><img src="{{ asset('') }}assets/frontEnd/img/enquiry.png" width="25" height="25"></div>
</div>


<script type='text/javascript'>
    function validate(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
            // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if (!regex.test(key)) {
            theEvent.returnValue = false;
            if (theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
   
    <!--===== #/PAGE TITLE =====-->

    <style>
        .message_body {
            margin: 50px 0;
            background: #fff;
            padding: 30px 50px;
            font-family: 'Poppins', sans-serif;

        }
        
        h2.m_massage {
            border-bottom: 2px solid#1B5E20;
            border-top: 2px solid#1B5E20;
            margin: 15px 0;
            padding: 5px 0;
        }

        .message p {
            text-align: justify;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            padding-bottom: 10px;
        }

        .div-bg {
            background-image: url("https://primeassetdl.com/front_assests/bg-iamge/Tiny-Subtle-White-Seamless-Pattern.jpg");
            background-attachment: fixed;
        }

    </style>

    <!--===== Page Content =====-->
    <section style="margin-top: 120px;" class="div-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">

                    <div class="message_body">
                        <h2 class="m_massage">

                            Message of Chairman

                        </h2>
                        <div class="message">
                            {!! $data['cm_message'] !!}
                            <p style="text-align: right; margin-top: 10px;">
                                <br>  @if($data['position'] == 'md')
        
            Managing Director
        
        @else
        
            Chairman
        
        
        @endif
                                <br> {{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }}
                            </p>
                        </div>


                    </div>
                </div>
            </div>
        </div>

    </section>
    <!--===== #/Page Content =====-->
                
     @endsection