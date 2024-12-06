<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    // Menampilkan form pendaftaran
    public function formPendaftaran($locale = 'id')
    {
        app()->setLocale($locale);
        return view('form-pendaftaran', compact('locale'));
    }

    // Menyimpan data mahasiswa (form-pendaftaran)
    public function prosesForm(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas|numeric',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required|string',
            'alamat' => 'required|string',
        ]);

        // Simpan data ke database
        Mahasiswa::create($validated);

        // Redirect atau beri respons setelah data disimpan
        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    // Menampilkan daftar mahasiswa
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('mahasiswas.index', compact('mahasiswas'));
    }

    // Menampilkan form untuk menambah mahasiswa
    public function create()
    {
        return view('mahasiswas.create');
    }

    // Menyimpan data mahasiswa (create form)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nim' => 'required|unique:mahasiswas|numeric',
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email',
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required|string',
            'alamat' => 'required|string',
        ]);

        Mahasiswa::create($validated);

        return redirect()->route('mahasiswas.index')->with('success', 'Mahasiswa berhasil ditambahkan!');
    }

    // Menampilkan form untuk mengedit mahasiswa
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        return view('mahasiswas.edit', compact('mahasiswa'));
    }

    // Mengupdate data mahasiswa
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);

        $validated = $request->validate([
            'nim' => 'required|numeric|unique:mahasiswas,nim,' . $mahasiswa->id,
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:mahasiswas,email,' . $mahasiswa->id,
            'jenis_kelamin' => 'required|in:L,P',
            'jurusan' => 'required|string',
            'alamat' => 'required|string',
        ]);

        $mahasiswa->update($validated);

        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil diperbarui!');
    }

    // Menghapus data mahasiswa
    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        return redirect()->route('mahasiswas.index')->with('success', 'Data mahasiswa berhasil dihapus!');
    }
}
