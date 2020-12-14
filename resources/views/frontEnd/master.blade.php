<!DOCTYPE html>
<html lang="en">



<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>@yield('title') | {{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }}</title>
    <link rel="shortcut icon" href="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/css/plugins.css" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="stylesheet" href="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/css/font-awesome.css" />
    <link rel="stylesheet" href="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/css/menu.css" />
    <link href="{{ asset('') }}assets/frontEnd/css/jquery-multitabs.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/css/feedback.css" />
    <link rel="stylesheet" href="{{ asset('assets/frontEnd/css/style.css') }}" />
    @yield('extraCss')
    <script type='text/javascript' src='js/modernizr61da.js'></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script type="text/javascript">
    

    
        $(document).ready(function(){
        $("#exampleModal").modal('show');
    });
    
    
    
        jssor_1_slider_init = function() {
            var jssor_1_SlideoTransitions = [
                [{
                    b: -1,
                    d: 1,
                    o: -0.7
                }],
                [{
                    b: 900,
                    d: 2000,
                    x: -379,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: 900,
                    d: 2000,
                    x: -379,
                    e: {
                        x: 7
                    }
                }],
                [{
                    b: -1,
                    d: 1,
                    o: -1,
                    sX: 2,
                    sY: 2
                }, {
                    b: 0,
                    d: 900,
                    x: -171,
                    y: -341,
                    o: 1,
                    sX: -2,
                    sY: -2,
                    e: {
                        x: 3,
                        y: 3,
                        sX: 3,
                        sY: 3
                    }
                }, {
                    b: 900,
                    d: 1600,
                    x: -283,
                    o: -1,
                    e: {
                        x: 16
                    }
                }]
            ];
            var jssor_1_options = {
                $AutoPlay: 1,
                $SlideDuration: 800,
                $SlideEasing: $Jease$.$OutQuint,
                $CaptionSliderOptions: {
                    $Class: $JssorCaptionSlideo$,
                    $Transitions: jssor_1_SlideoTransitions
                },
                $ArrowNavigatorOptions: {
                    $Class: $JssorArrowNavigator$
                },
                $BulletNavigatorOptions: {
                    $Class: $JssorBulletNavigator$
                }
            };
            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options); /*#region responsive code begin*/
            var MAX_WIDTH = 3000;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;
                if (containerWidth) {
                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);
                    jssor_1_slider.$ScaleWidth(expectedWidth);
                } else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }
            ScaleSlider();
            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider); /*#endregion responsive code end*/
        };
        
        
        
        
        
        
    </script>
</head>

<body>
<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v5.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your customer chat code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="158539291015446">
      </div>
    <div class="top-main">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">           
                    
                    
                    
                    
                </div>
                <div class="col-sm-8">
                    <div class="top-head">
                            @if(App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first() != null)
                            <i class="fa fa-mobile" aria-hidden="true"></i> {{App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first()}},
                            @endif 
                            @if(App\Models\Admin\ContactInformation::all()->pluck('phone_2')->first() != null)
                            {{App\Models\Admin\ContactInformation::all()->pluck('phone_2')->first()}}
                            @endif 

</span>  @if(App\Models\Admin\ContactInformation::all()->pluck('email')->first() != null)
<span><i class="fa fa-envelope" aria-hidden="true"> </i> {{App\Models\Admin\ContactInformation::all()->pluck('email')->first()}}</span>
@endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg main_navigation">
        <div class="container">
        <a class="logo" href="{{ route('/') }}"> <img src="{{ asset('') }}assets/frontEnd/img/logo-light.png" alt="" title=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".js-navbar-collapse" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="icon-bar"><i class="fas fa-bars"></i></span> </button>
           <div class="navbar-header">
    	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>

	</div>

            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav ml-auto menu" id="menu-main-navigation">
                    <li class="nav-item"><a class="nav-link" href="{{ route('/') }}">Home</a></li>
            

                    <li class="dropdown mega-dropdown nav-item menu-item-25 grid sub_menu_link_one sub_menu_link menu-item menu-item-type-post_type menu-item-object-page">
                        <a href="{{ route('project-list') }}" class="nav-link ">Projects</a>
                        
                    </li> 
      <li class="nav-item dropdown">
        <a class="nav-link">About Us <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu bg-light">
            <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
            <a class="dropdown-item" href="{{ route('chairmanmsg') }}">Message of Chairman</a>
          <a class="dropdown-item" href="{{ route('mdmsg') }}">Message Of MD</a>
            <!--<a class="dropdown-item" href="{{ route('awards') }}">Awards & Recognition</a>-->
            <!--<a class="dropdown-item" href="{{ route('companies') }}">Other Concerns</a>-->
          
        </div>
      </li>
      
            <li class="nav-item dropdown">
        <a class="nav-link">Gallary <i class="fa fa-angle-down" aria-hidden="true"></i>
        </a>
        <div class="dropdown-menu bg-light">
          <a class="dropdown-item" href="{{ route('gallery') }}">Images Gallery</a>
          <a class="dropdown-item" href="{{ route('video-gallery') }}">Video Gallery</a>
        </div>
      </li>
      
                    
                    <!-- <li class="nav-item"><a href="#" class="nav-link">Careers</a></li>-->
                    <li class="nav-item"><a href="{{ route('news') }}" class="nav-link ">News</a></li>
                    <li class="nav-item"><a href="{{ route('career') }}" class="nav-link ">Career</a></li>
                    <li class="nav-item"><a href="{{ route('faq') }}" class="nav-link ">FAQ</a></li>
                    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link ">Contact</a></li>
                </ul>

            </div>
            <!-- /.nav-collapse -->
        </div>
    </nav>
    @if(App\Models\Admin\ContactInformation::all()->pluck('whatsapp')->first() != null)
    <div class="container-fluid">
        <div class="row" style="background-color:white;">
            <div id="feedback123">
                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('whatsapp')->first()}}"><i class="fa fa-whatsapp"></i></a>
            </div>

        </div>
    </div>
