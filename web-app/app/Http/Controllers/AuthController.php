<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function cek(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Cari email di tabel users
        $data = User::where('email', $request->email)->first();

        // Periksa email dan password
        if ($data && Hash::check($request->password, $data->password)) {

            // Simpan session
            session([
                'email' => $request->email,
                'logged_in' => true,
            ]);

            // Masuk ke dashboard
            return redirect('/dashboard');
        }

        // Jika login gagal
        return redirect('/')
            ->with('error', 'Email atau password salah!');
    }

    public function logout(Request $request)
    {
        // Hapus semua session
        $request->session()->flush();

        // Kembali ke halaman login
        return redirect('/');
    }
}
