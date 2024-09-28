<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'gender' => ['required', 'in:Male,Female'],

        ],[
            'name.required' => 'Esse campo tem que ser preenchido',
            'email.required' => 'esse campo tem que ser preenchido',
            'email.email' => 'esse campo tem que ser um email',
            'gender.required' => 'Esse campo tem que ser marcado',
            'gender.in' => 'O genero deve ser Male ou Female',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
        ]);

        return redirect()->route('home')->with('success', 'User created successfully');

    }

    public function ShowUsers(Request $request){
      $users = User::all();

        return view('show_user', ['users' => $users]);
    }
    public function destroy(Request $request, User $user){
        $user->delete();

        return redirect()->route('home');

    }
    public function search(Request $request) {
        $search = $request->input('search');

        $users = User::where('name', 'like', "%$search%")->paginate(5);

        return view('show_user', ['users' => $users, 'search' => $search]);
    }
}