<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class WebSubscriberController extends Controller
{
    public function store(Request $request) {
        $details = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
        ]);

        Subscriber::create($details);

        return redirect()->route('web.coupon')->with('message', 'You have subscribed successfully!')->with('status', 'success');
    }
}
