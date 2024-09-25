<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'email' => ['email'],
        ],[
            'name.required' => 'Esse campo tem que ser preenchido',
            'email.required' => 'esse campo tem que ser preenchido',
            'email.email' => 'esse campo tem que ser um email',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,

        ]);

        return redirect('/home')->with('sucess', 'created');
    }
}
