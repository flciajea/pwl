<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
{
    $credentials = $request->only('nip', 'password');
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->role_id == 3) {
            return redirect()->route('mahasiswa.dashboard');
        } elseif ($user->role_id == 1) {
            return redirect()->route('admin.dashboard');
        } else {
            Auth::logout();
            return redirect()->route('login')->with('error', 'Role tidak dikenali.');
        }
    }

    return back()->withErrors([
        'nip' => 'NIP atau password salah',
    ]);
}


    public function username()
    {
        return 'nip';
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
