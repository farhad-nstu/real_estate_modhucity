<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Project\Project;
use App\Models\Gallary;
use App\Models\Admin\Offer;
use App\Video;
use App\Award;
use App\Info;
use App\Concern;
use App\Faq;
use DB;
use Image;
use App\Mail\SendMail;

class MainController extends Controller
{
    public function index()
    {
        $mapData = DB::table('map_locations')
       ->join('projects', 'projects.id', '=', 'map_locations.project_id')
       ->select('projects.project_name', 'projects.project_description', 'map_locations.*')
       ->where('map_locations.publication_status', 1)
       ->get();
       
       $offerShowDetails = Offer::where(['publication_status' => 1])->get();
        
        $projectShowDetails = Project::all();
        return view('frontEnd.home',['projectShowDetails' => $projectShowDetails, 'mapData' => $mapData, 'offerShowDetails' => $offerShowDetails]);
    }
    
    
    public function storeInfo(Request $request)
    {
        $data = $request->all();
        $result = DB::table('infos')->insert($data);

        $message = "মোহাম্মদপুর এর পাশেই ১০০% রেডি ও নিষ্কন্টক প্লট বিক্রয় - 09639700400";
 
        $msg = urlencode($message);
        $sender = urlencode("Modhu City");
        $receiver = "88".$request->mobile;
        
        $url = "https://api.mobireach.com.bd/SendTextMessage?Username=modhu&Password=Abcd@1122&From=".$sender."&To=".$receiver."&Message=".$msg;
        $output =  file_get_contents($url);
        
        $email = $request->email;
        $data = array(
            'name' => $request->name,
            'message' => "Welcome To Our Modhu City!"
        );

        \Mail::to($email)->send(new SendMail($data)); 
        
        
        return Response()->json($output);

    }
    
    
    
    public function advancedSearch(Request $request)
    {
        $projectId = $request->project_id; //**Your selected option

        $projectKatha = DB::table('project_facilities')
       ->join('projects', 'projects.id', '=', 'project_facilities.project_id')
       ->select('projects.*', 'project_facilities.plot_accomodations')
       ->where('projects.id', $projectId)
       ->get();
       
       foreach($projectKatha as $project)
       {
           $projectKathas = $project->project_status;
           $projectKathass = $project->project_type;
           $projectKathas;
           $projectKathass;
          
       }
           
    return response()->json(['success' => true, 'projectKatha' => $projectKathas, 'projectKathas' => $projectKathass]);
    }
    
    public function award()
    {
        $awards = Award::where(['publication_status' => 1])->get();
        
        return view('frontEnd.pages.award', ['awards' => $awards]);
    }
    
    public function concern()
    {
        $concerns = Concern::where(['publication_status' => 1])->get();
        
        return view('frontEnd.pages.concern', ['concerns' => $concerns]);
    }
    
    public function concernShow($id)
    {
        $concerns = Concern::find($id);
        
        return view('frontEnd.pages.concern-list', ['concerns' => $concerns]);
    }

    public function faq()
    {
        $faqDetails = Faq::where(['publication_status' => 1])->get();

        return view('frontEnd.pages.faq', ['faqDetails' => $faqDetails]); 
    }
    
    public function about()
    {
        return view('frontEnd.pages.about');
    }

    public function galleryImage()
    {
        $galleryImages = Gallary::all();
        return view('frontEnd.pages.gallery', ['galleryImages' => $galleryImages]);
    }
    
     public function galleryVideo()
    {
        $videoDetails = Video::where(['publication_status' => 1])->get();
        return view('frontEnd.pages.video-gallery', ['videoDetails' => $videoDetails]);
    }
    
    public function addVideo()
    {
        return view('admin.project.add-video');
    }
    
    public function saveVideo(Request $request)
    {
        $videoDetails = new Video();
        $videoDetails->video_link = $request->video_link;
        $videoDetails->publication_status = $request->publication_status;
        $videoDetails->save();
        
        return back();
    }
    
    
    
     public function awardIndex()
    {
        return view('admin.award.award-add');
    }
    
