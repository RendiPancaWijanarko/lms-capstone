<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Tampilkan halaman profil
        return view('profile.show');
    }

    public function edit()
    {
        // Tampilkan formulir edit profil
        return view('profile.edit');
    }

    public function update(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users,email,' . Auth::id(),
        'username' => 'required|string|max:255|unique:users,username,' . Auth::id(),
        'password' => 'nullable|string|min:8|confirmed',
    ]);

    $user = Auth::user();
    $user->name = $request->name;
    $user->email = $request->email;
    $user->username = $request->username;

    // Perbarui password jika password baru diberikan
    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('profile.show')->with('success', 'Profile updated successfully.');
}
}
