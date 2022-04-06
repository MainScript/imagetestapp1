<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    function index()
    {
        auth()->logout();
        return redirect()->route('dashboard');
    }
}
