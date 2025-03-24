<?php

namespace App\Http\Controllers;

use GuzzleHttp\Handler\CurlFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        // validate
        $attrubutes = request()->validate([
            'email' => ['required','email'],
            'password'=> ['required'],
        ]);
        // attempt to login the user
        if (! Auth::attempt($attrubutes)) {
            throw ValidationException::withMessages([
                'password' => 'Sorry, those credentials do not match.',
            ]);
        }
        // regenerate the session token
        request()->session()->regenerate();
        // redirect
        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
