<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.siswa.index', [
            'title' => 'Page Siswa',
            'judul' => 'Halaman Siswa',
            'subjudul' => 'Page Siswa',
            'notif' => 'Silahkan Tambahkan Muridmu Puh',
            'siswas' => Siswa::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.siswa.create', [
            'title' => 'Page Siswa Create',
            'judul' => 'Halaman Menambahkan Siswa Baru',
            'subjudul' => 'Page Siswa Create',
            'notif' => 'Silahkan Tambahkan Siswa Baru',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'namasiswa' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ]);

        
        Siswa::create($validatedData);

        return redirect('/dashboard/siswa')->with('success', 'Siswa Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Siswa $siswa)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        return view('dashboard.siswa.edit', [
            'title' => 'Page Siswa Update',
            'judul' => 'Halaman Update Siswa Baru',
            'subjudul' => 'Page Siswa Update',
            'notif' => 'Silahkan Siswa Baru Puh',
            'siswa' => $siswa
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        $validatedData = $request->validate([
            'nis' => 'required',
            'namasiswa' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'hp' => 'required',
        ]);

        
        Siswa::where('id',$siswa->id)
                    ->update($validatedData);

        return redirect('/dashboard/siswa')->with('success', 'Siswa Baru Berhasil DiUpdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Siswa $siswa)
    {
        Siswa::destroy($siswa->id);

        return redirect('/dashboard/siswa')->with('success', 'Yaudah si Puh');
    }
}
