<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\AdminLoginRequest;
use Illuminate\Http\Request;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view("admin.auth.login");
    }


    public function store(AdminLoginRequest $request)
    {
        // dd($request->all());

        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->route('admin.dashboard');
        // get and validate input
        // check if user exists
        // check password correct
        // authenticate and start session
        // check if admin status is okay
        // check if admin has 2fa
    }
}