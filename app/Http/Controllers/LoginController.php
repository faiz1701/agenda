<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function postlogin(Request $request)
    {
        // return $request;
        if (Auth::attempt($request->only('email', 'password'))) {

            if (auth()->user()->level == 'admin') {
                return redirect('dashboard');
            } else {
                // dd(auth()->user());
                return redirect('viewguru');
            }
        }
        return redirect('/');
    }

    public function logout(Request $request)
    {
        // return $request;
        Auth::logout();
        return redirect('/');
    }

    public function registrasi()
    {
        return view('pengguna.register');
    }

    public function simpanregistrasi(Request $request)
    {
        // dd($request->all());
        User::create([
            'name' => $request->name,
            'level' => $request->level,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60)
        ]);
        return redirect('login');
    }

    public function createguru(Request $request)
    {
        User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'mapel' => $request->mapel,
            'level' => 'guru',
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        return redirect('/dataguru');
    }
}
