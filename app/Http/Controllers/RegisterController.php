<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function register(RegisterRequest $request) {

        if (Auth::check()) {
            return redirect()->route('homePage')->withErrors('You are already registered');
        }

        $user = User::create($request->validated());

        event(new Registered($user));
        Auth::login($user);

        return redirect()->route('homePage');
    }
}