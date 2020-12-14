@extends('frontEnd.master')
@section('title', 'Home')
@section('content')


<!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="lMsg"> আমাদের মধুসিটি প্রকল্পে প্লট কিনতে বা প্রকল্পটি ভিজিট করতে বা প্রকল্পে সম্পর্কে বিস্তারিত তথ্য জানতে আপনার তথ্য দিন। আমাদের একজন প্রতিনিধি খুব শীঘ্রই আপনার সাথে যোগাযোগ করবে। </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                              
                              <div class="no-margin-lr" id="msg">
                    
                              </div>
                            <form action="javascript:void(0)" method="post" id="test2">
                              <div class="form-group" id="">
                                  <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" class="form-control" id="name">
                                  </div>
                                  <div class="form-group">
                                    <label for="mobile">Mobile</label>
                                    <input type="text" name="mobile" class="form-control" id="mobile">
                                  </div>
                                  <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" class="form-control" id="email">
                                  </div>
                                  <div class="form-group">
                                    <label for="desg">Designation</label>
                                    <input type="text" name="desg" class="form-control" id="desg">
                                  </div>
                                  <div class="form-group">
                                    <label for="org">Organization</label>
                                    <input type="text" name="org" class="form-control" id="org">
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary btn-sm pull-right">Submit</button>
                            </form>
                            
                          </div>
                    
                        </div>
                      </div>
                    </div>







