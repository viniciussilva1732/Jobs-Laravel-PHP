<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use App\Models\User;
use Illuminate\Support\Facades\Auth;



class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        // validate
        $validatedAttributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'], 
            'password' => ['required', Password::min(6), 'confirmed'], // password_confirmation
        ]);

        // create the user
        $user = User::create($validatedAttributes);

        // log in
        Auth::login($user);

        // redirect somewhere
        return redirect('/jobs');


    }
}
