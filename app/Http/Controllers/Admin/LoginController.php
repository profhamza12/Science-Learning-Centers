<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Admin;
use App\Http\Requests\Admin\LoginRequest;
use Mail;
use Password;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }
    public function login() {
        return view('admin.authentication.login');
    }
    public function check_login(Request $request) {
        try {
            $credentials  = $request->validate($this->rules(), $this->messages());
            if (Auth::attempt($credentials, 1)) {
                // regenrate the session to prevent session fixation
                $request->session()->regenerate();
                return redirect()->route('admin.dashboard');
            }
        } catch (Exception $ex) {
            return redirect()->route('admin.login')->withErrors([
                'err_msg' => "An error has been occurred!!"
            ]);
        }
    }
    public function logout(Request $request) {
        try {
            Auth::logout();
            $request->session()->invalidate();
            return redirect()->route('admin.login');
        }
        catch (Exception $ex) {
            return redirect()->route('admin.dashboard')->withErrors([
                'err_msg' => "An error has been occurred!!"
            ]);
        }
    }
    public function forget_password() {
        return view('admin.authentication.forget-password');
    }
    public function send_reset_pass(LoginRequest $request) {
        try {
            $status = Password::broker('admins')->sendResetLink(
                $request->only('email')
            );
            return ($status === Password::RESET_LINK_SENT)
                        ? redirect()->route('admin.forget-passowrd')->with(['success_msg' => __('passwords.reset_emailed')])
                        : redirect()->route('admin.forget-passowrd')->with(['err_msg' => __('passwords.reset_email_err')]);
        } catch (Exception $ex) {
            return route('admin.forget-passowrd')->with(['err_msg' => __('passwords.reset_email_err')]);
        }
    }
}
