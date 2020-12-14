@extends('frontEnd.master')
@section('title', 'Career')

@section('content')
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
   
<section style="margin-top: 80px;" class="contact">
    <!--===== Page Content =====-->
    <section style="margin-top: 120px;" class="div-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-1">
                    <div class="message_body">
                        <h2 class="m_massage">
                        Apply for the right position!
                        </h2>
                        <div class="message">
                            <div id="accordion">
                                @foreach ($careerNews as $k => $career)
                                <div class="card">
                                  <div class="card-header" id="heading{{ $career->id }}">
                                    <h5 class="mb-0">
                                      <a class="nav-link" data-toggle="collapse" data-target="#collapse{{ $career->id }}" aria-expanded="false"  aria-controls="collapse{{ $career->id }}">
                                           {{ $k+1 }}. {{ $career->role }}
                                      </a>
                                    </h5>
                                  </div>
                              
                                  <div id="collapse{{ $career->id }}" class="collapse" data-parent="#accordion">
                                    <div class="card-body">
                                            {!! $career->message !!}
                                            <img src="{{ asset('') }}{{ $career->picture }}">
                                            <br>
                                            <a href="#apply" class="btn btn-success"> Apply Now </a>
                                    </div>
                                  </div>
                                </div>
                                @endforeach
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<div class="container">
    <a id="apply"></a>
    <div class="row">
        <div class="col-lg-12">
                    <div class="padding-ten-all sm-padding-50px-tb sm-no-padding-lr">
                        <div class="wow fadeInUp">

                            <h5 class="font-weight-300 margin-10px-bottom text-center">Send Your CV/Resume to us</h5>
                            <div class="margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom separator-line-horrizontal-medium-light2 bg-pink center-col"></div>
                        </div>
                        <div class="no-margin-lr" id="form-message"></div>
                        <form method="post" class="wow fadeInUp" data-wow-duration="0.6s" action="{{ route('career-cv-send') }}" enctype="multipart/form-data">
                       {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <input type="text" class="medium-input" maxlength="50" placeholder="Name *" required id="cname" name="cname">
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <input type="email" class="medium-input" maxlength="70" placeholder="E-mail *" required id="cemail" name="cemail">
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <input onkeypress="validate(event)" class="medium-input" placeholder="Phone *" id="cphone" name="cphone" required>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <input type="file" class="medium-input" placeholder="PDF/Doc Type only" id="cv" name="cv" accept=".pdf,.docx, .doc" required>
                                </div>
                                 <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s">
                                    <select class="form-control" rows="6" name="cposition" required>
                                        <option selected disabled>Select a Postion for apply</option>
                                        @foreach($careerNews as $career)
                                        <option value="{{ $career->id }}">{{ $career->role }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s">
                                    <textarea class="big-textarea" rows="6" maxlength="1000" placeholder=Message *" required id="cmessage" name="cmessage"></textarea>
                                </div>
                                <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="0.8s">
                                    <button class="btn" type="submit" name="btn">Send Now!</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</div>
</section>
                
     @endsection