<div id="jssor_1" class="slider-ht"
    style="position:relative;margin:0 auto;top:0px;left:0px;width:1300px;height:640px;overflow:hidden;visibility:hidden;">
    <div data-u="loading" class="jssorl-009-spin"
        style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
            src="{{ asset('') }}assets/frontEnd/img/spin.svg" /> </div>



    <div data-u="slides"
        style="cursor:default;position:relative;top:0px;left:0px;width:1300px;height:640px;overflow:hidden;">
        @foreach(App\Models\Admin\Settings\Slider::where(['publication_status' =>
        1])->get()->sortBy('slider_image_serial') as $slider)
        <div>
            <a href="{{ $slider->slider_image_link }}"> <img data-u="image"
                    src="{{ asset('') }}{{ $slider->slider_image }}" /></a>
        </div>
        @endforeach
    </div>
    <div data-u="navigator" class="jssorb032" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1"
        data-scale="0.5" data-scale-bottom="0.75">
        <div data-u="prototype" class="i" style="width:16px;height:16px;">
            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
            </svg>
        </div>
    </div>
    
    
    



    {{-- <div data-u="arrowleft" class="jssora051" style="width:65px;height:65px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"> <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline> </svg> </div>
    <div data-u="arrowright" class="jssora051" style="width:65px;height:65px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75"> <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;"> <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline> </svg> </div> --}}
</div>
<script type="text/javascript">
    jssor_1_slider_init();
</script>
<div id="particles-js">
</div>
<!--<header class="header valign bg-img creative background-position-top" data-scroll-index="0" data-overlay-light="6" > <video autoplay muted loop id="myVideo"> <source src="{{ asset('') }}assets/frontEnd/img/modhucity.mp4" type="video/mp4"> Your browser does not support HTML5 video.</video> </header>-->
<!--<div class="stick1"> <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/awwwards.png" ></a> </div>-->
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








   

<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <div class="padding-ten-all new-pads sm-padding-50px-tb sm-no-padding-lr ">
                    <div class="wow fadeInUp text-center">
                        <h5 class="about-raja font-weight-300 margin-10px-bottom"><span class="colrt">Modhu</span>
                            City
                        </h5>
                        <div
                            class="margin-20px-bottom sm-margin-40px-bottom xs-margin-30px-bottom separator-line-horrizontal-medium-light2 bg-pink">
                        </div>
                    </div>
                    {!! App\Models\Admin\Settings\Basic::all()->pluck('about_site')->first() !!}
                </div>
            </div>
            <div class="col-lg-6 col-md-12 background-position-top center-col testimonials text-center cover-background no-padding wow fadeInRight"
                style="background-image: url({{ asset('') }}assets/frontEnd/img/_MG_6017.JPG);">
                <div class="row-new">
                    <h5 class="margin-10px-bottom font-weight-300 " style="color: #FFF;">Why <span
                            class="font-weight-500">Choose Modhu City </span></h5>
                    <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div>
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs rajk">
                                @php
                                $i = 1;
                                @endphp
                                @foreach(App\WhyChoose::where(['publication_status' => 1])->take(5)->get() as
                                $option)
                                @if ($i == 1)
                                <li class="active">
                                    @else
                                <li>
                                    @endif
                                    <a @if ($i==1) class="active" @endif href="#tab_default_{{ $i++ }}"
                                        data-toggle="tab"> <i class="{{ $option->wc_icon }}" aria-hidden="true"></i>
                                        <br />{{ $option->wc_text }}</a>
                                </li>

                                @endforeach
                            </ul>
                            <div class="tab-content">
                                @php
                                $i = 1;
                                @endphp
                                @foreach(App\WhyChoose::where(['publication_status' => 1])->take(5)->get() as
                                $option)
                                <div class="tab-pane @if($i == 1) active @endif" id="tab_default_{{ $i++ }}"><img
                                        src="{{ asset('') }}{{ $option->wc_image }}" alt="{{ $option->wc_text }}" />
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<div class="bg-int bg-light-gray ddfg text-center"><div class="container"><div class="col-12 center-col text-center wow fadeInUp"> <h5 class="cret margin-10px-bottom font-weight-300">CREATING VALUE THROUGH <span class="colrt"> INNOVATION</span></h5> <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div><p class="tag-para">With an exceptional entrepreneurial acumen, commitment to excellence, consistent teamwork, undaunted integrity, continuous learning and focus on innovation and creativity Modhu Citytoday shines high on the horizon of Hyderabad Real estate.</p></div></div></div>-->
<div class="parallaxie-indpr">
    <div class="numbers bulh padding-60px-tb">
        <div class="container">
            <div class="row">
                <hr class="dfr">
                <div class="col-lg-4 col-md-4 sm-margin-0px-bottom xs-margin-30px-bottom dfr-main wow zoomIn"
                    style="animation-duration: 2s; animation-delay: 0.3s; ">
                    <div class="item text-center bounceIn animated counter">
                        <div class="icon clients"></div>
                        <h6>{!! App\CompanyOverview::all()->pluck('experience')->first() !!}</h6>
                        <p>Experience</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 dfr-main wow zoomIn"
                    style="animation-duration: 2s; animation-delay: 1.2s;">
                    <div class="item text-center xs-margin-30px-bottom bounceIn animated counter">
                        <div class="icon house-villas"></div>
                        <h6 class="count"> {!! App\CompanyOverview::all()->pluck('resident')->first() !!}</h6>
                        <p>Residents</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 dfr-main xs-margin-30px-bottom wow zoomIn"
                    style="animation-duration: 2s; animation-delay: 1.5s;">
                    <div class="item text-center bounceIn animated counter">
                        <div class="icon agents"></div>
                        <h6 class="count">{!! App\CompanyOverview::all()->pluck('project')->first() !!}</h6>
                        <p>Projects</p>
                        <div class="separator-line-horrizontal-medium-light3 bg-pink center-col margin-15px-top">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="portfolio medr">
    <div class="row">
        <div
            class="col-12 center-col margin-40px-bottom sm-margin-40px-bottom xs-margin-30px-bottom margin-40px-top sm-margin-40px-top xs-margin-30px-top text-center wow fadeInUp">
            <h4 class="margin-10px-bottom font-weight-300">Our <span class="colrt">Projects</span></h4>
            <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 df-pad">
                <div class="tab1">
                    <div data-child="false" class="tab__header" id="fg-head">
                        <div class="tab__header-1 list-group-item tab__header--active">
                            <h4 class="flats"><i class="fa fa-building-o" aria-hidden="true"></i></h4>
                            <br /><span class="for-ft">LANDS </span>
                        </div>
                        <div class="tab__header-2 list-group-item">
                            <h4 class="flats"><i class="fa fa-building-o" aria-hidden="true"></i></h4>
                            <br /><span class="for-ft">APARTMENTS</span>
                        </div>
                        <div class="tab__header-3 list-group-item">
                            <h4 class="flats"><i class="fa fa-building-o" aria-hidden="true"></i></h4>
                            <br /><span class="for-ft"> Commercial</span>
                        </div>
                    </div>
                    <div class="tab__content">
                        <div class="tab__content-1 dd-ner tab__content--active">
                            <div class="tab">
                                <div data-child="true" class="tab__header new-err">
                                    <div class="tab__header-1 tab__header--active"><span class="trd">Ready
                                            Projects</span></div>
                                    <div class="tab__header-2"><span class="trd1">Handover Projects</span></div>
                                    <div class="tab__header-3"><span class="trd2">Installment Projects</span></div>
                                </div>
                                <div class="tab__content">
                                    <div class="tab__content-1 tab__content--active">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'land'])->where(['project_status' => 'ongoing'])->where(['publication_status' => 1])->take(6)->get() as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset($project->project_image) }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="tab__content-2" id="dd-ner2">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'land'])->where(['project_status' => 'completed'])->where(['publication_status' => 1])->take(6)->get() as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset($project->project_image) }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="tab__content-3" id="dd-ner3">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'land'])->where(['project_status' => 'upcoming'])->where(['publication_status' => 1])->take(6)->get() as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset($project->project_image) }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-2 dd-ner">
                            <div class="tab">
                                <div data-child="true" class="tab__header new-err">
                                    <div class="tab__header-1 tab__header--active"><span class="trd">Ready
                                            Projects</span></div>
                                    <div class="tab__header-2"><span class="trd1">Handover Projects</span></div>
                                    <div class="tab__header-3"><span class="trd2">Installment Projects</span></div>
                                </div>
                                <div class="tab__content">
                                    <div class="tab__content-1 tab__content--active" id="dd-ner4">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'apartment'])->where(['project_status' => 'ongoing'])->take(6)->get() as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset($project->project_image) }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab__content-2" id="dd-ner5">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'apartment'])->where(['project_status' => 'completed'])->take(6)->get()
                                            as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset('') }}{{ $project->project_image }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="tab__content-3" id="dd-ner6">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'apartment'])->where(['project_status' => 'upcoming'])->take(6)->get()
                                            as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset('') }}{{ $project->project_image }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab__content-3 dd-ner">
                            <div class="tab">
                                <div data-child="true" class="tab__header new-err">
                                    <div class="tab__header-1 tab__header--active"><span class="trd">Ready Projects</span></div>
                                    <div class="tab__header-2"><span class="trd1">Handover Projects</span></div>
                                    <div class="tab__header-3"><span class="trd2">Installment Projects</span></div>
                                </div>
                                <div class="tab__content">
                                    <div class="tab__content-1 tab__content--active" id="dd-ner7">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'commercial'])->where(['project_status' => 'ongoing'])->take(6)->get()
                                            as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset('') }}{{ $project->project_image }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="tab__content-2" id="dd-ner8">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'commercial'])->where(['project_status' => 'completed'])->take(6)->get()
                                            as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset('') }}{{ $project->project_image }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                        </div>
                                    </div>
                                    <div class="tab__content-3" id="dd-ner9">
                                        <div class="row ">
                                            @foreach(App\Models\Admin\Project\Project::where(['project_type' =>
                                            'commercial'])->where(['project_status' => 'upcomming'])->take(6)->get()
                                            as
                                            $project)
                                            <div class="hyu-new items graphic hy-pad">
                                                <div class="item-img">
                                                    <img src="{{ asset('') }}{{ $project->project_image }}"
                                                        alt="{{ $project->project_name }}">
                                                    <div class="item-img-overlay valign">
                                                        <div class="overlay-info width-100 vertical-center">
                                                            <h6>{{ $project->project_name }}</h6>
                                                            <p>{{ $project->project_description }} </p>
                                                            <a href="{{ route('project', ['slug' => $project->project_slug]) }}"
                                                                class="popimg">
                                                                <i class="fa fa-search-plus"></i> </a>
                                                        </div>
                                                    </div>
                                                    <div class="callout-content">
                                                        <h3>{{ $project->project_name }}<br><span>{{ $project->project_location }}</span>
                                                        </h3>
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
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-lg-12 register">

            <div class="register-left">
                <div class="register-in">
                    <h3>Booking Your Future Address </h3>
                    <form action="{{ route('booking-contact-message-send') }}" method="post">
                        {{ csrf_field() }}
                        <div class="col-md-4 col-sm-4 booking_form_field">
                            <div class="fields-grid">
                                <div class="styled-input agile-styled-input-top">
                                    <input type="text" name="name" required="">
                                    <label>Name</label>
                                    <span></span>
                                </div>
                                <div class="fields-grid">

                                    <div class="styled-input">

                                        <input type="text" name="phone" required="">
                                        <label>Mobile</label>
                                        <span></span>
                                    </div>


                                </div>

                                <div class="styled-input">

                                    <select name="project_name" class="form-control" required>
                                        <option selected disabled>Select a project</option>
                                        @foreach ($projectShowDetails as $projectName)
                                        <option value="{{ $projectName->project_name }}">
                                            {{ $projectName->project_name }}</option>
                                        @endforeach


                                    </select>
                                    <span></span>
                                </div>



                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 booking_form_field">
                            <div class="fields-grid">

                                <div class="styled-input">

                                    <input type="text" name="profession">
                                    <label>Profession</label>
                                    <span></span>
                                </div>
                                <div class="styled-input agile-styled-input-top">
                                    <input type="email" name="email">
                                    <label>Email</label>
                                    <span></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 booking_form_field">
                            <div class="styled-input">

                                <textarea rows="10" name="message" required></textarea>
                                <label>Message</label>
                                <span></span>
                            </div>



                        </div>
                        <div class="col-md-4" style="margin:auto;">
                            <input type="submit" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>

            <div class="clear"> </div>
        </div>
    </div>
</div>
<!-- <section class="portfolio" data-scroll-index="3"> <div class="container"> <div class="row"> <div class="col-12 center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center wow fadeInUp"> <h5 class="margin-10px-bottom font-weight-300">Our <span class="font-weight-500">Creative Feature</span> Work</h5> <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div></div></div><div class="clearfix"></div></div><div class="container"> <div class="row"> <div class="col-sm-3"> <p>dsdsdsadas</p></div><div class="col-sm-9"> <div class="filtering col-sm-12 text-center"> <span data-filter='*' class="active">All</span> <span data-filter='.develop'>Develop</span> <span data-filter='.design'>Design</span> <span data-filter='.graphic'>Graphic</span></div><div class="clearfix"></div><div class="gallery text-center width-100"> <div class="col-md-4 items design"> <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/1.jpg" alt="image"> <div class="item-img-overlay valign"> <div class="overlay-info width-100 vertical-center"> <h6>Clock mockup</h6> <p>Work description here</p><a href="{{ asset('') }}assets/frontEnd/img/1.jpg" class="popimg"> <i class="fa fa-search-plus"></i> </a> </div></div></div></div><div class="col-md-8 items design"> <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/2.jpg" alt="image"> <div class="item-img-overlay valign"> <div class="overlay-info width-100 vertical-center"> <h6>Label Design</h6> <p>Work description here</p><a href="{{ asset('') }}assets/frontEnd/img/2.jpg" class="popimg"> <i class="fa fa-search-plus"></i> </a> </div></div></div></div><div class="col-md-4 items develop"> <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/3.jpg" alt="image"> <div class="item-img-overlay valign"> <div class="overlay-info width-100 vertical-center"> <h6>Cup Design Mockup</h6> <p>Work description here</p><a href="{{ asset('') }}assets/frontEnd/img/3.jpg" class="popimg"> <i class="fa fa-search-plus"></i> </a> </div></div></div></div><div class="col-md-4 items graphic"> <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/4.jpg" alt="image"> <div class="item-img-overlay valign"> <div class="overlay-info width-100 vertical-center"> <h6>Macaron Mockup</h6> <p>Work description here</p><a href="{{ asset('') }}assets/frontEnd/img/4.jpg" class="popimg"> <i class="fa fa-search-plus"></i> </a> </div></div></div></div><div class="col-md-4 items graphic"> <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/5.jpg" alt="image"> <div class="item-img-overlay valign"> <div class="overlay-info width-100 vertical-center"> <h6>Dish Design idea</h6> <p>Work description here</p><a href="{{ asset('') }}assets/frontEnd/img/5.jpg" class="popimg"> <i class="fa fa-search-plus"></i> </a> </div></div></div></div><div class="clear-fix"></div></div></div></div></div></div></section>-->
<div class="bg-light-gray">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 background-position-top center-col testimonials text-center cover-background"
                style="background-image: url({{ asset('') }}assets/frontEnd/img/9.jpg);">
                <div class="opacity-full-dark bg-extra-dark-gray"></div>
                <div class="padding-ten-all sm-padding-50px-tb sm-no-padding-lr position-relative">
                    <div class="wow fadeInUp">
                        <h5 class="font-weight-300 text-white margin-10px-bottom">What <span class="font-weight-500">Our
                                Clients</span> Say</h5>
                        <div
                            class="margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom separator-line-horrizontal-medium-light2 bg-pink center-col">
                        </div>
                    </div>
                    <div class="owl-carousel owl-theme">
                        @foreach(App\Models\Admin\Portfolio\Portfolio::where(['publication_status' => 1])->get()->chunk(2) as $testimonials)
                        <div class="citem testimonials-wrapper">
                            <div class="row">
                                @foreach($testimonials as $testimonial)
                                <div class="col-sm-6">
                                    <div class="item">
                                        <p>“{!! $testimonial->portfolio_text !!}”</p>
                                        <h3>{{ $testimonial->portfolio_client_name }} <br></h3> <img
                                            src="{{ asset('') }}{{ $testimonial->portfolio_client_image }}"
                                            alt="{{ $testimonial->portfolio_client_name }}">
                                    </div>
                                </div>
                                 @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


 

<section>
    <div>
        <div id="map-location"></div>
    </div>
</section>

<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf12PbZrun26rrN3EtOiSng4bMMHS3roM&libraries=geometry,places"
    type="text/javascript">
</script>

<style>
    #map-location {
        margin-top: 2px;
        margin-bottom: 2px;
        height: 500px;
        width: auto;
    }
