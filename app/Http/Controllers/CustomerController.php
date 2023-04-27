<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Customer;
use Illuminate\Support\Facades\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return Inertia::render('customers/Index', [
            'customers' => Customer::latest()->paginate(6)->withQueryString(),
        ]);
    }
    public function create()
    {
        return Inertia::render('customers/Create');
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
    public function edit(Customer $customer)
    {
        return Inertia::render('customers/Edit', [
            'customers' => [
                'id' => $customer->id,
                'fullname' => $customer->fullname,
                'email' => $customer->email,
                'code' => $customer->code,
                'secondaryemail' => $customer->secondaryemail,
                'displayname' => $customer->displayname,
                'phone' => $customer->phone,
                'company' => $customer->company,
                'currency' => $customer->currency,
                'businessnumber' => $customer->businessnumber,
                'group' => $customer->group,
                'type' => $customer->type,
                'owner' => $customer->owner,
                'address' => $customer->address,
                'city' => $customer->city,
                'state' => $customer->state,
                'zip' => $customer->zip,
                'country' => $customer->country,

            ],
        ]);
    }
    public function update(Customer $customer)
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

        $customer->update($formFields);
        return redirect('/customer')->with('success', 'Customer Created Successfully');
    }
    public function show(Customer $customer)
    {
        return Inertia::render('customers/Show', [
            'customer' => $customer,
        ]);
    }
    public function destroy(Customer $customer)
    {
        $customer->delete();
        return back()->with('success', 'deleted successfully');
    }
}
