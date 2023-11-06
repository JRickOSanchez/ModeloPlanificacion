<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     *
     * @return RedirectResponse
     */
    public function authenticate(LoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated(), true)) {
            $request->session()->regenerate();
            return redirect('dashboard');
        }

        return back()->withErrors([
            'email' => json_encode($request->validated()),
        ])->onlyInput('email');
    }
}
