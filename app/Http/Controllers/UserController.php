<?php

namespace App\Http\Controllers;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    public function create()
    {
        return Inertia::render('users/Register');
    }
    public function store()
    {
        $formFields = Request::validate([
            'name' => ['required'],
            'email' => ['required', 'email', Rule::unique('users')],
            'password' => 'required|confirmed',
        ]);
        $formFields['password'] = bcrypt($formFields['password']);
        $user = User::create($formFields);
        Auth::login($user);
        return to_route('customer')->with('success', 'Registered successfully');
    }
    public function logout()
    {
        Auth::logout();
        Request::session()->invalidate();
        Request::session()->regenerateToken();

        return to_route('register')->with('success', 'logged out successfully');
    }

    public function login()
    {
        return Inertia::render('users/Login');
    }
    public function authenticate()
    {
        $formFields = Request::validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        if (Auth::attempt($formFields)) {
            Request::session()->regenerate();
            return redirect('/')->with('success', 'logged in successfully');
        }
        return back()->withErrors(['error' => 'Invalid Credentials']);
    }

    // public function destroy(User $user)
    // {
    //     $user->delete();
    //     return redirect('/users/manage')->with('success', 'user deleted successfully');
    // }
}