     protected function awardImage($request)
    {
        $image_name = $request->file('award_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->award_title) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/";
        $award_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(225, 280)->save($award_image_url);
        return $award_image_url;
    }
    
    public function awardAdd(Request $request)
    {
        $award_image_url = $this->awardImage($request);
        
        $awardDetails = new Award();
        $awardDetails->award_title = $request->award_title;
        $awardDetails->description = $request->description;
        $awardDetails->image_position = $request->image_position;
        $awardDetails->award_image = $award_image_url;
        $awardDetails->publication_status = $request->publication_status;
        $awardDetails->save();
        
        return back();
    }
    
    public function awardManage()
    {
        $awardDetails = Award::all();
        return view('admin.award.award-manage', ['awardDetails' => $awardDetails]);
    }
    
    public function awardEdit($id)
    {
        $awardDetails = Award::find($id);
        return view('admin.award.award-edit', ['award' => $awardDetails]);
    }
    
    public function awardDelete($id)
    {
        $awardDetails = Award::find($id);
        $awardDetails->delete();
        return back();
    }
    
    protected function awardImageUpdate($request)
    {
        if($request->hasfile('award_image'))
        {
        $image_name = $request->file('award_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->award_title) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/project-images/";
        $award_update_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(225, 280)->save($award_update_image_url);
        return $award_update_image_url;
        }
        else
        {
            $award_update_image_url = $request->award_image_update;
            return $award_update_image_url;
        }
    }
    
    public function awardUpdate(Request $request)
    {
        $award_update_image_url = $this->awardImageUpdate($request);
        
        $awardDetails = Award::find($request->id);
        $awardDetails->award_title = $request->award_title;
        $awardDetails->description = $request->description;
        $awardDetails->image_position = $request->image_position;
        $awardDetails->award_image = $award_update_image_url;
        $awardDetails->publication_status = $request->publication_status;
        $awardDetails->save();
        
        return back();
    }
    
    public function concernIndex()
    {
        return view('admin.concern.concern-add');
    }
    
     protected function concernImage($request)
    {
        $image_name = $request->file('concern_photo');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->concern_title) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/concern-images/";
        $concern_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->save($concern_image_url);
        return $concern_image_url;
    }
    
    public function concernAdd(Request $request)
    {
        $concern_image_url = $this->concernImage($request);
        
        $concernDetails = new Concern();
        $concernDetails->concern_title = $request->concern_title;
        $concernDetails->concern_url = $request->concern_url;
        $concernDetails->concern_description = $request->concern_description;
        $concernDetails->concern_photo = $concern_image_url;
        $concernDetails->publication_status = $request->publication_status;
        $concernDetails->save();
        
        return back();
    }
    
    public function concernManage()
    {
        $concernDetails = Concern::all();
        return view('admin.concern.concern-manage', ['concernDetails' => $concernDetails]);
    }
    
    public function concernEdit($id)
    {
        $concernDetails = Concern::find($id);
        return view('admin.concern.concern-edit', ['concern' => $concernDetails]);
    }
    
    public function concernDelete($id)
    {
        $concernDetails = Concern::find($id);
        $concernDetails->delete();
        return back();
    }
    
    protected function concernImageUpdate($request)
    {
        if($request->hasfile('concern_photo'))
        {
        $image_name = $request->file('concern_photo');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->concern_title) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/concern-images/";
        $concern_update_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->save($concern_update_image_url);
        return $concern_update_image_url;
        }
        else
        {
            $concern_update_image_url = $request->concern_photo_url;
            return $concern_update_image_url;
        }
    }
    
    public function concernUpdate(Request $request)
    {
        $concern_update_image_url = $this->concernImageUpdate($request);
        
        $awardDetails = Concern::find($request->id);
        $awardDetails->concern_title = $request->concern_title;
        $awardDetails->concern_url = $request->concern_url;
        $awardDetails->concern_description = $request->concern_description;
        $awardDetails->concern_photo = $concern_update_image_url;
        $awardDetails->publication_status = $request->publication_status;
        $awardDetails->save();
        
        return back();
    }
}