@endif
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
    
   @yield('content')

    <!--<section class="team"> <div class="container"> <div class="row"> <div class="col-lg-8 col-md-10 col-sm-12 center-col margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center last-paragraph-no-margin wow fadeInUp"> <div class="alt-font text-pink-color margin-5px-bottom text-uppercase letter-spacing-1">Our Team</div><h5 class="margin-10px-bottom font-weight-300">Meet <span class="font-weight-500">Our Expert</span> Minds</h5> <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div></div></div><div class="row"> <div class="owl-carousel owl-theme col-sm-12 team-style"> <div class="xs-margin-20px-bottom text-center"> <div class="team-member-img"> <img class="img-responsive" src="{{ asset('') }}assets/frontEnd/img/agent-01.jpg" alt=""></div><div class="text-center margin-25px-top margin-15px-bottom padding-15px-bottom border-bottom"> <div class="text-extra-dark-gray font-weight-600 text-uppercase font-size14 alt-font">Mr. P. Jayachandra Reddy</div><div class="text-uppercase font-size11">Chairman</div></div><div class="social-links"> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-facebook-f text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-twitter text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-google-plus-g text-medium-gray text-medium"></i></a> <a class="d-inline-block border-radius-100" href="javascript:void(0);"><i class="fab fa-instagram text-medium-gray text-medium"></i></a></div></div><div class="xs-margin-20px-bottom text-center"> <div class="team-member-img"> <img class="img-responsive" src="{{ asset('') }}assets/frontEnd/img/agent-02.jpg" alt=""></div><div class="text-center margin-25px-top margin-15px-bottom padding-15px-bottom border-bottom"> <div class="text-extra-dark-gray font-weight-600 text-uppercase font-size14 alt-font">Mr. P. Mahender Reddy</div><div class="text-uppercase font-size11">Managing Director</div></div><div class="social-links"> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-facebook-f text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-twitter text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-google-plus-g text-medium-gray text-medium"></i></a> <a class="d-inline-block border-radius-100" href="javascript:void(0);"><i class="fab fa-instagram text-medium-gray text-medium"></i></a></div></div><div class="xs-margin-20px-bottom text-center"> <div class="team-member-img"> <img class="img-responsive" src="{{ asset('') }}assets/frontEnd/img/agent-03.jpg" alt=""></div><div class="text-center margin-25px-top margin-15px-bottom padding-15px-bottom border-bottom"> <div class="text-extra-dark-gray font-weight-600 text-uppercase font-size14 alt-font">Mr. P. Sreenivas Reddy<strong></strong></div><div class="text-uppercase font-size11">Executive Director</div></div><div class="social-links"> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-facebook-f text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-twitter text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-google-plus-g text-medium-gray text-medium"></i></a> <a class="d-inline-block border-radius-100" href="javascript:void(0);"><i class="fab fa-instagram text-medium-gray text-medium"></i></a></div></div><div class="xs-margin-20px-bottom text-center"> <div class="team-member-img"> <img class="img-responsive" src="{{ asset('') }}assets/frontEnd/img/agent-04.jpg" alt=""></div><div class="text-center margin-25px-top margin-15px-bottom padding-15px-bottom border-bottom"> <div class="text-extra-dark-gray font-weight-600 text-uppercase font-size14 alt-font">Mr. P. Sujith Reddy</div><div class="text-uppercase font-size11">Director</div></div><div class="social-links"> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-facebook-f text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-twitter text-medium-gray text-medium"></i></a> <a class="d-inline-block margin-10px-right" href="javascript:void(0);"><i class="fab fa-google-plus-g text-medium-gray text-medium"></i></a> <a class="d-inline-block border-radius-100" href="javascript:void(0);"><i class="fab fa-instagram text-medium-gray text-medium"></i></a></div></div></div></div></div></section>-->
    <section class="contact bg-light-gray no-padding" data-scroll-index="6">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 map">
                    <div id="ieatmaps1">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14609.514252990522!2d90.32548339861141!3d23.733876187038543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5820df4c69%3A0xbe67951e0d09fae5!2sModhu%20City%20Office!5e0!3m2!1sbn!2sbd!4v1571891639868!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div>
                            <style>
                                .mapouter {
                                    position: relative;
                                    text-align: right;
                                    height: 500px;
                                    width: 600px;
                                }
                                
                                .gmap_canvas {
                                    overflow: hidden;
                                    background: none!important;
                                    height: 500px;
                                    width: 600px;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="padding-ten-all sm-padding-50px-tb sm-no-padding-lr info">
                        <div class="wow fadeInUp">
                            <!--<div class="alt-font text-pink-color margin-5px-bottom text-uppercase text-center letter-spacing-1">Location</div>-->
                            <h5 class="font-weight-300 margin-10px-bottom text-center text-white"><span class="font-weight-500">Contact</span> Us</h5>
                            <div class="margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom separator-line-horrizontal-medium-light2 bg-pink center-col"></div>
                        </div> <span class="icon-toggle"><i class="icofont icofont-social-google-map"></i></span>
                        
                                @if(App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first() != null)
                                <div class="item wow fadeInUp" data-wow-delay="0.2s"> <span class="icon"><i class="icon-phone"></i></span>
                                    <div class="cont">
                                        <h6 class="text-white">Phone:</h6>
                                <p>{{App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first()}}, {{App\Models\Admin\ContactInformation::all()->pluck('phone_2')->first()}} </p>
                                
                            </div>
                        </div>
                                @endif
               @if(App\Models\Admin\ContactInformation::all()->pluck('corporate_office')->first() != null)
               <div class="item wow fadeInUp" data-wow-delay="0.4s"> <span class="icon"><i class="icon-map"></i></span>
                <div class="cont">
                    <h6 class="text-white">Corporate Office:</h6>
                        <p>{!! App\Models\Admin\ContactInformation::all()->pluck('corporate_office')->first() !!} </p>
                        
                            </div>
                        </div>
                @endif
                @if(App\Models\Admin\ContactInformation::all()->pluck('office_address')->first() != null)
                        <div class="item wow fadeInUp" data-wow-delay="0.4s"> <span class="icon"><i class="icon-map"></i></span>
                            <div class="cont">
                                <h6 class="text-white"> Office Address:</h6>
                                <p>{{App\Models\Admin\ContactInformation::all()->pluck('office_address')->first()}} </p>
                            </div>
                        </div>
                        @endif
                        @if(App\Models\Admin\ContactInformation::all()->pluck('email')->first() != null)
                        <div class="item wow fadeInUp" data-wow-delay="0.6s"> <span class="icon"><i class="icon-envelope"></i></span>
                            <div class="cont">
                                <h6 class="text-white">Email:</h6>
                                <p>{{App\Models\Admin\ContactInformation::all()->pluck('email')->first()}} </p>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="padding-ten-all sm-padding-50px-tb sm-no-padding-lr">
                        <div class="wow fadeInUp">

                            <h5 class="font-weight-300 margin-10px-bottom text-center">Enquire Now</h5>
                            <div class="margin-70px-bottom sm-margin-40px-bottom xs-margin-30px-bottom separator-line-horrizontal-medium-light2 bg-pink center-col"></div>
                        </div>
                        <div class="no-margin-lr" id="form-message"></div>
                        <form method="post" id="form-submit" class="wow fadeInUp" data-wow-duration="0.6s" action="{{ route('contact-message-send') }}">
                        
                            <div class="row">
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                                    <input type="text" class="medium-input" maxlength="50" placeholder="Name *" required id="name" name="name">
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                                    <input type="email" class="medium-input" maxlength="70" placeholder="E-mail *" required id="email" name="email">
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                                    <input onkeypress="validate(event)" class="medium-input" placeholder="Phone *" id="phone" name="phone" required>
                                </div>
                                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                    <input type="text" class="medium-input" maxlength="78" placeholder="Subject" id="subject" name="subject" required>
                                </div>
                                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.6s">
                                    <textarea class="big-textarea" rows="6" maxlength="1000" placeholder="Message *" required id="message" name="messages"></textarea>
                                </div>
                                <div class="col-md-12 text-center wow fadeInUp" data-wow-delay="0.8s">
                                    <button class="btn" type="submit" name="submit">send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-white" style="padding: 0px !important;">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center wow fadeInUp">
                        <div class="text-center">
                            <a href="javascript:void(0);"><img src="{{ asset('') }}assets/frontEnd/img/logo-light.png" alt="Accord - Creative One Page Multipurpose Template" title="Accord - Creative One Page Multipurpose Template" width="240"></a>
                        </div> <span class="font-size11 alt-font text-uppercase display-block letter-spacing-1 text-dark-gray margin-15px-top margin-30px-bottom xs-margin-fifteen">Our Social Media</span></div>
                    <div class="col-md-12 col-sm-12 text-center wow fadeInUp">
                        <div class="footer-social">
                                @if(App\Models\Admin\ContactInformation::all()->pluck('facebook')->first() != null)
                                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('facebook')->first()}}"><i class="fab fa-facebook-f"></i></a>
                                @endif
                                @if(App\Models\Admin\ContactInformation::all()->pluck('linkedin')->first() != null)
                                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('linkedin')->first()}}"><i class="fab fa-linkedin-in"></i></a>
                                @endif
                                @if(App\Models\Admin\ContactInformation::all()->pluck('twitter')->first() != null)
                                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('twitter')->first()}}"><i class="fab fa-twitter"></i></a>
                                @endif
                                @if(App\Models\Admin\ContactInformation::all()->pluck('youtube')->first() != null)
                                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('youtube')->first()}}"><i class="fab fa-youtube"></i></a>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom bg-black">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 text-center"> <span class="font-size12 text-uppercase letter-spacing-1"><?php echo(date('Y')); ?> @ {{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }} </span></div>
                </div>
            </div>
        </div>

    </footer>
    <!--<script type="text/javascript">-->
    <!--    _linkedin_data_partner_id = "242715";-->
    <!--</script>-->
    <!--<script type="text/javascript">-->
    <!--    (function() {-->
    <!--        var s = document.getElementsByTagName("script")[0];-->
    <!--        var b = document.createElement("script");-->
    <!--        b.type = "text/javascript";-->
    <!--        b.async = true;-->
    <!--        b.src = "../snap.licdn.com/li.lms-analytics/insight.min.js";-->
    <!--        s.parentNode.insertBefore(b, s);-->
    <!--    })();-->
    <!--</script>-->
 

 

    <!--  <script src="../cwc.livserv.in/chat9fff.js?lid=6466" id="lp_cwc_xqzyihjdskw" ></script>
