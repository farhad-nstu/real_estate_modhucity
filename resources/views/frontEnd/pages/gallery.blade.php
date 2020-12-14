<!DOCTYPE HTML>
<html lang="en">


<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Modhucity Eterna - Coming home is a different feeling every day. The excitement never dies. Exclusive 3 & 4 BHK community at Financial District - Gachibowli.">
<title> Gallery | {{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }}</title>

<link href="{{ asset('') }}assets/project/css/style.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="{{ asset('') }}assets/project/css/second/css/bootstrap.html" type="text/css">

<link rel="stylesheet" href="{{ asset('') }}inc/stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
    
    <link rel="stylesheet" href="{{ asset('') }}inc/cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('') }}assets/project/css/second/css/style.css" type="text/css">
	<link href="{{ asset('') }}assets/project/css/lightgallery.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Italianno" rel="stylesheet">
	
 <style>
 @media screen and (max-width: 769px) {
	.aboutdes{display:none !important;}
}

	
	@media only screen and (max-width: 10000px) and (min-width: 770px)  {
		.aboutmb{display:none !important;}
	}
	</style>
 
 </head>




<body>
 
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
        
           <nav class="navbar-desctop visible-md visible-lg" style="background-color:#929089 !important;">
        <div class="container-fluid">
        <a href="#top" class="brand js-target-scroll">
        <img src="{{ asset('') }}assets/project/images/logo.png" class="img-responsive">
        </a>
        
        
        
        
        
        
        
        
        
        
        
        <!--<ul class="navbar-desctop-menu">-->
        <!--    <li>-->
        <!--<a href="{{ route('/') }}">Home </a>-->
        
        <!--</li>-->
        <!--<li>-->
        <!--<a href="{{ route('about') }}">About</a>-->
        <!--</li>-->
        <!--<li class="active">-->
        <!--<a href="{{ route('gallery') }}">Gallery </a>-->
        
        <!--</li>-->
        
        <!--<li>-->
        <!--<a href="{{ route('news') }}">News</a>-->
        <!--</li>-->
        <!--<li>-->
        <!--<a href="{{ route('contact') }}">Contact Us</a>-->
        <!--</li>-->
        <!-- </ul>-->
         
         
         
         
         
         <ul class="navbar-desctop-menu menu-gallery-a" style="list-style-type: none;" style="color:white !important; margin-top:px!important; height:40px!important;">
             
             
             
           <li class="nav-item">
      <a class="nav-link" href="{{ route('/') }}">HOME</a>
    </li>
    
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('project-list') }}">PROJECT</a>
    </li>
    
    
    
    
   <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        ABOUT US <i class="fa fa-angle-down" aria-hidden="true"></i>
      </a>
      <div class="dropdown-menu khan-menu-a" style="margin-left:-50%; width:250px; text-align:center;">
        <a class="dropdown-item" href="{{ route('about') }}">About Us</a>
        <a class="dropdown-item" href="{{ route('mdmsg') }}">Message of MD</a>
        <a class="dropdown-item" href="{{ route('chairmanmsg') }}">Message of Chairman</a>
      </div>
    </li>


<li class="nav-item dropdown khan-dropdown" style="">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        GALLERY <i class="fa fa-angle-down" aria-hidden="true"></i>
      </a>
      <div class="dropdown-menu khan-menu-a" style="margin-left:-50%; width:250px; text-align:center;">
        <a class="dropdown-item" href="{{ route('gallery') }}">Images Gallery</a>
        <a class="dropdown-item" href="{{ route('video-gallery') }}">Video Gallery</a>
        
      </div>
    </li>


 <li class="nav-item">
      <a class="nav-link" href="{{ route('news') }}">NEWS</a>
    </li>
    
    
     <li class="nav-item">
      <a class="nav-link" href="{{ route('career') }}">CAREER</a>
    </li>
    
    
     <li class="nav-item">
      <a class="nav-link" href="{{ route('faq') }}">FAQ</a>
    </li>
    
    
     <li class="nav-item">
      <a class="nav-link" href="{{ route('contact') }}">CONTACT</a>
    </li>







 </ul>
   
             
             
    
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
         
        </div>
        </nav>
        
        <nav class="navbar-mobile">
        <a href="#top" class="brand js-target-scroll">
        <img src="{{ asset('') }}assets/project/images/eterna-logo.png" class="img-responsive">
        </a>
        
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-mobile">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-mobile">
            
            
            
        
            
        <ul class="navbar-nav-mobile">
         <li>
        <a href="{{ route('/') }}">Home </a>
        
        </li>
        <li>
        <a href="{{ route('about') }}">About</a>
        </li>
        <li class="active">
        <a href="{{ route('gallery') }}">Gallery </a>
        
        </li>
        
        <li>
        <a href="{{ route('news') }}">News</a>
        </li>
        <li>
        <a href="{{ route('contact') }}">Contact Us</a>
        </li>
        </ul>
        
        
        
        
        
        <img src="{{ asset('') }}assets/project/images/r.png" class="img-responsive navrajalogo" style="height:75px;"> 
        
        </div>
        </nav>
        </header>
        </header>
        
        <div class="layout">
        
        
        <div class="content">
        
        
        
                    
                    
                    
                    
                    
                  
                    <!-- section begin -->
                    <div id="galler">
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
                                        @foreach ($galleries as $image)
                                        <li><a href="#" data-filter=".{{ $image->name }}" class="text-uppercase">{{ $image->name }} </a></li>
                                        @endforeach
                                    </ul>
        
                                </div>
                            </div>
                            <!-- portfolio filter close -->
        
                            <div class="spacer-single"></div>
        
                            <div id="gallery" class="row grid_gallery gallery de-gallery">
        
                                <!-- gallery item -->
                                
                                <ul id="lightgallery3" class="list-unstyled row">
                                

                                    @foreach ($galleries as $image)
                                <li class="col-xs-6 col-sm-3 col-md-3  item {{ $image->name }}" data-src="{{ asset('') }}{{ $image->image }}">
                            <a href="#">
                                <img class="img-responsive" src="{{ asset('') }}{{ $image->image }}">
                            </a>
                        </li>
                        
                        @endforeach
                        
                      
                    </ul>
                                
                                
                           
        
                            </div>
        
                        </div>
        
                    </section>
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
						<li class="foot_num"><i class="fa fa-envelope" style="padding-right:10px;color:#ddd;"></i> @if(App\Models\Admin\ContactInformation::all()->pluck('email')->first() != null) {{App\Models\Admin\ContactInformation::all()->pluck('email')->first()}} @endif</li>
						<li class="foot_num"><a href="tel:+917660005500"><i class="fa fa-phone" style="padding-right:10px;color:#ddd;"></i> @if(App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first() != null) {{App\Models\Admin\ContactInformation::all()->pluck('phone_1')->first()}} @endif </a></li>
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
                
               
            </div>
        
        </div>
        </div>

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
	
    <script src="{{ asset('') }}assets/project/css/second/js/designesia.js"></script>
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
</body>
</html>
