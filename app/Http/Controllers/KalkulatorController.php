<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalkulatorController extends Controller
{
    // Form perkalian (contoh modul hal. 10-11)
    public function home()
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = 0;
        $data['angka2'] = 0;
        $data['hasil'] = 0;
        return view('kalkulator', $data);
    }

    public function proses(Request $request)
    {
        $data['judul'] = 'Kalkulator Sederhana';
        $data['angka1'] = $request->input('angka1');
        $data['angka2'] = $request->input('angka2');
        $data['hasil'] = $data['angka1'] * $data['angka2'];
        return view('kalkulator', $data);
    }

    // Tugas hal. 12: Kalkulator Luas Segitiga
    public function segitiga()
    {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = 0;
        $data['tinggi'] = 0;
        $data['hasil'] = 0;
        return view('segitiga', $data);
    }

    public function prosesSegitiga(Request $request)
    {
        $data['judul'] = 'Kalkulator Luas Segitiga';
        $data['alas'] = $request->input('alas');
        $data['tinggi'] = $request->input('tinggi');
        $data['hasil'] = 0.5 * $data['alas'] * $data['tinggi'];
        return view('segitiga', $data);
    }
}