<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgotPassController extends Controller
{
    public function forgotPassword()
    {
        return view('Admin.Auth.forgotpassword');
    }
}
