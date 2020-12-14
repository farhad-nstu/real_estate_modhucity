<?php

namespace App\Http\Controllers\Admin\Testimonial;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Portfolio\Portfolio;
use Intervention\Image\Facades\Image;

class PortfolioController extends Controller
{
    public function addTestimonial()
    {
        return view('admin.testimonial.add-testimonial');
    }

    protected function saveClientImage($request)
    {
        $image_name = $request->file('portfolio_client_image');
        $imageFullName = $image_name->getClientOriginalName();
        $new_file_name = explode('.', $imageFullName);
        $image_full_name = preg_replace('/\s+/', '_', $request->portfolio_client_name) . "." . end($new_file_name);
        $image_save_directory = "images/client-images/";
        $image_url = $image_save_directory . $image_full_name;
        Image::make($image_name)->resize(679, 877)->save($image_url);
        return $image_url;
    }

    public function saveTestimonial(Request $request)
    {
        $image_url = $this->saveClientImage($request);
        $portfolioDetails = new Portfolio();
        $portfolioDetails->portfolio_client_name = $request->portfolio_client_name;
        $portfolioDetails->portfolio_text = $request->portfolio_text;
        $portfolioDetails->portfolio_client_image = $image_url;
        $portfolioDetails->publication_status = $request->publication_status;
        $portfolioDetails->save();

        return redirect('/admin/testimonial/add-testimonial');
    }
    
    public function editTestimonial($id)
    {
        $testimonial = Portfolio::find($id);
        return view('admin.testimonial.edit-testimonial', ['testimonial' => $testimonial]);
    }

    protected function editClientImage($request)
    {
        if ($request->hasFile('portfolio_client_image')) 
        {
            $image_name = $request->file('portfolio_client_image');
            $imageFullName = $image_name->getClientOriginalName();
            $new_file_name = explode('.', $imageFullName);
            $image_full_name = preg_replace('/\s+/', '_', $request->portfolio_client_name) . "." . end($new_file_name);
            $image_save_directory = "images/client-images/";
            $update_image_url = $image_save_directory . $image_full_name;
            Image::make($image_name)->resize(679, 877)->save($update_image_url);
            return $update_image_url;
        }
        else
        {
            $update_image_url = $request->portfolio_client_image_link;
            return $update_image_url;
        }
    }

    public function updateTestimonial(Request $request)
    {
        $update_image_url = $this->editClientImage($request);
        $portfolioDetails = Portfolio::find($request->id);
        $portfolioDetails->portfolio_client_name = $request->portfolio_client_name;
        $portfolioDetails->portfolio_text = $request->portfolio_text;
        $portfolioDetails->portfolio_client_image = $update_image_url;
        $portfolioDetails->publication_status = $request->publication_status;
        $portfolioDetails->save();

        return redirect('/admin/testimonial/manage-testimonial');
    }

    public function manageTestimonial()
    {
        $testimonialManage = Portfolio::all();
        return view('admin.testimonial.manage-testimonial', ['testimonialManage' => $testimonialManage]);
    }
    
    public function deleteTestimonial($id)
    {
        $testimonial = Portfolio::find($id);
        $testimonial->delete();
        return back();
    }
}