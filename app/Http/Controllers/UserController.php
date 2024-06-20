<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('users.index')->with('success', 'Usuáro criado com sucesso.');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) {
            dd('manda uma mensagem pro user que eessse mano nao exist');
        }

        // dd($user);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {

        // $request->validate([
        //     'name' => 'required',
        //     'last-name' => 'required',
        //     'email' => 'required|email|unique:users,email,' . $user->id,
        //     'password' => 'nullable|min:6',
        // ]);

        $user->update([
            'name' => $request->name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->with('success', 'Usuário alterado com sucesso');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
