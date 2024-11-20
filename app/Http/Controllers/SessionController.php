<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\Validator;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        //validate
        //attempt to login the user
        //regenerate the session token
        //redirect

        $validatedAttributes = request()->validate([
            'email' => ['required','email'],
            'password' => ['required']
        ]);
        
        if (! Auth::attempt($validatedAttributes)) { // return boolean value
            throw ValidationException::withMessages(['email' => 'Sorry! you have no cridintials']);
        }         
        request()->session()->regenerate();
        return redirect('/');
    }

    public function destroy()
    {
        //return view('Auth.register');
        Auth::logout();
        return redirect('/');
    }
}