<script src="https://cw1.livserv.in/?did=6466&amp;pid=1"></script> -->

    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery-3.0.0.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/popper.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/bootstrap.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/scrollIt.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/animated.headline.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/wow.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery.waypoints.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/owl.carousel.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery.stellar.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/map.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/scripts.js"></script>
    @yield('extraJs')
    <script>
        $(document).ready(function() {
            $(".dropdown").hover(function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideDown("400");
                $(this).toggleClass('open');
            }, function() {
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).slideUp("400");
                $(this).toggleClass('open');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
        });
    </script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/index.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/feedback.js"></script>
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/js/jquery-multitabs.js"></script>
    <script>
        $('.tab1').multitabs();
        $('.tab2').multitabs();
        $('.tab3').multitabs();
    </script>
    <script src="../cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
    
    <script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/particles/particles.js"></script>
<script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/particles/js/app.js"></script>

<!-- stats.js -->
<script src="{{ asset('http://localhost/modhu/public/') }}assets/frontEnd/particles/js/lib/stats.js"></script>
<script>
    $("#projectId").change(function(){
        $("#projectKatha option, #projectType option").remove();
        var selectOption = $("#projectId option:selected").val();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $.ajax({
            method: 'POST',
            data: 
            {
                project_id: selectOption,
            },
            url: "{{ route('advanced-search') }}",  //**Eg. URL in route
            success: function(response){
                if(response.success) {             
                      $('#projectKatha').append($('<option>', {value:response.projectKatha, text:response.projectKatha}));
                      $('#projectType').append($('<option>', {value:response.projectKathas, text:response.projectKathas}));
                }       
            },
        });
});
</script>
</body>
</html>
@if(App\Models\Admin\Offer::all()->pluck('publication_status')->first() == 1)
// <script type="text/javascript">
//     $(document).ready(function() {
//         //if ($.cookie('pop') == null) {
//             $('#offerPromo').modal('show');
//           // $.cookie('pop', '1');
//         //}
//     });
// </script>
@endif


<script type="text/javascript">
    $("#form-submit").on("submit", function (e) {
        e.preventDefault();
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
        $.ajax({
            type: "post",
            url: "{{ route('contact-message-send') }}",
            data: {
                name: $("#name").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
                subject: $("#subject").val(),
                messages: $("#message").val(),
            },
            success: function (response) {
                if (response) {
                    $("#form-submit").hide();
                    $("#form-message").html(
                        "<h3 class='text-success text-capitalize'>Thanks. Your message has been received successfully.</h3>"
                    );
                }
            }
        });
    });
</script>