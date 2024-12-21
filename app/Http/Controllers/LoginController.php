<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {
        if (Auth::check()) {
            return redirect()->route('homePage')->withErrors('You are already logged in!');
        }

        $user = User::where('email', $request->get('nameOrEmail'))
            ->orWhere('name', request('nameOrEmail'))
            ->first();

        if ($user && Hash::check($request->get('password'), $user->password)) {
            Auth::login($user);

            return redirect()->route('homePage');
        }

        return redirect()->back()->withErrors('Wrong password or login!');
    }
}
