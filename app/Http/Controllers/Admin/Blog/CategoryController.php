<?php

namespace App\Http\Controllers\Admin\Blog;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Blog\Category;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('admin.blog.category-add');
    }

    public function saveCategory(Request $request)
    {
        $categoryDetails = new Category();
        $categoryDetails->category_name = $request->category_name;
        $categoryDetails->category_slug = $request->category_slug;
        $categoryDetails->category_description = $request->category_description;
        $categoryDetails->publication_status = $request->publication_status;
        $categoryDetails->save();

        return redirect('/admin/category/category-add');
    }
}
