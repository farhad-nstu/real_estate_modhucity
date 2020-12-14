<!DOCTYPE HTML>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Modhu city">
<title>{{ $projectData['project_name'] }}</title>
<link rel="canonical" href="index.html" />
<!--<link href="{{ asset('') }}assets/frontEnd/css/style.css" rel="stylesheet" media="screen">-->
<link rel="stylesheet" href="{{ asset('') }}assets/frontEnd/css/plugins.css" />
     <link href="{{ asset('') }}assets/project/css/style.css" rel="stylesheet" media="screen">


<link rel="stylesheet" href="{{ asset('') }}assets/project/css/second/css/bootstrap.html" type="text/css">
 
<link rel="stylesheet" href="{{ asset('') }}inc/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    
    <link rel="stylesheet" href="{{ asset('') }}inc/cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" type="text/css">

	<link href="{{ asset('') }}assets/project/css/lightgallery.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
	    

    <link rel="stylesheet" href="{{ asset('') }}assets/frontEnd/css/feedback.css" />


      <link rel="stylesheet" href="{{ asset('') }}assets/project/css/second/css/style.css" type="text/css">


   


 <style>
 .top-main {
    position: fixed;
    width: 100%;
    margin-top: 5px;
    z-index: 9999;
}
.navbar {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    background: #ffffff00;
    z-index: 9;
    min-height: 80px;
    padding: 2px 1rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0);
    padding-top: 9px;
}
.logo {
    padding: 0px 0;
    width: 183px;
}
.navbar-collapse {
    background-color: transparent;
    
}
.top-head {
    text-align: right;
    padding-right: 15px;
    color: #000;
    cursor: pointer;
}
.navbar-nav {
    margin-top: 53px;
}
.navbar .navbar-nav .nav-link {
    font-size: 13px;
    color: #000;
    margin: 0;
    transition: all .5s;
    text-align: left;
    text-transform: uppercase;
    padding-top: 0px;
    font-weight: 600;
    font-family: Verdana!important;
}
.main_navigation .menu .menu-item {
    display: inline-block;
    margin-right: -4px;
    white-space: nowrap;
}
.mega-dropdown {
    position: static !important;
}
 ol, ul {
    list-style: none;
    margin: 0px;
    padding: 0px;
}
 .sticky-container {
    padding: 0px;
    margin: 0px;
    position: fixed;
    right: 0px;
    top: 217px;
    width: 44px;
    z-index: 1100;
}
 .sticky li {
    list-style-type: none;
    background-color: rgb(29, 159, 217);
    color: #efefef;
    height: 43px;
    padding: 0px;
    margin: 0px 0px 5px 0px;
    -webkit-transition: all 0.25s ease-in-out;
    -moz-transition: all 0.25s ease-in-out;
    -o-transition: all 0.25s ease-in-out;
    transition: all 0.25s ease-in-out;
    cursor: pointer;
    border: 1px solid #ababab;
}

.sticky li img {
    float: left;
    margin: 5px 4px;
    margin-right: 5px;
    padding: 5px;
}
.nav {

    -ms-flex-wrap: nowrap;
    flex-wrap: nowrap;
   ;
}
.nav-scroll {
    background: rgba(230, 230, 230, 0.82);
    box-shadow: 0 5px 10px -10px rgba(0, 0, 0, 0.6);
    position: fixed;
    top: -100px;
    left: 0;
    width: 100%;
    transition: transform .5s;
    transform: translateY(100px);
    z-index: 999;
}
#feedback {
    margin-top: 136px;
}
 @media screen and (max-width: 769px) {
	.aboutdes{display:none !important;}
}

	
	@media only screen and (max-width: 10000px) and (min-width: 770px)  {
		.aboutmb{display:none !important;}
	}
	</style>
 
 </head>




<body data-gr-c-s-loaded="true">
    
    <!--<style="background:rgb(54, 54, 54)--->
 
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
                    <li class="nav-item"><a class="nav-link active" href="{{ route('/') }}">Home</a></li>
            

                    <li class="nav-item">
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

<!--<nav class="navbar-mobile">-->
<!--<a href="#top" class="brand js-target-scroll">-->
<!--<img src="{{ asset('') }}assets/project/images/logo.png" class="img-responsive">-->
<!--</a>-->

<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">-->
<!--<span class="sr-only">Toggle navigation</span>-->
<!--<span class="icon-bar"></span>-->
<!--<span class="icon-bar"></span>-->
<!--<span class="icon-bar"></span>-->
<!--</button>-->
<!--<div class="collapse navbar-collapse" id="navbar-mobile">-->
<!--<ul class="navbar-nav-mobile" style="list-style-type: none;">-->
<!--<li class="active">-->
<!--<a href="{{ route('/') }}">Home </a>-->

<!--</li>-->
<!--<li>-->
<!--<a href="#abt">About</a>-->
<!--</li>-->

<!--<li>-->
<!--<a href="#plans">Floor Plans </a>-->

<!--</li>-->

<!--<li class="d-li">-->
<!--<a href="#plans">Location Map</a>-->
<!--</li>-->

<!--<li>-->
<!--<a href="#gallery">Gallery </a>-->

<!--</li>-->
<!--<li>-->
<!--<a href="#specifications">Specifications</a>-->

<!--</li>-->

<!--<li>-->
<!--<a href="#contact">Contact Us</a>-->
<!--</li>-->




<!--</ul>-->

<!--<img src="{{ asset('') }}assets/project/images/r.png" class="img-responsive navrajalogo" style="height:75px;"> -->

<!--</div>-->
<!--</nav>-->
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
</header>

<div class="layout">

<div id="hme">
<main class="main">
<div class="arrow-left"></div>
<div class="arrow-right"></div>

