<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisterUserController extends Controller
{
    public function register(): View
    {
        return view("auth.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            "first_name" => ["required", "string", "max:255", 'min:3'],
            "last_name" => ["required", "string", "max:255", 'min:3'],
            "email" => ["required", "email", "lowercase", "max:255", "unique:" . User::class],
            "password" => ["required", "min:8", "confirmed", Rules\Password::defaults()],
        ]);

        $user = User::create([
            "first_name" => $validatedData["first_name"],
            "last_name" => $validatedData["last_name"],
            "email" => $validatedData["email"],
            "password" => Hash::make($validatedData["password"]),
        ]);
        Auth::login($user);
        return redirect("/dashboard");
    }
}
