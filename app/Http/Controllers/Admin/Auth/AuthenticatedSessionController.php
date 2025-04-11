<?php

namespace App\Http\Controllers\Admin\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Auth\AdminLoginRequest;

class AuthenticatedSessionController extends Controller
{
    public function create()
    {
        return view("admin.auth.login");
    }


    public function store(AdminLoginRequest $request)
    {
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


    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('admin.login');
    }
}