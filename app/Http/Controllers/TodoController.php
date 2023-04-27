<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Inertia\Inertia;
use App\Models\Customer;
use Illuminate\Support\Facades\Request;

class TodoController extends Controller
{
    public function index(Customer $customer)
    {
        return Inertia::render('todos/Index', [
            'customer' => $customer,
            'todos' => Todo::latest()->get()->map(function ($todo) {
                return [
                    'id' => $todo->id,
                    'todo' => $todo->todo,
                    'user_id' => $todo->user_id,
                    'created_at' => $todo->created_at->format('y/m/d'),
                    'created_atago' => $todo->created_at->diffForHumans(),
                ];
            })
        ]);
    }
    public function store($id)
    {
        $formFields = Request::validate([
            'todo' => ['required'],
        ]);
        $formFields['user_id'] = auth()->id();
        $formFields['customer_id'] = $id;
        Todo::create(
            $formFields
        );
        return back();
    }
    public function destroy(Todo $todo)
    {
        $todo->delete();
        return back()->with('success', 'deleted successfully');
    }
}
