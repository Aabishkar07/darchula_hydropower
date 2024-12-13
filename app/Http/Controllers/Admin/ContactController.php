<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Inquiry;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::latest()->get();
        return view('admin.contact.index', compact("contacts"));
    }

    public function inquiry()
    {
        $inquirys = Inquiry::latest()->get();
        return view('admin.contact.inquiry', compact("inquirys"));
    }
}