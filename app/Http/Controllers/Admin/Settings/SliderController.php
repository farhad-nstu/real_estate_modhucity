<?php

namespace App\Http\Controllers\Admin\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Settings\Slider;
use Intervention\Image\Facades\Image;

class SliderController extends Controller
{
    public function addSliders()
    {
        return view('admin.settings.add-sliders');
    }

    protected function sliderImage($request)
    {
        $image_name = $request->file('slider_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $new_file_name[0]) .'.'. end($new_file_name);
        $image_save_directory = "images/slider-images/";
        $image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(2480, 1630)->save($image_url);
        return $image_url;
    }

    public function saveSliders(Request $request)
    {
        $image_url = $this->sliderImage($request);
        $slidersDetails = new Slider();
        $slidersDetails->slider_image = $image_url;
        $slidersDetails->slider_image_serial = $request->slider_image_serial;
        $slidersDetails->slider_image_link = $request->slider_image_link;
        $slidersDetails->publication_status = $request->publication_status;
        $slidersDetails->save();

        return redirect()->back();
    }

    public function manageSliders()
    {
        $sliderImageDetails = Slider::all();
        return view('admin.settings.manage-sliders', ['sliderImageDetails' => $sliderImageDetails]);
    }
    
    public function publishedSliders($id)
    {
        $sliderPublish = Slider::find($id);
        $sliderPublish->publication_status = 1;
        $sliderPublish->save();
        
        return redirect('/admin/settings/sliders-manage');
    }
    
    public function unpublishedSliders($id)
    {
        $sliderPublish = Slider::find($id);
        $sliderPublish->publication_status = 0;
        $sliderPublish->save();
        
        return redirect('/admin/settings/sliders-manage');
    }
    
    public function editSliders($id)
    {
        $sliderDetails = Slider::where(['id' => $id])->get();
        
        return view('admin.settings.edit-sliders', ['sliderDetails' => $sliderDetails]);
    }
    
    protected function updateSliderImage($request)
    {
        $image_name = $request->file('slider_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $new_file_name[0]) .'.'. end($new_file_name);
        $image_save_directory = "images/slider-images/";
        $update_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(2480, 1630)->save($update_image_url);
        return $update_image_url;
    }
    
    public function updateSlidersImage(Request $request)
    {
        $update_image_url = $this->sliderImage($request);
        $slidersDetails = Slider::find($request->id);
        $slidersDetails->slider_image = $update_image_url;
        $slidersDetails->save();

        return redirect('/admin/settings/sliders-manage');
    }
    
     public function updateSliders(Request $request)
    {
        $slidersDetails = Slider::find($request->id);
        $slidersDetails->slider_image_serial = $request->slider_image_serial;
        $slidersDetails->slider_image_link = $request->slider_image_link;
        $slidersDetails->publication_status = $request->publication_status;
        $slidersDetails->save();

        return redirect('/admin/settings/sliders-manage');
    }
    
    public function deleteSliders($id)
    {
        $sliderPublish = Slider::find($id);
        $sliderPublish->delete();
        
        return redirect('/admin/settings/sliders-manage');
    }
}
