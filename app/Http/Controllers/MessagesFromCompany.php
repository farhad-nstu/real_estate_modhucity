<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CompanyMessage;
use Image;

class MessagesFromCompany extends Controller
{
    public function mdMsg()
    {
        $data['showMsg'] = CompanyMessage::where(['publication_status' => 1])->where(['position' => 'md'])->get();
        
        foreach($data['showMsg'] as $msg)
        {
            $data['cm_name'] = $msg->cm_name;
            $data['cm_message'] = $msg->cm_message;
            $data['position'] = $msg->position;
            $data;
        }
        
        return view('frontEnd.pages.message-of-md', ['data' => $data]);
    }
    
    public function chairmanMsg()
    {
        $data['showMsg'] = CompanyMessage::where(['publication_status' => 1])->where(['position' => 'chairman'])->get();
        
        foreach($data['showMsg'] as $msg)
        {
            $data['cm_name'] = $msg->cm_name;
            $data['cm_message'] = $msg->cm_message;
            $data['position'] = $msg->position;
            $data;
        }
        
        return view('frontEnd.pages.message-of-chairman', ['data' => $data]);
    }
    
    public function addInfo()
    {
        return view('admin.company-messages.company-messages');
    }
    
    public function saveInfo(Request $request)
    {
        $saveMessage = new CompanyMessage();
        $saveMessage->position = $request->position;
        $saveMessage->cm_name = $request->cm_name;
        $saveMessage->cm_message = $request->cm_message;
        $saveMessage->publication_status = $request->publication_status;
        $saveMessage->save();
        
        return back();
    }
}