<div class="rev_slider_wrapper">
<div id="rev_slider" class="rev_slider fullscreenbanner">
<ul>

  @foreach ($projectDetails['sliders'] as $slider)
  <li data-transition="slotzoom-horizontal" data-slotamount="7" data-masterspeed="1000" data-fsmasterspeed="1000">
      <img src="{{ asset('') }}{{ $slider->project_slider_image }}" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg">
      <div class="tp-caption" data-x="['right','right','right','right']" data-hoffset="['0','0','0','0']" data-y="['middle','middle','middle','middle']" data-voffset="['195','215']" data-width="none" data-height="none" data-whitespace="nowrap" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power1.easeInOut;" data-style_hover="c:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);" data-transform_in="y:50px;opacity:0;s:1500;e:Power4.easeInOut;" data-transform_out="y:[175%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" data-mask_out="x:inherit;y:inherit;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
      </div>
    </li>
  @endforeach

</ul>
</div>
</div>
<!---Sidebar--->
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

<!----end sidebar--->
</main>
</div>
<div class="content">
<div id="">

        <div id="" class="no-bottom no-top">
		
		<div id="abt">
    
      @if ($projectData['project_page_about_project_image_position'] == 0)
      <section id="section-service-1" class="side-bg no-padding">
          <div class="image-container col-md-5  pull-right" data-delay="0">
              <div class="background-image" style="background:url({{ asset('') }}{{ $projectData['project_page_about_project_image'] }})"></div>
          </div>

        
                  <div class="inner-padding">
                      <div class="col-md-7">
                          <h2 class=" ab_eterna"> <span style="color:#fdc100;">ABOUT</span> Project</h2>
                          <hr align="left" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;margin-bottom:60px;opacity:1;" class="fadeInLeft animated">
                          <h3 class="id-color">{{ $projectData['project_page_about_project_title'] }}</h3>
          
                          <p class="ab-text1"> {!! $projectData['project_page_about_project_description'] !!}</p>

                          <div class="spacer-single"></div>
                         
                      </div>
                      <div class="clearfix"></div>
                
          </div>
      </section>
      @else
      <section id="section-service-2" class="side-bg no-padding aboutdes" style="background-color:white !important;">
          <div class="image-container col-md-5 pull-left">
            <div class="background-image" style="background:url({{ asset('') }}{{ $projectData['project_page_about_project_image'] }})"></div>
        </div>

        <div class="container">
            <div class="row">
            <div class="inner-padding">
                    <div class="col-md-6 col-md-offset-6">
      <h2 class=" ab_eterna"> <span style="color:#fdc100;">ABOUT</span> Project</h2>
      <hr align="left" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;margin-left:11%;opacity:1;" class="fadeInLeft animated">
                        <h3 class="id-color" style="margin-top:0px;color:green;">{{ $projectData['project_page_about_project_title'] }}</h3>
                        <p class="ab-text1">{!! $projectData['project_page_about_project_description'] !!}</p>
                        <div class="spacer-single"></div>
                        <!-- <a href="service-1.html" class="btn-line">Read More</a> -->
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </section>
      @endif
        
		
		  
			
			</div>
		
		<div class="container-fluid">
			<div class="row" style="background:#ad8502;">
			<div class="container ab_below_pad">
			
			<div class="col-md-8 col-sm-8">
				<p class="move-your">Far far away, behind the word mountains, far from the countries of dream </p>
      </div>
			@foreach($projectDetails['brochures'] as $brochure)
			<div class="col-md-3 col-sm-3">
      <a showdownload href="{{ asset('') }}{{ $brochure->brochure }}" class="btn btn-default" target="_blank">DOWNLOAD BROCHURE</a>
			</div>
			@endforeach
			</div>
			</div>
    </div>
           
           
           
            <section id="section-service-2" class="no-padding why-us" data-bgcolor="" style="padding-top: 30px !important; background-color:white !important;">
                <div class="container-fluid" style="background-color:white;">
                    
                    
                    <div class="container">
                    <div class="row">
                            <h3 class="id-color text-uppercase" style="color:black !important;">Why Choose &rarr; {{ $projectDetails['why_choose_title'] }}</h3>
								<hr align="left" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;opacity:1;" class="fadeInLeft animated">
                            <div class="col-md-12 why-chose" >
                                <p class="ab-text1">{!! $projectDetails['why_choose_description'] !!}</p>

                                <!-- <a href="service-1.html" class="btn-line">Read More</a> -->
                            </div>
                    </div>
                    
                    </div>
                    
                </div>
            </section>
            
            <section id="section-service-1" class="no-padding">

                <div class="container">
                    <div class="row">
                        
                                <h3 class="id-color text-uppercase text-center">Infractructural Facilities</h3>
								<hr align="center" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;opacity:1;" class="fadeInLeft animated">
                            <div class="col-md-12" >
                                <p class="ab-text1">{{ $projectDetails['infrastructural_facilities_text'] }}</p>
                                <!-- <a href="service-1.html" class="btn-line">Read More</a> -->
                            </div>
                    </div>
                    <div class="row">
                         @foreach($projectDetails['infrastructural_facilities'] as $infrastructural_facility)
                            
                            <div class="col-md-3">
                                
                             <span class="btn btn-warning" style="margin: 5px 0px 0px 0px !important; font-size: 14px !important; font-family: IMPACT !important; display: block !important; padding: 5px !important; background-color: teal; border-radius: 0px;" title="{{ $infrastructural_facility }}">{{ $infrastructural_facility }}</span>
                             
                             </div>
                
                            @endforeach
                    </div>
                </div>
            </section>
            
            
            <section id="section-service-1" class="no-padding" style="padding-top: 30px !important;">

                <div class="container">
                    <div class="row">
                        
                                <h3 class="id-color text-uppercase">Special Facility</h3>
								<hr align="left" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;opacity:1;" class="fadeInLeft animated">
                            <div class="col-md-12" >
                                <p class="ab-text1"> {{ $projectDetails['special_facilities_text'] }}</p>
                                <!-- <a href="service-1.html" class="btn-line">Read More</a> -->
                            </div>
                    </div>
                    <div class="row">
                         @foreach($projectDetails['special_facilities'] as $special_facility)
                            
                            <div class="col-md-3">
                                
                
                             <span class="text-capitalize text-center" style="margin: 2px 0px 0px 0px !important; font-size: 14px !important; font-family: Tahoma !important; font-weight: bold !important; padding: 2px !important; background-color: transparent; border-left: double 1px white !important;">&rarr; {{ $special_facility }}</span>
                             
                             
                             </div>
                
                            @endforeach
                    </div>
                </div>
            </section>
            
            <section id="section-service-1" class="no-padding" style="padding-top: 30px !important;">

                <div class="container">
                    <div class="row">
                        
                                <h3 class="id-color text-uppercase text-center">Plot Accomodationsy</h3>
								<hr align="center" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;opacity:1;" class="fadeInLeft animated">
                            <div class="col-md-12" >
                                <p class="ab-text1"> {{ $projectDetails['plot_accomodation_text'] }}</p>
                                <!-- <a href="service-1.html" class="btn-line">Read More</a> -->
                            </div>
                    </div>
                    <div class="row">
                         @foreach($projectDetails['plot_accomodations'] as $plot)
                            
                            <div class="col-md-2">
                                <div style="align: center !importent;">
                
                             <span class="text-center" style="margin: 5px 0px 0px 0px !important; font-size: 26px !important; font-family: IMPACT Tahoma !important; display: block !important; padding: 5px !important; background-color: transparent; border-radius: 75px; border-style: none groove none groove; border-color: white blue white green;" title="{{ $plot }} {{ $projectDetails['plot_accomodations_measure_by'] }}">{{ $plot }}</span>
                             <span class="text-center" style="display: block !important; background-color: transparent; border-style: none none dotted none; border-color: white blue white green;"></span>
                             <span class="text-center" style="font-size: 14px !important; display: block !important; padding: 5px !important; background-color: transparent; border-radius: 25px; border-style: none groove none groove; border-color: white green white blue;" title="{{ $plot }} {{ $projectDetails['plot_accomodations_measure_by'] }}">{{ $projectDetails['plot_accomodations_measure_by'] }}</span>
                             </div>
                             </div>
                
                            @endforeach
                    </div>
                </div>
            </section>
            
             <section id="section-service-1" class="pb-20" style="padding-top: 30px !important;">

                <div class="container">
                    <div class="row">
                            <div class="col-md-12" >
                                <h3 class="id-color text-uppercase">INTERNAL ROADS</h3>
								<hr align="left" style="width:18%;border-top:1px solid #fdc100;margin-top:0px;opacity:1;" class="fadeInLeft animated">
                                <p class="ab-text1">{{ $projectDetails['roads_text'] }}</p>
                                <!-- <a href="service-1.html" class="btn-line">Read More</a> -->
                            </div>
                    </div>
                    <div class="row">
                         @foreach($projectDetails['roads'] as $road)
                            
                            <div class="col-md-3">
                                
                             <span class="text-center" style="margin: 5px 0px 0px 0px !important; font-size: 26px !important; font-family: IMPACT Tahoma !important; display: block !important; padding: 5px !important; background-color: transparent; border-style: ridge groove dashed outset !important; border-color: green red yellow blue !important; border-radius: 10px;" title="{{ $road }}">{{ $road }}</span>
                             <span class="text-center" style="margin: 5px 0px 0px 0px !important; font-size: 14px !important; font-family: Tahoma !important; display: block !important; padding: 5px !important; background-color: transparent; border-style: none groove double outset !important; border-color: green blue teal white !important; border-radius: 10px;" title="{{ $road }} {{ $projectDetails['roads_measure_by'] }}">{{ $projectDetails['roads_measure_by'] }}</span>
                             
                             </div>
                
                            @endforeach
                    </div>
                </div>
            </section>
           
			
			 <!-- section begin -->
            <!--<section id="section-cta-1" aria-label="section-cta-1" class="call-to-action bg-color text-center padding40 let-it-snow overflow-hidden" style="background:url({{ asset('') }}assets/project/img/eterna/g-q-b.jpg) top fixed">-->
                
                
                
                
               
                
            <!--    |-->
                
                
            <!--    @foreach($projectDetails['roads'] as $road)-->
                
            <!--    {{ $road }} {{ $projectDetails['roads_measure_by'] }}-->
                
            <!--    @endforeach-->
            <!--</section>-->
            <!-- logo carousel section close -->
			
			
			
			
			
			<section id="plans">
			<div class="container-fluid">
				<div class="row">
					 <div class="container">
    
	<h2 class="text-center " style="color:#fdc100;letter-spacing:2px;">Our Location in Google Map</h2>
				<hr align="middle" style="width:9%;border-top:1px solid #fdc100;margin-top:0px;">
	<h4 class="text-center" style="color: white; border-style: none outset ridge outset; border-color: green; margin: auto;">{{ $projectDetails['project_location'] }}</h4>
	
    <!--our-quality-shadow-->
    <div class="clearfix"></div>
    
    <div class="tabbable-panel">
      <div class="tabbable-line">
        <div class="tab-content">
          <div class="tab-pane active fade in" id="tab_default_1">
        <div id="map-location"></div>
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
        border-style: none outset ridge outset; 
        border-color: red red blue teal;
        border-width: 0px 5px 5px 5px;
    }
