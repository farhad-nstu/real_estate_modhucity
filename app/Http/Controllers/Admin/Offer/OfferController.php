<?php

namespace App\Http\Controllers\Admin\Offer;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Offer;
use App\Models\Admin\Project\Project;
use Image;
use DB;

class OfferController extends Controller
{
    public function addOffer()
    {
        $projectLists = Project::where(['publication_status' => 1])->get();
        return view('admin.offer-page.offer-create', ['projectLists' => $projectLists]);
    }
    
    protected function offerImage($request)
    {
        $image_name = $request->file('offer_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->offer_title) .'.'. end($new_file_name);
        $image_save_directory = "images/offer-images/";
        $image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(2480, 1630)->save($image_url);
        return $image_url;
    }
    
     protected function offerFrontendImage($request)
    {
        $image_name = $request->file('offer_frontEnd_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->offer_title) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/";
        $frontend_image_url = $image_save_directory . $image_full_name;
        $image_name->move($image_save_directory, $image_full_name);
        
        return $frontend_image_url;
    }

    public function saveOffer(Request $request)
    {
        $image_url = $this->offerImage($request);
        $frontend_image_url = $this->offerFrontendImage($request);
        $offerDetails = new Offer();
        $offerDetails->offer_image = $image_url;
        $offerDetails->offer_frontEnd_image = $frontend_image_url;
        $offerDetails->offer_title = $request->offer_title;
        $offerDetails->offer_description = $request->offer_description;
        $offerDetails->offer_project_url = $request->offer_project_url;
        $offerDetails->publication_status = $request->publication_status;
        $offerDetails->save();

        $notification = array(
        'message' => 'Offer Added successfully!',
        'alert-type' => 'success'
            );
        
        return back()->with($notification);
    }

    // public function manageFaq()
    // {
    //     $faqManage = Faq::where(['publication_status' => 1])->get();
    //     return view('admin.company-messages.manage-faq', ['faqManage' => $faqManage]);
    // }

    // public function editFaq($id)
    // {
    //     $faqEdit = Faq::find($id);
    //     return view('admin.company-messages.edit-faq', ['faqEdit' => $faqEdit]);
    // }

    // public function deleteFaq($id)
    // {
    //     $faqDelete = Faq::find($id);
    //     $faqDelete>delete();

    //     $notification = array(
    //         'message' => 'Faq Deleted successfully!',
    //         'alert-type' => 'info'
    //             );
            
    //     return back()->with($notification);
    // }

    // public function updateFaq(Request $request)
    // {
    //     $faqDetails = Faq::find($request->id);
    //     $faqDetails->question = $request->question;
    //     $faqDetails->answer = $request->answer;
    //     $faqDetails->publication_status = $request->publication_status;
    //     $faqDetails->save();
        
    //     $notification = array(
    //     'message' => 'Faq Updated successfully!',
    //     'alert-type' => 'success'
    //         );
        
    //     return redirect('admin/faq/mange-faq')->with($notification);
    // }
}
