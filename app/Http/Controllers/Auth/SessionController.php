<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;


class SessionController extends Controller
{
    public function create(): View
    {
        return view("auth.login");
    }

    public function store(Request $request):RedirectResponse
    {
        $validatedData = $request->validate([
            "email" => ["required", "email"],
            "password" => ["required"]
        ]);
        if(!Auth::attempt($validatedData)){
            throw ValidationException::withMessages([
                "email" => "Sorry!! Incorrect Email or Password!!"
            ]);
        }
        $request->session()->regenerate();
        return redirect("/dashboard");
    }

    public function destroy(): RedirectResponse
    {
        Auth::logout();
        return redirect("/");
    }
}
