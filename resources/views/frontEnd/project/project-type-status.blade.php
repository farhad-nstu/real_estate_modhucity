@extends('frontEnd.master')
@section('title')

{{--            @if($data['project_status'] == 'ongoing')--}}
{{--                Ready--}}
{{--            @elseif($data['project_status'] == 'completed')--}}
{{--                Handover--}}
{{--            @else--}}
{{--                Installment--}}
{{--            @endif--}}
{{--            Projects |--}}
{{--            @if($data['project_type'] == 'land')--}}
{{--                Land--}}
{{--            @elseif($data['project_type'] == 'apartment')--}}
{{--                Apartment--}}
{{--            @else--}}
{{--                Commercial--}}
{{--            @endif--}}
Project List
@endsection
@section('extraCss')
    <link rel="stylesheet" href="{{ asset('') }}assets/frontEnd/css/gallery.css" />
@endsection
@section('content')
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
    
     <header class="inner-header-bg"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <div class="page-title page-main-section parallaxie-ongoing">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
   <!-- <div class="main-title wow zoomInUp" style="animation-direction:0.5s;">
      <h1>Ongoing</h1>
      <div class="line_4"></div>
      <div class="line_5"></div>
      <div class="line_6"></div>
      <a href="index.php">home</a><span><i class="fa fa-angle-double-right" aria-hidden="true"></i></span><a href="ongoing.php">Ongoing</a> 
    </div>-->
	 <!-- <h2 class="artd" style="color:#FFF;"><span>Ongoing Projects</span></h2>-->
  </div>
</div>
    </header>
 
  
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
   
    <section class="portfolio">
        <div class="container">
   

 <div class="popup-wrap10">
    <div class="popup-box10">
	<div class="row">
	<div class="col-sm-3">
	<img class="img-responsive jay" src="{{ asset('') }}assets/frontEnd/img/agent-01.jpg" alt="">
	</div>
	<div class="col-sm-9">
	<h2>Mr. P. Jayachandra Reddy</h2>
<p>Mr. J.C. Reddy is the Chairman of the company, who oversees the operations of the organization. He is a Post Graduate in Agricultural Science. In his initial years of career, he worked with Central Bank of India in various capacities. During his tenure of 25years at CBI, his work and contribution was highly acclaimed by the management. As Chairman of RPPL he is the beacon of light and steering RPPL’s growth with his unparalleled wisdom, expertise and astute leadership skills in various fields such as finance, accounts, business development & strategic management. Modhu City's success today is the result of Mr. Reddy's vision to develop Land mark housing and commercial projects.</p>
	 </div>
	 </div>
	 
	 <a class="close-btn popup-close" href="#">x</a>
	 
	</div>
	</div>
	   <div class="popup-wrap11">
    <div class="popup-box11">
	<div class="row">
	<div class="col-sm-3">
	<img class="img-responsive jay" src="{{ asset('') }}assets/frontEnd/img/agent-02.jpg" alt="">
		</div>
	<div class="col-sm-9">
	<h2>Mr. P. Mahender Reddy</h2>
<p>Mr. P. Mahender Reddy is the Managing Director of the company. He is a Graduate in Civil Engineering and alumni of prestigious “Chaitanya Bharathi Institute of Technology (CBIT)." Mr. Mahender Reddy is highly respected in the Real Estate fraternity. With enormous experience in Civil Engineering he has contributed immensely to the Department of Road & Buildings, Andhra Pradesh Government for about 6 years before establishing poultry business and subsequently venturing into Real-estate business.</p>
<p>The first Residential gated community project of RPPL at Attapur, with about 300 apartments was the brainchild of Mr. Mahender Reddy. His versatile experience and expertise imbibed during his tenure in R&B Department of A.P. State Government, has richly helped him in bringing out the projects with superior quality and fabulous design layout.</p>
	 </div>
	 </div>
	 
	 <a class="close-btn popup-close" href="#">x</a>
	 
	</div>
	</div>
	
	   <div class="popup-wrap12">
    <div class="popup-box12">
	<div class="row">
	<div class="col-sm-3">
	<img class="img-responsive jay" src="{{ asset('') }}assets/frontEnd/img/agent-03.jpg" alt="">
	</div>
	<div class="col-sm-9">
	<h2>Mr. P. Sreenivas Reddy</h2>
<p>A Post Graduate in Engineering from Arizona State University, USA, Mr. Sreenivas Reddy is the Executive Director of the Organization. He started his career as Software Engineer in USA and was there for about 18 years and returned to India in the year 2006 to join with his brothers to look after the business. His assignments during his professional career were mostly linked to marketing activity thus helped gain great expertise in the field of Sales, Marketing & Service Industry. He has established good relations and contacts with NRI’s and others in USA while he was there. Mr. Reddy is in-charge of Sales, Marketing, Customer Relations, Business Operations & Purchase department of the company.</p>
	 </div>
	 </div>
	 
	 <a class="close-btn popup-close" href="#">x</a>
	 
	</div>
	</div>
	
	
	   <div class="popup-wrap13">
    <div class="popup-box13">
	<div class="row">
	<div class="col-sm-3">
	<img class="img-responsive jay" src="{{ asset('') }}assets/frontEnd/img/agent-04.jpg" alt="">
		</div>
	<div class="col-sm-9">
	<h2>Mr. P. Sujith Reddy</h2>
