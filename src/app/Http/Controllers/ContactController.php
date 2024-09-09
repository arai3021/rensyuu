<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\contact;
use Illuminate\Http\Request;
use App\Models\Category;

class ContactController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function confirm(ContactRequest $request)
    {

        $contact = $request->all();
        $category = Category::find($request->category_id);

        return view('confirm', compact('contact', 'category'));
    }

    public function store(Request $request)
    {
        if ($request->has('back')) {
            return redirect('/')->withInput();
        }

        $request['tell'] = $request->tell_1 . $request->tell_2 . $request->tell_3;
        Contact::create(
            $request->only([
            'category_id',
            'name_first',
            'name_last',
            'gender',
            'email',
            'tell',
            'address',
            'building',
            'category_id',
            'detail'
        ])
    );

        return view('thanks');
    }
}
