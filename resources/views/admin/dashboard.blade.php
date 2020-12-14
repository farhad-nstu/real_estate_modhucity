@extends('admin.master')
@section('title', 'Admin Dashboard')
@section('css')
<!--Core CSS -->
<link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/js/jvector-map/jquery-jvectormap-1.2.2.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/css/clndr.css" rel="stylesheet">
<!--clock css-->
<link href="{{ asset('') }}assets/admin/js/css3clock/css/style.css" rel="stylesheet">
<!--Morris Chart CSS -->
<link rel="stylesheet" href="{{ asset('') }}assets/admin/js/morris-chart/morris.css">
<!-- Custom styles for this template -->
<link href="{{ asset('') }}assets/admin/css/style.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/css/style-responsive.css" rel="stylesheet"/>
<!-- Just for debugging purposes. Don't actually copy this line! -->
<!--[if lt IE 9]>
<script src="js/ie8-responsive-file-warning.js"></script><![endif]-->
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
@endsection
@section('content')

    <!--mini statistics start-->
    <div class="row">
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon orange"><i class="fa fa-gavel"></i></span>
                <div class="mini-stat-info">
                    <span>320</span>
                    New Order Received
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon tar"><i class="fa fa-tag"></i></span>
                <div class="mini-stat-info">
                    <span>22,450</span>
                    Copy Sold Today
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon pink"><i class="fa fa-money"></i></span>
                <div class="mini-stat-info">
                    <span>34,320</span>
                    Dollar Profit Today
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="mini-stat clearfix">
                <span class="mini-stat-icon green"><i class="fa fa-eye"></i></span>
                <div class="mini-stat-info">
                    <span>32720</span>
                    Unique Visitors
                </div>
            </div>
        </div>
    </div>
    <!--mini statistics end-->
    
    
    <div class="row">
        <div class="col-md-8">
            <div class="event-calendar clearfix">
                <div class="col-lg-12 calendar-block">
                    <div class="cal1">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="profile-nav alt">
                <section class="panel">
                    <div class="user-heading alt clock-row terques-bg">
                        <h1><?php echo(date('M d')) ?></h1>
                        <p class="text-left"><?php echo(date('Y D')) ?></p>
                        <p class="text-left"><?php echo(date('h:i a')) ?> (BST)</p>
                    </div>
                    <ul id="clock">
                        <li id="sec"></li>
                        <li id="hour"></li>
                        <li id="min"></li>
                    </ul>
                </section>
            </div>
        </div>
    </div>
       
    <!--mini statistics start-->
    <div class="row">
        <div class="col-md-3">
            <section class="panel">
                <div class="panel-body">
                    <div class="top-stats-panel">
                        <div class="gauge-canvas">
                            <h4 class="widget-h">Monthly Expense</h4>
                            <canvas width=160 height=100 id="gauge"></canvas>
                        </div>
                        <ul class="gauge-meta clearfix">
                            <li id="gauge-textfield" class="pull-left gauge-value"></li>
                            <li class="pull-right gauge-title">Safe</li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="panel">
                <div class="panel-body">
                    <div class="top-stats-panel">
                        <div class="daily-visit">
                            <h4 class="widget-h">Daily Visitors</h4>
                            <div id="daily-visit-chart" style="width:100%; height: 100px; display: block">
    
                            </div>
                            <ul class="chart-meta clearfix">
                                <li class="pull-left visit-chart-value">3233</li>
                                <li class="pull-right visit-chart-title"><i class="fa fa-arrow-up"></i> 15%</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="panel">
                <div class="panel-body">
                    <div class="top-stats-panel">
                        <h4 class="widget-h">Top Advertise</h4>
                        <div class="sm-pie">
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-md-3">
            <section class="panel">
                <div class="panel-body">
                    <div class="top-stats-panel">
                        <h4 class="widget-h">Daily Sales</h4>
                        <div class="bar-stats">
                            <ul class="progress-stat-bar clearfix">
                                <li data-percent="50%"><span class="progress-stat-percent pink"></span></li>
                                <li data-percent="90%"><span class="progress-stat-percent"></span></li>
                                <li data-percent="70%"><span class="progress-stat-percent yellow-b"></span></li>
                            </ul>
                            <ul class="bar-legend">
                                <li><span class="bar-legend-pointer pink"></span> New York</li>
                                <li><span class="bar-legend-pointer green"></span> Los Angels</li>
                                <li><span class="bar-legend-pointer yellow-b"></span> Dallas</li>
                            </ul>
                            <div class="daily-sales-info">
                                <span class="sales-count">1200 </span> <span class="sales-label">Products Sold</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!--mini statistics end-->
    <div class="row">
        <div class="col-md-8">
            <!--earning graph start-->
            <section class="panel">
                <header class="panel-heading">
                    Earning Graph <span class="tools pull-right">
                <a href="javascript:;" class="fa fa-chevron-down"></a>
                <a href="javascript:;" class="fa fa-cog"></a>
                <a href="javascript:;" class="fa fa-times"></a>
                </span>
                </header>
                <div class="panel-body">
    
                    <div id="graph-area" class="main-chart">
                    </div>
                    <div class="region-stats">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="region-earning-stats">
                                    This year total earning <span>$68,4545,454</span>
                                </div>
                                <ul class="clearfix location-earning-stats">
                                    <li class="stat-divider">
                                        <span class="first-city">$734503</span>
                                        Rocky Mt,NC </li>
                                    <li class="stat-divider">
                                        <span class="second-city">$734503</span>
                                        Dallas/FW,TX </li>
                                    <li>
                                        <span class="third-city">$734503</span>
                                        Millville,NJ </li>
                                </ul>
                            </div>
                            <div class="col-md-5">
                                <div id="world-map" class="vector-stat">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--earning graph end-->
        </div>
        <div class="col-md-4">
            <!--widget graph start-->
            <section class="panel">
                <div class="panel-body">
                    <div class="monthly-stats pink">
                        <div class="clearfix">
                            <h4 class="pull-left"> January 2013</h4>
                            <!-- Nav tabs -->
                            <div class="btn-group pull-right stat-tab">
                                <a href="#line-chart" class="btn stat-btn active" data-toggle="tab"><i class="ico-stats"></i></a>
                                <a href="#bar-chart" class="btn stat-btn" data-toggle="tab"><i class="ico-bars"></i></a>
                            </div>
                        </div>
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="line-chart">
                                <div class="sparkline" data-type="line" data-resize="true" data-height="75" data-width="90%" data-line-width="1" data-min-spot-color="false" data-max-spot-color="false" data-line-color="#ffffff" data-spot-color="#ffffff" data-fill-color="" data-highlight-line-color="#ffffff" data-highlight-spot-color="#e1b8ff" data-spot-radius="3" data-data="[100,200,459,234,600,800,345,987,675,457,765]">
                                </div>
                            </div>
                            <div class="tab-pane" id="bar-chart">
                                <div class="sparkline" data-type="bar" data-resize="true" data-height="75" data-width="90%" data-bar-color="#d4a7f5" data-bar-width="10" data-data="[300,200,500,700,654,987,457,300,876,454,788,300,200,500,700,654,987,457,300,876,454,788]"></div>
                            </div>
                        </div>
                    </div>
                    <div class="circle-sat">
                        <ul>
                            <li class="left-stat-label"><span class="sell-percent">60%</span><span>Direct Sell</span></li>
                            <li><span class="epie-chart" data-percent="45">
                            <span class="percent"></span>
                            </span></li>
                            <li class="right-stat-label"><span class="sell-percent">40%</span><span>Channel Sell</span></li>
                        </ul>
                    </div>
                </div>
            </section>
            <!--widget graph end-->
        </div>
    </div>
    <!--main content end-->
