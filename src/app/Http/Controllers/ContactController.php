<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        dd('a');
        return view('contact.index');
    }

    public function confirm(ContactRequest $request)
    {
        $inputs = $request->all();
        return view('contact.confirm', compact('inputs'));
    }

    public function thanks(ContactRequest $request)
    {
        $tel = $request->tel1 . $request->tel2 . $request->tel3;

        Contact::create([
            'category_id' => $request->category,
            'first_name'  => $request->first_name,
            'last_name'   => $request->last_name,
            'gender'      => $request->gender,
            'email'       => $request->email,
            'tel'         => $tel,
            'address'     => $request->address,
            'building'    => $request->building,
            'detail'      => $request->detail,
        ]);
        return view('contact.thanks');
    }
}
