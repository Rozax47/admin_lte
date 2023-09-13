<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.petugas.index', [
            'title' => 'Page Petugas',
            'judul' => 'halaman Petugas',
            'subjudul' => 'page Petugas',
            'notif' => 'Silahkan Tambahkan Sepuh Baru',
            'petugases' => Petugas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.petugas.create', [
            'title' => 'Page Petugas',
            'judul' => 'halaman Petugas',
            'subjudul' => 'page Petugas',
            'notif' => 'Silahkan Tambahkan Sepuh Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namapetugas' => 'required',
            'hp' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        Petugas::create($validatedData);

        return redirect('/dashboard/petugas')->with('success', 'Sepuh Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas)
    {
        return view('dashboard.petugas.edit', [
            'title' => 'Page Petugas Update',
            'judul' => 'halaman Update Petugas',
            'subjudul' => 'page Petugas Update',
            'notif' => 'Silahkan Update Sepuh',
            'petugas' => $petugas
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Petugas $petugas)
    {
        $validatedData = $request->validate([
            'namapetugas' => 'required',
            'hp' => 'required',
            'username' => 'required',
            'password' => 'required',
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        
        Petugas::where('id', $petugas->id)
                ->update($validatedData);

        return redirect('/dashboard/petugas')->with('success', 'Sepuh Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas)
    {
        Petugas::destroy($petugas->id);

        return redirect('/dashboard/petugas')->with('success', 'Yaudah sih Puh');
    }
}
