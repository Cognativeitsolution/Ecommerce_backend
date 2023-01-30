<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    // Redirect to contact us page
    protected function index() {
        return view('contact_us');
    }

    // Redirect to contact us page functionality
    protected function contact_us(Request $request) {
        // Validation
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|min:5',
            'g-recaptcha-response' => 'recaptcha',
        ]);

        $settings = Setting::select('contact_email')->first();

        //dispatch(new ContactUsJob($settings->contact_email, $request->all()));
        
        //Mail::to($settings->contact_email, env('COMPANY_NAME'))->send(new ContactMail($request->all()));
        
        // $data = [
        //     'name'  => $request->name,
        //     'email'  => $request->email,
        //     'body_message' => $request->message
        // ];

        // Mail::send('emails.contact_mail', $data, function($message) use ($settings, $request) {
        //     $message->to($settings->contact_email , "Ecommerce Contact Us")
        //     ->subject($request->subject);
        // });

        // Store message
        Contact::create($request->except('g-recaptcha-response', '_token'));

        // return back
        return redirect()->back()->with('message', 'Your message has been received!')->with('status', 'success');
    }
}