@endsection
@section("js")
    
<!-- Placed js at the end of the document so the pages load faster -->
<!--Core js-->
<script src="{{ asset('') }}assets/admin/js/jquery.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery-ui/jquery-ui-1.10.1.custom.min.js"></script>
<script src="{{ asset('') }}assets/admin/bs3/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.scrollTo.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="{{ asset('') }}assets/admin/js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="{{ asset('') }}assets/admin/js/skycons/skycons.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.scrollTo/jquery.scrollTo.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.easing.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/calendar/clndr.js"></script>
<script src="{{ asset('') }}assets/admin/js/underscore-min.js"></script>
<script src="{{ asset('') }}assets/admin/js/calendar/moment-2.2.1.js"></script>
<script src="{{ asset('') }}assets/admin/js/evnt.calendar.init.js"></script>
<script src="{{ asset('') }}assets/admin/js/jvector-map/jquery-jvectormap-1.2.2.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/jvector-map/jquery-jvectormap-us-lcc-en.js"></script>
<script src="{{ asset('') }}assets/admin/js/gauge/gauge.js"></script>
<!--clock init-->
<script src="{{ asset('') }}assets/admin/js/css3clock/js/css3clock.js"></script>
<!--Easy Pie Chart-->
<script src="{{ asset('') }}assets/admin/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="{{ asset('') }}assets/admin/js/sparkline/jquery.sparkline.js"></script>
<!--Morris Chart-->
<script src="{{ asset('') }}assets/admin/js/morris-chart/morris.js"></script>
<script src="{{ asset('') }}assets/admin/js/morris-chart/raphael-min.js"></script>
<!--jQuery Flot Chart-->
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.resize.js"></script>
<!--<script src="js/flot-chart/jquery.flot.pie.resize.js"></script>-->
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.pie.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.animator.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.growraf.js"></script>

<script src="{{ asset('') }}assets/admin/js/dashboard.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.customSelect.min.js" ></script>
<!--common script init for all pages-->
<script src="{{ asset('') }}assets/admin/js/scripts.js"></script>
<!--script for this page-->
@endsection