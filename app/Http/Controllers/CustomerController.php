<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return Inertia::render('customer/Create');
    }
}
