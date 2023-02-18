<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('users.register');
    }

    public function store(Request $request)
    {
        $formFields = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => ['required', 'confirmed', 'min:6'],
            ]);
        //Hash the password.
        $formFields['password'] = encrypt($formFields['password']);
        //create the user
        $user = User::create($formFields);
        //then log him in
        auth()->login($user);
        return redirect('/listings')->with('message', 'User created and logged in');

    }

    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/listings')->with('message', 'Logged out !');
    }

    public function login()
    {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request)
    {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/listings')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

}
