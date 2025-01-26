<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Agama extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
    ];


    public function members(): HasMany
    {
        return $this->hasMany(Member::class);
    }
}
