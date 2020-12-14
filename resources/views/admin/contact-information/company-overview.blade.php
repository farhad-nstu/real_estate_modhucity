@extends('admin.master')
@section('title', 'About Company')
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
        <header class="panel-heading text-center">
            About Company
        </header>
        <div class="panel-body">
            <div class="position-center">
                <div class="col-md-12">
                    @foreach($basicInfo as $about)
                <form role="form" action="{{ route('company-about-update') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label>About</label>
                            <input type="hidden" name="id" value="{{ $about->id }}">
                        <textarea type="text" name="about_site" class="form-control my-editor" placeholder="Add about company">{{ $about->about_site }}</textarea>
                        </div>
                        
                        <button type="submit" name="btn" class="btn btn-info">Save Information</button>
                    </form>
                    @endforeach
                </div>
                
            </div>
            </div>
        </div>
    </section>
    
    <section class="panel">
        <header class="panel-heading text-center">
            About Company
        </header>
        <div class="panel-body">
            <div class="position-center">
                <div class="col-md-12">
                    @foreach($aboutCompany as $about)
                <form role="form" action="{{ route('company-about-image') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ $about->id }}"/>
                        <div class="form-group">
                                <label class="control-label">Image Upload</label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ asset('') }}{{ $about->about_slider_1 }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="about_slider_1" accept="image/*"/>
                                                   <input type="hidden" name="about_slider_1_link" value="{{ $about->about_slider_1 }}"/>
                                                   </span>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image Upload</label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ asset('') }}{{ $about->about_slider_2 }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="about_slider_2" accept="image/*"/>
                                                   <input type="hidden" name="about_slider_2_link" value="{{ $about->about_slider_2 }}"/>
                                                   </span>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Image Upload</label>
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
                                        <img src="{{ asset('') }}{{ $about->about_slider_3 }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="about_slider_3" accept="image/*"/>
                                                   <input type="hidden" name="about_slider_3_link" value="{{ $about->about_slider_3 }}"/>
                                                   </span>

                                    </div>
                                </div>
                            </div>
                        <button type="submit" name="btn" class="btn btn-info">Save Information</button>
                    </form>
                    @endforeach
                </div>
                
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

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: "textarea.my-editor",
            plugins: [
                "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                "searchreplace visualblocks visualchars code",
                "insertdatetime media nonbreaking save table contextmenu directionality searchreplace wordcount",
                "emoticons template paste textcolor colorpicker textpattern autoresize advlist autosave " +
                "spellchecker"
            ],
            toolbar: "insertfile undo redo restoredraft | styleselect | alignleft aligncenter alignright " +
                "alignjustify | bullist numlist outdent indent | link image media searchreplace",
            relative_urls: false,
            branding: false,
            menu: {
                    file: { title: 'File', items: 'newdocument restoredraft | print ' },
                    edit: { title: 'Edit', items: 'undo redo | cut copy paste | selectall | searchreplace' },
                    view: { title: 'View', items: 'code | visualaid visualchars visualblocks | spellchecker | preview fullscreen' },
                    insert: { title: 'Insert', items: 'image link media template codesample inserttable | charmap emoticons hr | pagebreak nonbreaking anchor toc | insertdatetime' },
                    format: { title: 'Format', items: 'bold italic underline strikethrough superscript subscript codeformat | formats blockformats fontformats fontsizes align | forecolor backcolor | removeformat' },
                    tools: { title: 'Tools', items: 'spellchecker spellcheckerlanguage' },
                    table: { title: 'Table', items: 'inserttable tableprops deletetable row column cell' },

                    },
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };
  tinymce.init(editor_config);
    </script>


@endsection