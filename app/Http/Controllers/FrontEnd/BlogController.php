<?php

namespace App\Http\Controllers\FrontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\Blog;
use App\Models\Admin\Blog\Category;
use App\Models\Admin\Blog\BlogComment;
use DB;

class BlogController extends Controller
{
    public function index()
    {
        $blogDetails = Blog::paginate(15);
        $blogSidebar = Blog::all()->take(5);
        $categoryList = Category::all();
        return view('frontEnd.blog.blog-show', ['blogDetails' => $blogDetails, 'blogSidebar' => $blogSidebar, 'categoryList' => $categoryList]);
    }

    public function blogDetails($slug)
    {
        $blogDetails['details'] = Blog::where(['blog_slug' => $slug])->get();
        
        foreach($blogDetails['details'] as $blog)
        {
          $blogdata['id'] =  $blog->id;
          $blogdata['blog_slug'] =  $blog->blog_slug;
          $blogdata['title'] =  $blog->title;
          $blogdata['short_description'] =  $blog->short_description;
          $blogdata['details_description'] =  $blog->details_description;
          $blogdata['details_description'] =  $blog->details_description;
          $blogdata['feature_image'] =  $blog->feature_image;
          $blogdata['created_at'] =  $blog->created_at;
          $blogdata;
        };
        
        $blogID = $blogdata['id'];
        
        $commentDetails = BlogComment::where(['publication_status' => 1])->where(['blog_id' => $blogID])->get();
        
        $blogSidebar = Blog::all()->take(5);
        $categoryList = Category::all();
        return view('frontEnd.blog.blog-single', ['blogdata' => $blogdata, 'blogSidebar' => $blogSidebar, 'commentDetails' => $commentDetails, 'categoryList' => $categoryList]);
    }
    
    public function saveComment(Request $request)
    {
        $blogComment = new BlogComment();
        $blogComment->name = $request->name;
        $blogComment->blog_id = $request->blog_id;
        $blogComment->comment = $request->comment;
        $blogComment->picture = 'images/blog-images/comment/user.png';
        $blogComment->publication_status = 0;
        $blogComment->save();
        
        return back();
    }
    
    public function blogShowByCategory($slug)
    {
        $blogDatas = DB::table('blogs')
                       ->join('categories', 'categories.id', '=', 'blogs.category_id')
                       ->select('categories.category_name', 'categories.category_description', 'categories.category_slug', 'blogs.*')
                       ->where('categories.category_slug', $slug)
                       ->get();
                    
        $blogSidebar = Blog::all()->take(5);
        $categoryList = Category::all();
                   
        foreach($blogDatas as $blog)
        {
            $data['categoryId'] = $blog->category_id;
            $data['category_name'] = $blog->category_name;
            $data['category_description'] = $blog->category_description;
            $data;
        }
        
        $categoryId = $data['categoryId'];
        
         $blogDetails = Blog::where(['category_id' => $categoryId])->paginate(15);
                   
       return view('frontEnd.blog.category-show', ['data' => $data, 'blogDetails' => $blogDetails, 'blogSidebar' => $blogSidebar, 'categoryList' => $categoryList]);
       
    }
}
