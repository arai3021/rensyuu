<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(['name_first', 'name_last', 'gender', 'email', 'phone', 'address', 'building_name', 'inquiry_type', 'textarea']);

        Contact::create($contact);

        return redirect('/');
    }
}
