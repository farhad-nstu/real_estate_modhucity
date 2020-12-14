<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Career;
use App\CareerNews;
use Image;

class CareerController extends Controller
{
    public function index()
    {
        $careerNews = CareerNews::all();
        return view('frontEnd.pages.career', ['careerNews' => $careerNews]);
    }
    
    public function careerIndex()
    {
        return view('admin.career.career-add');
    }
    
    public function careerManage()
    {
        $careerNews = CareerNews::all();
        return view('admin.career.career-manage', ['careerNews' => $careerNews]);
    }
    
    public function careerEdit($id)
    {
        $career = CareerNews::findOrFail($id);
        return view('admin.career.career-edit', compact('career'));
    }
    
    public function careerDelete($id)
    {
        $career = CareerNews::findOrFail($id);
        $career->delete();
        return back();
    }
    
    protected function careerImage($request)
    {
        $image_name = $request->file('picture');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->role) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/career-images/";
        $career_image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->save($career_image_url);
        return $career_image_url;
    }
    
    public function careerAdd(Request $request)
    {
        $career_image_url = $this->careerImage($request);
        $careerNewsDetails = new CareerNews();
        $careerNewsDetails->role = $request->role;
        $careerNewsDetails->picture = $career_image_url;
        $careerNewsDetails->message = $request->message;
        $careerNewsDetails->save();
        
        
        $notification = array(
        'message' => 'Career Updated successfully!',
        'alert-type' => 'success'
            );

        return back()->with($notification);
    }
    
    protected function careerImageUpdate($request)
    {
        if($request->hasfile('picture'))
        {
            $image_name = $request->file('picture');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = preg_replace('/\s+/', '_', $request->role) . '_' . round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/career-images/";
            $career_update_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->save($career_update_image_url);
            return $career_update_image_url;
        }
        else
        {
            $career_update_image_url = $request->picture_url;
            return $career_update_image_url;
        }
        
    }
    
    public function careerUpdate(Request $request)
    {
        $career_update_image_url = $this->careerImageUpdate($request);
        
        $careerNewsDetails = CareerNews::find($request->id);
        $careerNewsDetails->role = $request->role;
        $careerNewsDetails->picture = $career_update_image_url;
        $careerNewsDetails->message = $request->message;
        $careerNewsDetails->save();
        
        
        $notification = array(
        'message' => 'Career Updated successfully!',
        'alert-type' => 'success'
            );

        return back()->with($notification);
    } 
    
    
    protected function uploadCv($request)
    {
        $image_name = $request->file('cv');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->cname) . '_' . round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "cv/";
        $image_url = $image_save_directory . $image_full_name;
        $image_name->move($image_save_directory, $image_full_name);
        
        return $image_url;
    }
    
    public function sendCv(Request $request)
    {
        $image_url = $this->uploadCv($request);
        $careerDetails = new Career();
        $careerDetails->cname = $request->cname;
        $careerDetails->cemail = $request->cemail;
        $careerDetails->cphone = $request->cphone;
        $careerDetails->cposition = $request->cposition;
        $careerDetails->cv = $image_url;
        $careerDetails->cmessage = $request->cmessage;
        $careerDetails->save();

        return back();
    } 
}
