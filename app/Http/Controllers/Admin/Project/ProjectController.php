<?php

namespace App\Http\Controllers\Admin\Project;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Project\AboutProject;
use App\Models\Admin\Project\Brochure;
use App\Models\Admin\Project\FloorPlan;
use App\Models\Admin\Project\MapLocation;
use App\Models\Admin\Project\Project;
use App\Models\Admin\Project\ProjectSlider;
use App\Models\Admin\Project\Section;
use App\Models\Admin\Project\ProjectWhyChoose;
use App\Models\Gallary;
use App\Models\Admin\Project\ProjectFacility;
use Image;
use DB;

class ProjectController extends Controller
{
    public function addProject()
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        return view('admin.project.add-project', ['projectLists' => $projectLists]);
    }
    
    public function manageProjectLand()
    {
        $ongoing = Project::where(['project_type' => 'land'])->where(['project_status' => 'ongoing'])->get();
        $completed = Project::where(['project_type' => 'land'])->where(['project_status' => 'completed'])->get();
        $upcoming = Project::where(['project_type' => 'land'])->where(['project_status' => 'upcoming'])->get();
        return view('admin.project.manage-project-land', ['ongoing' => $ongoing, 'completed' => $completed, 'upcoming' => $upcoming]);
    }
    
    public function manageProjectApartment()
    {
        $ongoing = Project::where(['project_type' => 'apartment'])->where(['project_status' => 'ongoing'])->get();
        $completed = Project::where(['project_type' => 'apartment'])->where(['project_status' => 'completed'])->get();
        $upcoming = Project::where(['project_type' => 'apartment'])->where(['project_status' => 'upcoming'])->get();
        return view('admin.project.manage-project-apartment', ['ongoing' => $ongoing, 'completed' => $completed, 'upcoming' => $upcoming]);
    }
    
    public function manageProjectCommercial()
    {
        $ongoing = Project::where(['project_type' => 'commercial'])->where(['project_status' => 'ongoing'])->get();
        $completed = Project::where(['project_type' => 'commercial'])->where(['project_status' => 'completed'])->get();
        $upcoming = Project::where(['project_type' => 'commercial'])->where(['project_status' => 'upcoming'])->get();
        return view('admin.project.manage-project-commercial', ['ongoing' => $ongoing, 'completed' => $completed, 'upcoming' => $upcoming]);
    }

    protected function projectImage($request)
    {
        $image_name = $request->file('project_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->project_name) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/";
        $image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(340, 340)->save($image_url);
        return $image_url;
    }

    public function saveProject(Request $request)
    {
        $image_url = $this->projectImage($request);

        $projectDetails = new Project();
        $projectDetails->project_name = $request->project_name;
        $projectDetails->project_slug = $request->project_slug;
        $projectDetails->project_description = $request->project_description;
        $projectDetails->project_type = $request->project_type;
        $projectDetails->project_status = $request->project_status;
        $projectDetails->project_location = $request->project_location;
        $projectDetails->project_image = $image_url;

        $projectDetails->publication_status = $request->publication_status;
        $projectDetails->save();

        return redirect('admin/project/add-project');
    }

    protected function projectAboutImage($request)
    {
        $image_name = $request->file('project_page_about_project_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->project_page_about_project_title) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/";
        $about_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(800, 850)->save($about_image_url);
        return $about_image_url;
    }

    public function addAbout(Request $request)
    {
        $about_image_url = $this->projectAboutImage($request);

        $projectAbout = new AboutProject();
        $projectAbout->project_id = $request->project_id;
        $projectAbout->project_page_about_project_title = $request->project_page_about_project_title;
        $projectAbout->project_page_about_project_description = $request->project_page_about_project_description;
        $projectAbout->project_page_about_project_image = $about_image_url;
        $projectAbout->project_page_about_project_image_position = $request->project_page_about_project_image_position;
        $projectAbout->save();

        return redirect('admin/project/add-project');
    }

    protected function projectSectionImage($request)
    {
            $image_name = $request->file('section_image');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = preg_replace('/\s+/', '_', $request->section_title) . '_'. round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/project-images/";
            $section_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(800, 800)->save($section_image_url);
            return $section_image_url;
    }

    public function addSection(Request $request)
    {
        $section_image_url = $this->projectSectionImage($request);

        $projectSection = new Section();
        $projectSection->project_id = $request->project_id;
        $projectSection->section_title = $request->section_title;
        $projectSection->section_desctiption = $request->section_desctiption;
        $projectSection->section_position = $request->section_position;
        $projectSection->section_image = $section_image_url;
        $projectSection->section_image_position = $request->section_image_position;
        $projectSection->save();

        return redirect('admin/project/add-project');
    }

    protected function projectPlanImage($request)
    {
        $image_name = $request->file('plan_map_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->plan_name) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/maps/";
        $project_page_plan_image = $image_save_directory . $image_full_name;
        Image::make($image_name)->encode('jpg', 75)->save($project_page_plan_image);
        return $project_page_plan_image;
    }

    public function addFloorPlan(Request $request)
    {
        $project_page_plan_image = $this->projectPlanImage($request);

        $projectSection = new FloorPlan();
        $projectSection->project_id = $request->project_id;
        $projectSection->plan_name = $request->plan_name;
        $projectSection->plan_map_image = $project_page_plan_image;
        $projectSection->save();

        return redirect('admin/project/add-project');
    }

    protected function projectSliderImage($request)
    {
        if($request->hasfile('project_slider_image'))
        {
        $image_name = $request->file('project_slider_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->project_name) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/sliders/";
        $project_slider_image = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(2480, 1600)->save($project_slider_image);
        return $project_slider_image;
        }
    }

    public function addProjectSlider(Request $request)
    {
        $project_slider_image = $this->projectSliderImage($request);

        $projectSection = new ProjectSlider();
        $projectSection->project_id = $request->project_id;
        $projectSection->project_slider_image_position = $request->project_slider_image_position;
        $projectSection->publication_status = $request->publication_status;
        $projectSection->project_slider_image = $project_slider_image;
        $projectSection->save();

        return redirect('admin/project/add-project');
    }

    protected function projectGallaryImage($request)
    {
        if($request->hasfile('gallery_image'))
        {
        $image_name = $request->file('gallery_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->block_name) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/gallery/";
        $gallery_image = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(2480, 1600)->save($gallery_image);
        return $gallery_image;
        }
    }

    public function addGallery(Request $request)
    {
        $gallery_image = $this->projectGallaryImage($request);

        $projectSection = new Gallary();
        $projectSection->project_id = $request->project_id;
        $projectSection->block_name = $request->block_name;
        $projectSection->block_position = $request->block_position;
        $projectSection->publication_status = $request->publication_status;
        $projectSection->gallery_image = $gallery_image;
        $projectSection->save();

        return redirect('admin/project/add-project');
    }

    public function addProjectLocation()
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        return view('admin.project.add-map', ['projectLists' => $projectLists]);
    }

    public function saveProjectLocation(Request $request)
    {
        $projectSection = new MapLocation();
        $projectSection->project_id = $request->project_id;
        $projectSection->lat = $request->lat;
        $projectSection->lng = $request->lng;
        $projectSection->publication_status = $request->publication_status;
        $projectSection->save();

        return redirect('admin/project/add-project-location');
    }
    
    public function addProjectWhyUs()
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        return view('admin.project.add-project-why-us', ['projectLists' => $projectLists]);
    }
    
    public function saveProjectWhyUs(Request $request)
    {
        $projectWhyChoose = new ProjectWhyChoose();
        $projectWhyChoose->project_id = $request->project_id;
        $projectWhyChoose->why_choose_title = $request->why_choose_title;
        $projectWhyChoose->why_choose_description = $request->why_choose_description;
        $projectWhyChoose->publication_status = $request->publication_status;
        $projectWhyChoose->save();

        return back();
    }
    
    public function addProjectFacilities()
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        return view('admin.project.add-project-facilities', ['projectLists' => $projectLists]);
    }
    
    public function saveProjectFacilities(Request $request)
    {
        $projectFacilities = new ProjectFacility();
        $projectFacilities->project_id = $request->project_id;
        $projectFacilities->special_facilities_text = $request->special_facilities_text;
        $projectFacilities->special_facilities = $request->special_facilities;
        $projectFacilities->infrastructural_facilities_text = $request->infrastructural_facilities_text;
        $projectFacilities->infrastructural_facilities = $request->infrastructural_facilities;
        $projectFacilities->plot_accomodation_text = $request->plot_accomodation_text;
        $projectFacilities->plot_accomodations = $request->plot_accomodations;
        $projectFacilities->plot_accomodations_measure_by = $request->plot_accomodations_measure_by;
        $projectFacilities->roads_text = $request->roads_text;
        $projectFacilities->roads = $request->roads;
        $projectFacilities->roads_measure_by = $request->roads_measure_by;
        $projectFacilities->save();

        return back();
    }
    
    public function editProject($id)
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        
        $data['id'] = $id;
        
        $data['projectInfo'] = Project::where(['publication_status' => 1])->where(['id' => $id])->get();
            
        foreach($data['projectInfo'] as $project)
        {
            $data['id'] = $project->id;
            $data['project_type'] = $project->project_type;
            $data['project_status'] = $project->project_status;
            $data['project_image'] = $project->project_image;
            $data['project_name'] = $project->project_name;
            $data['project_slug'] = $project->project_slug;
            $data['project_description'] = $project->project_description;
            $data['project_location'] = $project->project_location;
            $data;
        }
        
        $data['projectType'] = $data['project_type'];
        $data['projectStatus'] = $data['project_status'];
        
        $data['projectDetails'] = DB::table('about_projects')
                  ->join('projects', 'projects.id', '=', 'about_projects.project_id')
                  ->join('map_locations', 'map_locations.project_id', '=', 'projects.id')
                  ->join('project_facilities', 'project_facilities.project_id', '=', 'projects.id')
                  ->join('project_why_chooses', 'project_why_chooses.project_id', '=', 'projects.id')
                  ->select('projects.*', 'about_projects.*', 'about_projects.id as aboutId', 'map_locations.*', 'map_locations.id as mapId', 'project_facilities.*', 'project_facilities.id as pfId', 'project_why_chooses.why_choose_title', 'project_why_chooses.why_choose_description', 'project_why_chooses.id as project_why_id')
                  ->where('projects.id', $id)
                  ->get();
                  
        foreach($data['projectDetails'] as $project)
        {
            $data['project_id'] = $project->id;
            $data['project_about_id'] = $project->aboutId;
            $data['project_page_about_project_title'] = $project->project_page_about_project_title;
            $data['project_page_about_project_description'] = $project->project_page_about_project_description;
            $data['project_page_about_project_image'] = $project->project_page_about_project_image;
            $data['project_page_about_project_image_position'] = $project->project_page_about_project_image_position;
            $data['project_why_id'] = $project->project_why_id;
            $data['why_choose_title'] = $project->why_choose_title;
            $data['why_choose_description'] = $project->why_choose_description;
            $data['project_map_id'] = $project->mapId;
            $data['project_map_lat'] = $project->lat;
            $data['project_map_lng'] = $project->lng;
            $data['project_facility_id'] = $project->pfId;
            $data['special_facilities_text'] = $project->special_facilities_text;
            $data['special_facilities'] = $project->special_facilities;
            $data['infrastructural_facilities_text'] = $project->infrastructural_facilities_text;
            $data['infrastructural_facilities'] = $project->infrastructural_facilities;
            $data['plot_accomodation_text'] = $project->plot_accomodation_text;
            $data['plot_accomodations'] = $project->plot_accomodations;
            $data['plot_accomodations_measure_by'] = $project->plot_accomodations_measure_by;
            $data['roads_text'] = $project->roads_text;
            $data['roads'] = $project->roads;
            $data['roads_measure_by'] = $project->roads_measure_by;
            $data;
        }
        
        return view('admin.project.edit-project-data', ['projectLists' => $projectLists, 'data' => $data]);
    }
    
    protected function projectImageUpdate($request)
    {
        if($request->hasfile('project_image'))
        {
        $image_name = $request->file('project_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->project_name) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/";
        $image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(340, 340)->save($image_url);
        return $image_url;
        }
        else
        {
            $image_url = $request->project_image_link;
            return $image_url;
        }
    }
    
    protected function projectAboutImageUpdate($request)
    {
        if($request->hasfile('project_page_about_project_image'))
        {
        $image_name = $request->file('project_page_about_project_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->project_name) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/";
        $image_about_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(340, 340)->save($image_about_url);
        return $image_about_url;
        }
        else
        {
            $image_about_url = $request->project_page_about_project_image_link;
            return $image_about_url;
        }
    }
    
    public function updateProject(Request $request)
    {
        
        $projectId = $request->project_id;
        $projectPublication = $request->publication_status;
        
        $image_url = $this->projectImageUpdate($request);
        $image_about_url = $this->projectAboutImageUpdate($request);

        $projectDetails = Project::find($projectId);
        $projectDetails->project_name = $request->project_name;
        $projectDetails->project_slug = $request->project_slug;
        $projectDetails->project_description = $request->project_description;
        $projectDetails->project_type = $request->project_type;
        $projectDetails->project_status = $request->project_status;
        $projectDetails->project_location = $request->project_location;
        $projectDetails->project_image = $image_url;
        $projectDetails->publication_status = $projectPublication;
        $projectDetails->save();
        
        $projectSection = MapLocation::find($request->project_map_id);
        $projectSection->project_id = $projectId;
        $projectSection->lat = $request->lat;
        $projectSection->lng = $request->lng;
        $projectSection->publication_status = $projectPublication;
        $projectSection->save();
        
        $projectAbout = AboutProject::find($request->project_about_id);
        $projectAbout->project_id = $projectId;
        $projectAbout->project_page_about_project_title = $request->project_page_about_project_title;
        $projectAbout->project_page_about_project_description = $request->project_page_about_project_description;
        $projectAbout->project_page_about_project_image = $image_about_url;
        $projectAbout->project_page_about_project_image_position = $request->project_page_about_project_image_position;
        $projectAbout->save();
        
        $projectFacilities = ProjectFacility::find($request->project_facility_id);
        $projectFacilities->project_id = $projectId;
        $projectFacilities->special_facilities_text = $request->special_facilities_text;
        $projectFacilities->special_facilities = $request->special_facilities;
        $projectFacilities->infrastructural_facilities_text = $request->infrastructural_facilities_text;
        $projectFacilities->infrastructural_facilities = $request->infrastructural_facilities;
        $projectFacilities->plot_accomodation_text = $request->plot_accomodation_text;
        $projectFacilities->plot_accomodations = $request->plot_accomodations;
        $projectFacilities->plot_accomodations_measure_by = $request->plot_accomodations_measure_by;
        $projectFacilities->roads_text = $request->roads_text;
        $projectFacilities->roads = $request->roads;
        $projectFacilities->roads_measure_by = $request->roads_measure_by;
        $projectFacilities->save();
        
        $projectWhyChoose = ProjectWhyChoose::find($request->project_why_id);
        $projectWhyChoose->project_id = $projectId;
        $projectWhyChoose->why_choose_title = $request->why_choose_title;
        $projectWhyChoose->why_choose_description = $request->why_choose_description;
        $projectWhyChoose->save();
        
        $notification = array(
        'message' => 'Project Updated successfully!',
        'alert-type' => 'success'
            );

        return back()->with($notification);
    }
    
    public function deleteProject($id)
    {
        $projectDetails = Project::find($id);
        $projectDetails->delete();
        
        return back();
    }

    public function addBrochure()
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        return view('admin.project.add-brochure', ['projectLists' => $projectLists]);
    }
    
    protected function uploadBrochure($request)
    {
        $image_name = $request->file('brochure');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "brochures/";
        $brochure_url = $image_save_directory . $image_full_name;
        $image_name->move($image_save_directory, $image_full_name);
        
        return $brochure_url;
    }
    
    public function saveBrochure(Request $request)
    {
        $brochure_url = $this->uploadBrochure($request);

        $brochureDetails = new Brochure();
        $brochureDetails->project_id = $request->project_id;
        $brochureDetails->brochure = $brochure_url;
        $brochureDetails->save();

        $notification = array(
            'message' => "Brochure added Successfully",
            'alert-type' => 'success'
        );

        return back()->with($notification);
    } 
}
