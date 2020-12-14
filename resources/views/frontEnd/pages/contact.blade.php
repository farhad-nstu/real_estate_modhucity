@extends('frontEnd.master')
@section('title', 'Contact Us')

@section('content')


    <div class="container-fluid">
        <div class="row">
            <div id="feedback123">
                <a href=""><i class="fa fa-whatsapp"></i></a>
            </div>

        </div>
    </div>

    <style>
        #feedback123 {
            position: fixed;
            right: 0;
            top: 165px;
            z-index: 1000;
        }
        
        #feedback123 a {
            display: block;
            background: #25D366;
            /* height: 52px; */
            padding: 11px 13px;
            /* width: 155px; */
            text-align: center;
            color: #fff;
            font-family: Arial, sans-serif;
            font-size: 21px;
            font-weight: bold;
            text-decoration: none;
            border-radius: 3px;
        }
        
        #feedback123 a:hover {
            background: #119040;
        }
    </style>
    
  
    <!--<header class="header valign bg-img creative background-position-top" data-scroll-index="0" data-overlay-light="6" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <video autoplay muted loop id="myVideo">
  <source src="{{ asset('') }}assets/frontEnd/img/Modhu City.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
 
    
    </header>-->
    <!--<div class="stick1">
    <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/awwwards.png" ></a>
    </div>-->
    <header class="inner-header-bg mobi-ban-inn">
    <div class="page-title page-main-section parallaxie-contact">
  <div class="container padding-bottom-top-1201 text-uppercase text-center">
  
  </div>
</div>
    </header>
      <section class="mobi-inn">
        <img src="{{ asset('') }}assets/frontEnd/img/inner-banner-contact.jpg"  style="width:100%;"/>
    </section>
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
   
 
    
@endsection