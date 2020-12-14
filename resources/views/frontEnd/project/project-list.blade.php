@extends('frontEnd.master')
@section('title', 'Projects List')
@section('content')
    <div class="container-fluid">
		<div class="row">
		<div id="feedback123">
			<a href="" class="wsp-Modhu City" id="id-wsp-Modhu City"><i class="fa fa-whatsapp"></i></a>
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
	border-radius:3px;
}
#feedback123 a:hover {
	background:#119040;
}
		</style>
    
     <header class="inner-header-bg mobi-ban-inn"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="page-title page-main-section parallaxie-project1">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    <!--<div class="main-title wow zoomInUp" style="animation-direction:0.5s;">
      <h1>Projects</h1>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.php">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="about-us.php">Projects</a> 
    </div>-->
	<!--<h2 class="artd"><span>Projects</span></h2>-->
  </div>
</div>
    </header>
    <section class="mobi-inn">
        <img src="{{ asset('') }}assets/frontEnd/img/_MG_6123.JPG"  style="width:100%;"/>
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
   
<!--<section class="mobi-sec">-->
<!--    <div class="container">-->
<!--        <div class="row">-->
<!--            <div class="col-6">-->
<!--              <div class="brand-mobi"><a href="Modhu City/index.html"> <img src="{{ asset('') }}assets/frontEnd/img/properties-03.png" alt=""></a></div>-->
<!--            </div>-->
<!--                <div class="col-6">-->
<!--              <div class="brand-mobi"><a href="index.html"> <img src="{{ asset('') }}assets/frontEnd/img/properties-01.png" alt=""></a></div>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--            <div class="col-6">-->
<!--              <div class="brand-mobi"><a href="index.html"> <img src="{{ asset('') }}assets/frontEnd/img/properties-02.png" alt=""></a></div>-->
<!--            </div>-->
<!--                <div class="col-6">-->
<!--              <div class="brand-mobi"><a href="index.html"> <img src="{{ asset('') }}assets/frontEnd/img/properties-04.png" alt=""></a></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</section>-->

<section class="mobi-sec mhi">
    <div class="container">
        <div class="row">
      	<h2 class="resis-mobi">Residential Projects</h2>
            
        </div>
        <div class="row">
            <div class="col-4 proi-pad">
                <a href="{{ route('type-status', ['type' => 'apartment', 'status' => 'ongoing']) }}"><div class="proi">
                    <img src="{{ asset('') }}assets/frontEnd/img/ongoing-blue.png" />
                    <p>Ready</p>
                </div></a>
            </div>
             <div class="col-4 proi-pad">
                <a href="{{ route('type-status', ['type' => 'apartment', 'status' => 'completed']) }}"> <div class="proi">
                   <img src="{{ asset('') }}assets/frontEnd/img/complted-blue.png" />
                    <p>Handover</p>
                </div></a>
            </div>
             <div class="col-4 proi-pad">
               <a href="{{ route('type-status', ['type' => 'apartment', 'status' => 'upcoming']) }}">  <div class="proi">
                  <img src="{{ asset('') }}assets/frontEnd/img/upcoming-blue.png" />
                    <p>Installment</p>
                </div></a>
            </div>
        </div>
    </div>
</section>
    <section class="mobi-sec mhi">
    <div class="container">
        <div class="row">
      	<h2 class="resis-mobi">Commercial Projects</h2>
            
        </div>
        <div class="row">
            <div class="col-4 proi-pad">
              <a href="{{ route('type-status', ['type' => 'commercial', 'status' => 'ongoing']) }}">   <div class="proi">
                    <img src="{{ asset('') }}assets/frontEnd/img/ongoing-blue.png" />
                    <p>Ready</p>
                </div></a>
            </div>
             <div class="col-4 proi-pad">
                 <a href="{{ route('type-status', ['type' => 'commercial', 'status' => 'completed']) }}"><div class="proi">
                   <img src="{{ asset('') }}assets/frontEnd/img/complted-blue.png" />
                    <p>Handover</p>
                </div></a>
            </div>
             <div class="col-4 proi-pad">
               <a href="{{ route('type-status', ['type' => 'commercial', 'status' => 'upcoming']) }}">  <div class="proi">
                  <img src="{{ asset('') }}assets/frontEnd/img/upcoming-blue.png" />
                    <p>Installment</p>
                </div></a>
            </div>
        </div>
    </div>
</section>
<section class="mobi-sec mhi">
    <div class="container">
        <div class="row">
      	<h2 class="resis-mobi">Land Projects</h2>
            
        </div>
        <div class="row">
            <div class="col-4 proi-pad">
              <a href="{{ route('type-status', ['type' => 'land', 'status' => 'ongoing']) }}">   <div class="proi">
                    <img src="{{ asset('') }}assets/frontEnd/img/ongoing-blue.png" />
                    <p>Ready</p>
                </div></a>
            </div>
             <div class="col-4 proi-pad">
                 <a href="{{ route('type-status', ['type' => 'land', 'status' => 'completed']) }}"><div class="proi">
                   <img src="{{ asset('') }}assets/frontEnd/img/complted-blue.png" />
                    <p>Handover</p>
                </div></a>
            </div>
             <div class="col-4 proi-pad">
               <a href="{{ route('type-status', ['type' => 'land', 'status' => 'upcoming']) }}">  <div class="proi">
                  <img src="{{ asset('') }}assets/frontEnd/img/upcoming-blue.png" />
                    <p>Installment</p>
                </div></a>
            </div>
        </div>
    </div>
