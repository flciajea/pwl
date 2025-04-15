<?php

// app/Http/Controllers/Admin/AuthController.php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        // Cek jika sudah ada admin, redirect ke login
        if (User::where('role', 'admin')->exists()) {
            return redirect()->route('admin.login')->with('error', 'Admin sudah terdaftar.');
        }

        return view('admin.auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'admin', // asumsikan field 'role' ada
        ]);

        return redirect()->route('admin.login')->with('success', 'Admin berhasil didaftarkan.');
    }
}
