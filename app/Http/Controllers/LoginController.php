<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function store(Request $request)
    {
        $this->validateForm($request);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index');
        }

        return redirect()->route('login.index')->with('message', 'Błędna nazwa użytkownika lub hasło!');
    }

    public function validateForm($request) {
        return $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required|string'
        ], [
            'email.required'=>'E-mail jest wymagany.',
            'email.email'=>'Nieprawidłowy e-mail.',
            'password.required'=>'Hasło jest wymagane.',
            'password.string'=>'Hasło powinno być ciągiem znaków.'
        ]);
    }

    public function logout() {
        Session::flush();
        Auth::logout();

        return redirect()->route('login.index');
    }
}
