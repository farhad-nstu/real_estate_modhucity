<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contact()
    {
        return view("frontEnd.pages.contact");
    }
    public function sendMessage(Request $request)
    {
        $contactmessages = new Contact();
        $contactmessages->name = $request->name;
        $contactmessages->email = $request->email;
        $contactmessages->phone = $request->phone;
        $contactmessages->subject = $request->subject;
        $contactmessages->messages = $request->messages;
        $sendSuccessMsg = $contactmessages->save();
        
        $data = $contactmessages->toArray();

        Mail::send('frontEnd.contactMail', $data, function ($message) use ($data)
        {
            $message->to('info@modhucity.com');
            $message->subject($data['name'].' send you a contact request!');
        });


        if($sendSuccessMsg)
        {
            echo "success";
        }

        return redirect('/');
    } 
}
