<?php

namespace App\Http\Controllers;

use App\Jobs\ContactUsJob;
use App\Rules\Captcha;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

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
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'g-recaptcha-response' => new Captcha(),
        ]);

        $settings = Setting::select('contact_email')->first();

        //dispatch(new ContactUsJob($settings->contact_email, $request->all()));
        
        //Mail::to($settings->contact_email, env('COMPANY_NAME'))->send(new ContactMail($request->all()));
        
        $data = [
            'name'  => $request->name,
            'email'  => $request->email,
            'body_message' => $request->message
            ];

        Mail::send('emails.contact_mail', $data, function($message) use ($settings) {
            $message->to($settings->contact_email , "Cognitive Contact Us")
            ->subject('Cognitive IT Solutions - Contact Us');
        });

        // Store message
        $contact = Contact::create($request->except('g-recaptcha-response', '_token'));

        // return back
        return redirect()->back()->with('message', 'Your message has been received!')->with('status', 'success');
    }
}
