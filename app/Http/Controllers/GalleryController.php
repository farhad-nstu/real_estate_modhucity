<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GallaryCategory;
use App\ImageGallary;
use Image;
use DB;

class GalleryController extends Controller
{
    
     public function showImage()
    {
        
        $galleries = DB::table('image_gallaries')
                  ->join('gallary_categories', 'gallary_categories.id', '=', 'image_gallaries.category_id')
                  ->select('image_gallaries.*', 'gallary_categories.name as name')
                  ->get();
        return view('frontEnd.pages.gallery', ['galleries' => $galleries]);
    }
    
    
     public function addImageCategory()
    {
        return view('admin.project.add-gallery-category');
    }
    
    public function saveImageCategory(Request $request)
    {
        $projectSection = new GallaryCategory();
        $projectSection->name = $request->name;
        $projectSection->save();

        return redirect()->back();
    }
    
    public function addImage()
    {
        $categoryLists = GallaryCategory::all();
        return view('admin.project.add-gallery', ['categoryLists' => $categoryLists]);
    }

    protected function projectGallaryImage($request)
    {
        $image_name = $request->file('image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/gallary-images/";
        $gallery_image = $image_save_directory . $image_full_name;
        Image::make($image_name)->save($gallery_image);
        return $gallery_image;
    }

    public function saveImage(Request $request)
    {
        $gallery_image = $this->projectGallaryImage($request);

        $projectSection = new ImageGallary();
        $projectSection->category_id = $request->category_id;
        $projectSection->publication_status = $request->publication_status;
        $projectSection->image = $gallery_image;
        $projectSection->save();

        return redirect()->back();
    }
}
