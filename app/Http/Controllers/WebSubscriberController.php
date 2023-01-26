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

        $record = Subscriber::create($details);

        return redirect('/')->with('success', 'You have subscribed successfully!');
    }
}
