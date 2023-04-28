<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use App\Models\Bills;
use Illuminate\Support\Facades\Request;

class BillsController extends Controller
{
    public function index()
    {
        return Inertia::render('bills/Index', [
            'bills' => Bills::latest()->paginate(6)->withQueryString(),
        ]);
    }
    public function create()
    {
        return Inertia::render('bills/Create');
    }
    public function store()
    {
        $formFields = Request::validate([
            'title' => ['required'],
            'nextduedate' => ['required'],
            'repeat' => ['required'],
            'currency' => ['required'],
            'amount' => ['required'],
            'payee' => ['required'],
        ]);
        $formFields['user_id'] = auth()->id();
        Bills::create($formFields);
        return redirect('/bills')->with('success', 'Customer Created Successfully');
    }
}
