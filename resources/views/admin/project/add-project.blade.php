@extends('admin.master')
@section('title', 'Add Project')
@section('css')
 <!--Core CSS -->
 <link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
 <link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
 <link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />

 <!-- Custom styles for this template -->
 <link href="{{ asset('') }}assets/admin/css/style.css" rel="stylesheet">
 <link href="{{ asset('') }}assets/admin/css/style-responsive.css" rel="stylesheet" />

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
        <div class="row">
            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading tab-bg-dark-navy-blue"><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
                        <ul class="nav nav-tabs nav-justified ">
                            <li class="active">
                                <a data-toggle="tab" href="#project">
                                    Project
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#about">
                                    Project About
                                </a>
                            </li>
                            {{-- <li>
                                <a data-toggle="tab" href="#section">
                                    Project Section
                                </a>
                            </li> --}}
                            
                            <!--<li>-->
                            <!--        <a data-toggle="tab" href="#floorPlan">-->
                            <!--            Project Map-->
                            <!--        </a>-->
                            <!--</li>-->
                            <li>
                                    <a data-toggle="tab" href="#slider" class="contact-map">
                                        Project Slider
                                    </a>
                            </li>
                            <li>
                                    <a data-toggle="tab" href="#gallary">
                                        Gallary Image
                                    </a>
                            </li>
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content tasi-tab">
                            <div id="project" class="tab-pane active">

                                    <div class="position-center">
                                    <form role="form" class="form-horizontal" action="{{ route('add-project') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                                    <div class="prf-contacts sttng">
                                                            <h2>  Project Information</h2>
                                                        </div>

                                                        
        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Type</label>
                                                                <div class="col-lg-6">
                                                                    <select name="project_type" class="form-control" required> 
                                                                        <option selected disabled>Select Any Project Type</option>
                                                                        <option value="land">Land</option>
                                                                        <option value="apartment">Apartment</option>
                                                                        <option value="commercial">Commercial</option>
                                                                     </select>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Status</label>
                                                                <div class="col-lg-6">
                                                                    <select name="project_status" class="form-control" required> 
                                                                        <option selected disabled>Select Any Project Status</option>
                                                                        <option value="ongoing">Ongoing</option>
                                                                        <option value="completed">Completed</option>
                                                                        <option value="upcoming">Upcoming</option>
                                                                     </select>
                                                                </div>
                                                        </div>


                                                    <div class="form-group">
                                                            <label class="col-lg-2 control-label">Project Name</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" name="project_name" placeholder="Enter project name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Slug</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="project_slug" placeholder="Example: project-slug, project_slug, projectSlug. Don't use space!" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Description</label>
                                                                <div class="col-lg-10">
                                                                    <textarea rows="10" cols="30" class="form-control" name="project_description" placeholder="Write a short Project Description" required></textarea>
                                                                </div>
                                                         </div>
                                                         <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Location</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" name="project_location" placeholder="Ex: Dhaka, Bangladesh" class="form-control" required>
                                                                </div>
                                                            </div>
                                                         <div class="form-group">
                                                                <label class="col-lg-2 control-label">Image</label>
                                                                <div class="col-lg-6">
                                                                    <input type="file" name="project_image" class="file-pos" accept="image/*" required>
                                                                </div>
                                                        </div>


                                                <div class="prf-contacts sttng">
                                                        <h2>Publication Status</h2>
                                                    </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label"></label>
                                                                <div class="col-lg-6">
                                                                    <input type="radio" name="publication_status" class="file-pos" value="1" checked> Publish
                                                                    <input type="radio" name="publication_status" class="file-pos" value="0"> Unpublished
                                                                </div>
                                                        </div>
                                                <div class="form-group">
                                                    <div class="col-lg-offset-2 col-lg-10">
                                                        <button class="btn btn-primary" type="submit" name="project">Save</button>
                                                    </div>
                                                </div>
        
                                            </form>
                                        </div>
                                


                            </div>
                            
                            <div id="about" class="tab-pane">
                                    <div class="position-center">
                                            <form role="form" class="form-horizontal" action="{{ route('add-project-about') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                            <div class="prf-contacts sttng">
                                                                    <h2>  Project Information</h2>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label class="col-lg-2 control-label">Project Name</label>
                                                                        <div class="col-lg-6">
                                                                            <select name="project_id" class="form-control" required> 
                                                                                <option selected disabled>Select a project</option>
                                                                                @foreach ($projectLists as $project)
                                                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                                                                @endforeach
                                                                                

                                                                             </select>
                                                                        </div>
                                                                </div>
                                                    <div class="prf-contacts sttng">
                                                        <h2>About Project</h2>
                                                    </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Title</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" name="project_page_about_project_title" placeholder="Title" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Description</label>
                                                                <div class="col-lg-10">
                                                                    <textarea rows="10" cols="30" class="form-control about-editor" name="project_page_about_project_description" placeholder="short description" required></textarea>
                                                                </div>
                                                         </div>
        
                                                         <div class="form-group">
                                                                <label class="col-lg-2 control-label">Image</label>
                                                                <div class="col-lg-6">
                                                                    <input type="file" name="project_page_about_project_image" class="file-pos" accept="image/*" required>
                                                                </div>
                                                        </div>
        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Position</label>
                                                                <div class="col-lg-6">
                                                                    <input type="radio" name="project_page_about_project_image_position" class="file-pos" value="1" checked> Left
                                                                    <input type="radio" name="project_page_about_project_image_position" class="file-pos" value="0"> Right
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <button class="btn btn-primary" type="submit" name="about">Save</button>
                                                            </div>
                                                        </div>
                
                                                    </form>
                                                </div>        
                                </div>
                            {{-- <div id="section" class="tab-pane ">
                                    <!--<div class="position-center">-->
                                    <!--        <form role="form" class="form-horizontal" action="{{ route('add-project-section') }}" method="POST" enctype="multipart/form-data">-->
                                    <!--            {{ csrf_field() }}-->
                                    <!--                        <div class="prf-contacts sttng">-->
                                    <!--                                <h2>  Project Information</h2>-->
                                    <!--                            </div>-->
                                    <!--                            <div class="form-group">-->
                                    <!--                                    <label class="col-lg-2 control-label">Project Name</label>-->
                                    <!--                                    <div class="col-lg-6">-->
                                    <!--                                        <select name="project_id" class="form-control" required> -->
                                    <!--                                            <option selected disabled>Select a project</option>-->
                                    <!--                                            @foreach ($projectLists as $project)-->
                                    <!--                                        <option value="{{ $project->id }}">{{ $project->project_name }}</option>-->
                                    <!--                                            @endforeach-->
                                                                                

                                    <!--                                         </select>-->
                                    <!--                                    </div>-->
                                    <!--                            </div>-->
                                    <!--                <div class="prf-contacts sttng">-->
                                    <!--                    <h2>Add Project Section</h2>-->
                                    <!--                </div>-->
                                                        
                                    <!--                    <div class="form-group">-->
                                    <!--                        <label class="col-lg-2 control-label">Title</label>-->
                                    <!--                        <div class="col-lg-6">-->
                                    <!--                            <input type="text" name="section_title" placeholder="Title" class="form-control" required>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                                                        
                                    <!--                    <div class="form-group">-->
                                    <!--                            <label class="col-lg-2 control-label">Description</label>-->
                                    <!--                            <div class="col-lg-10">-->
                                    <!--                                <textarea rows="10" cols="30" class="form-control" name="section_desctiption" placeholder="short description" required></textarea>-->
                                    <!--                            </div>-->
                                    <!--                     </div>-->

                                    <!--                     <div class="form-group">-->
                                    <!--                            <label class="col-lg-2 control-label">Section Positin</label>-->
                                    <!--                            <div class="col-lg-6">-->
                                    <!--                                    <input type="number" name="section_position" placeholder="Ex: 1" class="form-control" required>-->
                                    <!--                            </div>-->
                                    <!--                    </div>-->
        
                                    <!--                     <div class="form-group">-->
                                    <!--                            <label class="col-lg-2 control-label">Image</label>-->
                                    <!--                            <div class="col-lg-6">-->
                                    <!--                                <input type="file" name="section_image" class="file-pos" accept="image/*" required>-->
                                    <!--                            </div>-->
                                    <!--                    </div>-->
        
                                    <!--                    <div class="form-group">-->
                                    <!--                            <label class="col-lg-2 control-label">Position</label>-->
                                    <!--                            <div class="col-lg-6">-->
                                    <!--                                <input type="radio" name="section_image_position" class="file-pos" value="1" checked> Left-->
                                    <!--                                <input type="radio" name="section_image_position" class="file-pos" value="0"> Right-->
                                    <!--                            </div>-->
                                    <!--                    </div>-->
                                    <!--                    <div class="form-group">-->
                                    <!--                        <div class="col-lg-offset-2 col-lg-10">-->
                                    <!--                            <button class="btn btn-primary" type="submit" name="section">Save</button>-->
                                    <!--                        </div>-->
                                    <!--                    </div>-->
                
                                    <!--                </form>-->
                                    <!--            </div>        -->
                                </div> --}}
                                <!--<div id="floorPlan" class="tab-pane">-->
                                <!--        <div class="position-center">-->
                                <!--                <form role="form" class="form-horizontal" action="{{ route('add-project-floor-plan') }}" method="POST" enctype="multipart/form-data">-->
                                <!--                    {{ csrf_field() }}-->
                                <!--                                <div class="prf-contacts sttng">-->
                                <!--                                        <h2>  Project Information</h2>-->
                                <!--                                    </div>-->
                                <!--                                    <div class="form-group">-->
                                <!--                                            <label class="col-lg-2 control-label">Project Name</label>-->
                                <!--                                            <div class="col-lg-6">-->
                                <!--                                                <select name="project_id" class="form-control" required> -->
                                <!--                                                    <option selected disabled>Select a project</option>-->
                                <!--                                                    @foreach ($projectLists as $project)-->
                                <!--                                                <option value="{{ $project->id }}">{{ $project->project_name }}</option>-->
                                <!--                                                    @endforeach-->
                                                                                    
    
                                <!--                                                 </select>-->
                                <!--                                            </div>-->
                                <!--                                    </div>-->
                                <!--                        <div class="prf-contacts sttng">-->
                                <!--                            <h2>Add Plan</h2>-->
                                <!--                        </div>-->
                                <!--                            <div class="form-group">-->
                                <!--                                <label class="col-lg-2 control-label">Plan Type</label>-->
                                <!--                                <div class="col-lg-6">-->
                                <!--                                    <input type="text" name="plan_name" placeholder="Ex: Floor Plan" class="form-control" required>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                                <!--                             <div class="form-group">-->
                                <!--                                    <label class="col-lg-2 control-label">Image</label>-->
                                <!--                                    <div class="col-lg-6">-->
                                <!--                                        <input type="file" name="plan_map_image" class="file-pos" accept="image/*" required>-->
                                <!--                                    </div>-->
                                <!--                            </div>-->
                                <!--                            <div class="form-group">-->
                                <!--                                <div class="col-lg-offset-2 col-lg-10">-->
                                <!--                                    <button class="btn btn-primary" type="submit" name="plan">Save</button>-->
                                <!--                                </div>-->
                                <!--                            </div>-->
                    
                                <!--                        </form>-->
                                <!--                    </div>        -->
                                <!--    </div>-->
                            <div id="slider" class="tab-pane ">
                                    <div class="position-center">
                                            <form role="form" class="form-horizontal" action="{{ route('add-project-slider') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                            <div class="prf-contacts sttng">
                                                                    <h2>  Project Information</h2>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label class="col-lg-2 control-label">Project Name</label>
                                                                        <div class="col-lg-6">
                                                                            <select name="project_id" class="form-control" required> 
                                                                                <option selected disabled>Select a project</option>
                                                                                @foreach ($projectLists as $project)
                                                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                                                                @endforeach
                                                                                

                                                                             </select>
                                                                        </div>
                                                                </div>
                                                    <div class="prf-contacts sttng">
                                                        <h2>Add Slider</h2>
                                                    </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Position</label>
                                                            <div class="col-lg-6">
                                                                <input type="number" name="project_slider_image_position" placeholder="Ex: 1" class="form-control" required>
                                                            </div>
                                                        </div>
                                                         <div class="form-group">
                                                                <label class="col-lg-2 control-label">Image</label>
                                                                <div class="col-lg-6">
                                                                    <input type="file" name="project_slider_image" class="file-pos" accept="image/*" required>
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Position</label>
                                                                <div class="col-lg-6">
                                                                    <input type="radio" name="publication_status" class="file-pos" value="1" checked> Publish
                                                                    <input type="radio" name="publication_status" class="file-pos" value="0"> unPublish
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <button class="btn btn-primary" type="submit" name="slider">Save</button>
                                                            </div>
                                                        </div>
                
                                                    </form>
                                                </div>    
                            </div>
                            <div id="gallary" class="tab-pane ">
                                    <div class="position-center">
                                            <form role="form" class="form-horizontal" action="{{ route('add-project-gallery') }}" method="POST" enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                            <div class="prf-contacts sttng">
                                                                    <h2>  Project Information</h2>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label class="col-lg-2 control-label">Project Name</label>
                                                                        <div class="col-lg-6">
                                                                            <select name="project_id" class="form-control" required> 
                                                                                <option selected disabled>Select a project</option>
                                                                                @foreach ($projectLists as $project)
                                                                            <option value="{{ $project->id }}">{{ $project->project_name }}</option>
                                                                                @endforeach
                                                                                

                                                                             </select>
                                                                        </div>
                                                                </div>
                                                    <div class="prf-contacts sttng">
                                                        <h2>Add Gallary Image</h2>
                                                    </div>
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Block Name</label>
                                                            <div class="col-lg-6">
                                                                Block-<input type="text" name="block_name" placeholder="Ex: A/B/C" class="form-control-inline" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Position</label>
                                                                <div class="col-lg-6">
                                                                        <select name="block_position" class="form-control" required> 
                                                                                <option selected disabled>Select a Position</option>

                                                                                <option value="south-east">South-East</option>
                                                                                <option value="south-west">South-West</option>
                                                                                <option value="south-north">South-North</option>
                                                                                <option value="east-west">East-West</option>
                                                                                <option value="east-south">East-South</option>
                                                                                <option value="east-north">East-North</option>
                                                                                <option value="north-east">North-East</option>
                                                                                <option value="north-west">North-West</option>
                                                                                <option value="north-south">North-South</option>
                                                                                <option value="west-east">Wes-East</option>
                                                                                <option value="west-north">West-North</option>
                                                                                <option value="west-south">West-South</option>
                                                                                <option value="middle">Middle</option>
                                                                        </select>
                                                                                                
                                                                </div>
                                                            </div>
                                                            
                                                         <div class="form-group">
                                                                <label class="col-lg-2 control-label">Image</label>
                                                                <div class="col-lg-6">
                                                                    <input type="file" name="gallery_image" class="file-pos form-control" accept="image/*" required>
                                                                </div>
                                                        </div>
                                                        <div class="prf-contacts sttng">
                                                                <h2>Publication Status</h2>
                                                            </div>
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Status</label>
                                                                <div class="col-lg-6">
                                                                    <input type="radio" class="form-control-inline" name="publication_status" class="file-pos" value="1" checked> Publish
                                                                    <input type="radio" class="form-control-inline" name="publication_status" class="file-pos" value="0"> unPublish
                                                                </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-offset-2 col-lg-10">
                                                                <button class="btn btn-primary" type="submit" name="slider">Save</button>
                                                            </div>
                                                        </div>
                
                                                    </form>
                                                </div>    
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

<!--common script init for all pages-->
<script src="{{ asset('') }}assets/admin/js/scripts.js"></script>
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: ".about-editor",
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