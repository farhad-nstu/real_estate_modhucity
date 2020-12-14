@extends('admin.master')
@section('title', 'Edit Project')
@section('css')
 <!--Core CSS -->
 <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
 <link href="{{ asset('') }}assets/admin/bs3/css/bootstrap.min.css" rel="stylesheet">
 <link href="{{ asset('') }}assets/admin/css/bootstrap-reset.css" rel="stylesheet">
 <link href="{{ asset('') }}assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
 
 
<link rel="stylesheet" href="{{ asset('') }}assets/admin/css/bootstrap-switch.css" />
<link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/admin/js/bootstrap-fileupload/bootstrap-fileupload.css" />

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
                        </ul>
                    </header>
                    <div class="panel-body">
                        <div class="tab-content tasi-tab">
                            <div id="project" class="tab-pane active">

                                    <div class="position-center">
                                    <form role="form" class="form-horizontal" action="{{ route('update-project') }}" method="POST" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                                    <div class="prf-contacts sttng">
                                                            <h2>  Project Information</h2>
                                                    </div>
                                                    
                                                    <input type="hidden" value="{{ $data['project_id'] }}" name="project_id">
                                                    <input type="hidden" value="{{ $data['project_about_id'] }}" name="project_about_id">
                                                    <input type="hidden" value="{{ $data['project_facility_id'] }}" name="project_facility_id">
                                                    <input type="hidden" value="{{ $data['project_map_id'] }}" name="project_map_id">
                                                    <input type="hidden" value="{{ $data['project_why_id'] }}" name="project_why_id">
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Type</label>
                                                                <div class="col-lg-6">
                                                                    <select name="project_type" class="form-control" required> 
                                                                        <option selected disabled>Select Any Project Type</option>
                                                                        <option value="land" {{ $data['project_type'] == "land" ? "selected" : " " }}>Land</option>
                                                                        <option value="apartment" {{ $data['project_type'] == "apartment" ? "selected" : " " }}>Apartment</option>
                                                                        <option value="commercial" {{ $data['project_type'] == "commercial" ? "selected" : " " }}>Commercial</option>
                                                                     </select>
                                                                </div>
                                                        </div>

                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Status</label>
                                                                <div class="col-lg-6">
                                                                    <select name="project_status" class="form-control" required> 
                                                                        <option disabled>Select Any Project Status</option>
                                                                        <option value="ongoing" {{ $data['project_status'] == "ongoing" ? "selected" : " " }}>Ongoing</option>
                                                                        <option value="completed" {{ $data['project_status'] == "completed" ? "selected" : " " }}>Completed</option>
                                                                        <option value="upcoming" {{ $data['project_status'] == "upcoming" ? "selected" : " " }}>Upcoming</option>
                                                                     </select>
                                                                </div>
                                                        </div>


                                                    <div class="form-group">
                                                            <label class="col-lg-2 control-label">Project Name</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" value="{{ $data['project_name'] }}" name="project_name" placeholder="Enter project name" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Slug</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" value="{{ $data['project_slug'] }}" name="project_slug" placeholder="Example: project-slug, project_slug, projectSlug. Don't use space!" class="form-control" required>
                                                                </div>
                                                            </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Description</label>
                                                                <div class="col-lg-10">
                                                                    <textarea rows="10" cols="30" class="form-control" name="project_description" placeholder="Write a short Project Description" required>{{ $data['project_description'] }}</textarea>
                                                                </div>
                                                         </div>
                                                          <div class="form-group">
                                <label class="col-lg-2 control-label">Image Upload</label>
                                <div class="col-lg-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 276px; height: 176px;">
                                        <img src="{{ asset('') }}{{ $data['project_image'] }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 276px; max-height: 176px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="project_image" accept="image/*"/>
                                                   <input type="hidden" value="{{ $data['project_image'] }}" class="default" name="project_image_link"/>
                                                   </span>

                                    </div>
                                    </div>
                                    </div>
                                </div>
                                                         <div class="form-group">
                                                                <label class="col-lg-2 control-label">Project Location</label>
                                                                <div class="col-lg-6">
                                                                    <input type="text" value="{{ $data['project_location'] }}" name="project_location" placeholder="Ex: Dhaka, Bangladesh" class="form-control" required>
                                                                </div>
                                                            </div>
                                                            
                                                                    <div class="prf-contacts sttng">
                                                                        <h2>Map Information</h2>
                                                                    </div>
                                                                    <div class="form-group">
                                                                <label class="col-lg-2 control-label">Search Location</label>
                                                                <div class="col-lg-6">
                                                                <input type="text" class="form-control" id="searchMapLocation">
                                                                </div>
                                                            </div>
                                                            <div id="maps-location"></div>
                                    
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Latitude</label>
                                                                <div class="col-lg-6">
                                                                <input type="text" value="{{ $data['project_map_lat'] }}" name="lat" class="form-control" id="lat"
                                                                    readonly required>
                                                                    </div>
                                    
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="col-lg-2 control-label">Langitude</label>
                                                                <div class="col-lg-6">
                                                                <input type="text" value="{{ $data['project_map_lng'] }}" name="lng" class="form-control" id="lng"
                                                                    readonly required>
                                                                    </div>
                                                            </div>
                                                            
                                                            <div class="prf-contacts sttng">
                                                        <h2>About Project</h2>
                                                    </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Title</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" value="{{ $data['project_page_about_project_title'] }}" name="project_page_about_project_title" placeholder="Title" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Description</label>
                                                                <div class="col-lg-10">
                                                                    <textarea rows="10" cols="30" class="form-control my-editor" name="project_page_about_project_description" placeholder="short description" required>{!! $data['project_page_about_project_description'] !!}</textarea>
                                                                </div>
                                                         </div>
    
                                                        <div class="form-group">
                                <label class="col-lg-2 control-label">Image Upload</label>
                                <div class="col-lg-6">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="fileupload-new thumbnail" style="width: 276px; height: 176px;">
                                        <img src="{{ asset('') }}{{ $data['project_page_about_project_image'] }}" alt="" />
                                    </div>
                                    <div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 276px; max-height: 176px; line-height: 20px;"></div>
                                    <div>
                                                   <span class="btn btn-white btn-file">
                                                   <span class="fileupload-new"><i class="fa fa-paper-clip"></i> Select image</span>
                                                   <span class="fileupload-exists"><i class="fa fa-undo"></i> Change</span>
                                                   <input type="file" class="default" name="project_page_about_project_image" accept="image/*"/>
                                                   <input type="hidden" value="{{ $data['project_page_about_project_image'] }}" class="default" name="project_page_about_project_image_link"/>
                                                   </span>

                                    </div>
                                    </div>
                                    </div>
                                </div>
        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Position</label>
                                                                <div class="col-lg-6">
                                                                    <input type="radio" name="project_page_about_project_image_position" class="file-pos" value="1" {{ $data['project_page_about_project_image_position'] == 1 ? "checked" : " " }}> Left
                                                                    <input type="radio" name="project_page_about_project_image_position" class="file-pos" value="0" {{ $data['project_page_about_project_image_position'] == 0 ? "checked" : " " }}> Right
                                                                </div>
                                                        </div>
                                                        <div class="prf-contacts sttng">
                                                        <h2>Why Choose us</h2>
                                                    </div>
                                                        
                                                        <div class="form-group">
                                                            <label class="col-lg-2 control-label">Title</label>
                                                            <div class="col-lg-6">
                                                                <input type="text" value="{{ $data['why_choose_title'] }}" name="why_choose_title" placeholder="Title" class="form-control" required>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                                <label class="col-lg-2 control-label">Description</label>
                                                                <div class="col-lg-10">
                                                                    <textarea rows="10" cols="30" class="form-control my-editor" name="why_choose_description" placeholder="short description" required>{!! $data['why_choose_description'] !!}</textarea>
                                                                </div>
                                                         </div>
                                    <div class="form-group">
                                <div class="prf-contacts sttng">
                                    <h2>Extra Facilities</h2>
                         </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-6">
                        <textarea class="form-control" name="special_facilities_text" placeholder="Some Description" required>{{ $data['special_facilities_text'] }}</textarea>    
                        </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-2 control-label">Input Some Facilities. ( Press Enter after every facilities )</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="special_facilities" placeholder="Press Enter after every facilities"  value="{{ $data['special_facilities'] }}" data-role="tagsinput" required/>
                        </div>
                        </div>
                        
                        
                        <div class="form-group">
                                <div class="prf-contacts sttng">
                                    <h2>Infrastructural Facilities</h2>
                         </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-6">
                        <textarea class="form-control" name="infrastructural_facilities_text" placeholder="Some Description" required>{{ $data['infrastructural_facilities_text'] }}</textarea>    
                        </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-2 control-label">Input Some Facilities. ( Press Enter after every facilities )</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="infrastructural_facilities" value="{{ $data['infrastructural_facilities'] }}" placeholder="Press Enter after every facilities" data-role="tagsinput" required/>
                        </div>
                        </div>
                        <div class="form-group">
                                <div class="prf-contacts sttng">
                                    <h2>Plot Accomodations</h2>
                         </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-6">
                        <textarea class="form-control" name="plot_accomodation_text" placeholder="Some Description" required>{{ $data['plot_accomodation_text'] }}</textarea>    
                        </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-2 control-label">Input Plot Size. ( Press Enter for every entry )</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="plot_accomodations" value="{{ $data['plot_accomodations'] }}" placeholder="Press Enter after every entry" data-role="tagsinput" required/>
                        </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label">Enter Plot Accomodation Measure</label>
                        <div class="col-lg-6">
                        <input type="text" class="form-control" name="plot_accomodations_measure_by" placeholder="EX: Khatas" value="{{ $data['plot_accomodations_measure_by'] }}"> 
                        </div>
                        </div>
                        
                        <div class="form-group">
                                <div class="prf-contacts sttng">
                                    <h2>Roads</h2>
                         </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label">Description</label>
                        <div class="col-lg-6">
                        <textarea class="form-control" name="roads_text" placeholder="Some Description" required>{{ $data['roads_text'] }}</textarea>    
                        </div>
                        </div>
                        <div class="form-group">
                                <label class="col-lg-2 control-label">Input Road Size . ( Press Enter after every Entry )</label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" name="roads" value="{{ $data['roads'] }}" placeholder="Press Enter after every entry" data-role="tagsinput" required/>
                                    </div>
                        </div>
                        <div class="form-group">
                        <label class="col-lg-2 control-label">Enter Roads Measure</label>
                        <div class="col-lg-6">
                        <input type="text" class="form-control" name="roads_measure_by" placeholder="EX: Feets" value="{{ $data['roads_measure_by'] }}"> 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script> 
<script type="text/javascript" src="{{ asset('') }}assets/admin/js/bootstrap-fileupload/bootstrap-fileupload.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/typeahead.js/0.11.1/typeahead.bundle.min.js"></script> 
<script src="https://www.jqueryscript.net/demo/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
<!--Easy Pie Chart-->
<script src="{{ asset('') }}assets/admin/js/easypiechart/jquery.easypiechart.js"></script>
<!--Sparkline Chart-->
<script src="{{ asset('') }}assets/admin/js/sparkline/jquery.sparkline.js"></script>
<!--jQuery Flot Chart-->
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.tooltip.min.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.resize.js"></script>
<script src="{{ asset('') }}assets/admin/js/flot-chart/jquery.flot.pie.resize.js"></script>
<script src="https://www.jqueryscript.net/demo/Bootstrap-4-Tag-Input-Plugin-jQuery/tagsinput.js"></script>
<!--common script init for all pages-->
<script src="{{ asset('') }}assets/admin/js/scripts.js"></script>
 <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        var editor_config = {
            path_absolute : "/",
            selector: ".my-editor",
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
    
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBf12PbZrun26rrN3EtOiSng4bMMHS3roM&libraries=geometry,places" type="text/javascript">
</script>

<style>
    #maps-location {
        margin-top: 2px;
        margin-bottom: 2px;
        height: 250px;
        width: auto;
        border-style: none outset ridge outset; 
        border-color: red red blue teal;
        border-width: 0px 5px 5px 5px;
    }
</style>
<script>

var map = new google.maps.Map(document.getElementById('maps-location'),
{
    center:
    {
        lat: {{ $data['project_map_lat'] }},
        lng: {{ $data['project_map_lng'] }}
    },
    zoom:15
});

var marker = new google.maps.Marker({
    position:{
        lat: {{ $data['project_map_lat'] }},
        lng: {{ $data['project_map_lng'] }}
    },
    map: map,
    draggable: true
});

var searchBox = new google.maps.places.SearchBox(document.getElementById('searchMapLocation'));

google.maps.event.addListener(searchBox,'places_changed', function(){
    var places = searchBox.getPlaces();
    var bounds = new google.maps.LatLngBounds();

    var i, place;

    for(i=0;place=places[i]; i++)
    {
        bounds.extend(place.geometry.location);
        marker.setPosition(place.geometry.location);
    }
    map.fitBounds(bounds);
    map.setZoom(15);
});

google.maps.event.addListener(marker,'position_changed', function(){
    var lat = marker.getPosition().lat();
    var lng = marker.getPosition().lng();

    $('#lat').val(lat);
    $('#lng').val(lng);
});

</script>
@endsection