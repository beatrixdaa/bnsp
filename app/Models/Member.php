<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
    'nama',
        'email',
        'alamat',
        'tanggal_lahir',
        'no_telepon',
        'agama_id',
    ];
    public function agama()
    {
        return $this->belongsTo(Agama::class,'agama_id');
    }
}
