<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    //halaman data mahasiswa
    public function index()
    {
        return view('admin.mahasiswa.index');
    }

    //halaman tambah mahasiswa
    public function create()
    {
        return view('admin.mahasiswa.create');
    }

    //halaman simpan data  mahasiswa
    public function store(Request $request)
    {
        
        return redirect('/admin/mahasiswa');
    }

    //halaman edit mahasiswa
    public function edit($id)
    {
        return view('admin.mahasiswa.edit');
    }

    //fungsi update data mahasiswa
    public function update(Request $request, $id)
    {
        return redirect('/admin/mahasiswa');
    }

    //fungsi hapus data mahasiswa
    public function delete($id)
    {
        return redirect('/admin/mahasiswa');
    }
}
