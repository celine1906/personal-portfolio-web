<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class LoginController extends Controller
{
    public function authenticate(Request $request) {

        $data = ['email'=> $request->email, 'password'=>$request->password];

        if (Auth::attempt($data)) {
            // Autentikasi berhasil
            return redirect()->intended('/home'); // Redirect ke halaman utama
        } else {
            // Autentikasi gagal
            return redirect()->route('login')->withErrors(['message'=>'User not found'])->withInput();
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/home');
    }


}
