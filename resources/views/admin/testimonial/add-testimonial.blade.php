@extends('admin.master')
@section('title', 'Add Testimonial')
@section('css')

<!--Core CSS -->
<link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
<link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

<link rel="stylesheet" href="{{ asset('') }}assets/admin/css/bootstrap-switch.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('') }}assets/admin/js/bootstrap-fileupload/bootstrap-fileupload.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('') }}assets/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/bootstrap-datepicker/css/datepicker.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/bootstrap-timepicker/css/timepicker.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('') }}assets/admin/js/bootstrap-colorpicker/css/colorpicker.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('') }}assets/admin/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
<link rel="stylesheet" type="text/css"
    href="{{ asset('') }}assets/admin/js/bootstrap-datetimepicker/css/datetimepicker.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/jquery-multi-select/css/multi-select.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/jquery-tags-input/jquery.tagsinput.css" />

<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/select2/select2.css" />

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
<div class="row">
    <section class="panel">
        @if(session('categorySave'))
        <header class="panel-heading text-center">
            {{ session('categorySave') }}
        </header>
        @else
        <header class="panel-heading text-center">
            Add Portfolio
        </header>
        @endif
        <div class="panel-body">
            <div class="position-center">
                <div class="col-md-12">
                    <form role="form" action="{{ route('add-testimonial') }}" method="post"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>Client Name</label>
                            <input type="text" name="portfolio_client_name" class="form-control" placeholder="Client Name">
                        </div>
                        <div class="form-group">
                            <label>Portfolio Text</label>
                            <textarea name="portfolio_text" class="form-control"
                                placeholder="Portfolio Text"></textarea>

                        </div>
                        <div class="form-group">
                            <label>Client Image</label>
                            <input type="file" name="portfolio_client_image" class="form-control" accept="image/*">
                        </div>
                        <div class="form-group">
                            <label>Publication Status</label>
                            <div class="single-row">
                                <input tabindex="3" type="radio" value="1" name="publication_status"> Publish
                                <input tabindex="3" type="radio" value="0" name="publication_status"> Unpublish
                            </div>
                        </div>
                        <button type="submit" name="btn" class="btn btn-info">Submit</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

</div>
@endsection

@section('js')

<!--Core js-->
<script src="{{ asset('') }}assets/admin/js/jquery.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery-1.10.2.min.js"></script>
<script src="{{ asset('') }}assets/admin/bs3/js/bootstrap.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery-ui-1.9.2.custom.min.js"></script>
<script class="include" type="text/javascript" src="{{ asset('') }}assets/admin/js/jquery.dcjqaccordion.2.7.js">
</script>
<script src="{{ asset('') }}assets/admin/js/jquery.scrollTo.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/easypiechart/jquery.easypiechart.js"></script>
<script src="{{ asset('') }}assets/admin/js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.nicescroll.js"></script>
<script src="{{ asset('') }}assets/admin/js/jquery.nicescroll.js"></script>

<script src="{{ asset('') }}assets/admin/js/bootstrap-switch.js"></script>

<script type="text/javascript" src="{{ asset('') }}assets/admin/js/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-fileupload/bootstrap-fileupload.js">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-datepicker/js/bootstrap-datepicker.js">
</script>
<script type="text/javascript"
    src="{{ asset('') }}assets/admin/js/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-daterangepicker/daterangepicker.js">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-colorpicker/js/bootstrap-colorpicker.js">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-timepicker/js/bootstrap-timepicker.js">
</script>

<script type="text/javascript" src="{{ asset('') }}assets/admin/js/jquery-multi-select/js/jquery.multi-select.js">
</script>
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/jquery-multi-select/js/jquery.quicksearch.js">
</script>

<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-inputmask/bootstrap-inputmask.min.js">
</script>

<script src="{{ asset('') }}assets/admin/js/jquery-tags-input/jquery.tagsinput.js"></script>

<script src="{{ asset('') }}assets/admin/js/select2/select2.js"></script>
<script src="{{ asset('') }}assets/admin/js/select-init.js"></script>


<!--common script init for all pages-->
<script src="{{ asset('') }}assets/admin/js/scripts.js"></script>

<script src="{{ asset('') }}assets/admin/js/toggle-init.js"></script>

<script src="{{ asset('') }}assets/admin/js/advanced-form.js"></script>
<!--Easy Pie Chart-->
<script src="{{ asset('') }}assets/admin/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="{{ asset('') }}assets/admin/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.pie.resize.js"></script>

@endsection