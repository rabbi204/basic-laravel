<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // show contact admin page
    public function contactAdmin()
    {
        $contacts = Contact::latest() -> get();
       return view('admin.contact.index', compact('contacts'));
    }
    // admin add controller
    public function adminAddContract()
    {
        return view('admin.contact.create');
    }
    // admin store contact
    public function adminContactStore(Request $request)
    {
        Contact::create([
            'address'      => $request -> address,
            'email'      => $request -> email,
            'phone'      => $request -> phone
        ]);
        return redirect() -> route('admin.contact') -> with('success', 'Contact added successful');
    }
    // admin contact edit
    public function adminContactEdit($id)
    {
        $contacts = Contact::find($id);
        return view('admin.contact.edit', compact('contacts'));
    }
    // update admin contact
    public function adminContactUpdate(Request $request )
    {
        $id = $request -> id;
        Contact::find($id) -> update([
            'address'      => $request -> address,
            'email'      => $request -> email,
            'phone'      => $request -> phone
        ]);
        return redirect() -> back() -> with('success', 'Contact updated successful');
    }
    // delete admin contact 
    public function adminContactDelete($id)
    {
        $contacts = Contact::find($id);
        $contacts -> delete();
        return redirect() -> back() -> with('success', 'Contact deleted successful');
    }
    /**
     *  home contact page show 
     */
    public function contact()
    {
        $contacts = Contact::all() -> first();
       return view('pages.contact', compact('contacts'));
    }
    /**
     *  home contact send message
     */
    public function contactForm(Request $request)
    {
        ContactForm::create([
            'name'      => $request -> name,
            'email'      => $request -> email,
            'subject'      => $request -> subject,
            'message'      => $request -> message
        ]);
        return redirect() -> back() -> with('success', 'Your message send successfully');
    }
    /**
     *  admin message
     */
    public function adminMessage()
    {
        $messages = ContactForm::all();
       return view('admin.contact.message', compact('messages'));
    }
    /**
     *  admin message delete
     */
    public function adminMessageDelete($id)
    {
        $messages = ContactForm::find($id);
        $messages -> delete();
        return redirect() -> back() -> with('success', 'Message deleted successful');
    }
}
