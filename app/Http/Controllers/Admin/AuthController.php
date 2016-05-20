<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller {

    public function index()
    {
        return view('admin.index');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(Requests\LoginRequest $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect()->route('admin.index');
        }

        return redirect()->route('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }

}
