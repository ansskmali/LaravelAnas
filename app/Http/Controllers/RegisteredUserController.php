<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store()
    {
        //validate
        //create user in DB
        //log in
        //redirect
        $validatedAttributes = request()->validate([
            'name' => ['required'],
            'email' => ['required','email','max:255'],
            'password' => ['required',Password::min(6),'confirmed']
        ]);

        $user = User::create($validatedAttributes);

        Auth::login($user);

        return redirect('/jobs');

    }
}
