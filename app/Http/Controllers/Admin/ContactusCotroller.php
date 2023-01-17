<?php

namespace App\Http\Controllers\Admin;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactusCotroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:contact-list|contact-create|contact-edit|contact-delete', ['only' => ['index','store']]);
        $this->middleware('permission:contact-create', ['only' => ['create','store']]);
        $this->middleware('permission:contact-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:contact-delete', ['only' => ['destroy']]);

    }
    public function index() {
        $search = request('search');

        if (!empty($search)) {
            $contact_us = Contact::where('contacts.name', 'like', '%'.$search.'%')
                ->orWhere('contacts.email', 'like', '%'.$search.'%')
                ->orWhere('contacts.message', 'like', '%'.$search.'%')
                ->orderBy('contacts.id','DESC')
                ->paginate(10);
            return view('contact_us.index', compact('contact_us') );
        }else{

            $contact_us = Contact::orderBy('contacts.id','DESC')->paginate(15);

            if($contact_us != false){
                return view('contact_us.index', compact('contact_us') );
            }else{
                abort(404);
            }
        }
    }

    public function show($id) {
        $contact_us = Contact::whereId($id)->first();

        if ($contact_us != false) {
            return view('contact_us.show', compact('contact_us'));
        } else {
            abort(404);
        }
    }
    
    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect()->route('contactus.home')->with('success', 'Record Deleted !');
    }
    
    public function multi_delete(Request $request)
    {
        $ids = $request->ids;
        foreach ($ids as $id) {
            contact::findOrFail($id)->delete();
        }
        return redirect()->route('contactus.home')->with('success', 'Record Delete!');
    }
    
}
