<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use App\Mail\ContactUsMail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function contact()
    {
        return view('contact');
    }

    public function sendMail(ContactUsRequest $request)
    {
        $data = $request->validated();

        try {
            // Send Mail
            $mailData = [
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'enquiry_id' => $request->input('enquiry_id'),
                'message' => $request->input('message'),
            ];

            // Determine the email based on enquiry_id
            $recipientEmail = $this->getRecipientEmail($request->input('enquiry_id'));

            // Send email
            Mail::to($recipientEmail)->send(new ContactUsMail($mailData));

            return redirect()->route('contact')->with('message', 'Thank you for your interest. We will get back to you within 24 hours.');
        } catch (\Exception $ex) {
            return redirect()->back()->with('error', 'Something Went Wrong  - ' . $ex->getMessage());
        }
    }

    private function getRecipientEmail($enquiryId)
    {
        // Determine the email recipient based on the enquiry_id
        switch ($enquiryId) {
            case 1: // Arvos
            case 2: // RSB
            case 3: // Catalyst
                return 'shailesh.bade@oke.co.in';
            case 4: // Battery Manufacturing
                return 'sales@oke.co.in';
            default:
                return 'default-email@oke.co.in'; // Add a default email or handle error
        }
        // Add more cases as needed for other enquiry_ids
    }
}
