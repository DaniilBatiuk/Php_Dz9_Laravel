<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showRegistrationForm()
    {
        return view('registration');
    }

    public function processRegistration(Request $request)
    {
        $this->validate($request, [
            'login' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'age' => 'required|integer|min:1',
            'password' => 'required|string|min:6|confirmed',
        ]);

        $age = $request->input('age');
        if ($age < 18) {
            return redirect()->route('registration.show')->with('error', 'Доступ к контенту запрещен: возраст меньше 18 лет.');
        }

        $user = [
            'login' => $request->input('login'),
            'email' => $request->input('email'),
            'age' => $age,
        ];

        return view('userinfo', compact('user'));
    }

}

