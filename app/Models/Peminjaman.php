<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['petugas','siswa','buku'];

    public function petugas()
    {
        return $this->belongsTo(Petugas::class, 'petugas_id');
    }
    public function buku()
    {
        return $this->belongsTo(Buku::class, 'buku_id');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id');
    }
}
