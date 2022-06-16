<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginForm()
    {
        return view('login_admin.create');
    }

    public function loginFormUser()
    {
        return view('login_user.create');
    }

    public function login(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt([
            'name'     => $request->name,
            'password'  => $request->password
        ])) {
            session()->flash('success', 'Вы успешно авторизованы');
            return redirect()->route('admin.index');
        }

        return redirect()->back()->with('error', 'Неверные данные');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt([
            'name'     => $request->name,
            'password'  => $request->password
        ])) {
            if (Auth::user()->role == 1) {
                session()->flash('success', 'Вы успешно авторизованы');
                return redirect()->route('buyer.index');
            } else if(Auth::user()->role == 2) {
                session()->flash('success', 'Вы успешно авторизованы');
                return redirect()->route('provider.index');
            }

        }

        return redirect()->back()->with('error', 'Неверные данные');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login_admin.create');
    }

    public function logoutUser()
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function loginUserForm()
    {
        if (Auth::check() && Auth::user()->role == 1) {
            return redirect()->route('buyer.index');
        } else if (Auth::check() && Auth::user()->role == 2) {
            return redirect()->route('provider.index');
        }
        return view('login_user.create');
    }
}
