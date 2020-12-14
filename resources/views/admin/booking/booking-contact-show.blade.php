@extends('admin.master')
@section('title', 'Booking Contact List')
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
                    <header class="panel-heading tab-bg-dark-navy-blue">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="#all">
                                    All Booking Contact
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#awaiting">
                                    Awaiting For Contact
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#Completed">
                                     Contacted
                                </a>
                            </li>
                        </ul>
                    </header>
                    
                    <div class="panel-body">
                        <div class="tab-content tasi-tab">
                            <div id="all" class="tab-pane active">
                                <section class="panel">
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped table-responsive" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Project Name</th>
                                <th>Profession</th>
                                <th>Project Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @php
                                $i = 1;
                                @endphp
                                @foreach ($ContactDetails as $k=>$contact)
                                <tr class="gradeX">
                                        <td>{{$k++}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->project_name}}</td>
                                        <td>{{$contact->profession}}</td>
                                        <td>
                                            @if($contact->status != 0)
                                            <button class="btn btn-success glyphicon glyphicon-ok">View Message</button>
                                            @else
                                            <button class="btn btn-warning">Waiting For Contact!</a>
                                            @endif
                                        </td>
                                        <td>
                                        
                                        <span class="glyphicon glyphicon-edit text-success">Edit</span>
                                        <span class="glyphicon glyphicon-trash text-success">Delete</span>
                                        
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                           <tr>
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Project Name</th>
                                <th>Profession</th>
                                <th>Project Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </section>
                            </div>
                            
                            <div id="awaiting" class="tab-pane ">
                                 <section class="panel">
                <div class="panel-body">
                    <div class="adv-table">
                        <table  class="display table table-bordered table-striped" id="dynamic-table">
                            <thead>
                            <tr>
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Project Name</th>
                                <th>Profession</th>
                                <th>Project Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($ContactDetailsNew as $k=>$contact)
                                <tr class="gradeX">
                                        <td>{{$k++}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->project_name}}</td>
                                        <td>{{$contact->profession}}</td>
                                        <td>
                                            @if($contact->status == 0)
                                            <a href="{{ route('update-status', ['id' => $contact->id]) }}" class="btn btn-info glyphicon glyphicon-ok">Contact Completed!</button>
                                            @else
                                            <button class="btn btn-success">Contacted!</a>
                                            @endif
                                        </td>
                                        <td>
                                        
                                        <span class="glyphicon glyphicon-edit text-success">Edit</span>
                                        <span class="glyphicon glyphicon-trash text-success">Delete</span>
                                        
                                        </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                           <tr>
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Project Name</th>
                                <th>Profession</th>
                                <th>Project Status</th>
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
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Project Name</th>
                                <th>Profession</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($ContactDetailsContact as $k=>$contact)
                                <tr class="gradeX">
                                        <td>{{$k++}}</td>
                                        <td>{{$contact->name}}</td>
                                        <td>{{$contact->phone}}</td>
                                        <td>{{$contact->email}}</td>
                                        <td>{{$contact->project_name}}</td>
                                        <td>{{$contact->profession}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>SL No.</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Project Name</th>
                                <th>Profession</th>
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