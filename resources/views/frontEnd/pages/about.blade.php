@extends('frontEnd.master')
@section('title', 'About Us')

@section('content')

<!--<header class="header valign bg-img creative background-position-top" data-scroll-index="0" data-overlay-light="6" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <video autoplay muted loop id="myVideo">
  <source src="img/Modhu City.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
 
    
    </header>-->
    <!--<div class="stick1">
    <a href="#"><img src="img/awwwards.png" ></a>
    </div>-->
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
   
    <header class="inner-header-bg mobi-ban-inn">
    <div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    
<h2 class="artd"><span>About Us</span></h2>
     
  </div>
</div>
    </header>
     <section class="mobi-inn">
        <img src="{{ asset('') }}assets/frontEnd/blog/img/inner-banner.jpg"  style="width:100%;"/>
    </section>
   
  <section>
  <div class="container">
  <div class="row">
 <div class="col-sm-6 wow fadeInLeft" style="padding-bottom: 15px;">

                                    <ul class="nav nav-tabs inner-tabs " role="tablist">
                                        <li role="presentation" class="active" style="margin:auto;"> <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="active"><i class="fa profile1-fa" aria-hidden="true"></i> Company Profile</a></li>
                                        <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa philosophy-fa" aria-hidden="true"></i> Our Philosophy</a></li> -->
                                   
                                    </ul>
                                       

                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="home">
                                        <p style="margin-bottom: 10px;">{!! App\Models\Admin\Settings\Basic::all()->pluck('about_site')->first() !!}</p>





                                        </div>
                                        
                                       
                                    </div>

   
 </div>
 <div class="col-sm-6 wow fadeInRight">
 <!--<img src="img/about/side-banner.png" alt="" />-->
 <div class="row" style="padding: 0px 15px;">
                <div class="col-lg-12 col-md-12 background-position-top center-col testimonials text-center cover-background no-padding olw-test">
                   
                    <div class="sm-padding-50px-tb sm-no-padding-lr position-relative">
                       
                        <div class="owl-carousel owl-theme olw olw1">
                            <div class="citem testimonials-wrapper"> 
                            <img src="{{ asset('') }}{!! App\CompanyOverview::all()->pluck('about_slider_1')->first() !!}" alt="" />
                            </div>
                            <div class="citem testimonials-wrapper">
                         <img src="{{ asset('') }}{!! App\CompanyOverview::all()->pluck('about_slider_2')->first() !!}" alt="" />
                            </div>
                            <div class="citem  testimonials-wrapper"> 
                           <img src="{{ asset('') }}{!! App\CompanyOverview::all()->pluck('about_slider_3')->first() !!}" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
 
 </div>
 </div>
  </div>
  </section>
 
    
    
   <section class="parallaxie-viso">
   <div class="vision-bg">
  <div class="container">
   


<div class="vision-nw">
<div class="row">
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="vids">
<h2><img src="{{ asset('') }}assets/frontEnd/img/vision-icon.png" /> Vision</h2>
<p>{!! App\CompanyOverview::all()->pluck('vision')->first() !!}</p>
</div>
</div>
<!--<div class="visi-01">
<p style=" color: #f1efef;">.</p>
</div>-->
<div class="col-sm-6 col-md-6 col-lg-6">
<div class="vids">
<h2><img src="{{ asset('') }}assets/frontEnd/img/mission-icon.png" />Mission</h2>
<p>{!! App\CompanyOverview::all()->pluck('mission')->first() !!}</p>
</div>
</div>

<div class="clearfix"></div>
</div>

</div>

  </div>
  </div>
  </section>


 @endsection
    