<?php

namespace App\Http\Controllers;

use App\Models\Admin\ContactInformation;
use Illuminate\Http\Request;

class ContactInformationController extends Controller
{
    public function contactInfoAdd()
    {
        $contactInfos = ContactInformation::all();
        return view('admin.contact-information.contact-information-add', ['contactInfos' => $contactInfos]);
    }

    public function contactInfoSave(Request $request)
    {
       $contactInformations = ContactInformation::find($request->id);
       $contactInformations->phone_1 = $request->phone_1;
       $contactInformations->phone_2 = $request->phone_2;
       $contactInformations->corporate_office = $request->corporate_office;
       $contactInformations->office_address = $request->office_address;
       $contactInformations->email = $request->email;
       $contactInformations->linkedin = $request->linkedin;
       $contactInformations->facebook = $request->facebook;
       $contactInformations->twitter = $request->twitter;
       $contactInformations->whatsapp = $request->whatsapp;
       $contactInformations->youtube = $request->youtube;
       $contactInformations->save();

       return redirect('admin/contact-info');
    }
}
