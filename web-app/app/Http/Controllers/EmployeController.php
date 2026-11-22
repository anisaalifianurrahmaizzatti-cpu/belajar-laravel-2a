<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    // Menampilkan data pegawai
    public function index()
    {
        $data['judul'] = 'Data Pegawai';
        $data['employes'] = Employe::all();

        return view('tampil_data', $data);
    }

    // Form tambah data
    public function create()
    {
        $data['judul'] = 'Tambah Data Pegawai';

        return view('tambah_data', $data);
    }

    // Menyimpan data baru
    public function store(Request $request)
    {
        $employe = new Employe;
        $employe->id = $request->id;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // Form edit data
    public function edit($id)
    {
        $data['judul'] = 'Edit Data Pegawai';
        $data['employe'] = Employe::findOrFail($id);

        return view('edit_data', $data);
    }

    // Memperbarui data
    public function update(Request $request, $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();

        return redirect('/employe');
    }

    // Menghapus data
    public function destroy($id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();

        return redirect('/employe');
    }
}