<p>Mr. Sujith Reddy is the director of the company. <br/>
A Second Generation Entrepreneur of the Parupati Family, he is the elder son of the Chairman, Mr. J.C. Reddy. He was graduated in B.Tech from the prestigious VIT University and then to have exposure into managerial practices he pursued his MBA from the Coventry University, United Kingdom. He worked for Ms. Sierra Atlantic Services for 2 years to have the perfect exposure in dealing with a large organization. He was inducted into RPPL board as Director-Projects in 2012 and is involved in construction related activities of the firm. His managerial expertise has helped the organization greatly and today the organization is able to execute multiple projects worth many millions on time without any compromise on quality.
</p>
	 </div>
	 </div>
	 
	 <a class="close-btn popup-close" href="#">x</a>
	 
	</div>
	</div>
            <!--<div class="row">
                <div class="col-12 center-col margin-40px-bottom sm-margin-40px-bottom xs-margin-30px-bottom text-center wow fadeInUp">
                    <h5 class="margin-10px-bottom font-weight-300">Our <span class="font-weight-500">Creative Feature</span> Work</h5>
                    <div class="separator-line-horrizontal-medium-light2 bg-pink center-col"></div>
                </div>
            </div>-->
            
           
        
        <div class="clearfix"></div>
    </div>
            <div class="container">
			
			<div class="row">
			    @foreach($data['projectDetails'] as $project)
			    
			<div class="col-sm-6">
	<article class="property-item clearfix ">
		<h4 class="pro-title"> {{ $project->project_name }} </h4>

		<figure>
			<a href="#">
				<img src="{{ asset('') }}{{ $project->project_image }}" class="attachment-property-thumb-image size-property-thumb-image wp-post-image" alt="{{ $project->project_name }}">	</a>

			</figure>

		<div class="detail">
			<h5 class="price">Location: {{ $project->project_location }}</h5>
			<p class="sfgh">{!! str_limit($project->project_description, 220) !!}</p>
			<a class="more-details" href="{{ route('project', ['slug' => $project->project_slug]) }}">More Details <i class="fa fa-caret-right"></i></a>
			
		<!--<a href="#" class="broc popup-btn"><i class="fa fa-book" aria-hidden="true"></i> Brochure</a>-->
		</div>

		<div class="property-meta">
			<span title="Area Size">Plot Sizes: {{ $project->plot_accomodations }} {{ $project->plot_accomodations_measure_by }} | Roads: {{ $project->roads }} {{ $project->roads_measure_by }}</span>		
</div>
	</article>
</div>
@endforeach



			</div>
            
            <div class="row">
            
            <!--<div class="col-sm-4">
          <div class="on-main">
          <h2>Modhu City <span class="car-bf">Modhu City</span></h2>
          <img src="{{ asset('') }}assets/frontEnd/img/ongoing/projects-Modhu City.jpg" />
          <div class="bgh">
          <a href="#" class="details-new"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> <a href="#" class="broc  popup-btn"><i class="fa fa-book" aria-hidden="true"></i> Brochure</a>
          </div>
          </div>
          
          </div>-->
            
          <!--<div class="col-sm-4">
          <div class="on-main">
          <h2>Modhu City <span class="car-bf">Regalia</span></h2>
          <img src="{{ asset('') }}assets/frontEnd/img/ongoing/projects-regalia.jpg" />
          <div class="bgh">
          <a href="#" class="details-new"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> <a href="#" class="broc popup-btn1"><i class="fa fa-book" aria-hidden="true"></i> Brochure</a>
          </div>
          </div>
          
          </div>-->
          <!--<div class="col-sm-4">
          <div class="on-main">
          <h2>Modhu City <span class="car-bf">Green Dale</span></h2>
          <img src="{{ asset('') }}assets/frontEnd/img/ongoing/projects-greendale.jpg" />
          <div class="bgh">
          <a href="#" class="details-new"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> <a href="#" class="broc"><i class="fa fa-book" aria-hidden="true"></i> Brochure</a>
          </div>
          </div>
          
          </div>-->
          <!--<div class="col-sm-4">
          <div class="on-main">
          <h2>Modhu City <span class="car-bf">Atria</span></h2>
          <img src="{{ asset('') }}assets/frontEnd/img/ongoing/projects-atria.jpg" />
          <div class="bgh">
          <a href="#" class="details-new"><i class="fa fa-eye" aria-hidden="true"></i> View Details</a> <a href="#" class="broc"><i class="fa fa-book" aria-hidden="true"></i> Brochure</a>
          </div>
          </div>
          
          </div>-->
          
               </div>
            </div>
        </div>
    </section>
 @endsection
 
 @section('extraJs')
<script  src="{{ asset('') }}assets/frontEnd/js/index.js"></script>
<script src="{{ asset('') }}assets/frontEnd/js/feedback.js"></script>
@endsection