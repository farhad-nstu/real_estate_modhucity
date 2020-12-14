<?php

namespace App\Http\Controllers\Admin\Faq;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Faq;

class FaqController extends Controller
{
    public function addFaq()
    {
        return view('admin.company-messages.faq-add');
    }
    
    public function saveFaq(Request $request)
    {
        $faqDetails = new Faq();
        $faqDetails->question = $request->question;
        $faqDetails->answer = $request->answer;
        $faqDetails->publication_status = $request->publication_status;
        $faqDetails->save();
        
        $notification = array(
        'message' => 'Faq Added successfully!',
        'alert-type' => 'success'
            );
        
        return back()->with($notification);
    }

    public function manageFaq()
    {
        $faqManage = Faq::where(['publication_status' => 1])->get();
        return view('admin.company-messages.manage-faq', ['faqManage' => $faqManage]);
    }

    public function editFaq($id)
    {
        $faqEdit = Faq::find($id);
        return view('admin.company-messages.edit-faq', ['faqEdit' => $faqEdit]);
    }

    public function deleteFaq($id)
    {
        $faqDelete = Faq::find($id);
        $faqDelete>delete();

        $notification = array(
            'message' => 'Faq Deleted successfully!',
            'alert-type' => 'info'
                );
            
        return back()->with($notification);
    }

    public function updateFaq(Request $request)
    {
        $faqDetails = Faq::find($request->id);
        $faqDetails->question = $request->question;
        $faqDetails->answer = $request->answer;
        $faqDetails->publication_status = $request->publication_status;
        $faqDetails->save();
        
        $notification = array(
        'message' => 'Faq Updated successfully!',
        'alert-type' => 'success'
            );
        
        return redirect('admin/faq/mange-faq')->with($notification);
    }
}
