@extends('frontEnd.master')
@section('title', 'News')

@section('extraCss')
<link rel="stylesheet" href="{{ asset('') }}assets/blog/css/plugins.css" />
<link rel="stylesheet" href="{{ asset('') }}assets/blog/css/style.css" />
<link rel="stylesheet" href="{{ asset('') }}assets/blog/css/font-awesome.css" />
<link rel="stylesheet" href="{{ asset('') }}assets/blog/css/menu.css" />
  <link rel="stylesheet" href="{{ asset('') }}assets/blog/css/feedback.css" />
<script type='text/javascript' src="{{ asset('') }}assets/blog/js/modernizr61da.js"></script>
@endsection

@section('content')
  
    <!--<header class="header valign bg-img creative background-position-top" data-scroll-index="0" data-overlay-light="6" ><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
       <video autoplay muted loop id="myVideo">
  <source src="{{ asset('') }}assets/blog/img/Modhu City.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
 
    
    </header>-->
    <!--<div class="stick1">-->
    <!--<a href="#"><img src="{{ asset('') }}assets/frontEnd/img/logo-light.png" ></a>-->
    <!--</div>-->
    <header class="inner-header-bg mobi-ban-inn">
    <div class="page-title page-main-section parallaxie">
  <div class="container padding-bottom-top-120 text-uppercase text-center">
    
<h2 class="artd"><span>News</span></h2>
     
  </div>
</div>
    </header>
     <section class="mobi-inn">
        <img src="{{ asset('') }}assets/frontEnd/img/inner-banner.jpg"  style="width:100%;"/>
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
   
  <section>
  <div class="container">
  <div class="row">
 </div>
  </div>
  </section>  
  <ul class="nav nav-tabs inner-tabs " role="tablist" style="margin-top:15px;">
                                        <li role="presentation" class="active" style="margin:auto;"> <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="active"><i class="fa profile1-fa" aria-hidden="true"></i> News & Events</a></li>
                                        <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa philosophy-fa" aria-hidden="true"></i> Our Philosophy</a></li> -->
                                   
                                    </ul>
 <section class="blog-grid-page-wrap padding-top-80 padding-bottom-50">
            <div class="container">
			 
                <div class="row gutters-60">
                    <div class="col-lg-8">
                        <div class="row">

                            @foreach($blogDetails as $blog)
                            <div class="col-sm-6 col-12">
                                <div class="blog-box-layout1">
                                    <div class="item-figure">
                                    <a href="{{ route('news-detail', ['slug' => $blog->blog_slug]) }}"><img src="{{ asset('') }}{{ $blog->feature_image }}" alt="{{ $blog->title }}"></a>
                                    </div>
                                    <div class="item-content">
                                        <ul class="entry-meta">
                                        <li><a href="#"><i class="fas fa-clock"></i>{{ $blog->created_at->format('M d, Y')
                                             }}</a></li>
                                            <li><a href="{{ route('/') }}"><i class="fas fa-user"></i>by <span>Modhu City</span></a></li>
                                        </ul>
                                        <h4 class="item-title"><a href="{{ route('news-detail', ['slug' => $blog->blog_slug]) }}">{{ $blog->title }}</a></h4>
                                        <p class="text-justify">{!! str_limit($blog->details_description, 150) !!}</p>
                                        <a href="{{ route('news-detail', ['slug' => $blog->blog_slug]) }}" class="item-btn">Continue Reading<i class="fa fa-next"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <ul class="pagination-layout1">
                                {{ $blogDetails->links() }}

                        </ul>
                    </div>
                    <div class="col-lg-4 sidebar-widget-area sidebar-break-md">
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">LATEST BLOG</h3>
                            </div>
                            <div class="widget-blog-post">
                                <ul class="block-list">
                                        @foreach($blogSidebar as $blog)
                                    <li class="single-item">
                                        <div class="item-img" style="width: 142px;">
                                        <a href="{{ route('news-detail', ['slug' => $blog->blog_slug]) }}"><img src="{{ asset('') }}{{ $blog->feature_image }}" alt="{{ $blog->title }}"></a>
                                        </div>
                                        <div class="item-content">
                                            <div class="item-post-date"><a href="#"><i class="fas fa-clock"></i>{{ $blog->created_at->format('M d, Y')
                                            }}</a></div>
                                            <h5 class="item-title" style="font-size: 12px;"><a href="{{ route('news-detail', ['slug' => $blog->blog_slug]) }}">{{ $blog->title }}</a></h5>
                                            <div class="item-post-by"><a href="{{ route('/') }}l"><i class="fas fa-user"></i><span>by</span>
                                                    Modhu City</a></div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    
                        <div class="widget">
                            <div class="widget-ad">
                                <a href="#"><img src="{{ asset('') }}assets/blog/image/atria.jpg" alt="Ad" class="img-fluid"></a>
                            </div>
                        </div>
                        <div class="widget">
                            <div class="section-heading heading-dark">
                                <h3 class="item-heading">CATEGORIES</h3>
                            </div>
                            <div class="widget-categories">
                                <ul>
                                        @foreach ($categoryList as $category)
                                        <li>
                                                <a href="{{ route('category-wise-blog', ['id' => $category->category_slug] ) }}">{{ $category->category_name }}
                                                    <span></span>
                                                </a>
                                            </li>
                                        @endforeach
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </section>
    @endsection