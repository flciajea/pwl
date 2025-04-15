<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Auth;

class SuratController extends Controller
{
    public function createKeteranganAktif()
    {
        $kategori = Kategori::where('nama_kategori', 'Surat Keterangan Mahasiswa Aktif')->first();

        return view('mahasiswa.form-keterangan-aktif', compact('kategori'));
    }

    public function storeKeteranganAktif(Request $request)
    {
        $request->validate([
            'keterangan' => 'required|string|max:255',
        ]);

        Pengajuan::create([
            'user_id' => Auth::id(),
            'kategori_id' => $request->kategori_id,
            'keterangan' => $request->keterangan,
            'status' => 'pending',
        ]);

        return redirect()->route('mahasiswa.surat.keterangan-aktif')->with('success', 'Pengajuan berhasil dikirim!');
        Route::get('/mahasiswa/surat/keterangan-aktif', [SuratController::class,])->name('mahasiswa.surat.keterangan-aktif');
        Route::post('/mahasiswa/surat/keterangan-aktif', [SuratController::class, 'keterangan-aktif']);


    }
}
