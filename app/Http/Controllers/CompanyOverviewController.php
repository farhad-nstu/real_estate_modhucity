<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyOverview;
use App\Models\Admin\Settings\Basic;
use Image;
;

class CompanyOverviewController extends Controller
{
    public function index()
    {
        $basicInfo = Basic::all();
        $aboutCompany = CompanyOverview::all();
        return view('admin.contact-information.company-overview', ['basicInfo' => $basicInfo, 'aboutCompany' => $aboutCompany]);
    }
    
    protected function aboutImage1($request)
    {
        if($request->hasfile('about_slider_1'))
        {
            $image_name = $request->file('about_slider_1');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/why-choose-image/about/";
            $about_slider_1_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(1280, 720)->save($about_slider_1_image_url);
            return $about_slider_1_image_url;
        }
        else
        {
            $about_slider_1_image_url = $request->about_slider_1_link;
            return $about_slider_1_image_url;
        }
    }
    
    protected function aboutImage2($request)
    {
        if($request->hasfile('about_slider_2'))
        {
            $image_name = $request->file('about_slider_2');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/why-choose-image/about/";
            $about_slider_2_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(1280, 720)->save($about_slider_2_image_url);
            return $about_slider_2_image_url;
        }
        else
        {
            $about_slider_2_image_url = $request->about_slider_2_link;
            return $about_slider_2_image_url;
        }
    }
    
    protected function aboutImage3($request)
    {
        if($request->hasfile('about_slider_3'))
        {
            $image_name = $request->file('about_slider_3');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/why-choose-image/about/";
            $about_slider_3_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(1280, 720)->save($about_slider_3_image_url);
            return $about_slider_3_image_url;
        }
        else
        {
            $about_slider_3_image_url = $request->about_slider_3_link;
            return $about_slider_3_image_url;
        }
    }
    
    public function aboutImageUpdate(Request $request)
    {
        $about_slider_1_image_url = $this->aboutImage1($request);
        $about_slider_2_image_url = $this->aboutImage2($request);
        $about_slider_3_image_url = $this->aboutImage3($request);
        
        $aboutImage = CompanyOverview::find($request->id);
        
        $aboutImage->about_slider_1 = $about_slider_1_image_url;
        $aboutImage->about_slider_2 = $about_slider_2_image_url;
        $aboutImage->about_slider_3 = $about_slider_3_image_url;
        
        $aboutImage->save();
        
        return back();
    }
    
    public function aboutUpdate(Request $request)
    {
        $updateAbout = Basic::find($request->id);
        $updateAbout->about_site = $request->about_site;
        $updateAbout->save();
        
        return back();
    }
    
    public function companyInfo()
    {
        $companyInfo = CompanyOverview::all();
        
        return view('admin.contact-information.company-info', ['companyInfo' => $companyInfo]);
    }
    
    public function companyInfoUpdate(Request $request)
    {
        $companyInfo = CompanyOverview::find($request->id);
        
        $companyInfo->experience = $request->experience;
        $companyInfo->portfolio = $request->portfolio;
        $companyInfo->resident = $request->resident;
        $companyInfo->project = $request->project;
        $companyInfo->mission = $request->mission;
        $companyInfo->vision = $request->vision;
        $companyInfo->save();
        
        return back();
    }
}
