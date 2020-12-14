@extends('admin.master')
@section('title', 'Manage Sliders')
@section('css')
    <!--Core CSS -->
    <link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
    <link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!--dynamic table-->
    <link href="{{ asset('') }}assets/admin/js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="{{ asset('') }}assets/admin/js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('') }}assets/admin/js/data-tables/DT_bootstrap.css" />

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
        <div class="col-sm-12">
            <section class="panel">
                <header class="panel-heading">

                          All Sliders

                    <span class="tools pull-right">
                            <a href="javascript:;" class="fa fa-chevron-down"></a>
                            <a href="javascript:;" class="fa fa-cog"></a>
                            <a href="javascript:;" class="fa fa-times"></a>
                         </span>
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Slider</th>
                                <th>Link</th>
                                <th>Slider Serial</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliderImageDetails as $imageDetails)
                                <tr class="gradeX">
                                <td>{{$imageDetails->id}}</td>
                                        <td><img src="{{ asset('') }}{{$imageDetails->slider_image}}" height="150px"></td>
                                        <td><a href="{{$imageDetails->slider_image_link}}" target="_blank">{{$imageDetails->slider_image_link}}</a></td>
                                        <td>{{$imageDetails->slider_image_serial}}</td>
                                        <td>{{$imageDetails->publication_status == 1 ? "Published" : "Unpublished"}}</td>
                                        <td>
                                            @if($imageDetails->publication_status == 0)
                                            <a href="{{ route('sliders-manage-publish', ['id' => $imageDetails->id]) }}"><span class="glyphicon glyphicon-arrow-up text-success"></span></a>
                                            @else
                                            <a href="{{ route('sliders-manage-unpublish', ['id' => $imageDetails->id]) }}"><span class="glyphicon glyphicon-arrow-down text-danger"></span></a>
                                            @endif
                                            <a href="{{ route('sliders-edit', ['id' => $imageDetails->id]) }}"><span class="glyphicon glyphicon-edit text-info"></span></a>
                                            <a href="{{ route('sliders-delete', ['id' => $imageDetails->id]) }}"><span class="glyphicon glyphicon-trash text-warning"></span></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Slider</th>
                                <th>Link</th>
                                <th>Slider Serial</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
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

    <!--dynamic table-->
    <script type="text/javascript" language="javascript" src="{{ asset('') }}assets/admin/js/advanced-datatable/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="{{ asset('') }}assets/admin/js/data-tables/DT_bootstrap.js"></script>
    <!--common script init for all pages-->
    <script src="{{ asset('') }}assets/admin/js/scripts.js"></script>

    <!--dynamic table initialization -->
    <script src="{{ asset('') }}assets/admin/js/dynamic_table_init.js"></script>

@endsection