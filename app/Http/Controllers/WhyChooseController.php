<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WhyChoose;
use Image;

class WhyChooseController extends Controller
{
    public function index()
    {
        $basicWhyChoose = WhyChoose::all();
        return view('admin.contact-information.frontPage-setting', ['basicWhyChoose' => $basicWhyChoose]);
    }
    
    protected function whyChooseImage($request)
    {
        if($request->hasfile('wc_image'))
        {
            $image_name = $request->file('wc_image');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/project-images/";
            $image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->save($image_url);
            return $image_url;
        }
        else
        {
            $image_url = $request->wc_image;
            return $image_url;
        }
    }
    
    public function saveInfo(Request $request)
    {
        $image_url = $this->whyChooseImage($request);
        
        $saveDetails = WhyChoose::find($request->id);
        $saveDetails->wc_text = $request->wc_text;
        $saveDetails->wc_icon = $request->wc_icon;
        $saveDetails->wc_image = $image_url;
        $saveDetails->publication_status = $request->publication_status;
        $saveDetails->save();
        
        return back();
    }
}
