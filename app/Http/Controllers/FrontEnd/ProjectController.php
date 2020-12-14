<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Project\Project;
use App\Models\Admin\Project\AboutProject;
use App\Models\Admin\Project\FloorPlan;
use App\Models\Admin\Project\ProjectSlider;
use App\Models\Admin\Project\Section;
use App\Models\Admin\Project\ProjectWhyChoose;
use App\Models\Admin\Project\Brochure;
use App\Models\Gallary;
use App\Models\Admin\Project\MapLocation;
use App\Models\Admin\Project\ProjectFacility;
use DB;

class ProjectController extends Controller
{
    public function projectShow($slug)
    {
        $projectDetails['project_details'] = Project::where(['project_slug' => $slug])->get();
        
        foreach($projectDetails['project_details'] as $project)
        {
            $projectData['project_name'] = $project->project_name;
            $projectData['id'] = $project->id;
            $projectData['project_page_about_project_title'] = $project->project_page_about_project_title;
            $projectData['project_page_about_project_description'] = $project->project_page_about_project_description;
            $projectData['project_page_about_project_image'] = $project->project_page_about_project_image;
            $projectData['project_page_about_project_image_position'] = $project->project_page_about_project_image_position;
            $projectData['project_page_plan_title'] = $project->project_page_plan_title;
            $projectData['project_page_plan_image'] = $project->project_page_plan_image;
            $projectData;
        }

        $projectId = $projectData['id'];

        $projectDetails['about'] = AboutProject::where(['project_id' => $projectId])->get();

        foreach($projectDetails['about'] as $project)
        {
            $projectData['about_project_id'] = $project->project_id;
            $projectData['project_page_about_project_title'] = $project->project_page_about_project_title;
            $projectData['project_page_about_project_description'] = $project->project_page_about_project_description;
            $projectData['project_page_about_project_image'] = $project->project_page_about_project_image;
            $projectData['project_page_about_project_image_position'] = $project->project_page_about_project_image_position;
        }

        $projectDetails['section'] = Section::where(['project_id' => $projectId])->get()->sortBy('section_position');

        $projectDetails['gallery'] = Gallary::where(['project_id' => $projectId])->get();
        $projectDetails['brochures'] = Brochure::where(['project_id' => $projectId])->get();

        $projectDetails['sliders'] = ProjectSlider::where(['project_id' => $projectId])
                                                    ->where(['publication_status' => 1])
                                                    ->get()
                                                    ->sortBy('project_slider_image_position');

        $projectDetails['plan'] = FloorPlan::where(['project_id' => $projectId])->get();

        foreach($projectDetails['plan'] as $project)
        {
            $projectData['plan_project_id'] = $project->project_id;
            $projectData['plan_name'] = $project->plan_name;
            $projectData['plan_map_image'] = $project->plan_map_image;
        }
        
        $projectDetails['whyus'] = ProjectWhyChoose::where(['project_id' => $projectId])->where(['publication_Status' => 1])->get();

        foreach($projectDetails['whyus'] as $project)
        {
            $projectDetails['why_choose_title'] = $project->why_choose_title;
            $projectDetails['why_choose_description'] = $project->why_choose_description;
            $projectDetails;
        }
        
         $projectDetails['maps'] = DB::table('map_locations')
                   ->join('projects', 'projects.id', '=', 'map_locations.project_id')
                   ->select('projects.project_name', 'projects.project_description', 'projects.project_location', 'map_locations.*')
                   ->where('map_locations.project_id', $projectId)
                   ->get();
        
        foreach($projectDetails['maps'] as $map)
        {
            $projectDetails['lat'] = $map->lat;
            $projectDetails['lng'] = $map->lng;
            $projectDetails['project_name'] = $map->project_name;
            $projectDetails['project_description'] = $map->project_description;
            $projectDetails['project_location'] = $map->project_location;
            $projectDetails;
        }
                   
        $projectDetails['facilities'] = ProjectFacility::where(['project_id' => $projectId])->get();
        
        foreach($projectDetails['facilities'] as $facility)
        {
            $projectDetails['special_facilities_text'] = $facility->special_facilities_text;
            $projectDetails['special_facilities'] = explode(',', $facility->special_facilities);
            $projectDetails['infrastructural_facilities_text'] = $facility->infrastructural_facilities_text;
            $projectDetails['infrastructural_facilities'] = explode(',', $facility->infrastructural_facilities);
            $projectDetails['plot_accomodation_text'] = $facility->plot_accomodation_text;
            $projectDetails['plot_accomodations'] = explode(',', $facility->plot_accomodations);
            $projectDetails['plot_accomodations_measure_by'] = $facility->plot_accomodations_measure_by;
            $projectDetails['roads_text'] = $facility->roads_text;
            $projectDetails['roads'] = explode(',', $facility->roads);
            $projectDetails['roads_measure_by'] = $facility->roads_measure_by;
            $projectDetails;
        }
                   
        return view('frontEnd.project.project-home', ['projectData' => $projectData, 'projectDetails' => $projectDetails]);
    }
    
    public function projectList()
    {
        return view('frontEnd.project.project-list');
    }
    
    public function projectTypeStatus($type, $status)
    {
        $data['projectDetails'] = DB::table('project_facilities')
                  ->join('projects', 'projects.id', '=', 'project_facilities.project_id')
                  ->select('projects.*', 'project_facilities.*')
                  ->where('projects.project_type', $type)
                  ->where('projects.project_status', $status)
                  ->get();
        
        foreach($data['projectDetails'] as $project)
        {
            $data['project_type'] = $project->project_type;
            $data['project_status'] = $project->project_status;
            $data;
        }
        
        return view('frontEnd.project.project-type-status', ['data' => $data]);
    }
}
