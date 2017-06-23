<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationRequest;
use App\Mail\Welcome;
use App\User;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create()
    {
        return view('registration.create');
    }

    public function store(RegistrationRequest $request)
    {
        $request->persist();

        session()->flash('message', 'Thanks so much for signing up!');

        // Redirect to the homepage
        return redirect()->home();

//      alternative method for creating user

//        $user = User::create([
//            'name' => request('name'),
//            'email' => request('email'),
//            'password' => request('password')
//        ]);
//
//        // Sign them in
//        auth()->login($user);
//
//        \Mail::to($user)->send(new Welcome($user));

    }
}
