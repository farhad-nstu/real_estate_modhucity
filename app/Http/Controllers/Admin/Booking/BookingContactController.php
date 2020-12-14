<?php

namespace App\Http\Controllers\Admin\Booking;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Booking\BookingContact;

class BookingContactController extends Controller
{

    public function index()
    {
        $ContactDetails = BookingContact::all();
        $ContactDetailsNew = BookingContact::where(['status' => 0])->get();
        $ContactDetailsContact = BookingContact::where(['status' => 1])->get();
        return view('admin.booking.booking-contact-show', ['ContactDetails' => $ContactDetails, 'ContactDetailsNew' => $ContactDetailsNew, 'ContactDetailsContact' => $ContactDetailsContact]);
    }
    
    public function sendBookimgMessage(Request $request)
    {
        $bContactDetails = new BookingContact();
        $bContactDetails->name = $request->name;
        $bContactDetails->email = $request->email;
        $bContactDetails->phone = $request->phone;
        $bContactDetails->profession = $request->profession;
        $bContactDetails->project_name = $request->project_name;
        $bContactDetails->message = $request->message;
        $bContactDetails->save();
        
        return redirect('/');
    }
    
    public function updateStatus($id)
    {
        $bContactDetails = BookingContact::find($id);
        $bContactDetails->status = 1;
        $bContactDetails->save();
        
        return back();
    }

}
