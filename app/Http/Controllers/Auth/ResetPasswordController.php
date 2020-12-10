<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ResetPasswordController extends Controller
{
    public function getResetPassword()
    {
        return view('site.auth.reset.resetPassword');
    }

    public function sendReset(Request $request)
    {
        $credentials = $request->validate(['email'=>'required|email']);
        Password::sendResetLink($credentials);
        return redirect()->back()->withErrors('erros','usuarionão encontrado');

    }

    public function getReset()
    {
        return view('site.auth.reset.updateReset');

    }

    public function update()
    {

    }
}
