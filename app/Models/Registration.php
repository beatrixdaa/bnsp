<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'email',
        'alamat',
        'tanggal_lahir',
        'no_telepon',
        'agama',
        'status_anggota',
        'judul_buku',
       'tanggal_pinjam',
    ];
}
