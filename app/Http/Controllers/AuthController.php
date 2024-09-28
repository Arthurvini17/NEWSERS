<?php

namespace App\Http\Controllers;

use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class AuthController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ], [
            'username' => 'Esse campo tem que ser preenchido',
            'password' => 'Esse campo tem que ser preenchido'
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return back()->withErrors([
                'username' => 'Algo deu errado'
            ])->withInput($request->only('username'));
        }
    }

    public function index_register()
    {
        return view('/register');
    }

    public function register_create(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],

        ], [
            'username' => 'preencha esse campo',
            'password' => 'preencha a senha',
        ]);

    Funcionario::create([
            'username' => $request->username,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('login')->with('success', 'User created successfully');
    }

    public function logout(Request $request){
        Auth::logout();
        return redirect('/login');
    }
}
