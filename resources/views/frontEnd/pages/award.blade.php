@extends('frontEnd.master')
@section('title', 'Awards & Recognition')
@section('extraCss')
<link rel="stylesheet" href="https://daneden.github.io/animate.css/animate.min.css">
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
   

<section class="our-business-banner-area overflow-fix page-header-area awards-header"  style="margin-top: 180px;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
           
          </div>
          <div class="col-lg-12">
            <div class="our-business-banner-history overflow-fix page-header-content">
              <h3 class="text-warning">ACHIEVEMENTS</h3>
              <p>We have achieved various certificates, which are recognized world-wide in the international arena. The lists of certificates achieved are provided below.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="our-business-item-area overflow-fix awards-content">
      <div class="container">
          @foreach($awards as $award)
          @if($award->image_position == 0)
                <div class="row our-business-single-item-area overflow-fix align-items-center">
                  <div class="col-lg-3">
                    <div class="our-business-single-item-right overflow-fix"><img src="{{ asset('')}}{{ $award->award_image }}"></div>
                  </div>
                  <div class="col-lg-9">
                    <div class="our-business-single-item-left overflow-fix">
                      <h2 class="text-success">{{ $award->award_title }}</h2>
                      <p style="text-align:justify;">{!! $award->description !!}</p>
                    </div>
                  </div>
                </div>
            @else
                <div class="row our-business-single-item-area overflow-fix align-items-center">
                  <div class="col-lg-9">
                    <div class="our-business-single-item-left overflow-fix">
                      <h2 class="text-info">{{ $award->award_title }}</h2>
                      <p style="text-align:justify;">{!! $award->description !!}</p>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="our-business-single-item-right overflow-fix"><img src="{{ asset('')}}{{ $award->award_image }}"></div>
                  </div>
                </div>
            @endif
        @endforeach
      </div>
    </section>
@endsection