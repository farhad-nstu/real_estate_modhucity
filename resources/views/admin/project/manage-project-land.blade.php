@extends('admin.master')
@section('title', 'Land Project List')
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
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-blue"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="#Ongoing">
                                    Ready Projects
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Upcoming">
                                    Handover Projects
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Completed">
                                     Installment Projects
                                </a>
                            </li>
                        </ul>
                    </header>
                    
                    <div class="panel-body">
                        <div class="tab-content tasi-tab">
                            <div id="Ongoing" class="tab-pane active">
                                <section class="panel">
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr><th>ID</th>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Project Image</th>
                                <th>Project Location</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($ongoing as $k=>$project)
                                <tr class="gradeX">
                                        <td>{{++$k}}</td>
                                        <td>{{$project->project_name}}</td>
                                        <td>{{$project->project_description}}</td>
                                        <td><img src="{{ asset('') }}{{$project->project_image}}" height="100px" width="100px"></td>
                                        <td class="center hidden-phone">{{$project->project_location}}</td>
                                         <td>
                                          <a href="{{ route('edit-project', ['id' => $project->id]) }}"><span class="glyphicon glyphicon-pencil text-secondary">Edit</span></a>
                                          <a href="{{ route('delete-project', ['id' => $project->id]) }}" onclick="return confirm('Do you Really want to delete?')"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Project Name</th>
                                <th>Project Desctiption</th>
                                <th>Project Image</th>
                                <th>Project Location</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
                            </div>
                            
                            <div id="Upcoming" class="tab-pane ">
                                 <section class="panel">
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Project Image</th>
                                <th>Project Location</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($upcoming as $k=>$project)
                                <tr class="gradeX">
                                        <td>{{++$k}}</td>
                                        <td>{{$project->project_name}}</td>
                                        <td>{{$project->project_description}}</td>
                                        <td><img src="{{ asset('') }}{{$project->project_image}}" height="100px" width="100px"></td>
                                        <td class="center hidden-phone">{{$project->project_location}}</td>
                                         <td>
                                          <a href="{{ route('edit-project', ['id' => $project->id]) }}"><span class="glyphicon glyphicon-pencil text-secondary">Edit</span></a>
                                          <a href="{{ route('delete-project', ['id' => $project->id]) }}" onclick="return confirm('Do you Really want to delete?')"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Project Name</th>
                                <th>Project Desctiption</th>
                                <th>Project Image</th>
                                <th>Project Location</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
                           </div>
                           
                            <div id="Completed" class="tab-pane ">
                                <section class="panel">
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Project Image</th>
                                <th>Project Location</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($completed as $project)
                                <tr class="gradeX">
                                <td>{{$project->project_name}}</td>
                                        <td>{{$project->project_description}}</td>
                                        <td><img src="{{ asset('') }}{{$project->project_image}}" height="100px" width="100px"></td>
                                        <td class="center hidden-phone">{{$project->project_location}}</td>
                                         <td>
                                          <a href="{{ route('edit-project', ['id' => $project->id]) }}"><span class="glyphicon glyphicon-pencil text-secondary">Edit</span></a>
                                          <a href="{{ route('delete-project', ['id' => $project->id]) }}" onclick="return confirm('Do you Really want to delete?')"><span class="glyphicon glyphicon-trash text-danger">Delete</span></a>
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Desctiption</th>
                                <th>Project Image</th>
                                <th>Project Location</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
                           </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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