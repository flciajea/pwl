<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function pengantarTugas()
    {
        return view('mahasiswa.surat.pengantarTugas');
    }

    public function storePengantarTugas(Request $request)
    {
        $request->validate([
            'matkul' => 'required|string|max:45',
            'dosen' => 'required|string|max:45',
        ]);

        Surat::create([
            'jenis' => 'Pengantar Tugas Mata Kuliah',
            'no_mk' => '-', // isi jika ada nomor mata kuliah
            'nama_mk' => $request->matkul,
            'detail_surat' => $request->dosen,
            'semester' => 'genap', // jika ada input, ganti dengan $request->semester
            'status' => 'pending',
            'users_nip' => Auth::id(), // diasumsikan `nip` di `users` adalah primary key & login pakai `Auth::id()`
        ]);

        return redirect()->route('mahasiswa.surat.pengantar-tugas')->with('success', 'Surat berhasil diajukan.');
    }

    public function keteranganLulus()
    {
        return view('mahasiswa.surat.keteranganLulus');

    }

    public function storeKeteranganLulus(Request $request)
    {
        $request->validate([
            'detail' => 'required|string|max:255',
        ]);

        Surat::create([
            'jenis' => 'Keterangan Lulus',
            'detail_surat' => $request->detail,
            'status' => 'pending',
            'users_nip' => Auth::id(),
        ]);

        return redirect()->route('mahasiswa.surat.keterangan-lulus')->with('success', 'Pengajuan berhasil dikirim.');
    }

    public function laporanHasilStudi()
    {
        return view('mahasiswa.surat.laporanHasil');
    }

    public function storeLaporanHasilStudi(Request $request)
    {
        $request->validate([
            'semester' => 'required|in:ganjil,genap',
        ]);

        Surat::create([
            'jenis' => 'Laporan Hasil Studi',
            'semester' => $request->semester,
            'status' => 'pending',
            'users_nip' => Auth::id(),
        ]);

        return redirect()->route('mahasiswa.surat.laporan-hasil-studi')->with('success', 'Pengajuan berhasil dikirim.');

    }

    public function keteranganAktif()
    {
        return view('mahasiswa.surat.keteranganAktif');
    }
    
    public function storeKeteranganAktif(Request $request)
    {
        $request->validate([
            'detail' => 'required|string|max:255',
        ]);

        Surat::create([
            'jenis' => 'Keterangan Lulus',
            'detail_surat' => $request->detail,
            'status' => 'pending',
            'users_nip' => Auth::id(),
        ]);

        return redirect()->route('mahasiswa.surat.keterangan-aktif')->with('success', 'Pengajuan berhasil dikirim.');
    }

}
