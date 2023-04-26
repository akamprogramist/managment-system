<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Customer;
use Illuminate\Support\Facades\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return Inertia::render('customer/Create');
    }
    public function store()
    {
        $formFields = Request::validate([
            'fullname' => ['required'],
            'email' => ['required'],
            'code' => ['required'],
            'secondaryemail' => ['required'],
            'displayname' => ['required'],
            'phone' => ['required'],
            'company' => ['required'],
            'currency' => ['required'],
            'businessnumber' => ['required'],
            'group' => ['required'],
            'type' => ['required'],
            'address' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'zip' => ['required'],
            'country' => ['required'],
        ]);

        if (Request::hasFile('image')) {
            $formFields['image'] = Request::file('image')->store('images', 'public');
        }

        Customer::create($formFields);
        return back()->with('success', 'Customer Created Successfully');
    }
}
