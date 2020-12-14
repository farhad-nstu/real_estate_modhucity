@extends('admin.master')
@section('title', 'Manage Faq')
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
                <header class="panel-heading text-center"> All Faqs
                </header>
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Qustion</th>
                                <th>Answer</th>
                                <th>Publication Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($faqManage as $faq)
                                <tr class="gradeX">
                                <td>{{$faq->id}}</td>
                                        <td>{{$faq->question}}</td>
                                        <td>{!!$faq->answer!!}</td>
                                        <td>{{$faq->publication_status == 1 ? "Publish" : "Unpublish"}}</td>
                                        <td>
                                            <a href="{{ route('faq-edit', ['id' => $faq->id]) }}"><span class="glyphicon glyphicon-pencil text-secondary">Edit</span></a>
                                            <a href="{{ route('faq-delete', ['id' => $faq->id]) }}" onclick="return confirm('Do you Really want to delete?')"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Qustion</th>
                                <th>Answer</th>
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