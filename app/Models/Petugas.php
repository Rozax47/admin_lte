<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petugas extends Authenticatable
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peminjaman()
    {
        return $this->hasMany(Peminjaman::class);
    }
}