</style>


<script>



    var map = new google.maps.Map(document.getElementById('map-location'), {
        center: {
        lat: {{ $projectDetails['lat'] }},
        lng: {{ $projectDetails['lng'] }}
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
        {
            position: new google.maps.LatLng('{{ $projectDetails['lat'] }}', '{{ $projectDetails['lng'] }}'),
            type: '{{ $projectDetails['project_name'] }}',
            title: '{{ $projectDetails['project_description'] }}'
          }
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
    

</script>
		 
          
          </div>
        </div>
      </div>
    </div>
  </div>
				</div>
			</div>
			</section>
			
			
			
			
			
			
          
            <!-- section begin -->
			<div id="gallery">
            <section id="section-portfolio-2" class="" aria-label="section-portfolio">
                <div class="container" id="">

				<h2 class="text-center " style="color:#fdc100;letter-spacing:2px;">GALLERY</h2>
				<hr align="middle" style="width:9%;border-top:1px solid #fdc100;margin-top:0px;">
                    <div class="spacer-single"></div>

                    <!-- portfolio filter begin -->
                    <div class="row">
                        <div class="col-md-12 mt40">
                            <ul id="filters" class="">
                                <li class="pull-right"><a href="#" data-filter="*" class="selected">All Images</a></li>
                                @foreach ($projectDetails['gallery'] as $gallery)
                                    <li><a href="#" data-filter=".{{ $gallery->block_position }}" class="text-uppercase">{{ $gallery->block_name }}-Block VIEW </a></li>
                                @endforeach

                            </ul>

                        </div>
                    </div>
                    <!-- portfolio filter close -->

                    <div class="spacer-single"></div>

                    <div id="gallery" class="row grid_gallery gallery de-gallery">

                        <!-- gallery item -->
						
						<ul id="lightgallery3" class="list-unstyled row">

             @foreach ($projectDetails['gallery'] as $gallery)
              
						<li class="col-xs-6 col-sm-3 col-md-3  item {{ $gallery->block_position }}" data-src="{{ asset('') }}{{ $gallery->gallery_image }}">
                    <a href="#">
                    <img class="img-responsive" src="{{ asset('') }}{{ $gallery->gallery_image }}">
                    </a>
                </li>
              @endforeach
            </ul>
						
						
                   

                    </div>

                </div>

            </section>
            
			
<!--		<div id="project-progress">-->
<!--            <section id="section-portfolio-2" class="" aria-label="section-portfolio">-->
<!--                <div class="container" id="" style="margin-bottom:40px;">-->
<!--			<h2 class="text-center " style="color:#fdc100;letter-spacing:2px;">PROJECT PROGRESS</h2>-->
<!--				<hr align="middle" style="width:9%;border-top:1px solid #fdc100;margin-top:0px;margin-bottom:50px;">-->
<!--                    <div class="spacer-single"></div>-->
					
<!--					<div class="row">-->
<!--        <div class="col-lg-12 col-md-12 col-sm-12 col-md-12 bhoechie-tab-container">-->
<!--            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 bhoechie-tab-menu">-->
<!--              <div class="list-group">-->
<!--                <a href="#" class="list-group-item active text-center" style="background:#18191b;border-color: #3d3d3d;">-->
<!--                  <img src="{{ asset('') }}assets/project/images/logo.png" class="img-responsive">-->
<!--                </a>-->
<!--                <a href="#" class="list-group-item text-center">-->
<!--                 <p class="pp-p">BLOCK-A</p>-->
<!--                </a>-->
<!--                <a href="#" class="list-group-item text-center">-->
<!--                  <p class="pp-p">BLOCK-B</p>-->
<!--                </a>-->
<!--                <a href="#" class="list-group-item text-center">-->
<!--                 <p class="pp-p">BLOCK-C</p>-->
<!--                </a>-->
<!--				<a href="#" class="list-group-item text-center">-->
<!--                 <p class="pp-p">BLOCK D</p>-->
<!--                </a>-->
<!--              </div>-->
<!--            </div>-->
<!--            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 bhoechie-tab slide-pannel">-->
                <!-- flight section -->
<!--                <div class="bhoechie-tab-content active">-->
				
				
				
<!--				<div id="myCarousel1" class="carousel slide" data-ride="carousel">-->


  <!-- Wrapper for slides -->
<!--  <div class="carousel-inner">-->
  
  
<!--  	<div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/aerial-view.jpg" alt="">-->
<!--	  <p class="slider-des">Block-A View (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/aerial-view-1.jpg" alt="">-->
<!--	  <p class="slider-des">Block-A  View (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/aerial-view-2.jpg" alt="">-->
<!--	  <p class="slider-des">Block-A  View (September)</p>-->
<!--    </div>-->
  
<!--  <div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/elan.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/elan-1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->

	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/panache-1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/panache-2.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/tiara-1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/tiara-2.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work in progress. (September)</p>-->
<!--    </div>-->

	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse.jpg" alt="">-->
<!--	  <p class="slider-des">Project (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse-1.jpg" alt="">-->
<!--	  <p class="slider-des">Project (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse-2.jpg" alt="">-->
<!--	  <p class="slider-des">Project (September)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse-3.jpg" alt="">-->
<!--	  <p class="slider-des">Project(September)</p>-->
<!--    </div>-->
	

  
<!--   <div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/ariel-view.jpg" alt="">-->
<!--	  <p class="slider-des">Project View (August)</p>-->
<!--    </div>-->
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/ariel-view1.jpg" alt="">-->
<!--	  <p class="slider-des">Project View (August)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/ariel-view2.jpg" alt="">-->
<!--	  <p class="slider-des">Project View (August)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan-tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Project (August)</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
   
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress. (August)</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
	
	

  
  
  
  <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/may/elan.jpg" alt=""> -->
	  <!-- <p class="slider-des">ELAN: 13th floor slab work, 8th floor brick work in progress. (May)</p> -->
    <!-- </div> -->
  
  <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/may/clubhouse.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse: 1st Floor roof slab work in progress. (May)</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/may/tiara.jpg" alt=""> -->
	  <!-- <p class="slider-des">TIARA: 6th floor slab work, 3rd floor brick work in progress. (May)</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/may/panache.jpg" alt=""> -->
	  <!-- <p class="slider-des">PANACHE: 11th floor slab work, 7th floor brick work in progress. (May)</p> -->
    <!-- </div> -->
  
   <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/April/ELAN-NEW.jpg" alt=""> -->
	  <!-- <p class="slider-des">ELAN – 11th and 13th Floor roof slab work in progress</p> -->
    <!-- </div> -->
    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/April/ELAN-NEW1.jpg" alt=""> -->
	  <!-- <p class="slider-des">ELAN – 11th and 13th Floor roof slab work in progress</p> -->
    <!-- </div> -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/April/TIARA-NEW.jpg" alt=""> -->
	  <!-- <p class="slider-des">TIARA – 5th floor roof slab work in progress</p> -->
    <!-- </div> -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/April/PANACHE-NEW.jpg" alt=""> -->
	  <!-- <p class="slider-des">PANACHE – 10th floor roof slab work in progress</p> -->
    <!-- </div> -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/April/CLUB-AERIAL.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse – 1st floor roof slab work in progress</p> -->
    <!-- </div> -->
    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/march/elan-1.jpg" alt=""> -->
	  <!-- <p class="slider-des">ELAN – 10th floor roof slab work  and 6th floor brick work in progress</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/march/tiara.jpg" alt=""> -->
	  <!-- <p class="slider-des">TIARA – 4th floor roof slab work in progress</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/march/panache-1.jpg" alt=""> -->
	  <!-- <p class="slider-des">PANACHE- 10th floor roof slab work and 5th floor brick work in progress.</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/march/club-house.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse – 1st floor roof slab work in progress</p> -->
    <!-- </div> -->
  
  <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/february/elan-1.jpg" alt=""> -->
	  <!-- <p class="slider-des">ELAN: 4TH floor brick work & 8th floor roof slab work in progress</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/february/tiara.jpg" alt=""> -->
	  <!-- <p class="slider-des">TIARA: 2nd floor roof slab work in progress</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/february/panache-1.jpg" alt=""> -->
	  <!-- <p class="slider-des">PANACHE: 3rd floor brick work & 6th floor roof slab work in progress</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/february/club-house.jpg" alt=""> -->
	  <!-- <p class="slider-des">CLUBHOUSE: Ground floor roof slab work in progress</p> -->
    <!-- </div> -->
  
  
      <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/elan-block.jpg" alt=""> -->
	  <!-- <p class="slider-des">Elan Block :  8th and 6th floor roof slab work in progress</p> -->
    <!-- </div>  -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/elan-block1.jpg" alt=""> -->
	  <!-- <p class="slider-des">Elan Block :  8th and 6th floor roof slab work in progress</p> -->
    <!-- </div>  -->
    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/tiara-block.jpg" alt=""> -->
	  <!-- <p class="slider-des">Tiara Block :  3rd and 2nd floor roof slab work in progress</p> -->
    <!-- </div>  -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/tiara-block1.jpg" alt=""> -->
	  <!-- <p class="slider-des">Tiara Block :  3rd and 2nd floor roof slab work in progress</p> -->
    <!-- </div> -->
    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/panache-block.jpg" alt=""> -->
	  <!-- <p class="slider-des">Panache Block :  5th Floor roof slab work in progress</p> -->
    <!-- </div> -->
      <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/panache-block1.jpg" alt=""> -->
	  <!-- <p class="slider-des">Panache Block :  5th Floor roof slab work in progress</p> -->
    <!-- </div> -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/January/eterna-clubhouse.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse :  Basement roof slab work in done</p> -->
    <!-- </div> -->
       <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/elan.jpg" alt=""> -->
	  <!-- <p class="slider-des">Elan Block : 7th & 5th Floor Roof Slab Work in Progress and 3rd Floor Brick Work in Progress</p> -->
    <!-- </div>  -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/elan1.jpg" alt=""> -->
	  <!-- <p class="slider-des">Elan Block : 7th & 5th Floor Roof Slab Work in Progress and 3rd Floor Brick Work in Progress</p> -->
    <!-- </div> -->
    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/tiara.jpg" alt=""> -->
	  <!-- <p class="slider-des">Tiara Block : 1st Floor Roof Slab Work in Progress</p> -->
    <!-- </div> -->
    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/tiara1.jpg" alt=""> -->
	  <!-- <p class="slider-des">Tiara Block : 1st Floor Roof Slab Work in Progress</p> -->
    <!-- </div> -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/panache.jpg" alt=""> -->
	  <!-- <p class="slider-des">Panache Block : 3rd Floor Roof Slab Work & 1st Floor Brick Work in Progress</p> -->
    <!-- </div> -->
     <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/panache1.jpg" alt=""> -->
	  <!-- <p class="slider-des">Panache Block : 3rd Floor Roof Slab Work & 1st Floor Brick Work in Progress</p> -->
    <!-- </div> -->
       <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Eterna-December/club-house.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse : Basement-1 Roof Slab Work in Progress</p> -->
    <!-- </div>  -->
      
    <!-- <div class="item "> -->
      <!-- <img src="{{ asset('') }}assets/project/images/new/elan-block-3rd-5th-floor-work-in-progress.jpg" alt=""> -->
	  <!-- <p class="slider-des">Elan Block : 3rd & 4th Roof Slab work in Progress</p> -->
    <!-- </div> -->

    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/new/elan-block-new.jpg" alt="Chicago"> -->
	  <!-- <p class="slider-des">Elan Block</p> -->
    <!-- </div> -->

    <!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/new/eterna-club-house-basement2-work-in-progress.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse : Basement work in progress</p> -->
    <!-- </div> -->
	
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/new/eterna-tiara2-new.jpg" alt=""> -->
	  <!-- <p class="slider-des">Eterna Tiara</p> -->
    <!-- </div> -->
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/new/panache-block-ground-floor-slab-work-in-progress.jpg" alt=""> -->
	  <!-- <p class="slider-des">Panache Block : Ground floor slab work in progress</p> -->
    <!-- </div> -->
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/new/tiara-block-basement-Work-completed-ground-floor-casting-in-progress.jpg" alt=""> -->
	  <!-- <p class="slider-des">Tiara Block : Basement work completed-Ground floor casting in progress</p> -->
    <!-- </div> -->
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/Club-House-Ground-Floor-roof-slab-work-in-progress.jpg" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse : Ground Floor Roof Slab work in progress</p> -->
    <!-- </div> -->
	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/tiara-ground-floor-roof-slab-work-in-progress.jpg" alt=""> -->
	  <!-- <p class="slider-des">Tiara : Ground Floor roof slab work in progress</p> -->
    <!-- </div> -->
		<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/November/CLUB-HOUSE.JPG" alt=""> -->
	  <!-- <p class="slider-des">Clubhouse : Basement 1 rood slab work in progress</p> -->
    <!-- </div> -->
    	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/November/ELAN-BLOCK.JPG" alt=""> -->
	  <!-- <p class="slider-des">Elan Block: 6th  & 5th  floor roof slab work in progress</p> -->
    <!-- </div> -->
    	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/November/PANACHE.jpg" alt=""> -->
	  <!-- <p class="slider-des">Panache Block: 3rd Floor roof slab work in progress</p> -->
    <!-- </div> -->
    	<!-- <div class="item"> -->
      <!-- <img src="{{ asset('') }}assets/project/images/November/TIARA-BLOCK.JPG" alt=""> -->
	  <!-- <p class="slider-des">Tiara Block: Ground floor roof slab work in progress</p> -->
    <!-- </div> -->
	
	
	

<!--  </div>-->

  <!-- Left and right controls -->
<!--  <a class="left carousel-control" href="#myCarousel1" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarousel1" data-slide="next">-->
<!--    <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
				
				
				
                    
<!--                </div>-->
                <!-- train section -->
<!--                <div class="bhoechie-tab-content">-->
				
				
<!--				<div class="col-md-12">-->
<!--            <div class="panel with-nav-tabs panel-default">-->
<!--                <div class="panel-heading panl-hedng">-->
<!--                        <ul class="nav panls-nav nav-tabs">-->
							
<!--							<li><a href="#tab8default" data-toggle="tab">July 2019</a></li>-->
<!--							<li><a href="#tab9default" data-toggle="tab">August 2019</a></li>-->
<!--							<li class="active"><a href="#tab10default" data-toggle="tab">September 2019</a></li>-->
<!--                        </ul>-->
<!--                </div>-->
<!--                <div class="panel-body panel-body_tabs">-->
<!--                    <div class="tab-content">-->
                        
						
						
	
<!--	<div class="tab-pane fade" id="tab8default">-->
						
<!--	<div id="myCarousejuly-elan" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
<!--	<div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/july/elan.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress<p>-->
<!--    </div>-->
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/july/elan1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/july/elan2.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->
<!--  </div>-->
<!--  <a class="left carousel-control" href="#myCarousejuly-elan" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarousejuly-elan" data-slide="next">-->
<!--     <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>					-->
<!--	</div>-->
	
<!--	<div class="tab-pane fade" id="tab9default">-->
						
<!--	<div id="myCarouseaugg1-elan" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
  
  
<!--  <div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan-tiara.jpg" alt="">-->
<!--	  <p class="slider-des">A and B Blocks</p>-->
<!--    </div>-->
  
<!--  </div>-->
<!--  <a class="left carousel-control" href="#myCarouseaugg1-elan" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouseaugg1-elan" data-slide="next">-->
<!--     <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>					-->
<!--	</div>-->
	
	
<!--	<div class="tab-pane fade in active" id="tab10default">-->
						
<!--	<div id="myCarousesep-19-elan" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
  
  
<!--  <div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/elan.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/elan-1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->

  
<!--  </div>-->
<!--  <a class="left carousel-control" href="#myCarousesep-19-elan" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarousesep-19-elan" data-slide="next">-->
<!--     <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>					-->
<!--	</div>-->
	
						
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
				
				

<!--                </div>-->
    
                <!-- hotel search -->
<!--                <div class="bhoechie-tab-content">-->
				
				
				
<!--				<div class="col-md-12">-->
<!--            <div class="panel with-nav-tabs panel-primary">-->
<!--                <div class="panel-heading panl-hedng">-->
<!--                        <ul class="nav panls-nav nav-tabs">-->
                         
<!--                            <li><a href="#tab8primary" data-toggle="tab">July 2019</a></li>-->
<!--                            <li><a href="#tab9primary" data-toggle="tab">August 2019</a></li>-->
<!--                            <li class="active"><a href="#tab10primary" data-toggle="tab">September 2019</a></li>-->
                           
<!--                        </ul>-->
<!--                </div>-->
<!--                <div class="panel-body panel-body_tabs">-->
<!--                    <div class="tab-content">-->
                        
						
						
<!--						<div class="tab-pane fade" id="tab8primary">-->
<!--							<div id="myCarousejuly-panache" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->

<!--		<div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/july/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/july/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/july/panache2.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->

<!--  </div>-->
<!--  <a class="left carousel-control" href="#myCarousejuly-panache" data-slide="prev">-->
<!--     <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarousejuly-panache" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
						
<!--						</div>-->
						
<!--						<div class="tab-pane fade" id="tab9primary">-->
<!--							<div id="myCarouseaugg1-panache" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
  
<!--  <div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/panache1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara-panache.jpg" alt="">-->
<!--	  <p class="slider-des">A and B Blocks </p>-->
<!--    </div>-->

	

<!--  </div>-->
<!--  <a class="left carousel-control" href="#myCarouseaugg1-panache" data-slide="prev">-->
<!--     <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouseaugg1-panache" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
						
<!--						</div>-->
						
<!--						<div class="tab-pane fade in active" id="tab10primary">-->
<!--							<div id="myCarousesepp-19-panache" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
  
<!--    <div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/panache.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>	-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/panache-1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/panache-2.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->

	

<!--  </div>-->
<!--  <a class="left carousel-control" href="#myCarousesepp-19-panache" data-slide="prev">-->
<!--     <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarousesepp-19-panache" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
						
<!--						</div>-->
						
						
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
				
				

<!--                </div>-->
<!--                <div class="bhoechie-tab-content">-->
				
				
<!--					<div class="col-md-12">-->
<!--            <div class="panel with-nav-tabs panel-success">-->
<!--                <div class="panel-heading panl-hedng">-->
<!--                        <ul class="nav panls-nav nav-tabs">-->
                          
                            
<!--                           <li><a href="#tab8success" data-toggle="tab">July 2019</a></li>-->
<!--                           <li><a href="#tab9success" data-toggle="tab">August 2019</a></li>-->
<!--                           <li class="active"><a href="#tab10success" data-toggle="tab">September 2019</a></li>-->
<!--                        </ul>-->
<!--                </div>-->
<!--                <div class="panel-body panel-body_tabs">-->
<!--                    <div class="tab-content">-->
                        
						
						
						
						
						
<!--						<div class="tab-pane fade" id="tab8success">-->
						
<!--		<div id="myCarouseljuly-tiara" class="carousel slide" data-ride="carousel">-->

<!--  <div class="carousel-inner">-->
<!--    <div class="item active">-->
<!--       <img src="{{ asset('') }}assets/project/images/july/tiara.jpg" alt=""/>-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--       <img src="{{ asset('') }}assets/project/images/july/tiara1.jpg" alt=""/>-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--       <img src="{{ asset('') }}assets/project/images/july/tiara2.jpg" alt=""/>-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--       <img src="{{ asset('') }}assets/project/images/july/tiara3.jpg" alt=""/>-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--       <img src="{{ asset('') }}assets/project/images/july/tiara4.jpg" alt=""/>-->
<!--	  <p class="slider-des">Modhu City Project work is in progress.</p>-->
<!--    </div>-->


<!--  </div>-->

<!--  <a class="left carousel-control" href="#myCarouseljuly-tiara" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouseljuly-tiara" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
						
<!--						</div>-->
						
<!--						<div class="tab-pane fade" id="tab9success">-->
						
<!--		<div id="myCarouselaugg1-tiara" class="carousel slide" data-ride="carousel">-->

<!--  <div class="carousel-inner">-->
  
<!--  <div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara-panache.jpg" alt="">-->
<!--	  <p class="slider-des">A  and B Blocks </p>-->
<!--    </div>-->
    
<!--    	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan-tiara.jpg" alt="">-->
<!--	  <p class="slider-des">A and B Blocks</p>-->
<!--    </div>-->
	
<!--  </div>-->

<!--  <a class="left carousel-control" href="#myCarouselaugg1-tiara" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouselaugg1-tiara" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
						
<!--						</div>-->
						
<!--					<div class="tab-pane fade" id="tab9success">-->
						
<!--		<div id="myCarouselaugg1-tiara" class="carousel slide" data-ride="carousel">-->

<!--  <div class="carousel-inner">-->
  
<!--  <div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/tiara-panache.jpg" alt="">-->
<!--	  <p class="slider-des">A  and B Blocks </p>-->
<!--    </div>-->
    
<!--    	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/elan-tiara.jpg" alt="">-->
<!--	  <p class="slider-des">A and B Blocks</p>-->
<!--    </div>-->
	
<!--  </div>-->

<!--  <a class="left carousel-control" href="#myCarouselaugg1-tiara" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouselaugg1-tiara" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
<!--</div>-->
						
<!--						</div>-->
						
						
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
				
				
				

<!--                </div>-->
				
<!--				<div class="bhoechie-tab-content">-->
				
				
<!--					<div class="col-md-12">-->
<!--                <div class="panel with-nav-tabs panel-info">-->
<!--                <div class="panel-heading panl-hedng">-->
<!--                        <ul class="nav panls-nav nav-tabs">-->
                           
<!--                             <li><a href="#tab8info" data-toggle="tab">July 2019</a></li>-->
<!--                             <li><a href="#tab9info" data-toggle="tab">August 2019</a></li>-->
<!--                             <li class="active"><a href="#tab10info" data-toggle="tab">September 2019</a></li>-->
                          
<!--                        </ul>-->
<!--                </div>-->
<!--                <div class="panel-body panel-body_tabs">-->
<!--                    <div class="tab-content">-->
                        



<!--	<div class="tab-pane fade" id="tab8info">-->
						
<!--	<div id="myCarouseljuly-club" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
<!--    <div class="item active">-->
<!--     <img src="{{ asset('') }}assets/project/images/july/clubhouse.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--     <img src="{{ asset('') }}assets/project/images/july/clubhouse1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--     <img src="{{ asset('') }}assets/project/images/july/clubhouse2.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--     <img src="{{ asset('') }}assets/project/images/july/clubhouse3.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress</p>-->
<!--    </div>-->
	
<!--  </div>-->
  
  
<!--  <a class="left carousel-control" href="#myCarouseljuly-club" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouseljuly-club" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
  
<!--</div>-->
<!--</div>-->


<!--<div class="tab-pane fade" id="tab9info">-->
						
<!--	<div id="myCarouselaugg1-club" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
  
<!--  	<div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/clubhouse.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/august-19/clubhouse1.jpg" alt="">-->
<!--	  <p class="slider-des">Modhu City Project work is in progress </p>-->
<!--    </div>-->
  
	
<!--  </div>-->
  
  
<!--  <a class="left carousel-control" href="#myCarouselaugg1-club" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouselaugg1-club" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
  
<!--</div>-->
<!--</div>-->


<!--<div class="tab-pane fade in active" id="tab10info">-->
						
<!--	<div id="myCarouselsepppp-19-club" class="carousel slide" data-ride="carousel">-->
<!--  <div class="carousel-inner">-->
  
<!--  	<div class="item active">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse.jpg" alt="">-->
<!--	  <p class="slider-des">Project</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse-1.jpg" alt="">-->
<!--	  <p class="slider-des">Project</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse-2.jpg" alt="">-->
<!--	  <p class="slider-des">Project</p>-->
<!--    </div>-->
	
<!--	<div class="item">-->
<!--      <img src="{{ asset('') }}assets/project/images/sep-19/clubhouse-3.jpg" alt="">-->
<!--	  <p class="slider-des">Project</p>-->
<!--    </div>-->
  
	
<!--  </div>-->
  
  
<!--  <a class="left carousel-control" href="#myCarouselsepppp-19-club" data-slide="prev">-->
<!--    <span class="fa fa-arrow-circle-o-left" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Previous</span>-->
<!--  </a>-->
<!--  <a class="right carousel-control" href="#myCarouselsepppp-19-club" data-slide="next">-->
<!-- <span class="fa fa-arrow-circle-o-right" aria-hidden="true"></span>-->
<!--    <span class="sr-only">Next</span>-->
<!--  </a>-->
  
<!--</div>-->
<!--</div>-->
						
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            </div>-->
<!--            </div>-->
<!--            </div>-->
<!--        </div>-->
<!--  </div>-->
					
					
					
<!--					</div>-->
<!--					</section>-->
					
<!--					<section id="section-cta-1" aria-label="section-cta-1" class="call-to-action bg-color text-center padding0 let-it-snow overflow-hidden" style="    padding: 0px 0 30px 0;">-->
<!--          <a href="{{ route('gallery') }}" class="btn btn-slider wow fadeInUp get-q" target="_blank">View All</a>-->
<!--            </section>-->
					
<!--					</div>-->
					
<!--			<style>-->
<!--				.animated{z-index:0;}-->
<!--			</style>-->
					
					
<!--					</div>-->
					
					

					
				
            <!-- section begin -->
<!--            <div id="section-why-choose-us-3" style="background:url({{ asset('') }}assets/project/img/eterna/bg-16.jpg) top fixed">-->

<!--                <div class="container-fluid">-->
<!--                <div class="row">-->
				
<!--				<div class="col-md-6 col-sm-6">-->
<!--				<div class="row">-->
<!--					<img src="{{ asset('') }}assets/project/images/b-0.jpg" class="img-responsive">-->
<!--				</div>-->
<!--				</div>-->
				
				
<!--                <div class="col-md-6 col-sm-6 wcha">-->
				
<!--				<div class="col-md-12 col-sm-12 why-choose-space">-->
<!--				<h2 class="text-center why-choose">WHY CHOOSE, HAVE ALL?</h2>-->
<!--				<hr align="middle" style="width:14%;border-top:1px solid #fdc100;margin-top:0px;margin-bottom:60px;opacity:1;" class="fadeInLeft animated">-->
<!--				</div>-->
				
                  
<!--					<div class="row">-->
<!--					<div class="col-md-12 col-sm-12">-->
<!--						<div class="col-md-6 col-sm-6">-->
<!--							<ul class="choose-points">-->
<!--							<li>Banquet Hall</li>-->
<!--							<li>Terrace Party Lawn Area</li>-->
<!--							<li>Coffee Shop</li>-->
<!--							<li>Grocery</li>-->
<!--							<li>Business Lounge</li>-->
<!--							<li>Conference Room</li>-->
<!--							<li>SPA & Saloon</li>-->
<!--							<li>Guest Rooms</li>-->
<!--							</ul>-->
<!--						</div>-->
<!--						<div class="col-md-6 col-sm-6">-->
<!--							<ul class="choose-points">-->
<!--							<li>Terrace Swimming Pool </li>-->
<!--							<li>Indoor Badminton Court</li>-->
<!--							<li>Squash Court</li>-->
<!--							<li>Billiards Table</li>-->
<!--							<li>Table Tennis</li>-->
<!--							<li>Various Table Games</li>-->
<!--							<li>Gym and Aerobics Room</li>-->
<!--							<li>Preview Theatre.</li>-->
<!--							</ul>-->
<!--						</div>-->
<!--					</div>-->
<!--					</div>-->
					
					
<!--                </div>-->
				
				
				
				
				
<!--                </div>-->
<!--                </div>-->
<!--            </div>-->
            <!-- section close -->
			
			
			
			

			
			
			
			
			
			
			
			
			
			
			
			
       

            <!-- section begin -->
  <!--          <section id="section-cta-1" aria-label="section-cta-1" class="call-to-action bg-color text-center padding40 let-it-snow overflow-hidden" style="background:url({{ asset('') }}assets/project/img/eterna/g-q-b.jpg) top fixed">-->
  <!--              <a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-slider wow fadeInUp get-q">Get Quotation</a>-->
  <!--          </section>-->
            <!-- logo carousel section close -->

			
			
		<!--	<section id="specifications" style="padding-bottom:70px;">-->
		<!--	<div class="container-fluid">-->
		<!--		<div class="row">-->
		<!--			<div class="container">-->
					
					<!-- <h2 class="text-center specif">SPECIFICATIONS</h2> -->
					
					<!-- <hr class="spec_hr" style=""> -->
					
					
					
		<!--			<div class="col-md-12 col-sm-12">-->
		<!--			<div class="row">-->


  <!-- Wrapper for slides -->
  <!--<div class="carousel-inner spec_crsl_P">-->
  <!--  <div class="item active">-->
  <!--   <div class="col-md-12 col-sm-12">-->
	 <!-- <div class="expand-group">-->
	  
						
  <!--                              <div class="expand">-->
  <!--                                  <h4 class="spec-h-f">SPECIFICATIONS</h4>-->
  <!--                                  <div class="hidden-content">-->
									
		<!--							<h3 style="color:#fdc100">STRUCTURE</h3>-->
									
  <!--                                      <p>Far far away, behind the word mountains, far from the countries of dream</p>-->
		<!--								<h4 style="margin-left:0;">SUPER STRUCTURE</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
										
		<!--								<h3 style="color:#fdc100">WALL FINISHES</h3>-->
		<!--								<h4 class="spe_h"> INTERNAL WALL FINISHES:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
		<!--								<h4 class="spe_h">EXTERNAL WALL FINISHES:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">DOORS</h3>-->
										
		<!--								<h4 class="spe_h">MAIN DOOR:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">INTERNAL DOOR:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">Toilets, Utility& Store room doors:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream.</p>-->
										
		<!--								<h4 class="spe_h">FRENCH DOORS:</h4>-->
		<!--								<p>UPVC door frames with float glass panelled sliding shutters with provision for mosquito mesh track.(Mosquito mesh & fixing will be at extra cost)</p>-->
										
		<!--								<h4 class="spe_h">WINDOWS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">FLOORING</h3>-->
										
		<!--								<h4 class="spe_h">Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">MASTER BEDROOM:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream </p>-->

		<!--								<h4 class="spe_h">ALL BALCONIES::</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">BATHROOMS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">Bathrooms:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">CORRIDORS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">STAIRCASE:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">TILE CLADDING</h3>-->
										
		<!--								<h4 class="spe_h">BATHROOMS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">KITCHEN:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h4 class="spe_h">UTILITY AREA:</h4>-->
		<!--								<p>Ceramic tile dado up-to sill height of the best brand</p>-->
										
		<!--								<h3 style="color:#fdc100">KITCHEN</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream-->
		<!--								</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">UTILITY/WASH AREA</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">BATHROOMS</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">ELECTRICAL</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

										
		<!--								<h4 class="spe_h">ALL BALCONIES::</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">BATHROOMS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">Bathrooms:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">CORRIDORS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">STAIRCASE:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">TILE CLADDING</h3>-->
										
		<!--								<h4 class="spe_h">BATHROOMS:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<h4 class="spe_h">KITCHEN:</h4>-->
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h4 class="spe_h">UTILITY AREA:</h4>-->
		<!--								<p>Ceramic tile dado up-to sill height of the best brand</p>-->
										
		<!--								<h3 style="color:#fdc100">KITCHEN</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream-->
		<!--								</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">UTILITY/WASH AREA</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">BATHROOMS</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->
										
		<!--								<h3 style="color:#fdc100">ELECTRICAL</h3>-->
										
		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>Far far away, behind the word mountains, far from the countries of dream</p>-->

		<!--								<p>‘3 Phase’ power supply in each unit.</p>-->
  <!--                                  </div>-->
  <!--                              </div>-->
								
  <!--                              </div>-->
	 <!--</div>-->
	 
	 
  <!--  </div>-->

    

    
  <!--</div>-->


		<!--			</div>-->
		<!--			</div>-->
					
					
					
					
		<!--			</div>-->
		<!--		</div>-->
		<!--	</div>-->
		<!--	</section>-->
			
			
			

			
			
			
			<div class="container-fluid" id="contact" style="background:rgb(33, 34, 37);">
				<div class="row">
				
				<div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1 form_eterna">
				<form action="{{ route('contact-message-send') }}" method="post">
				    {{ csrf_field() }}
				<h3 class="" style="color:#fdc100;">ENQUIRE NOW</h3>
				<hr align="left" style="width:20%;border-top:1px solid #fdc100;">
				
<div class="form-group">
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Full Name" id="FirstName" name="name" required>
  </div>
</div>

<div class="form-group">
  <div class="col-10">
    <input class="form-control" type="email" placeholder="Email id" id="Email" name="email" required>
  </div>
</div>

<div class="form-group">
  <div class="col-10">
    <input class="form-control numberf" type="tel" placeholder="Phone number" name="phone" required>
  </div>
</div>

<div class="form-group">
  <div class="col-10">
    <input class="form-control" type="text" placeholder="Subject" name="subject" required>
  </div>
</div>

<div class="form-group">
    <textarea class="form-control" id="Message" name="messages" rows="3" placeholder="Message"></textarea>
  </div>
<button type="submit" name="submit" value="submit" class="btn btn-default bt_send">Send</button>
</form>
				
				</div>
				
				<div class="col-md-7 col-sm-7" style="padding: 20px 0px 0px 50px;">
				<div class="row">
					<div id="ieatmaps1">
                       <div class="mapouter"><div class="gmap_canvas"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14609.514252990522!2d90.32548339861141!3d23.733876187038543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755bf5820df4c69%3A0xbe67951e0d09fae5!2sModhu%20City%20Office!5e0!3m2!1sbn!2sbd!4v1571891639868!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
				</div>
			</div>
			


        </div>

        <!-- footer begin -->
        <footer>
            <div class="container">
			
			<div class="row">
				<div class="col-md-12 col-sm-12">
				
				</div>
			</div>
			
                <div class="row">
				
				<div class="col-md-2 col-sm-2 f-logo">
				<center><img src="{{ asset('') }}assets/project/images/logo.png" class="img-responsive"></center>
				</div>
				
				
				  <div class="col-md-5  col-sm-5 col-md-offset-1 foot_m-t">
                        <h3>CORPORATE OFFICE ADDRESS</h3>
                        <div class="widget-address">
                            <address style="margin-bottom:10px;">
                                 <p>  @if(App\Models\Admin\ContactInformation::all()->pluck('corporate_office')->first() != null) {{App\Models\Admin\ContactInformation::all()->pluck('corporate_office')->first()}} @endif</p>
                            </address>
                        </div>
						
						
						
                    </div>
				
                    <div class="col-md-4 col-sm-4">
                        
						<h3 class="f_with">SITE ADDRESS</h3>
						<p>  </p>
						
						<div class="widget-address">
                            <address>
                                <p> @if(App\Models\Admin\ContactInformation::all()->pluck('office_address')->first() != null) {{App\Models\Admin\ContactInformation::all()->pluck('office_address')->first()}} @endif</p>
                            </address>
                        </div>
						
						<ul>
						 @if(App\Models\Admin\ContactInformation::all()->pluck('email')->first() != null)<li class="foot_num"><i class="fa fa-envelope" style="padding-right:10px;color:#ddd;"></i> {{App\Models\Admin\ContactInformation::all()->pluck('email')->first()}} </li>@endif
						 @if(App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first() != null)<li class="foot_num"><a href="tel:{{App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first()}}"><i class="fa fa-phone" style="padding-right:10px;color:#ddd;"></i> {{App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first()}}, {{App\Models\Admin\ContactInformation::all()->pluck('phone_2')->first()}} </a></li>@endif 
						</ul>
						
                    </div>

                  

                  
                </div>
            </div>

            <div class="subfooter">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            © <?php echo(date('Y')); ?> {{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }}<span class="id-color"><a></a></span>
                        </div>
                        <div class="col-md-5 text-right">
                            <div class="social-icons">
                                 @if(App\Models\Admin\ContactInformation::all()->pluck('facebook')->first() != null)
                                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('facebook')->first()}}" class="ficn"><i class="fa fa-facebook fa-lg"></i></a>
                                @endif
                                @if(App\Models\Admin\ContactInformation::all()->pluck('linkedin')->first() != null)
                                <a href="{{App\Models\Admin\ContactInformation::all()->pluck('linkedin')->first()}}" class="licn"><i class="fa fa-linkedin fa-lg "></i></a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" id="back-to-top"></a>
        </footer>
		
		<div class="modal fade" id="myModal_download" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content" style="background:rgb(33, 34, 37);">
     
        <div class="modal-body">
          
		  
		  
		  <div class="col-md-12 col-sm-12 form_eterna" style="background:rgb(33, 34, 37);">
		  
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  
				<h3 class="" style="color:#ad8502;">Download Brochure</h3>
				<hr align="left" style="width:20%;border-top:2px solid #ad8502;">
				<form action="https://www.rajapushpa.in/eterna/download_brochure.php" method="post">		
					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="text" id="FirstName" name="FirstName" required placeholder="Full Name" >
					  </div>
					</div>

					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="email" id="Email" name="Email" required placeholder="Email id" >
					  </div>
					</div>

					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="tel" id="Phone" name="Phone" required placeholder="Phone number" >
					  </div>
					</div>

					<div class="form-group">
						<textarea class="form-control" rows="3" id="Message" name="Message"	placeholder="Message"></textarea>
					  </div>
					<button type="submit" name="submit" value="submit" class="btn btn-default bt_send" style="margin-bottom:10px;">Send</button>
				</form>				
				</div>
		  
		  
        </div>

      </div>
    </div>
  </div>
  
  
  
		<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content" style="background:rgb(33, 34, 37);">
     
        <div class="modal-body">
          
		  
		  
		  <div class="col-md-12 col-sm-12 form_eterna" style="background:rgb(33, 34, 37);">
		  
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  
				<h3 class="" style="color:#ad8502;">ENQUIRE NOW</h3>
				<hr align="left" style="width:20%;border-top:2px solid #ad8502;">
				<form action="{{ route('contact-message-send') }}" onsubmit="return validateForm3()" method="post">		
					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="text" id="FirstName" name="name" required placeholder="Full Name" >
					  </div>
					</div>

					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="email" id="Email" name="email" required placeholder="Email id" >
					  </div>
					</div>

					<div class="form-group">
					  <div class="col-10">
						<input class="form-control numbermm" type="tel" id="Phone" name="phone" required placeholder="Phone number" >
					  </div>
					</div>
					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="text" name="subject" required placeholder="Phone number" >
					  </div>
					</div>

					<div class="form-group">
						<textarea class="form-control" rows="3" id="Message" name="messages"	placeholder="Message"></textarea>
					  </div>
					<button type="submit" name="submit" value="submit" class="btn btn-default bt_send" style="margin-bottom:10px;">Send</button>
				</form>				
				</div>
		  
		  
        </div>

      </div>
    </div>
  </div>
  
  
<div class="modal fade" id="" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content" style="background:rgba(33, 34, 37, 0);">
     
        <div class="modal-body">
          
		  
		  
		  <div class="col-md-12 col-sm-12 form_eterna" style="background:rgb(33, 34, 37);">
		  
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  
				<h3 class="" style="color:#ad8502;">ENQUIRE NOW</h3>
				<hr align="left" style="width:20%;border-top:2px solid #ad8502;">
				<form action="" method="post">			
					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="text" id="FirstName" name="FirstName" required placeholder="Full Name" >
					  </div>
					</div>

					<div class="form-group">
					  <div class="col-10">
						<input class="form-control" type="email" id="Email" name="Email" required placeholder="Email id" >
					  </div>
					</div>

					<div class="form-group">
					  <div class="col-10">
					      
						<input class="form-control" type="tel" placeholder="Phone number" id="Phone" name="Phone" required >
					  </div>
					</div>

					<div class="form-group">
						<textarea class="form-control" id="Message" name="Message" rows="3" placeholder="Message"></textarea>
					  </div>
					<button class="btn btn-default bt_send" style="margin-bottom:10px;" type="submit" name="submit" value="submit">Send</button>
				</form>				
				</div>
		  
		  
        </div>

      </div>
    </div>
  </div>

    </div>

</div>
</div>


 <script src="{{ asset('') }}assets/frontEnd/js/jquery-3.0.0.min.js"></script>
  





<script src="{{ asset('') }}assets/project/js/jquery.min.js"></script>
<script src="{{ asset('') }}inc/maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/project/js/wow.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/jquery.themepunch.tools.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/jquery.themepunch.revolution.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.actions.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.carousel.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.kenburn.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.layeranimation.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.migration.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.navigation.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.parallax.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.slideanims.min.js"></script>
<script src="{{ asset('') }}assets/project/js/rev-slider/revolution.extension.video.min.js"></script>
<script src="{{ asset('') }}assets/project/js/interface.js"></script>
   <script src="{{ asset('') }}assets/project/css/second/js/owl.carousel.js"></script>
   <script src="{{ asset('') }}assets/project/css/second/js/jpreLoader.js"></script>
    <script src="{{ asset('') }}assets/project/css/second/js/jquery.isotope.min.js"></script>
    <script src="{{ asset('') }}assets/project/css/second/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('') }}assets/project/css/second/js/enquire.min.js"></script>
	 <script src="{{ asset('') }}assets/frontEnd/js/scrollIt.min.js"></script>
  <script src="{{ asset('') }}assets/frontEnd/js/scripts.js"></script>
    <script src="{{ asset('') }}assets/project/css/second/js/designesia.js"></script>
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
	

	


	 <script type="text/javascript">
        $(document).ready(function(){
            $('#lightgallery').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery1').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery2').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery3').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery4').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery5').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery6').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery7').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery8').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery9').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery10').lightGallery();
        });
		$(document).ready(function(){
            $('#lightgallery11').lightGallery();
        });
        </script>

	 <script src="{{ asset('') }}assets/project/js/lightgallery-all.min.js"></script>
        <script src="{{ asset('') }}assets/project/js/jquery.mousewheel.min.js"></script>
