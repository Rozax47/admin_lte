<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.buku.index', [
            'title' => 'Page Buku',
            'judul' => 'Halaman Data Buku',
            'subjudul' => 'Page Book',
            'notif' => 'Silahkan Cek dan Tambahkan Buku Puh',
            'Bukus' => Buku::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.buku.create', [
            'title' => 'Page Buku Create',
            'judul' => 'Halaman Membuat Data Buku',
            'subjudul' => 'Page Books Create',
            'notif' => 'Silahkan Tambahkan Buku Puh',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kodebuku' => 'required|max:255',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerit' => 'required'
        ]);

        
        Buku::create($validatedData);

        return redirect('/dashboard/buku')->with('success', 'Buku Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Buku $buku)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Buku $buku)
    {
        return view('dashboard.buku.edit', [
            'title' => 'Page Buku Update',
            'judul' => 'Halaman Update Data Buku',
            'subjudul' => 'Page Books Update',
            'notif' => 'Silahkan Update Buku Puh',
            'buku' => $buku
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Buku $buku)
    {
        $validatedData = $request->validate([
            'kodebuku' => 'required|max:255',
            'judul' => 'required',
            'pengarang' => 'required',
            'penerit' => 'required'
        ]);

        
        Buku::where('id',$buku->id)
                    ->update($validatedData);

        return redirect('/dashboard/buku')->with('success', 'Buku Berhasil Ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Buku $buku)
    {
        Buku::destroy($buku->id);

        return redirect('/dashboard/buku')->with('success', 'Yaudah si Puh');
    }
}
