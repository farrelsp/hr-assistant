<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password'); // Sesuaikan dengan nama field di model Anda
        if (Auth::guard('mongodb')->attempt($credentials)) {
            // Jika login berhasil
            return redirect()->intended('/'); // Sesuaikan dengan URL redirect setelah login
        } else {
            // Jika login gagal
            return redirect()->back()->withErrors(['login_failed' => 'Email atau password salah.']); // Sesuaikan pesan error jika login gagal
        }
    }

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string',
            'username' => 'required|string',
            'password' => 'required'
        ], [
            'email.required' => 'E-mail must be filled',
            'email.string' => 'E-mail must be string',
            'username.required' => 'Username must be filled',
            'username.string' => 'Username must be string',
            'password.required' => 'Password must be filled'
        ]);

        $user = new User;
        $user->name = $request->username;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->remember_token = Str::random(60);
        $user->save();

        // Auth::login($user);

        // return redirect()->intended('/login');
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/login');
    }
}
