<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ThemeBucket">

    <meta http-equiv=”X-UA-Compatible” content=”IE=EmulateIE9”>
    <meta http-equiv=”X-UA-Compatible” content=”IE=9”>

    <link rel="shortcut icon" href="{{ asset('') }}assets/frontEnd/img/favicon.png">
    <title> @if( App\Contact::where(['status' => 1])->get()
        ->count() > 0)
        ({{ App\Contact::where(['status' => 1])->get()
    ->count() }})
        @endif @yield('title') | {{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }} </title>
    @yield('css')
</head>

<body>
    <section id="container">
        <!--header start-->
        <header class="header fixed-top clearfix">
            <!--logo start-->
            <div class="brand">

                <a href="{{ route('dashboard') }}" class="logo">
                    <img src="{{ asset('') }}assets/frontEnd/img/logo-light.png" alt="Modhu City" height="50"
                        width="180">
                </a>
            </div>
            <!--logo end-->

            <div class="nav notify-row" id="top_menu">
                <!--  notification start -->
                <ul class="nav top-menu">
                    <!-- inbox dropdown start-->
                    <li id="header_inbox_bar" class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <i class="fa fa-envelope-o"></i>
                            @if (App\Contact::where(['status' => 1])->get()->count() > 0)
                            <span class="badge bg-important">
                                {{ App\Contact::where(['status' => 1])->get()->count() }}
                            </span>
                            @endif
                        </a>
                        <ul class="dropdown-menu extended inbox">
                            <li>
                                <p class="red">You have {{ App\Contact::where(['status' => 1])->get()->count() }} Mails
                                </p>
                            </li>
                            @foreach (App\Contact::where(['status' => 1])->get()->take(4) as $message)

                            <li>
                                <a href="{{ route('contact-message-view', ['id' => $message->id]) }}">
                                    <span class="subject">
                                        <span class="from">{{ $message->name }}</span>
                                    </span>
                                    <span class="message">
                                        {{ $message->subject }}
                                    </span>
                                </a>
                            </li>

                            @endforeach



                            <li>
                                <a href="#">See all messages</a>
                            </li>
                        </ul>
                    </li>
                    <!-- inbox dropdown end -->
                </ul>
                <!--  notification end -->
            </div>
            <div class="top-nav clearfix">
                <!--search & user info start-->
                <ul class="nav pull-right top-menu">
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" src="{{ asset('') }}{{ auth()->user()->profile_picture }}">
                            <span class="username">{{ Auth::user()->name }}</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <!--<li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>-->
                            <!--<li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>-->
                            <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                                    <i class="fa fa-key"></i> Log Out
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!--search & user info end-->
            </div>
        </header>
        <!--header end-->
        <!--sidebar start-->
        <aside>
            <div id="sidebar" class="nav-collapse">
                <!-- sidebar menu start-->
                <div class="leftside-navigation">
                    <ul class="sidebar-menu" id="nav-accordion">
                        <li>
                            <a href="{{ route('dashboard') }}">
                                <i class="fa fa-dashboard"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                         <li>
                            <a href="{{ route('booking-contact-message') }}">
                                <i class="fa fa-envelope-o"></i>
                                <span>Booking</span>
                            </a>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-envelope"></i>
                                <span>Contact @if( App\Contact::where(['status' => 1])->get()
                                    ->count() != 0)
                                    <span class="label label-danger pull-left inbox-notification">{{ App\Contact::where
                               (['status' => 1])->get()
                            ->count() }}</span>
                                    @endif</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('contact-list') }}"><i
                                    class="fa fa-tasks"></i>Contact List</a></li>
                                <li class="sub-menu">
                                    <a href="javascript:;">
                                        <i class="fa fa-envelope-o"></i>
                                        <span>Messages List</span>
                                    </a>
                                    <ul class="sub">
                                        <li> <a href="{{ route('contact-message') }}"> <i
                                                    class="fa fa-envelope"></i>Inbox @if( App\Contact::where(['status'
                                                => 1])->get()
                                                ->count() != 0)
                                                <span class="label label-danger pull-left inbox-notification">{{ App\Contact::where
                                   (['status' => 1])->get()
                                ->count() }}</span>
                                                @endif</span></a></li>
                                        <li><a href="{{ route('contact-messages-trash') }}"><i
                                                    class="fa fa-trash-o"></i>Trash @if(
                                                App\Contact::where(['publication_status' => 0])->get()
                                                ->count() > 0)
                                                <span class="label label-danger pull-right inbox-notification">{{
                                               App\Contact::where(['publication_status' => 0])->get()
                                    ->count() }}</span>
                                                @endif</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-gear"></i>
                                <span>Settings</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('general-setting') }}"><i class="fa fa-book"></i>General
                                        Settings</a></li>
                                        <li><a href="{{ route('contact-info') }}"><i class="fa fa-edit"></i>Manage Contact Information</a></li>
                                        <li><a href="{{ route('about-company') }}"><i class="fa fa-edit"></i>About Company</a></li>
                                        <li><a href="{{ route('edit-company-info') }}"><i class="fa fa-edit"></i>Company Information</a></li>
                                        <li><a href="{{ route('general-setting-whychoose') }}"><i class="fa fa-edit"></i>Why Choose us</a></li>
                                        <li><a href="{{ route('company-messages') }}"><i class="fa fa-edit"></i>Add Director Message</a></li>
                                <li class="sub-menu">
                                    <a href="javascript:;">
                                        <i class="fa fa-toggle-right"></i>
                                        <span>Sliders</span>
                                    </a>
                                    <ul class="sub">
                                        <li><a href="{{ route('sliders-add') }}"><i class="fa fa-plus"></i>Add
                                                Sliders</a></li>
                                        <li><a href="{{ route('sliders-manage') }}"><i class="fa fa-edit"></i>Manage Sliders</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-suitcase"></i>
                                <span>Projects</span>
                            </a>
                            <ul class="sub">
                                <li><a href="javascript:;"><i class="fa fa-tasks"></i>Project List</a>
                                <ul class="sub">
                                <li><a href="{{ route('manage-project-land') }}"><i class="fa fa-tasks"></i>Land</a></li>
                                        <li><a href="{{ route('manage-project-commercial') }}"><i class="fa fa-tasks"></i>Commercial</a></li>
                                        <li><a href="{{ route('manage-project-apartment') }}"><i class="fa fa-tasks"></i>Apartment</a></li>
                                
                            </ul>
                                </li>
                                <li><a href="{{ route('add-project') }}"><i class="fa fa-plus"></i>Add Project</a></li>
                                <li><a href="{{ route('add-project-why-chooses') }}"><i class="fa fa-plus"></i>Add Why Choose</a></li>
                                <li><a href="{{ route('add-project-facility') }}"><i class="fa fa-plus"></i>Add Project Facilities</a></li>
                                <li><a href="{{ route('add-brochure') }}"><i class="fa fa-plus"></i>Add ProjectBrochure</a></li>
                                <li><a href="{{ route('add-project-location') }}"><i class="fa  fa-map-marker"></i>Add Project to Map</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-comments"></i>
                                <span>Career</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('career-add') }}"><i class="fa fa-plus"></i>Add Career</a></li>
                                <li><a href="{{ route('career-manage') }}"><i class="fa fa-edit"></i>Manage Career</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-comments"></i>
                                <span>Testimonial</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('add-testimonial') }}"><i class="fa fa-plus"></i>Add Testimonial</a></li>
                                <li><a href="{{ route('manage-testimonial') }}"><i class="fa fa-edit"></i>Manage Testimonial</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-award"></i>
                                <span>Awards</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('award-add') }}"><i class="fa fa-plus"></i>Add Award</a></li>
                                <li><a href="{{ route('award-manage') }}"><i class="fa fa-edit"></i>Manage Awards</a></li>
                            </ul>
                        </li>
                        
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-dashboard"></i>
                                <span>Concern</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('concern-add') }}"><i class="fa fa-plus"></i>Add Concern</a></li>
                                <li><a href="{{ route('concern-manage') }}"><i class="fa fa-edit"></i>Manage Concerns</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-bold"></i>
                                <span>Blogs</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('blog-add') }}"><i class="fa fa-plus"></i>Add Blog</a></li>
                                <li><a href="{{ route('blog-manage') }}"><i class="fa fa-edit"></i>Manage Blogs</a></li>
                                <li><a href="{{ route('category-add') }}"><i class="fa fa-plus"></i>Add Category</a></li>
                                <li><a href="{{ route('modarate-comment') }}"><i class="fa fa-edit"></i>Modarate Comment</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-question-circle"></i>
                                <span>Faqs</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('add-faq') }}"><i class="fa fa-plus"></i>Add Faqs</a></li>
                                <li><a href="{{ route('faq-manage') }}"><i class="fa fa-edit"></i>Manage Faqs</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-question"></i>
                                <span>Offer</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('offer-add') }}"><i class="fa fa-plus"></i>Add Offer</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="javascript:;">
                                <i class="fa fa-question-circle"></i>
                                <span>Gallery</span>
                            </a>
                            <ul class="sub">
                                <li><a href="{{ route('video-add') }}"><i class="fa fa-plus"></i>Add Video</a></li>
                                <li><a href="{{ route('image-category-add') }}"><i class="fa fa-plus"></i>Add Gallery Category</a></li>
                                <li><a href="{{ route('image-add') }}"><i class="fa fa-plus"></i>Add Image</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->


        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">
                @yield('content')
                <footer class="main">
                    <div class="pull-right">
                        <a href="{{ route('/') }}" target="_blank"><strong>{{ App\Models\Admin\Settings\Basic::all()->pluck('site_name')->first() }}</strong></a> </div>
                    &copy; 2019 <strong>All Copyright Reserved</strong><a
                        href="{{ App\Models\Admin\Settings\Basic::all()->pluck('footer_text_link')->first() }}"
                        target="_blank">
                        {{ App\Models\Admin\Settings\Basic::all()->pluck('footer_text')->first() }}</a>
                </footer>

            </section>
        </section>
    </section>

@yield('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
<script>
@if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>
</body>

</html>