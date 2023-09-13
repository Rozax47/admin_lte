<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Petugas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class PeminjamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.peminjaman.index', [
            'title' => 'Page Peminjaman',
            'judul' => 'Halaman Peminjaman',
            'subjudul' => 'Page Peminjaman',
            'notif' => 'Jangan Lupa Kembalikan Jika Sudah di Pinjam',
            'peminjamen' => Peminjaman::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.peminjaman.create', [
            'title' => 'Page Peminjaman',
            'judul' => 'Halaman Peminjaman',
            'subjudul' => 'Page Peminjaman',
            'notif' => 'Jangan Lupa Kembalikan Jika Sudah di Pinjam',
            'petugases' => Petugas::all(),
            'siswas' => Siswa::all(),
            'bukus' => Buku::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'petugas_id' => 'required',
            'siswa_id' => 'required',
            'buku_id' => 'required',
        ]);

        Peminjaman::create($validatedData);

        return redirect('/dashboard/peminjaman')->with('success', 'Peminjaman Berhasil Dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(Peminjaman $peminjaman)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Peminjaman $peminjaman)
    {
        return view('dashboard.peminjaman.edit', [
            'title' => 'Page Peminjaman Update',
            'judul' => 'Halaman Update Peminjaman',
            'subjudul' => 'Page Peminjaman',
            'notif' => 'Jangan Lupa Kembalikan Jika Sudah di Pinjam',
            'petugases' => Petugas::all(),
            'siswas' => Siswa::all(),
            'bukus' => Buku::all(),
            'peminjaman' => $peminjaman
        ]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Peminjaman $peminjaman)
    {
        $validatedData = $request->validate([
            'petugas_id' => 'required',
            'siswa_id' => 'required',
            'buku_id' => 'required',
        ]);

        Peminjaman::where('id', $peminjaman->id)
                        ->update($validatedData);

        return redirect('/dashboard/peminjaman')->with('success', 'Peminjaman Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Peminjaman $peminjaman)
    {
        Peminjaman::destroy($peminjaman->id);

        return redirect('/dashboard/peminjaman')->with('success', 'Peminjaman Berhasil Di Hapus');
    }
}
