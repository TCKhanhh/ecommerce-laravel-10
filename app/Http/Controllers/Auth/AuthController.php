<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct() {}

    public function loginAdmin()
    {
        if (Auth::id() > 0) {
            return redirect()->route('dashboard.index');
        }
        return view('Admin.Auth.login');
    }

    public function processLogin(AuthRequest $request)
    {
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
        
        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard.index')->with('success', 'Đăng nhập thành công!.');
        };
        return redirect()->route('auth.login-admin')->with('error', 'Email hoặc Mật khẩu không chính xác!.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.login-admin');
    }
}