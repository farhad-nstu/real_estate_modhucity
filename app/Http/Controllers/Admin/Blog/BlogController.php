<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\Blog;
use App\Models\Admin\Blog\Category;
use Intervention\Image\Facades\Image;
use App\Models\Admin\Blog\BlogComment;

class BlogController extends Controller
{
    public function addBlog()
    {
        $categoryDetails = Category::where(['publication_Status' => 1])->get();
        return view('admin.blog.blog-add', ['categoryDetails' => $categoryDetails]);
    }

    protected function featureImageAdd($request)
    {
        $image_name = $request->file('feature_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = round(microtime(true)) . "." . end($new_file_name);
        $image_save_directory = "images/blog-images/";
        $image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(1280, 720)->save($image_url);
        return $image_url;
    }

     protected function blogExistenceCheck($request)
    {
        $blogUrls = Blog::all();
        return $blogUrls;
    }

    protected function blog_url($request)
    {
        $blogUrls = $this->blogExistenceCheck($request);
        $blog_title = strtolower($request->title);
        $blog_url = preg_replace('/\s+/', '-', $blog_title);
        foreach ($blogUrls as $blogUrl) {
            while ($blog_url == $blogUrl->blog_slug) {
                $blog_url = preg_replace('/\s+/', '-', $blog_title) . '-' . $blogUrl->id;
                continue;
                return $blog_url;
                break;
            };
        }
        return $blog_url;
    }


    protected function blogInfoSave($request, $blog_url, $image_url)
    {
        $blogDetails = new Blog();
        $blogDetails->category_id = $request->category_id;
        $blogDetails->title = $request->title;
        $blogDetails->blog_slug = $blog_url;
        $blogDetails->short_description = $request->short_description;
        $blogDetails->details_description = $request->details_description;
        $blogDetails->feature_image = $image_url;
        $blogDetails->save();
    }

    public function saveBlog(Request $request)
    {
        $blog_url = $this->blog_url($request);
        $image_url = $this->featureImageAdd($request);
        $this->blogInfoSave($request, $blog_url, $image_url);
        return redirect('/admin/blog/blog-add')->with('blogSave', 'Blog Save Successfully');
    }
    
    public function manageBlog()
    {
        $blogDetails = Blog::all();
        
        return view('admin.blog.blog-manage', ['blogDetails' => $blogDetails]);
    }
    
    public function editBlog($id)
    {
        $categoryDetails = Category::where(['publication_Status' => 1])->get();
        $blogDetail = Blog::find($id);
        return view('admin.blog.blog-edit', ['blogDetail' => $blogDetail, 'categoryDetails' => $categoryDetails]);
    }
    
    protected function featureImageEdit($request)
    {
       if($request->hasfile('feature_image'))
       {
            $image_name = $request->file('feature_image');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = round(microtime(true)) . "." . end($new_file_name);
            $image_save_directory = "images/blog-images/";
            $update_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(1280, 720)->save($update_image_url);
            return $update_image_url;
       }
       else
       {
           $update_image_url = $request->feature_image_link;
           return $update_image_url;
       }
    }
    
    public function updateBlog(Request $request)
    {
        $update_image_url = $this->featureImageEdit($request);
        
        $blogDetails = Blog::find($request->id);
        $blogDetails->category_id = $request->category_id;
        $blogDetails->title = $request->title;
        $blogDetails->blog_slug = $request->blog_slug;
        $blogDetails->short_description = $request->short_description;
        $blogDetails->details_description = $request->details_description;
        $blogDetails->feature_image = $update_image_url;
        $blogDetails->save();
        
        return redirect('/admin/blog/blog-manage');
        
    }
    
    public function deleteBlog($id)
    {
        $blogDetail = Blog::find($id);
        $blogDetail->delete();
        return back();
    }
    
    public function showComment()
    {
        $commentDetails = BlogComment::all();
        return view('admin.blog.modarate-comment', ['commentDetails' => $commentDetails]);
    }
    
    public function publishComment($id)
    {
        $commentDetails = BlogComment::find($id);
        $commentDetails->publication_status = 1;
        $commentDetails->save();
        return back();
    }
    
    public function UnpublishComment($id)
    {
        $commentDetails = BlogComment::find($id);
        $commentDetails->publication_status = 0;
        $commentDetails->save();
        return back();
    }
}
