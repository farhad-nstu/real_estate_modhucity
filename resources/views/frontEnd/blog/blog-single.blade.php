@extends('frontEnd.master')
@section('title')
{{ $blogdata['title'] }}
@endsection

@section('extraCss')
    <link rel="canonical" href="{{ URL::current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $blogdata['title'] }}" />
    <meta property="og:description"
        content="{{ $blogdata['short_description'] }}" />
    <meta property="og:url" content="{{ URL::current() }}" />
    <meta property="og:image" content="{{ asset('') }}{{ $blogdata['feature_image'] }}" />
    <meta property="og:image:secure_url" content="{{ asset('') }}{{ $blogdata['feature_image'] }}" />
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
  <source src="img/Modhu City.mp4" type="video/mp4">
  Your browser does not support HTML5 video.
</video>
 
    
    </header>-->
    <!--<div class="stick1">
    <!--<a href="#"><img src="img/awwwards.png" ></a>-->
    <!--</div>-->-->
    <header class="inner-header-bg mobi-ban-inn">
            <div class="page-title page-main-section parallaxie">
          <div class="container padding-bottom-top-120 text-uppercase text-center">
            
        <!--<h2 class="artd"><span>About Us</span></h2>-->
             
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
   
          </section>  
          <ul class="nav nav-tabs inner-tabs " role="tablist" style="margin-top:15px;">
                                                <li role="presentation" class="active" style="margin:auto;"> <a href="#home" aria-controls="home" role="tab" data-toggle="tab" class="active"><i class="fa profile1-fa" aria-hidden="true"></i> News & Events</a></li>
                                                <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"> <i class="fa philosophy-fa" aria-hidden="true"></i> Our Philosophy</a></li> -->
                                           
                                            </ul>
                                            
         <section class="blog-grid-page-wrap padding-top-80 padding-bottom-50">
                    <div class="container">
                            
                        <div class="row gutters-60">
                            <div class="col-lg-8">
                                <!-- <div class="row"> -->
                                  <div class="single-blog-box">
                                    <div class="main-figure">
                                        <a href="single-blog.html"><img src="{{ asset('') }}{{ $blogdata['feature_image'] }}" alt="{{ $blogdata['title'] }}"></a>
                                    </div>
                                    <div class="blog-content">
                                        <ul class="entry-meta">
                                            <li><a href="#"><i class="fas fa-clock"></i>{{ $blogdata['created_at']->format('M d, Y')
                                            }}</a></li>
                                            <li><a href="{{ route('/') }}"><i class="fas fa-user"></i>by <span>Modhu City</span></a></li>
                                            {{-- <li><a href="#"><i class="fas fa-comments"></i>Comments <span>(03)</span></a></li> --}}
                                            {{-- <li><a href="#"><i class="fas fa-heart"></i><span>59</span></a></li> --}}
                                        </ul>
                                        <h3 class="item-title">{{ $blogdata['title'] }}</h3>
                                        <p class="item-details">{!! $blogdata['details_description'] !!}</p>
                                    </div>
                                    <div class="tag-share">
                                        <ul>
                                            {{-- <li>
                                                <ul class="inner-tag">
                                                    <li>
                                                        <a href="#">Burger</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Dinner</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Pizza</a>
                                                    </li>
                                                    <li>
                                                        <a href="#">Salad</a>
                                                    </li>
                                                </ul>
                                            </li> --}}
                                            <li>
                                                <ul class="inner-share">
                                                    <li>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ URL::current() }}" target="_blank">
                                                            <i class="fab fa-facebook-f"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="http://twitter.com/share?url={{ URL::current() }}" target="_blank">
                                                            <i class="fab fa-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ URL::current() }}" target="_blank">
                                                            <i class="fab fa-linkedin-in"></i>
                                                        </a>
                                                    </li>
                                                    <!--<li>-->
                                                    <!--    <a href="#">-->
                                                    <!--        <i class="fab fa-google-plus-g"></i>-->
                                                    <!--    </a>-->
                                                    <!--</li>-->
                                                    <!--<li>-->
                                                    <!--    <a href="#">-->
                                                    <!--        <i class="fab fa-pinterest"></i>-->
                                                    <!--    </a>-->
                                                    <!--</li>-->
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <!--<div class="next-prev-post">-->
                                    <!--    <div class="prev-post">-->
                                    <!--        <a href="#" class="item-figure"><img src="image/atria.jpg" alt="Post"></a>-->
                                    <!--        <div class="item-content">-->
                                    <!--            <p>PREVIOUS POST</p>-->
                                    <!--            <h3 class="post-title"><a href="#">Old school pancake next area so goody</a></h3>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--    <div class="next-post">-->
                                    <!--        <div class="item-content">-->
                                    <!--            <p>NEXT POST</p>-->
                                    <!--            <h3 class="post-title"><a href="#">Old school pancake next area so goody</a></h3>-->
                                    <!--        </div>-->
                                    <!--        <a href="#" class="item-figure"><img src="image/atria.jpg" alt="Post"></a>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <div class="recipe-reviews">
                                        <div class="section-heading3 heading-dark">
                                            <h2 class="item-heading">Recent Comments</h2>
                                        </div>
                                        <ul>
                                            @foreach($commentDetails as $comment)
                                            <li class="reviews-single-item">
                                                <div class="media media-none--xs">
                                                    <img src="{{ asset('') }}{{ $comment->picture }}" alt="{{ $comment->name }}" class="media-img-auto" style="max-width: 13%">
                                                    <div class="media-body">
                                                        <h4 class="comment-title">{{ $comment->name }}</h4>
                                                        <span class="post-date">{{ $comment->updated_at->format('M d, Y') }}</span>
                                                        <p>{{ $comment->comment }}</p>
                                                        <!--<ul class="item-rating">-->
                                                        <!--    <li class="single-item star-fill"><i class="fas fa-star"></i></li>-->
                                                        <!--    <li class="single-item star-fill"><i class="fas fa-star"></i></li>-->
                                                        <!--    <li class="single-item star-fill"><i class="fas fa-star"></i></li>-->
                                                        <!--    <li class="single-item star-fill"><i class="fas fa-star"></i></li>-->
                                                        <!--    <li class="single-item star-empty"><i class="fas fa-star"></i></li>-->
                                                        <!--    <li class="single-item"><span>9<span> / 10</span></span> </li>-->
                                                        <!--</ul>-->
                                                        <!--<a href="#" class="item-btn">REPLY<i class="fas fa-long-arrow-alt-right"></i></a>-->
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="leave-review">
                                        <div class="section-heading3 heading-dark">
                                            <h2 class="item-heading">LEAVE A Comment</h2>
                                        </div>
                                        <form class="leave-form-box" action="{{ route('comment-save') }}" method="post">
                                            {{ csrf_field() }}
                                            <input type="hidden" name="blog_id" value="{{ $blogdata['id'] }}">
                                            <div class="row">
                                                <div class="col-12 form-group">
                                                    <label>Comment :</label>
                                                    <textarea placeholder="" class="textarea form-control" name="comment" rows="7" cols="20" data-error="Message field is required" required=""></textarea>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <div class="col-md-4 form-group">
                                                    <label>Name :</label>
                                                    <input type="text" placeholder="" class="form-control" name="name" data-error="Name field is required" required="">
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                                <!--<div class="col-md-4 form-group">-->
                                                <!--    <label>E-mail :</label>-->
                                                <!--    <input type="email" placeholder="" class="form-control" name="email" data-error="E-mail field is required" required="">-->
                                                <!--    <div class="help-block with-errors"></div>-->
                                                <!--</div>-->
                                                <!--<div class="col-md-4 form-group">-->
                                                <!--    <label>Website :</label>-->
                                                <!--    <input type="email" placeholder="" class="form-control" name="email" data-error="E-mail field is required" required="">-->
                                                <!--    <div class="help-block with-errors"></div>-->
                                                <!--</div>-->
                                                <div class="col-12 form-group mb-0">
                                                    <button type="submit" class="item-btn">POST REVIEW</button>
                                                </div>
                                            </div>
                                            <div class="form-response"></div>
                                        </form>
                                    </div>
                                <!-- </div> -->
                                    </div>
                                 
                                      
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
                                                <div class="item-img"  style="width: 142px;">
                                                    <a href="{{ route('news-detail', ['slug' => $blog->blog_slug]) }}"><img src="{{ asset('') }}{{ $blog->feature_image }}" alt="{{ $blog->title }}"></a>
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-post-date"><a href="#"><i class="fas fa-clock"></i>{{ $blog->created_at->format('M d, Y')
                                                    }}</a></div>
                                                    <h4 class="item-title" style="font-size: 12px;">{{ $blog->title }}</h4>
                                                <div class="item-post-by"><a href="{{ route('/') }}"><i class="fas fa-user"></i><span>by</span> Modhu City</a></div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            
                                <div class="widget">
                                    <div class="widget-ad">
                                        <a href="#"><img src="image/atria.jpg" alt="Ad" class="img-fluid"></a>
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