</style>


<script>



    var map = new google.maps.Map(document.getElementById('map-location'), {
        center: {
        lat: 23.750519126963013,
        lng: 90.32929077128904
    },
        zoom: 12
    });

    var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">Uluru</h1>'+
      '<div id="bodyContent">'+
      '<p><b>Uluru</b>, also referred to as <b>Ayers Rock</b>, is a large ' +
      'sandstone rock formation in the southern part of the '+
      'Northern Territory, central Australia. It lies 335&#160;km (208&#160;mi) '+
      'south west of the nearest large town, Alice Springs; 450&#160;km '+
      '(280&#160;mi) by road. Kata Tjuta and Uluru are the two major '+
      'features of the Uluru - Kata Tjuta National Park. Uluru is '+
      'sacred to the Pitjantjatjara and Yankunytjatjara, the '+
      'Aboriginal people of the area. It has many springs, waterholes, '+
      'rock caves and ancient paintings. Uluru is listed as a World '+
      'Heritage Site.</p>'+
      '<p>Attribution: Uluru, <a href="https://en.wikipedia.org/w/index.php?title=Uluru&oldid=297882194">'+
      'https://en.wikipedia.org/w/index.php?title=Uluru</a> '+
      '(last visited June 22, 2009).</p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  
    var features = [
        @foreach($mapData as
$location)
        {
            position: new google.maps.LatLng('{{ $location->lat }}', '{{ $location->lng }}'),
            type: '{{ $location->project_name }}',
            title: '{{ $location->project_description }}'
          },
        @endforeach
        ];
    

    for (var i = 0; i < features.length; i++) {
          var marker = new google.maps.Marker({
            position: features[i].position,
            map: map,
            label: {
                color: 'black',
                fontWeight: 'bold',
                text: features[i].type,
              },
             title: features[i].title
          });
        };



        $("#test2").click(function (e) {
            e.preventDefault();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
            $.ajax({
                type: "post",
                url: "{{ route('storeInfo') }}",
                data: $('#test2').serialize(),
                success: function (response) {
                    if (response) {
                        $("#test2").hide();
                        $("#lMsg").hide();
                        $("#msg").html(
                            "<h3 class='text-success text-capitalize'>Thanks for Your response.</h3>"
                        );
                        // $('#msg').html(response.msg);
                    }
                }
            });
        });
    

</script>

  <div class="modal fade" id="offerPromo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('') }}{{App\Models\Admin\Offer::where(['publication_status' => 1])->pluck('offer_frontEnd_image')->first()}}" id="offerPromo">
      </div>
    </div>
  </div>
</div>

@endsection