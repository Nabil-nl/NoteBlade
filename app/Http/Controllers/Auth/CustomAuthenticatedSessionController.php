<?php

namespace App\Http\Controllers\Auth;

use Laravel\Fortify\Http\Requests\LoginRequest;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController as FortifyAuthenticatedSessionController;

class CustomAuthenticatedSessionController extends FortifyAuthenticatedSessionController
{
    /**
     * Handle an incoming authentication request.
     *
     * @param  \Laravel\Fortify\Http\Requests\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $response = parent::store($request);
        
        
        return redirect()->intended('/page');
    }
}
