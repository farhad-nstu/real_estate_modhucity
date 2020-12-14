@extends('admin.master')
@section('title'){{ $contactMessage->subject }}@endsection
@section('css')
    <!--Core CSS -->
    <link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--icheck-->
    <link href="{{ asset('') }}assets/admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

    <!-- Custom styles for this template -->
    <link href="{{ asset('') }}assets/admin/css/style.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/css/style-responsive.css" rel="stylesheet" />

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]>
    <script src="{{ asset('') }}assets/admin/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
@endsection
@section('content')
 <!-- page start-->
 <div class="row">
    <div class="col-sm-3">
        <section class="panel">
            <div class="panel-body">
                <ul class="nav nav-pills nav-stacked mail-nav">
                    <li><a href="{{ route('contact-message') }}"> <i class="fa fa-inbox"></i>
                            Inbox  @if( App\Contact::where(['status' => 1])->get()
                     ->count() > 0)
                                <span class="label label-danger pull-right inbox-notification">{{
                                App\Contact::where(['status' => 1])->get()
                     ->count() }}</span>
                            @endif</a></li>
                    <li><a href="{{ route('contact-messages-trash') }}"> <i class="fa fa-trash-o"></i>
                            Trash @if( App\Contact::where(['publication_status' => 0])->get()
                     ->count() > 0)
                                <span class="label label-danger pull-right inbox-notification">{{
                                App\Contact::where(['publication_status' => 0])->get()
                     ->count() }}</span>
                            @endif</a></li>
                </ul>
            </div>
        </section>
    </div>
    <div class="col-sm-9">
        <section class="panel">
            <div class="panel-body ">
                <div class="mail-header row">
                    <div class="col-md-8">
                        <h4 class="pull-left"> {{ $contactMessage->subject }} </h4>
                    </div>
                    <div class="col-md-4">
                        <div class="compose-btn">


                            @if(App\Contact::where(['publication_status' => 1])->get()
                     ->count())
                                <a href="{{ route('contact-message-unread', ['id' =>
                            $contactMessage->id]) }}" class="btn btn-sm btn-primary" ><i class="fa fa-envelope"></i>
                                    Mark as unread</a>
                                <button class="btn  btn-sm tooltips" data-original-title="Print" type="button"
                                        data-toggle="tooltip" data-placement="top" title=""><i class="fa
                                    fa-print"></i> Print </button>
                            <a href="{{ route('contact-message-trash', ['id' =>
                            $contactMessage->id]) }}" class="btn btn-sm tooltips"
                               data-original-title="Trash" data-toggle="tooltip"
                                    data-placement="top" title=""><i class="fa fa-trash-o"></i>Delete</a>
                                <a href="tel:{{$contactMessage->phone}}" class="btn btn-sm btn-primary" ><i class="fa
                             fa-phone"></i></a>
                            @else
                                <a href="" class="btn  btn-sm tooltips" data-original-title="Print" type="button"
                                        data-toggle="tooltip" data-placement="top" title=""><i class="fa
                                    fa-print"></i> Print </a>
                                <a href="{{ route('contact-message-trash-restore', ['id' =>
                            $contactMessage->id]) }}" class="btn btn-sm tooltips"
                                   data-original-title="Trash" data-toggle="tooltip"
                                   data-placement="top" title=""><i class="fa fa-trash-o"></i>Restore</a>
                            @endif
                        </div>
                    </div>

                </div>
                <div class="mail-sender">
                    <div class="row">
                        <div class="col-md-8">
                            <img src="{{ asset('') }}admin/images/chat-avatar2.jpg" alt="">
                            <strong>{{ $contactMessage->name }}</strong>
                            <span>[ <a href="mailto:{{ $contactMessage->email }}">{{ $contactMessage->email }}</a> ]</span>
                        </div>
                        <div class="col-md-4">
                            <p class="date"> {{ $contactMessage->created_at->format('g:i a,
                           l, M d-Y') }}</p>
                        </div>
                    </div>
                </div>
                <div class="view-mail">
                    {!! $contactMessage->messages !!}
                </div>
                {{--<div class="attachment-mail">
                    <p>
                        <span><i class="fa fa-paperclip"></i> 2 attachments — </span>
                        <a href="#">Download all attachments</a>
                        |
                        <a href="#">View all images</a>
                    </p>
                    <ul>
                        <li>
                            <a class="atch-thumb" href="#">
                                <img src="images/product_img.png">
                            </a>

                            <a class="name" href="#">
                                IMG_001.jpg
                                <span>20KB</span>
                            </a>

                            <div class="links">
                                <a href="#">View</a> -
                                <a href="#">Download</a>
                            </div>
                        </li>

                        <li>
                            <a class="atch-thumb" href="#">
                                <img src="images/weather_image.jpg">
                            </a>

                            <a class="name" href="#">
                                IMG_001.jpg
                                <span>20KB</span>
                            </a>

                            <div class="links">
                                <a href="#">View</a> -
                                <a href="#">Download</a>
                            </div>
                        </li>

                    </ul>
                </div>--}}
                <div class="compose-btn pull-left">
                   {{-- <a href="tel:{{$contactMessage->phone}}" class="btn btn-lg btn-primary" ><i class="fa
                    fa-phone"></i>
                        Call sender Number </a>--}}
                </div>
            </div>
        </section>
    </div>
</div>

<!-- page end-->
@endsection

@section('js')
    <!--Core js-->
    <script src="{{ asset('') }}assets/admin/js/jquery.js"></script>
    <script src="{{ asset('') }}assets/admin/bs3/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="{{ asset('') }}assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="{{ asset('') }}assets/admin/js/jquery.scrollTo.min.js"></script>
    <script src="{{ asset('') }}assets/admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
    <script src="{{ asset('') }}assets/admin/js/jquery.nicescroll.js"></script>
    <!--Easy Pie Chart-->
    <script src="{{ asset('') }}assets/admin/js/easypiechart/jquery.easypiechart.js"></script>
    <!--Sparkline Chart-->
    <script src="{{ asset('') }}assets/admin/js/sparkline/jquery.sparkline.js"></script>
    <!--jQuery Flot Chart-->
    <script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

    <script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.js"></script>
    <script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.tooltip.min.js"></script>
    <script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.resize.js"></script>
    <script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.pie.resize.js"></script>


    <script src="{{ asset('') }}assets/admin/js/iCheck/jquery.icheck.js"></script>

    <!--common script init for all pages-->
    <script src="{{ asset('') }}assets/admin/js/scripts.js"></script>

    <!--icheck init -->
    <script src="{{ asset('') }}assets/admin/js/icheck-init.js"></script>
@endsection