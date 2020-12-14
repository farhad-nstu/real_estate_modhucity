@extends('admin.master')
@section('title', 'TrasH Contact Messages')
@section('css')
    <!--Core CSS -->
    <link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--icheck-->
    <link href="{{ asset('') }}assets/admin/js/iCheck/skins/minimal/minimal.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('') }}assets/admin/css/style3860.css?v=1" rel="stylesheet">
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
                    <li><a href="{{ route('contact-message') }}"> <i class="fa fa-inbox"></i> Inbox @if( App\Contact::where(['status' => 1])->get()
                     ->count() > 0)
                                <span class="label label-danger pull-right inbox-notification">{{
                                App\Contact::where(['status' => 1])->get()
                     ->count() }}</span>
                            @endif</a></li><li class="active"><a href="{{ route('contact-messages-trash') }}"> <i class="fa fa-trash-o"></i>
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
            <header class="panel-heading wht-bg">
                <h4 class="gen-case">Trash
                    ({{ App\Contact::where(['publication_status' => 0])->get()
                     ->count() }})
                    {{--<form action="#" class="pull-right mail-src-position">
                        <div class="input-append">
                            <input type="text" class="form-control " placeholder="Search Mail">
                        </div>
                    </form>--}}
                </h4>
            </header>
            <div class="panel-body minimal">
                <div class="table-inbox-wrap ">
                    <table class="table table-inbox table-hover">
                        <tbody>
                        @foreach($trashcontacts as $trashcontact)
                                <tr>
                                    <td class="inbox-small-cells">
                                        <span class="label label-warning
                                   pull-left">Trash</span>
                                    </td>
                                    <td class="view-message dont-show"><a href="{{ route('contact-message-view', ['id' =>
                            $trashcontact->id]) }}">{{ $trashcontact->name
                            }}</a></td>
                                    <td class="view-message"><a href="{{ route('contact-message-view', ['id' =>
                            $trashcontact->id]) }}">{{
                            $trashcontact->subject
                            }}</a>
                                        @if($trashcontact->pulication_status == 0)


                                            <a href="{{ route('contact-message-trash-restore', ['id' =>
                            $trashcontact->id]) }}"> <span class="label label-danger
                            pull-right">Restore</span></a>


                                        @endif
                                    </td>
                                    <td class="view-message inbox-small-cells"></td>
                                    <td class="view-message text-right">{{ $trashcontact->updated_at->format('
                                    g:i a,
                           l, M d-Y')
                            }}</td>
                                </tr>
                                @endforeach
                        </tbody>
                    </table>

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