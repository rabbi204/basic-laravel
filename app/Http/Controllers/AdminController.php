<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // user logout from admin dashboard
    public function userLogout()
    {
        Auth::logout();
        return redirect()-> route('login') -> with('success', 'Logout successful');
    }
}
