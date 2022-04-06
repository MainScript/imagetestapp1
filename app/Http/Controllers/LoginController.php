<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
        return view('auth.login');
    }

    function store(Request $request) {
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required',
        ]);

        auth()->attempt($request->only(['username', 'password']));

        return redirect()->route('dashboard');
    }
}
