<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Simpan ke database jika diperlukan
        // Contoh (aktifkan jika model User sudah ada):
        // \App\Models\User::create($validated);

        return redirect('/register')->with('success', 'Registrasi berhasil!');
    }
}