</section>
    <section class="portfolio parallaxie-viso desk-proi">
	<div class="cgt-bg">
        <div class="container">
            <!--<div class="row">
            <!--    <div class="col-12 center-col margin-40px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center wow fadeInUp">-->
            <!--        <h5 class="margin-10px-bottom font-weight-300">Our <span class="font-weight-500">Creative Feature</span> Work</h5>-->
            <!--        <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div>-->
            <!--    </div>-->
            <!--</div>-->
            
           
        
        <div class="clearfix"></div>
    </div>
            <div class="container">
		<div class="row">
		
		<div class="col-md-8 m-auto">
		<h2 class="resis">Land Projects</h2>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'land', 'status' => 'ongoing']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="okl">Ready</span>
                          <i><img src="{{ asset('') }}assets/frontEnd/img/ongoing-blue.png" /></i>
						   
                      </div>
                   
                    </a>
                </div>
                <div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'land', 'status' => 'completed']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="cmkl">Handover</span>
                        <i><img src="{{ asset('') }}assets/frontEnd/img/complted-blue.png" /></i>
                      </div>
                      
                    </a>
                </div>
				<div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'land', 'status' => 'upcoming']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="okl">Installment</span>
                      <i><img src="{{ asset('') }}assets/frontEnd/img/upcoming-blue.png" /></i>
						   
                      </div>
                   
                    </a>
                </div>
            </div>
        </div>
    </div>
			<div class="row">
        <div class="col-md-6 bdrt">
		<h2 class="resis">Residential Projects</h2>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'apartment', 'status' => 'ongoing']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="okl">Ready</span>
                          <i><img src="{{ asset('') }}assets/frontEnd/img/ongoing-blue.png" /></i>
						   
                      </div>
                   
                    </a>
                </div>
                <div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'apartment', 'status' => 'completed']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="cmkl">Handover</span>
                          <i><img src="{{ asset('') }}assets/frontEnd/img/complted-blue.png" /></i>
                      </div>
                      
                    </a>
                </div>
				<div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'apartment', 'status' => 'upcoming']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="okl">Installment</span>
                          <i><img src="{{ asset('') }}assets/frontEnd/img/upcoming-blue.png" /></i>
						   
                      </div>
                   
                    </a>
                </div>
            </div>
        </div>
		
		<div class="col-md-6">
		<h2 class="resis">Commercial Projects</h2>
            <div class="main-timeline">
                <div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'commercial', 'status' => 'ongoing']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="okl">Ready</span>
                          <i><img src="{{ asset('') }}assets/frontEnd/img/ongoing-blue.png" /></i>
						   
                      </div>
                   
                    </a>
                </div>
                <div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'commercial', 'status' => 'completed']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="cmkl">Handover</span>
                        <i><img src="{{ asset('') }}assets/frontEnd/img/complted-blue.png" /></i>
                      </div>
                      
                    </a>
                </div>
				<div class="timeline">
                    <a href="{{ route('type-status', ['type' => 'commercial', 'status' => 'upcoming']) }}" class="timeline-content">
                      <div class="timeline-icon">
					   <span class="okl">Installment</span>
                      <i><img src="{{ asset('') }}assets/frontEnd/img/upcoming-blue.png" /></i>
						   
                      </div>
                   
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    
			
            
           <!-- <div class="row">
          



           <!--  <div class="col-sm-12">-->
             
                
           <!--     <div class="clearfix"></div>-->
                
           <!--    <div class="gallery text-center">-->
           <!--         <div class="col-md-6 items design">-->
           <!--             <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/residential.jpg" alt="image">-->
           <!--                 <div class="item-img-overlay1 valign">-->
           <!--                     <div class="overlay-info  width-99 vertical-center">-->
           <!--                       <h2 class="resi">Residential Projects</h2>-->
           <!--                <div class="bfg">-->
           <!--                <a href="ongoing.php"><img src="{{ asset('') }}assets/frontEnd/img/ongoing-white.png" />Ready</a> <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/complted-white.png" />Handover</a><a href="#"><img src="{{ asset('') }}assets/frontEnd/img/upcoming-white.png" />Installment</a>-->
           <!--                </div>-->
         
           <!--                     </div>-->
           <!--                 </div>-->
           <!--             </div>-->
           <!--         </div>-->
           <!--         <div class="col-md-6 items design">-->
           <!--             <div class="item-img"> <img src="{{ asset('') }}assets/frontEnd/img/commercial.jpg" alt="image">-->
           <!--                 <div class="item-img-overlay1 valign">-->
           <!--                     <div class="overlay-info width-99 vertical-center">-->
           <!--                         <h2 class="resi">Commercial Projects</h2>-->
           <!--                  <div class="bfg">-->
           <!--                <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/ongoing-white.png" />Ready</a> <a href="#"><img src="{{ asset('') }}assets/frontEnd/img/complted-white.png" />Handover</a><a href="#"><img src="{{ asset('') }}assets/frontEnd/img/upcoming-white.png" />Installment</a>-->
           <!--                </div>-->
                               
           <!--                     </div>-->
           <!--                 </div>-->
           <!--             </div>-->
           <!--         </div>-->
                    
                    
                    
           <!--         <div class="clear-fix"></div>-->
           <!--     </div>-->
           <!--     </div>-->
            
           <!--    </div>-->-->
            </div>
        </div>
	</div>
    </section>

@endsection