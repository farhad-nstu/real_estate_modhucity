<?php

namespace App\Http\Controllers\Admin\Contact;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function contactMessage()
    {
        $contactMessages = Contact::where(['publication_status' => 1])->get()->sortByDesc('id');
        return view('admin.contact.inbox', ['contactMessages' => $contactMessages]);
    }

    public function contactMessageCount()
    {
        $contactMessagesCount = Contact::all();
        return view('admin.contact.inbox', ['contactMessagesCount' => $contactMessagesCount]);
    }

    public function showContactMessage($id)
    {
        $contactMessage = Contact::find($id);
        $contactMessage->status = 0;
        $contactMessage->save();
        return view('admin.contact.view', ['contactMessage' => $contactMessage]);
    }

    public function unreadContactMessage($id)
    {
        $unreadcontactMessage = Contact::find($id);
        $unreadcontactMessage->status = 1;
        $unreadcontactMessage->save();
        return redirect('/admin/contact-message');
    }

    public function trashContactMessages()
    {
        $trashcontactMessages = Contact::where(['publication_status' => 0])->get()->sortByDesc('id');
        return view('admin.contact.trash', ['trashcontacts' => $trashcontactMessages]);
    }

    public function trashContactMessage($id)
    {
        $trashcontactMessage = Contact::find($id);
        $trashcontactMessage->publication_status = 0;
        $trashcontactMessage->save();
        return redirect('/admin/contact-message-trash/');
    }

    public function trashRestoreContactMessage($id)
    {
        $trashrestorecontactMessage = Contact::find($id);
        $trashrestorecontactMessage->publication_status = 1;
        $trashrestorecontactMessage->save();
        return redirect('/admin/contact-message-trash/');
    }

    public function contactList()
    {
        $contactLists = Contact::all();
        return view('admin.contact.list', ['contactLists' => $contactLists]);
    }
}
