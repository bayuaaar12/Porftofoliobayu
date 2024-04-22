<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\Session\Session;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index()
    {
        $portofolio = DB::table('portofolio')
            ->orderBy('idportofolio', 'desc')->get();
        $data = [
            'title' => 'Beranda',
            'portofolio' => $portofolio,
        ];
        return view('beranda', $data);
    }
    public function login()
    {
        $data = [
            'title' => 'Login',
        ];
        return view('login', $data);
    }
    public function logincek(Request $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');
        $akun = DB::table('users')
            ->where('email', $email)
            ->where('password', $password)
            ->first();
        if ($akun) {
            session(['users' => $akun]);
            return redirect('panel/portofoliodaftar')->with('success', 'Login Berhasil');
        } else {
            return redirect()->back()->with('error', 'Anda gagal login, Email atau password salah');
        }
    }
}
