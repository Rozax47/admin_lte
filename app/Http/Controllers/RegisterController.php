<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Page Register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'namapetugas' => 'required|max:255',
            'username' => 'required|unique:petugas',
            'hp' => 'required',
            'password' => 'required'
        ]);
    
        $validatedData['password'] = Hash::make($validatedData['password']);
    
        Petugas::create($validatedData);

        // $request->session()->flash('success', 'Selamat menempuh perjalan menjadi Sepuh');
        
        return redirect('/login')->with('success', 'Selamat kamu menempuh jalan Sepuh');
    }
}