<script src="{{ asset('') }}assets/project/js/feedback.js"></script>

<!--<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js'></script>-->

<script>
	$(document).ready(function(){
		
		 setTimeout(function(){
			 $("#myModal1").modal('show');
			 }, 45000);
		setTimeout(function(){
			 $("#myModal1").modal('show');
			 }, 18000);
		
	});
</script>

<script>
    function validatePhone() {
        var a = $(".numberf").val();

        var phoneno = /^\d{10}$/;
        if(a.match(phoneno))
        {
            return true;
        }
        else
        {
            alert("Invalid Phone Number");
            return false;
        }
    }
    
    function validateForm2() {
        var a = $(".numberm").val();

        var phoneno = /^\d{10}$/;
        if(a.match(phoneno))
        {
            return true;
        }
        else
        {
            alert("Invalid Phone Number");
            return false;
        }
    }
    
    function validateForm3() {
        var a = $(".numbermm").val();

        var phoneno = /^\d{10}$/;
        if(a.match(phoneno))
        {
            return true;
        }
        else
        {
            alert("Invalid Phone Number");
            return false;
        }
    }
 
    
</script>
<script type="text/javascript" src="http://pdf-to-flipbook.codingfocus.com/release/jquery.pdfflipbook.1.js"></script>

<script type="text/javascript">
    $('a').pdfFlipbook();</script>
</script>
</body>
</html>
